<?php
    //session_start();
    //if (!isset($_SESSION["username"]) || $_SESSION["username"] == "") {
      //  header("Location: ../template/adminlogin.php");
        //exit;}
?>
<?php

//include '../config/database.php';
//session_start();

//$sqlUser = "SELECT * FROM users";
//$resultUser = $connection->query($sqlUser);
//$users = $resultUser->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>       
    <div class="navbar">
        <a href="" class="logo">DG</a>
        <a href="" class="logo">Admin Pannel</a>

        <ol class="nav-menu">
            <li class="nav-item"><a href="#profile">Admin</a></li>
            <!-- <li class="nav-item"><a href="../script/adminlogout.php">Logout</a></li> -->
        </ol>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
    <div class="section">
    <h2>User Details</h2>
    <!-- <a href="add.php?action=add" type="button" class="addnew" id="addnew">Add New</a> -->
    <table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email Address</th>
        <th>Address</th>
        <th>Operation</th>
    </tr>
    </thead>
        <tbody>
             <?php                  
               // $query = 'SELECT * FROM users';
                 //   $result = mysqli_query($connection, $query) or die (mysqli_error($connection));
                  
                   //     while ($row = mysqli_fetch_assoc($result)) {
                                             
                     //       echo '<tr>';
                         //   echo '<td>'. $row['UserID'].'</td>';
                       //     echo '<td>'. $row['username'].'</td>';
                           // echo '<td>'. $row['email'].'</td>';
                           // echo '<td>'. $row['Address'].'</td>';
                           // echo '<td> <a type="button" class="view" href="view.php?action=edit & id='.$row['UserID'] . '" > VIEW </a> ';
                            //echo ' <a  type="button" class="edit" href="edit.php?action=edit & id='.$row['UserID'] . '"> EDIT </a> ';
                            //echo ' <a  type="button" class="delete" href="del.php?type=people&delete & id=' . $row['UserID'] . '">DELETE </a> </td>';
                            // echo '</tr> ';
                //}
            ?>
            </tbody>
        </table>
    </div>

</body>

</html>
<?php
//$connection->close();
?>