<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding User</title>
    <link rel="stylesheet" href="../css/add.css">
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
                        <small>Adding USer Details</small>
                        </h1>
                       
                    </div>
                </div>
             <div class="col-lg-12">
                  <h2>Add new Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="transac.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Enter username" name="username">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Enter email" name="email">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Enter Address" name="Address">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Enter password" name="password">
                            </div>
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>
                      </form>  
                    </div>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>

