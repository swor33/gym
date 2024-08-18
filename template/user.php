 <?php
 //   session_start();
  //  if (!isset($_SESSION["username"]) || $_SESSION["username"] == "") {
   //     header("Location: login.php");
    //    exit;}
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DG-FIT</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
    <div class="navbar">
        <a href="" class="logo">DG</a>
        <!-- <ol class="nav-menu">
            <li class="nav-item"><a href="#profile"><?php echo $_SESSION["username"]?></a></li>
            <li class="nav-item"><a href="../script/logout.php">Logout</a></li>
        </ol> -->
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
    <section id="container" class="container view">
        <div class="frame">
            <div class="box">
                <a href="diffworkout.php"><img src="../image/absworkout.webp" alt=""></a></div>
            <div class="title">Workout<br></div>
        </div>
        <div class="frame">
            <div class="box">
                <a href="diet.php"><img src="../image/diettop.jpg" alt=""></a></div>
            <div class="title">Diet<br></div>
        </div>
        <div class="frame">
            <div class="box">
                <a href=""><img src="../image/topbg.jpg" alt=""></a></div>
            <div class="title">Goals<br></div>
        </div>
    </section>
</body>
</html>