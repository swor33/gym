<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login-Page</title>
</head>
<body>
<?php
    ?>
    <section id="mian" class="main">
        <div class="navbar">
            <a href="" class="logo">DG</a>
            <ol class="nav-menu">
                <li class="nav-item"><a href="index.php">Home</a></li>
                <li class="nav-item"><a href="index.php#about">About</a></li>
                <li class="nav-item"><a href="index.php#workout">Workout</a></li>
                <li class="nav-item"><a href="diet.php">Diet</a></li>
                <li class="nav-item"><a href="index.php#contact">Contact</a></li>
                <li class="nav-item"><a href="C:\xampp\htdocs\coursework\template\login.php">Login</a></li>
            </ol>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
          </div>
      <section id="login" class="login">
        <form action="../script/login.php" method="post">
            <h3 id="login">LOGIN NOW</h3>
            <label for="">E-mail</label>
            <input type="email" name="email" placeholder="Enter E-mail">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter password">
            <button>Login Now</button>
            <a id="register" href="register.php"><h3>Register now!</h3></a>
        </form>
      </section>
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