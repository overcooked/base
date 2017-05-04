<?php
/**
 * Contact page view.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- General. -->
        <title>How It Works | Overcooked</title>
        <meta name="description" content="Overcooked: Feed those in need, with your extra food.">

        <!-- Boiler Plate Tags. -->
        <?php View::head(); ?>

        <!-- Style Files. -->
        <link rel="stylesheet" href="/public/css/contact/howitworks.css">

    </head>

    <body>

        <!-- Header Section -->
        <?php View::header_logged_out(); ?>
        
        <!-- Main Content -->
        <section class="main">
            <div class ="Main_Section Container">
            </div>
        </section>