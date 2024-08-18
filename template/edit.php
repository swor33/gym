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
$query = 'SELECT * FROM users
              WHERE
              UserID ='.$_GET['id'];
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['UserID'];
                $i= $row['username'];
                $a=$row['email'];
                $b=$row['Address'];
              }
              
              $id = $_GET['id'];
         
?>

             <div class="out">
             <small id="small">Editing User Details</small>
                  <h2>Edit Records</h2>
                      <div class="in">

                        <form role="form" method="post" action="edit1.php">
                            
                            <div class="form-group">
                                <input type="int" name="UserID" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="username" name="username" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="email" name="email" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="Address" value="<?php echo $b; ?>">
                            </div> 
                            <button type="submit" class="btn btn-default">Update Record</button>                       
                      </form>  
                    </div>
                </div>    
            </div>
        </div>
</body>

</html>

