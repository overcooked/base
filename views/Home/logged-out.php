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
    <link rel="stylesheet" href="/public/css/home/home.css">
  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_out(); ?>

    <!-- Main Content -->
    <section class="main">
      <div class="container">
        <h3>Web Fonts</h3>
        <hr>
        <p style="font-family: proximanova-light">light</p>
        <p style="font-family: proximanova-regular">regular</p>
        <p style="font-family: proximanova-regular; font-style: italic;">regular italic</p>
        <p style="font-family: proximanova-semibold">semibold</p>
        <p style="font-family: proximanova-bold">bold</p>
        <p style="font-family: proximanova-black">black</p>
      </div>
    </section>

    <!-- Footer Section -->
    <?php // View::footer(); ?>

  </body>
</html>
