<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abs Workout</title>
    <link rel="stylesheet" href="../css/workout.css">
</head>
<body>
    <!-- <div class="navbar">
        <a href="" class="logo">DG</a>
        <ol class="nav-menu">
            <li class="nav-item"><a href="index.php">Home</a></li>
            <li class="nav-item"><a href="index.php#about">About</a></li>
            <li class="nav-item"><a href="index.phpworkout">Workout</a></li>
            <li class="nav-item"><a href="index.phpdiet">Diet</a></li>
            <li class="nav-item"><a href="index.php#contact">Contact</a></li>
            <li class="nav-item"><a href="login.php">Login</a></li>
            <li class="nav-item"><a href="register.php">Register</a></li>
        </ol>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
      </div> -->
      
      <section id="workout" class="workout view">
        <div class="main">
            <h1><a>Your Workout Plans</a></h1>
            <br>
            <br>
            <h2>Follow these exercise to get solid body.</h2>
        </div>
    
        <div class="content">
            <div class="frame">
                <div class="box">
                    <img src="../image/abs1.gif" alt="">
                </div>
                <div class="title">Hardstyle plank</div>
                <p>Lying face down on the ground, prop yourself up into a forearm plank position. Make sure your elbows are aligned underneath your shoulders, and that your hands are balled up in fists. Your forearms should be parallel to one another. Hold for 10 to 20 seconds per set.</p>
            </div>
    
            <div class="frame">
                <div class="box">
                    <img src="../image/abs2.gif" alt="">
                </div>
                <div class="title">Dead bug</div>
                <p> Lay face up on the floor with arms straight above your shoulders. Lower your left arm above your head while straightening your right leg and sending it towards the floor. Pause, return to the starting position, and then repeat on the opposite side.</p>
            </div>
    
            <div class="frame">
                <div class="box">
                    <img src="../image/abs3.gif" alt="">
                </div>
                <div class="title">Cannonball</div>
                <p>Get into a cannonball-type shape on your back, hugging your knees into your chest—yes, just like you’re at the pool at summer camp again. Simultaneously extend your legs and arms outwards into a “hollow” position, pressing your lower back to the floor.</p>
            </div>
    
            <div class="frame">
                <div class="box">
                    <img src="../image/abs4.gif" alt="">
                </div>
                <div class="title">Squat</div>
                <p>With your feet shoulder-width apart, lift a barbell off the rig, centering it evenly across your shoulders.Send your glutes back like you’re lowering into a chair, bending at the knees as deeply as possible. Press through your heels to return to the starting position for one rep.</p>
            </div>
    
            <div class="frame">
                <div class="box">
                    <img src="../image/abs5.gif" alt="">
                </div>
                <div class="title">Side bend</div>
                <p>Stand with your feet hip-width apart and hold a dumbbell in your right hand, palm facing inwards towards the torso. Keep your back straight, activate your core, and then bend to the side as far as possible—but only at the waist.</p>
            </div>
    
            <div class="frame">
                <div class="box">
                    <img src="../image/abs6.gif" alt="">
                </div>
                <div class="title">Bird Dog</div>
                <p>Start in a tabletop position, with your shoulders over wrists and hips over knees. Engage your core while simultaneously lifting your right arm and left leg.Your foot should be flexed as you kick back, and your palm should face in towards your body.</p>
            </div>

            <div class="frame">
                <div class="box">
                    <img src="../image/abs7.gif" alt="">
                </div>
                <div class="title">Bicycle crunch</div>
                <p>Lie on your back, hands behind your head, lift your shoulders while touching your elbows to the opposite knees in a cycling motion, engaging your core.</p>
            </div>
    
            <div class="frame">
                <div class="box">
                    <img src="../image/abs8.gif" alt="">
                </div>
                <div class="title">Leg Raise</div>
                <p>Lie flat on your back, legs straight, and lift them upward, keeping them straight or slightly bent at the knees, then lower them back down without touching the ground, engaging your core throughout.</p>
            </div>
    
            <div class="frame">
                <div class="box">
                    <img src="../image/abs9.gif" alt="">
                </div>
                <div class="title">Bent leg Raise</div>
                <p>Lie on your back, knees bent and feet flat on the floor, then lift your legs towards your chest, keeping a slight bend in the knees, lowering them back down without touching the ground, engaging your core muscles throughout the movement.</p>
            </div>
        </div>
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