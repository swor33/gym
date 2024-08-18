<?php
//connecting to database

$servername = "localhost";
$username = "root";
$password = "";
$database = "coursework";

$connection = mysqli_connect($servername ,$username ,$password ,$database);

if (!$connection){
    echo "connection failed!";
    die(mysqli_connect_error());
}
else{
    // echo "connection successful!";
}
?>