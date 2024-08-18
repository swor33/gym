<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abs Workout</title>
    <link rel="stylesheet" href="../css/workout.css">
</head>
<body>
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
                    <img src="../image/chest1.gif" alt="">
                </div>
                <div class="title">Dumbbell press</div>
                <p>Lying face down on the ground, prop yourself up into a forearm plank position. Make sure your elbows are aligned underneath your shoulders, and that your hands are balled up in fists. Your forearms should be parallel to one another. Hold for 10 to 20 seconds per set.</p>

            </div>
    
            <div class="frame">
                <div class="box">
                    <img src="../image/chest2.gif" alt="">
                </div>
                <div class="title">Svend press</div>
                <p> Lay face up on the floor with arms straight above your shoulders. Lower your left arm above your head while straightening your right leg and sending it towards the floor. Pause, return to the starting position, and then repeat on the opposite side.</p>

            </div>
    
            <div class="frame">
                <div class="box">
                    <img src="../image/chest3.gif" alt="">
                </div>
                <div class="title">Chest fly</div>
                <p>Get into a cannonball-type shape on your back, hugging your knees into your chest—yes, just like you’re at the pool at summer camp again. Simultaneously extend your legs and arms outwards into a “hollow” position, pressing your lower back to the floor.</p>

            </div>
    
            <div class="frame">
                <div class="box">
                    <img src="../image/chest4.gif" alt="">
                </div>
                <div class="title"> Chest dip</div>
                <p>With your feet shoulder-width apart, lift a barbell off the rig, centering it evenly across your shoulders.Send your glutes back like you’re lowering into a chair, bending at the knees as deeply as possible. Press through your heels to return to the starting position for one rep.</p>

            </div>
    
            <div class="frame">
                <div class="box">
                    <img src="../image/chest5.gif" alt="">
                </div>
                <div class="title">Push-up</div>
                <p>Stand with your feet hip-width apart and hold a dumbbell in your right hand, palm facing inwards towards the torso. Keep your back straight, activate your core, and then bend to the side as far as possible—but only at the waist.</p>

            </div>
    
            <div class="frame">
                <div class="box">
                    <img src="../image/chest6.gif" alt="">
                </div>
                <div class="title">Close-grip dumbbell chest press</div>
                <p>Start in a tabletop position, with your shoulders over wrists and hips over knees. Engage your core while simultaneously lifting your right arm and left leg.Your foot should be flexed as you kick back, and your palm should face in towards your body.</p>

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