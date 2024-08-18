<?php
    include_once '../config/database.php';
?>

<body>
    <div class="col-lg-12">
        <?php
            $zz = $_POST['UserID'];
            $i = $_POST['username'];
            $a = $_POST['email'];
            $b = $_POST['Address'];
            $c = $_POST['password'];

            switch ($_GET['action']) {
                case 'add':
                    // Hash the password using password_hash
                    $hashedPassword = password_hash($c, PASSWORD_DEFAULT);

                    // Check if the email already exists
                    $checkQuery = "SELECT * FROM users WHERE email = '$a'";
                    $result = mysqli_query($connection, $checkQuery);

                    if (mysqli_num_rows($result) > 0) {
                        echo '<script type="text/javascript">';
                        echo 'alert("Email address is already registered. Please use a different email.");';
                        echo 'window.location = "../template/add.php";';
                        echo '</script>';
                        exit(); // Stop further execution
                    }

                    // If email doesn't exist, proceed to insert
                    $query = "INSERT INTO users (UserID, username, email, Address, password)
                              VALUES ('$zz', '$i', '$a', '$b', '$hashedPassword')";

                    mysqli_query($connection, $query) or die('Error in updating Database');
                    break;
            }
        ?>

        <script type="text/javascript">
            alert("Successfully added.");
            window.location = "../template/admin.php";
        </script>
    </div>
</body>
</html>
