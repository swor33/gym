<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Register Here!!</title>
</head>
<body>
<?php
    if (isset($_GET['email_exists'])) {
        echo '<script>alert("Email already in use. Please use a different email.")</script>';
    }
    ?>
    <div class="navbar">
        <a href="" class="logo">DG</a>
        <ol class="nav-menu">
            <li class="nav-item"><a href="index.php#home">Home</a></li>
            <li class="nav-item"><a href="index.php#about">About</a></li>
            <li class="nav-item"><a href="index.php#workout">Workout</a></li>
            <li class="nav-item"><a href="index.php#diet">Diet</a></li>
            <li class="nav-item"><a href="index.php#contact">Contact</a></li>
            <li class="nav-item"><a href="login.php">Login</a></li>
        </ol>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
      </div>
      
      <section id="register" class="register">
        <form action="../script/register.php" method="post">
            <h3 id="register">Register Now</h3>
            <label for="">Username</label>
            <input type="text" name="username" placeholder="Enter username">
            <label for="">E-mail</label>
            <input type="email" name="email" placeholder="Enter E-mail">
            <label for="">Address</label>
            <input type="text" name="Address" placeholder="Enter Address">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter password">
            <button>Register</button>
            <h4 id="login" href="">Already have account.<a href="login.php"> Login</a></h4>
        </form>
      </section>
</body>
<script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu =document.querySelector(".nav-menu");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    })
</script>
</html>