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
          <h1 class="font-bold" style="font-size: 50px;">
            <span class="primary-color">
              <span id="home-type-text">Throw </span>away
            </span>
            your extra food!
          </h1>

          <!-- Lander Text. -->
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

        <!-- Main Information. -->
        <div class="row">

          <!-- Link Section #1 -->
          <div class="col-md-4">
            <h2 class="font-semibold">Reduce Waste</h2>
            <div class="hoz-divider"></div>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div>

          <!-- Link Section #1 -->
          <div class="col-md-4">
            <h2 class="font-semibold">Community</h2>
            <div class="hoz-divider"></div>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
         </div>

         <!-- Link Section #1 -->
          <div class="col-md-4">
            <h2 class="font-semibold">Help People</h2>
            <div class="hoz-divider"></div>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div>

        </div>

        <!-- City Skyline -->
        <div class="row" id="section-one-skyline">

        </div>
      </div>

    </section>

    <!-- Lander Section Two -->
    <section id="lander-section-three">
      <div class="container-fluid">

        <div class="row" style="height: 50px; background-color: #eee;">

        </div>

      </div>
    </section>

  </body>
</html>
