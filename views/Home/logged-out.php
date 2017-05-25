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
    <title>Overcooked: Feed those in need with your extra food.</title>
    <meta name="description" content="Overcooked lets you give your extra food to people who really need it.">

    <!-- Boiler Plate Tags -->
    <?php View::head(); ?>

    <!-- Style Files -->
    <link rel="stylesheet" href="/public/css/home/home-out.css">

    <!-- Script Files -->
    <script src="/public/js/libraries/typing.js" type="text/javascript"></script>
    <script src="/public/js/home/home-out.js" type="text/javascript"></script>

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
          <div class="stripe s3"></div>
          <div class="stripe s4"></div>
        </div>
      </header>

      <!-- Main Lander Title Section -->
      <section id="title-section">
        <div class="container">

          <!-- Setup Typing Variables. -->
          <script>
              var strings = new Array("Throw ", "Give ");
              var typingSpeed = 105;
              var deleteSpeed = 105;
              var waitTime = 700;
              var exists_text = true;
              var isLoop = false;
              var starting_text = "Throw ";
              var b = starting_text.length;
          </script>

          <!-- Main landing title and message. -->
          <h1 class="font-light">
              <span class="font-bold" id="typing-text">
                <span id="home-type-text">Throw </span>away
              </span>
              your extra food
          </h1>
          <h2 id="title-message">While helping someone who could really use it</h2>
          <div id="action-button-wrapper">
            <a href="#problem-statement" id="title-action-button">Learn More</a>
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

          <!-- Statistics Area -->
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

        </div>
      </section>

      <!-- Top Skyline Divider -->
      <section id="skyline-wrapper">
        <div id="section-one-skyline"></div>
      </section>

      <!-- How We Help Section -->
      <section class="flow nav-animation-element" id="about-section">
        <div class="content clearfix">

          <!-- Title / Sub message -->
          <header>
            <h1 class="font-light" style="padding-bottom: 2px;"><br>How <span class="font-bold">We</span> Help?</h1>
            <p id="about-summary">Overcooked provides the opportunity for restaurants, grocery stores, charities, or anyone to give away their excess to help feed their communities while also reducing waste in Metro Vancouver.</p>
          </header>

          <!-- Step #1 -->
          <div class="col-sm-4 text-center">
            <span class="hidden-xs ss-icon steps-next-icon">navigateright</span>
            <img id="first-image" src="/public/assets/images/home/step-one.png" style="width: 200px; height: auto; margin-bottom: 15px;" alt="">
            <h3>Have extra food</h3>
            <hr style="width: 60px; margin-top: 8px; margin-bottom: 8px;">
            <p>Businesses or charities looking to give away their extra food can come here instead of throwing it out.</p>
            <span id="first-step" class="visible-xs ss-icon steps-next-icon">navigatedown</span>
          </div>

          <!-- Step #2 -->
          <div class="col-sm-4 text-center">
            <span class="hidden-xs ss-icon steps-next-icon">navigateright</span>
            <img src="/public/assets/images/home/step-two.png" style="width: 200px; height: auto; margin-top: -35px; margin-bottom: 27px;" alt="">
            <h3>Create an account</h3>
            <hr style="width: 60px; margin-top: 8px; margin-bottom: 8px;">
            <p>Create an account which will give you access to many hungry mouths who will benefit from your extra food.</p>
            <span id="second-step" class="visible-xs ss-icon steps-next-icon">navigatedown</span>
          </div>

          <!-- Step #3 -->
          <div class="col-sm-4 text-center">
            <img src="/public/assets/images/home/step-three.png" style="width: 200px; height: auto; margin-top: -37px; margin-bottom: 19px;" alt="">
            <h3>List the food</h3>
            <hr style="width: 60px; margin-top: 8px; margin-bottom: 8px;">
            <p>Create a listing or giveaway on the website. This way people can contact you and pickup the extra foods.</p>
          </div>

        </div>
      </section>

      <!-- Benefits Section. -->
      <section id="benefits-section">
        <div class="container">

          <!-- Less Waste -->
          <div class="col-sm-6" id="first-benefit">
            <img src="/public/assets/icons/leaf.svg" style="height: 46px;">
            <h3 class="font-bold" style="text-transform: uppercase; padding-top: 16px; padding-left:4px; color: #24b47e;">Help The Environment</h3>
            <p style="padding-left: 4px; padding-top: 9px; letter-spacing: 0.2px; line-height: 27px; opacity: 0.96; padding-right: 8%;">Our organization takes donations in the form of fresh-made, leftover, or perishable foods and uploads them online for those in need. This helps reduce the amount of food wasted in Vancouver because food is being eaten instead of thrown away.</p>
          </div>

          <!-- Feed Others -->
          <div class="col-sm-6" id="second-benefit" style="padding-left: 65px;">
            <img src="/public/assets/icons/platforms.svg" style="height: 46px;">
            <h3 class="font-bold" style="text-transform: uppercase; padding-top: 16px; padding-left:4px; color: #24b47e;">Help Your Community</h3>
            <p style="padding-left: 4px; padding-top: 9px; letter-spacing: 0.2px; line-height: 27px; opacity: 0.96;">Overcooked allows users to meet each other face-to-face for meal pickups. All meals posted are free of charge to help promote giving. This helps connect hungry students, families, or anyone to people who have excess foods.</p>
          </div>

        </div>
      </section>

      <!-- Footer Section. -->
      <section id="footer-section">
        <div class="container-fluid" id="partners-section">

          <a href="/affiliated.php">
            <!-- Partner -->
            <div class="row" id="partner-images" style="padding-top: 25px; padding-bottom: 44px; border-bottom: 2px solid rgba(207,215,223,.25); margin-bottom: 55px;">

              <!-- Meal.io -->
              <div class="col-sm-2 col-sm-offset-3" id="meal-io">
                <img src="/public/assets/images/meal.png" style="height: 35px; opacity: 0.5; display: block; margin: auto; position: relative; top: 35px;">
              </div>

              <!-- Food Fall -->
              <div class="col-sm-2" id="food-fall">
                <img src="/public/assets/images/food-fall.png" style="height: 80px; opacity: 0.4; display: block; margin: auto;">
              </div>

              <!-- Refigidate -->
              <div class="col-sm-2" id="refigidate">
                <img src="/public/assets/images/refd.png" style="height: 65px; opacity: 0.40; display: block; margin: auto; position: relative; top: 21px;">
              </div>

            </div>
          </a>
        </div>

        <div class="container">
          <!-- Footer Links -->
          <div class="row" id="footer-links">

            <!-- About Section -->
            <div class="col-sm-3">

              <!-- Overcooked Title -->
              <h3 class="font-black" style="color: #cfd7df; padding-bottom: 10px;">© Overcooked</h3>

              <!--  About/Description. -->
              <p style="color: #cfd7df; padding-bottom: 25px;">Give your extra food to people who really need it.</p>

            </div>

            <!-- General Links -->
            <div class="col-sm-2 col-sm-offset-1">

              <h4 class="footer-heading" style="text-transform: uppercase; color: #8898aa; font-family: proximanova-semibold; letter-spacing: 0.55px; font-size: 16px;">General</h4>
              <hr / style="width: 43px; margin-top: 10px; margin-bottom: 8px; margin-left: 0;">

              <ul style="line-height: 28px; padding-bottom: 25px;">
                <li><a href="/login" style="color: #8898aa; letter-spacing: 0.3px;">Sign In</a></li>
                <li><a href="/register" style="color: #8898aa; letter-spacing: 0.3px;">Get Started</a></li>
                <li><a href="/affiliated" style="color: #8898aa; letter-spacing: 0.3px;">Affiliates</a></li>
              </ul>

            </div>

            <!-- Affiliated Links -->
            <div class="col-sm-3">

              <h4 class="footer-heading" style="text-transform: uppercase; color: #8898aa; font-family: proximanova-semibold; letter-spacing: 0.55px; font-size: 16px;">Legal</h4>
              <hr / style="width: 43px; margin-top: 10px; margin-bottom: 8px; margin-left: 0;">

              <ul style="line-height: 28px; padding-bottom: 25px;">
                <li><a href="/privacy" style="color: #8898aa; letter-spacing: 0.3px;">Privacy Policy</a></li>
                <li><a href="/tos" style="color: #8898aa; letter-spacing: 0.3px;">Terms &amp; Conditions</a></li>
                <li><a href="mailto:hello@maccraig.net" style="color: #8898aa; letter-spacing: 0.3px;">Support</a></li>
              </ul>

            </div>

            <!-- Location -->
            <div class="col-sm-3">

              <!-- -->
              <h5 class="font-bold" style="color: #cfd7df; padding-bottom: 10px;">LOCATION</h5>

              <!--  About/Description. -->
              <p style="color: #cfd7df;">3700 Willingdon Ave, Burnaby, BC V5G 3H2</p>
              <p style="color: #cfd7df;">Phone: +1 (778)-402-3214</p>
              <p style="color: #cfd7df;">Email: hello@maccraig.net</p>

            </div>

          </div>
        </div>

      </section>

    </section>

</body>
</html>
