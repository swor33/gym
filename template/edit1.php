<?php
    include_once '../config/database.php';
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Edit</title>
    <link rel="stylesheet" href="../css/edit.css">
</head>
<body>
<?php
		      $zz= $_POST['UserID'];
              $i= $_POST['username'];
              $a=$_POST['email'];
              $b=$_POST['Address'];
			
	   include('connection.php');
		
       $query = "UPDATE users SET username = '$i', email = '$a', Address = '$b' WHERE UserID = '$zz'";
					$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "../template/admin.php";
		</script>
 </body>
</html>