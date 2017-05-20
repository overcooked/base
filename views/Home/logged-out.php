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

    <!-- Background Design -->
    <section class="main-content">

      <!-- Header Green Stripes. -->
      <header class="Header">
        <div class="StripeBackground">
          <div class="stripe" id="header-background-gradient"></div>
          <div class="stripe large-stripe"></div>
          <div class="stripe" id="stripe-1"></div>
          <div class="stripe" id="stripe-2"></div>
          <div class="stripe" id="stripe-3"></div>
          <div class="stripe" id="stripe-4"></div>
          <div class="stripe" id="stripe-5"></div>
          <div class="stripe s1"></div>
          <div class="stripe s2"></div>
        </div>
      </header>

      <!-- Main Lander Title Section -->
      <section id="title-section">
        <div class="container">
          <h1 class="font-light">
              <span class="font-bold" id="typing-text">
                <span id="home-type-text">Give </span>away
              </span>
              your extra food
          </h1>
          <h2 id="title-message">While helping someone who could really use it</h2>
          <div id="action-button-wrapper">
            <a href="" id="title-action-button">Learn More</a>
          </div>
        </div>
      </section>

      <!-- Food Waste In Metro Vancouver. -->
      <section id="problem-statement">
        <div class="container">

          <!-- Main Message -->
          <div class="col-sm-6" class="problem-statement-header">
            <h3>Food waste in</h3>
            <h1>
              <img src="/public/assets/icons/city.svg" id="city-icon" alt="">
              <span class="font-bold">Metro</span>
              <span class="sem-bold">Vancouver</span>
            </h1>
            <p>
              In Metro Vancouver, over half of all household food waste could, at some point, have been eaten – things like uneaten leftovers or ingredients that spoiled before they were used. That’s over 100,000 tonnes of avoidable food waste per year!
            </p>
          </div>

          <div class="col-sm-6" id="stats" style="display: none;">
            <div class="stats-area stats-area--vertical">
              <div class="stats-area-photo stats-area-photo-food"></div>
              <blockquote class="Quote Quote--kickstarter">
                <span  class="text-center" id="wasted-title">Amount wasted this year alone:</span>
                <h2 class="text-center">
                  <span id="wasted-food-count"></span> kg
                </h2>
                <p>
                  It takes water, energy, fuel and packaging to produce the food we all love. Does it really belong in the bin? Because more than half of the food we throw away can be eaten, keeping it out of the bin is good for our pockets and the planet combined.
                </p>
              </blockquote>
            </div>

          </div>

          <script type="text/javascript">

          function formatNumber(number) {
              number = number.toFixed(0) + '';
              x = number.split('.');
              x1 = x[0];
              x2 = x.length > 1 ? '.' + x[1] : '';
              var rgx = /(\d+)(\d{3})/;
              while (rgx.test(x1)) {
                  x1 = x1.replace(rgx, '$1' + ',' + '$2');
              }
              return x1 + x2;
          }

          /* Get Current Day Number. */
          var now = new Date();
          var start = new Date(now.getFullYear(), 0, 0);
          var diff = now - start;
          var oneDay = 1000 * 60 * 60 * 24;
          var day = Math.floor(diff / oneDay);
          var secs = now.getSeconds() + (60 * now.getMinutes()) + (60 * 60 * now.getHours());
          var total_seconds = (day * 86400) + secs;
          var total_kg_wasted = (total_seconds * 3.16231532).toFixed(0);
          $("#wasted-food-count").text(total_kg_wasted);
          $("#stats").fadeIn(1300);

          /* Update Wasted Food Value */
          setInterval(function(){
            total_kg_wasted++;
            $("#wasted-food-count").text(formatNumber(total_kg_wasted));
          }, 333);

          </script>

        </div>
      </section>

    </section>

</body>
</html>
