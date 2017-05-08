<?php
/**
 * Affiliated apps View.
 * @author Team Point.
 *
 * TODO: Remove this page after grading.
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
    <link rel="stylesheet" href="/public/css/affiliated/affiliated.css">

    <!-- Script Files -->
    <script src="/public/js/libraries/typing.js" type="text/javascript"></script>

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_out(); ?>

    <!-- Main Content -->
    <section id="lander-top">
      <div class="jumbotron" style="background-color: #f9f8f7;">
        <div class="container" style="padding: 50px 50px 50px 50px;">

          <h1 class="font-bold" style="font-size: 50px; color: #4e4e4e;">
            Other apps we love
          </h1>

          <div class="hoz-divider"></div>
          <p style="font-size: 18px; letter-spacing: 0.2px; color: #4e4e4e;">
            There are plenty of ways to reduce the ammount of food waste you generate. <br>
            Check out some of these apps to make a difference.
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
             <h2 class="font-semibold" style="letter-spacing: 0.2px; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; color: #626262; text-rendering: optimizeLegibility;">app-name</h2>
             <h5 style="font-family: proximanova-regularitalic; color: #b8bfc2; padding-top: 6px;">app-devs</h5>
             <div class="hoz-divider"></div>
             <p style="letter-spacing: 0.4px; color: #898d94;">some text goes here about what the app actually does..... i dont know something nice</p>
           </div>

           <!-- Info Section #2 -->
            <div class="col-md-4" style="padding-top: 35px;">
              <h2 class="font-semibold" style="letter-spacing: 0.2px; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; color: #626262; text-rendering: optimizeLegibility;">app-name</h2>
              <h5 style="font-family: proximanova-regularitalic; color: #b8bfc2; padding-top: 6px;">app-devs</h5>
              <div class="hoz-divider"></div>
              <p style="letter-spacing: 0.4px; color: #898d94;">some text goes here about what the app actually does..... i dont know something nice</p>
            </div>

            <!-- Info Section #3 -->
             <div class="col-md-4" style="padding-top: 35px;">
               <h2 class="font-semibold" style="letter-spacing: 0.2px; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; color: #626262; text-rendering: optimizeLegibility;">app-name</h2>
               <h5 style="font-family: proximanova-regularitalic; color: #b8bfc2; padding-top: 6px;">app-devs</h5>
               <div class="hoz-divider"></div>
               <p style="letter-spacing: 0.4px; color: #898d94;">some text goes here about what the app actually does..... i dont know something nice</p>
             </div>

        </div>

        <!-- City Skyline -->
        <div class="row row-no-margin" id="section-one-skyline"></div>
      </div>

    </section>

  </body>
</html>
