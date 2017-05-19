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

    <!-- Main Lander Title Section -->
    <section id="title-section">
      <div class="container">
        <h1 class="font-light">
            <span class="font-bold" id="typing-text">
              <span id="home-type-text">Give </span>away
            </span>
            your extra food!
        </h1>
      </div>
    </section>

    <!-- Background Design -->
    <section class="globalContent">
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
        </div>

      </header>
    </section>

    <!-- Food Waste In Metro Vancouver. -->
    <section id="title-section">
      <div class="container">
        <h1 class="text-center" style="color: #eee;">City Landscape</h1>
      </div>
    </section>

</body>
</html>
