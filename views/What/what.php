<?php
/**
 * ToS page view.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- General. -->
    <title>What is food waste? | Overcooked</title>
    <meta name="description" content="Overcooked: Feed those in need, with your extra food.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/what/what.css">

    <!-- Script Files -->
    <script src="https://d3js.org/d3.v3.min.js"></script>

    <script src="/public/js/liquidFillGauge.js" language="JavaScript"></script>



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
    <section class="main">
      <div class="hidden-lg hidden-md">
        <p style="margin-top: 50px; text-align: center">This is a special easter egg page.<br>Sadly, your device is too small to view the detailed graphs and statistics on this page.<br>Please try again on a device with a larger screen.</p>
      </div>
      <div class="hidden-xs hidden-sm">
      <div class="row">
        <h3 class="top">FOOD THROWN AWAY <span class="highlight">EVERY DAY</span> IN METRO VANCOUVER</h3>

        <div class="chart-container">
          <svg class="chart">
          </svg>
        </div>
      </div>
      <hr>
      <div class="row">
        <div id="water">
      <h3>GLOBALLY, <span class="highlight">80%</span> OF THE WORLDS WATER GOES INTO FOOD PRODUCTION</h3>
      <h3 class="header">YET, <span class="highlight">ONE THIRD</span> OF FOOD IS WASTED</h3>
      <svg id="fillgauge1" width="97%" height="250"></svg>
      <script src="/public/js/draw_gauge.js" type="text/javascript"></script>
    </div>
    </div>
    <hr>
      <div class="row">
        <div id="pie-holder">
          <h3>OVER <span class="highlight">50%</span> OF FOOD WASTE IS <span class="highlight">AVOIDABLE</span></h3>
        </div>
      </div>
      <hr>
      <div class="row">
        <div id="bar-holder">
          <h3 style="margin-bottom: 20px">LEFTOVERS MAKE UP <span class="highlight">20%</span> OF <span class="highlight">AVOIDABLE</span> FOOD WASTE</h3>
          <div class="col-xs-10 col-xs-offset-1">
              <div id="chart" class="chart-container">
              </div>
          </div>

        </div>

      </div>
      <div class="row subtitles" style="color: black; margin-bottom: 80px;">
      <div class="col-xs-1 col-xs-offset-1">
        Vegetables
      </div>
      <div class="col-xs-1">
        Fruits
      </div>
      <div class="col-xs-1">
        Leftovers
      </div>
      <div class="col-xs-1">
        Meat
      </div>
      <div class="col-xs-1">
        Bread
      </div>
      <div class="col-xs-1">
        Dairy/Egg
      </div>
      <div class="col-xs-1">
        Food Scraps
      </div>
      <div class="col-xs-1">
        Condiments
      </div>
      <div class="col-xs-1">
        Drinks
      </div>
      <div class="col-xs-1">
        Snacks
      </div>
    </div>
    <hr>
    <h3><span class="highlight">$31 BILLION</span> WORTH OF FOOD IS WASTED <span class="highlight">EACH YEAR</span> IN CANADA.</h3>
    <h3 style="margin-top:20px; margin-bottom: 20px;"><span class="highlight">YOU</span> CAN MAKE A <span class="highlight">DIFFERENCE</span></h3>
    <a href="/" class="btn btn-default bottom-btn">GET STARTED</a>
    <p class="bottomtext"></p>
    <body>


    <script src="https://d3js.org/d3.v3.min.js"></script>
    <script src="/public/js/pie_graph.js" type="text/javascript"></script>
    <script src="/public/js/orange_bar_graph.js" type="text/javascript"></script>
    <script src="/public/js/green_bar_graph.js" type="text/javascript"></script>
  </div>
    </section>

    <!-- Footer Section -->
    <?php View::footer(); ?>

  </body>
</html>
