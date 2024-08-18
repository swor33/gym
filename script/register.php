<?php

// connecting to database
include_once '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user inputs
    $username = $_POST['username'];
    $email = $_POST['email'];
    $Address = $_POST['Address']; 
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
        echo "Please fill all fields.";
    } else {
        // Check if email already exists
        $emailCheckQuery = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($connection, $emailCheckQuery);

        if (mysqli_num_rows($result) > 0) {
            header("Location: ../template/register.php?email_exists=1");
            echo "Email already in use. Please use a different email.";
        } else {
            // Password encryption
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert user into the database
            $insertQuery = "INSERT INTO users (username, email, Address, password) VALUES ('$username', '$email', '$Address', '$hashedPassword')";

            if (mysqli_query($connection, $insertQuery)) {
                echo "Registration successful!";
                header("Location: ../template/login.php");
            } else {
                echo "Error: " . mysqli_error($connection);
            }
        }
    }
}

// Close the database connection
mysqli_close($connection);
?>


