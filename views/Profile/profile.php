<?php
/**
 * Profile page view.
 * @author Team Point.
 */

$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- General. -->
    <title>Profile | Overcooked.ca</title>
    <meta name="description" content="Overcooked lets you give your extra food to people who really need it.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/profile/profile.css">

    <!-- Script Files. -->
    <script src="/public/js/show-more.js" type="text/javascript"></script>
    <script src="/public/js/profile/profile.js" type="text/javascript"></script>

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>
