<?php
/**
 * Logged out View.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- General. -->
    <title>Overcooked | Feed those in need with your extra food.</title>
    <meta name="description" content="Overcooked lets you give your extra food to people who really need it.">

    <!-- Boiler Plate Tags -->
    <?php View::head(); ?>

    <!-- Style Files -->
    <link rel="stylesheet" href="/public/css/home/home.css">

    <!-- Script Files -->
    <script>
      var strings = new Array("Throw ", "Give");
      var typingSpeed = 150;
      var deleteSpeed = 130;
      var waitTime = 700;
      var exists_text = true;
      var isLoop = false;
      var starting_text = "Throw ";
      var b = starting_text.length;
    </script>

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_out(); ?>

    <!-- Main Content -->
    <section id="lander-top">
      <div class="jumbotron" style="background-color: #f9f8f7;">
        <div class="container" style="padding: 50px 0 50px 0;">

          <h1 class="font-bold" style="font-size: 50px;">
            <span class="primary-color">
              <span id="home-type-text">Throw </span>away
            </span>
            your extra foods!
          </h1>
          <div class="hoz-divider"></div>
          <p style="font-size: 18px;">
            Over half of Metro Vancouvers wasted food could have been eaten.<br>
            Thats 100,000 tonnes of food wasted each year.
          </p>

        </div>
      </div>
    </section>

    <!-- Lander Section One -->
    <section id="lander-section-two">
      <div class="container">

        <div class="row">

          <!-- Link Section #1 -->
           <div class="col-md-4">
             <h2 class="font-semibold">Find a Meal</h2>
             <h5 style="font-family:proximanova-regularitalic">Find food near you</h5>
             <div class="hoz-divider"></div>
             <p>Overcooked allows users to meet each other face-to-face for meal pickups. All meals posted are free of charge. Please be aware that by signing up you have agreed to the Terms of Service.</p>
             <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
           </div>

          <!-- Link Section #1 -->
          <div class="col-md-4">
            <h2 class="font-semibold">Reduce Waste</h2>
            <h5 style="font-family:proximanova-regularitalic">Make a difference</h5>
            <div class="hoz-divider"></div>
            <p>You can reduce the amount of waste you create by choosing what food you throw away. This can be easy and fun – just follow our simple guidelines to reduce your waste at home, school, or work.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div>

          <!-- Link Section #1 -->
          <div class="col-md-4">
            <h2 class="font-semibold">Community</h2>
            <h5 style="font-family:proximanova-regularitalic">Giveback to those around you</h5>
            <div class="hoz-divider"></div>
            <p>Our organization takes donations in the form of fresh-made, leftover, or perishable foods and uploads them online for those in need.<br /> Please refer to our guidelines and privacy policy before posting.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
         </div>

        </div>

      </section>

  </body>
</html>
