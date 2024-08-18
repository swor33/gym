
<?php
    include_once '../config/database.php';
?>  
<body>
<?php
			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'people':
					$query = 'DELETE FROM users
							WHERE
							UserID = ' . $_GET['id'];
						$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "../template/admin.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>