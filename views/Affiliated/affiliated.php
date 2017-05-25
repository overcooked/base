<?php
/**
 * Affiliated apps View.
 * @author Team Point.
 *
 * TODO: Remove this page after grading.
 */

/** User to check logged in and get user data. */
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

    <?php

    /** User to check logged in and get user data. */
    $user = new User();

    if ($user->is_logged_in()) {
        View::header_logged_in();
    } else {
        View::header_logged_out();
    }
    ?>

    <!-- Main Content -->
    <section id="lander-top">
      <div class="jumbotron" style="background-color: #f9f8f7;">
        <div class="container" style="padding: 50px 50px 50px 50px;">

          <h1 class="font-bold" style="font-size: 50px; color: #4e4e4e;">
            Other
            <span style="color: #50ba4a;">apps</span>
            we love
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
    <section id="lander-section-two" style="padding-top: 50px; padding-bottom: 40px;">
      <div class="container">

        <div class="row affiliate" style="padding-left: 30px; padding-right: 30px;">

          <div class="hidden-xs hidden-sm col-md-3 col-md-offset-1">
            <img src="/public/assets/images/logo-1.png" style="width: 160px; height: auto; display: block; margin: auto; margin-top: 95px;" />
          </div>

          <!-- Info Section #2 -->
           <div class="col-md-7" style="padding-top: 35px;">
             <h2 class="font-semibold" style="letter-spacing: 0.2px; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; color: #626262; text-rendering: optimizeLegibility;">Meal.io</h2>
             <h5 style="font-family: proximanova-regularitalic; color: #b8bfc2; padding-top: 6px;">Group 29</h5>
             <div class="hoz-divider"></div>
             <p style="letter-spacing: 0.4px; color: #898d94;">
               Meal.io is an application which helps families manage the food in their lives.
               We’ve chosen Meal.io as a collaborator because of their user-friendly approach to preventing food waste. Their web application is very concise and allows users to take note of what they have bought to ensure they don’t buy too much in their next grocery trip.
             </p>
           </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container-fluid" style="background-color: #343c40;">

        <div class="container" style="background-color: #343c40;" >
          <!-- Main Information. -->
          <div class="row affiliate" style="background-color: #343c40; padding-left: 30px; padding-right: 30px;">

            <div class="hidden-xs hidden-sm col-md-3 col-md-offset-1">
              <img src="/public/assets/images/logo-2.png" style="width: 170px; height: auto; padding-bottom: 20px; display: block; margin: auto; margin-bottom: 65px; margin-top: 61px;" />
            </div>

            <!-- Info Section #1 -->
             <div class="col-md-7" style="padding-top: 75px;">
               <h2 class="font-semibold" style="color: #fff !important; letter-spacing: 0.2px; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; color: #626262; text-rendering: optimizeLegibility;">Food Fall</h2>
               <h5 style="font-family: proximanova-regularitalic; color: #b8bfc2; padding-top: 6px;">Group 9</h5>
               <div class="hoz-divider"></div>
               <p style="letter-spacing: 0.4px; color: #efefef; font-family: proximanova-light;">
                 Food Fall is a game about saving food from the despair of unnecessary waste and disposal. We’ve collaborated with Food Fall because of their hands-on approach to informing people about food waste and how to prevent it. Their colorful and fun gameplay is complimented with tooltips that educate the user about food waste.
               </p>
             </div>

          </div>
        </div>

      </div>
    </section>

    <section>
      <div class="container-fluid" style="padding-top: 50px;">

        <div class="container" >
          <!-- Main Information. -->
          <div class="row affiliate" style="padding-left: 30px; padding-right: 30px;">

            <div class="hidden-xs hidden-sm col-md-3 col-md-offset-1">
              <img src="/public/assets/images/logo-3.png" style="display: block; margin: auto; width: 140px; height: auto; margin-top: 95px;" />
            </div>

            <!-- Info Section #3 -->
             <div class="col-md-7" style="padding-top: 35px; padding-bottom: 100px;">
               <h2 class="font-semibold" style="letter-spacing: 0.2px; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; color: #626262; text-rendering: optimizeLegibility;">RefrigeDate</h2>
               <h5 style="font-family: proximanova-regularitalic; color: #b8bfc2; padding-top: 6px;">Group 20</h5>
               <div class="hoz-divider"></div>
               <p style="letter-spacing: 0.4px; color: #898d94;">
                 RefrigeDate lets you easily manage food in your household, restaurant, or business. We’ve chosen RefridgeDate as an affiliate because of their straightforward approach to preventing food waste by guiding users to buy less. The application utilizes an easy to use interface which allows users to easily plan for their next grocery trip.
               </p>
             </div>

          </div>
        </div>

      </div>
    </section>

        <!-- City Skyline -->
      </div>

      <!-- Footer Section -->
      <?php View::footer(); ?>

    </section>

    <style media="screen">
    #footer {
      position: relative;
      top: 32px;
    }
    </style>



  </body>
</html>
