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
    <script src="/public/js/libraries/typing.js" type="text/javascript"></script>

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_out(); ?>

    <!-- Main Content -->
    <section id="lander-top">
      <div class="jumbotron" style="background-color: #f9f8f7;">
        <div class="container" style="padding: 50px 0 50px 0;">

          <!-- Setup Typing Variables. -->
          <script>
            var strings = new Array("Throw ", "Give ");
            var typingSpeed = 150;
            var deleteSpeed = 130;
            var waitTime = 700;
            var exists_text = true;
            var isLoop = false;
            var starting_text = "Throw ";
            var b = starting_text.length;
          </script>

          <!-- Lander Main Title -->
          <h1 class="font-bold" style="font-size: 50px; color: #4e4e4e;">
            <span class="primary-color">
              <span id="home-type-text">Throw </span>away
            </span>
            your extra food!
          </h1>

          <!-- Lander Text. -->
          <div class="hoz-divider"></div>
          <p style="font-size: 18px; letter-spacing: 0.2px; color: #4e4e4e;">
            Over half of Metro Vancouvers wasted food could have been eaten.<br>
            Thats 100,000 tonnes of food wasted each year.
          </p>

        </div>
      </div>
    </section>

    <!-- Lander Section One -->
    <section id="lander-section-two">
      <div class="container">

        <!-- Main Information. -->
        <div class="row" style="padding-left: 30px; padding-right: 30px;">

          <!-- Info Section #1 -->
           <div class="col-md-4" style="padding-top: 35px;">
             <h2 class="font-semibold" style="letter-spacing: 0.2px; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; color: #626262; text-rendering: optimizeLegibility;">Find a Meal</h2>
             <h5 style="font-family: proximanova-regularitalic; color: #b8bfc2; padding-top: 6px;">Find food near you</h5>
             <div class="hoz-divider"></div>
             <p style="letter-spacing: 0.4px; color: #898d94;">Overcooked allows users to meet each other face-to-face for meal pickups. All meals posted are free of charge to help promote giving.</p>
           </div>

          <!-- Info Section #2 -->
          <div class="col-md-4" style="padding-top: 35px;">
            <h2 class="font-semibold" style="letter-spacing: 0.2px; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; color: #626262; text-rendering: optimizeLegibility;">Reduce Waste</h2>
            <h5 style="font-family: proximanova-regularitalic; color: #b8bfc2; padding-top: 6px;">Make a difference</h5>
            <div class="hoz-divider"></div>
            <p style="letter-spacing: 0.4px; color: #898d94;">You can reduce the amount of waste you create by choosing what food you throw away. This can help the environment, economy, and much more.</p>
          </div>

          <!-- Info Section #3 -->
          <div class="col-md-4" style="padding-top: 35px;">
            <h2 class="font-semibold" style="letter-spacing: 0.2px; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; color: #626262; text-rendering: optimizeLegibility;">Community</h2>
            <h5 style="font-family: proximanova-regularitalic; color: #b8bfc2; padding-top: 6px;">Giveback to those around you</h5>
            <div class="hoz-divider"></div>
            <p style="letter-spacing: 0.4px; color: #898d94;">Our organization takes donations in the form of fresh-made, leftover, or perishable foods and uploads them online for those in need.<br /></p>
         </div>

        </div>

        <!-- City Skyline -->
        <div class="row row-no-margin" id="section-one-skyline"></div>
      </div>

    </section>

    <!-- Lander Section Two -->
    <section id="lander-section-three">
      <div class="container-fluid">

        <div class="container">

          <div class="col-sm-12 text-center" id="section-two-city-title">
            <img src="/public/assets/icons/city.svg" alt="">

            <h1 class="font-light" style="padding-top: 15px;">
              Reducing Waste In <span class="font-bold">Metro</span> Vancouver
            </h1>
            <p>Hello world</p>
          </div>

          <div class="col-sm-12 text-center">

            <div class="col-sm-2 col-sm-offset-2">
              <img src="/public/assets/icons/money.svg" alt=""><br>
              <hr class="hr-divider">
              Helps the local economy
            </div>

            <div class="col-sm-2">
              <img src="/public/assets/icons/lock.svg" alt="">
              <hr class="hr-divider">
              Protects the environment
            </div>

            <div class="col-sm-2">
              <img src="/public/assets/icons/lego.svg" alt="">
              <hr class="hr-divider">
              Creates a better future
            </div>

            <div class="col-sm-2">
              <img src="/public/assets/icons/checks.svg" alt="">
              <hr class="hr-divider">
              Easily Give Away Food
            </div>

          </div>

          <!-- USELESS REMOVE LATER -->
          <div style="height: 350px;"></div>

        </div>

      </div>
    </section>

  </body>
</html>
