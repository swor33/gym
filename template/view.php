<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/view.css">
    <title>Admin-Login</title>
</head>
<?php
       
       include_once '../config/database.php';
       
        ?>  
<body>
        <div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          <small>Viewing User Details</small>
                        </h1>
                       
                    </div>
                </div>
<?php 
$query = 'SELECT * FROM users
              WHERE
              UserID='.$_GET['id'];
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
             <div class="col-lg-12">
                  <h2>Detailed Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="admin.php">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="UserID" name="UserID" value="<?php echo $zz; ?>">
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
                            <button type="submit" class="btn btn-default" href="../template/admin.php">Return to main menu</button>
                        
                      </form>  
                    </div>
                </div>  
            </div>
        </div>
    </div>

</body>

</html>

