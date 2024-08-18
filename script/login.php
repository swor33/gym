<?php
session_start(); 

include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; 
    $password = $_POST['password']; 

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) { 
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $row['username'];
            header("Location: ../template/user.php"); 
            exit;
        } else {
            $_SESSION['error'] = 'Invalid password.';
            header("Location: ../template/login.php");
            exit;
        }
    } else {
        $_SESSION['error'] = 'Invalid email.';
        header("Location: ../template/login.php");
        exit;
    }
} else {
    $_SESSION['error'] = 'Invalid request.';
    header("Location: ../template/login.php");
    exit;
}
?>
