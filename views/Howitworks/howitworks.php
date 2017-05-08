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
        
        <style media="screen">
            ::-webkit-scrollbar {
                display: none;
            }
            hr {
                width: 60%;
            }
            .panel-heading {
                color: #545454; 
                font-size: 40px;
                border:none; padding-top: 14px;
                font-family: proximanova-bold;
                text-transform: uppercase;
            }
            .panel-body {
                font-size: 15px;
            }
        </style>
    </head>

    <body>

        <!-- Header Section -->
        <?php View::header_logged_out(); ?>
        
        <!-- Main Content -->
        <section class="main" style="margin-top: -32px; background-color: #f9f8f7;">
            <div class ="container">
                <!-- How it works header -->
                <div class ="row">
                    <div class ="cold-md-12 text-center">
                        <h1 style="font-size: 64px; font-family: proximanova-bold; letter-spacing: 5px;">
                        <br>
                        HOW IT WORKS
                        </h1>
                        <span style="text-align: center; font-family: proximanova-bold; font-size: 22px; position: relative; top: -13px; color: #ffc189;"> _ </span>
                        <h4 style="font-family: proximanova-regular; font-size: 16px; color: #a8a8a8; letter-spacing: 0.5px; ">How does the website work?</h4>
                        <br><br>
                    </div>
                </div>
            </div>
            
            <!-- Main content -->
            <div class="container" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15); background-color: #fff; border-radius: 3px;">
                
                <!-- First row -->
                <div class ="row">
                        <br>
                    <!-- Overcooked logo -->
                    <div class="col-md-3 col-md-offset-2">
                        <br><br><br><br><br><br>
                        <img style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); background-color: #333; color: #fff; border-radius: 500px; padding-top: 10px; padding-left: 23px; padding-right: 7px; padding-bottom: 3px;" src="/public/assets/images/OvercookedVector.svg" width="263px">
                        <br>
                    </div>
                    
                    <!-- Website description -->
                    <div class="col-md-5" style="margin-left: 40px;">
                        <br><br><br><br><br>
                            <div class="row">
                            <div class="panel-heading">Overview</div>
                            <div class="panel-body">
                                Overcooked is a web app that allows users on the platform to post their leftover foods, whether its from a house party, or from your fridge, you can post a variety of leftover food on the site.
                                <br><br>
                                The website looks to reduce as much food waste as possible along with helping out people in need.
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br><br>
                <hr>
                <br><br>
                
                <!-- Second row -->
                <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                        <h1 style="font-size: 48px; font-family: proximanova-bold; letter-spacing: 3px;">
                            FEATURES
                        </h1>
                    </div>
                    <div class="col-md-5" style="margin-left: 40px;">
                        <div class="panel-heading">Tags</div>
                        <div class="panel-body">
                            Every post will contain a tag that relates to the post in some way.
                            <br><br>
                            Ex. Indian, Chinese, Vegetarian, Vegan
                        </div>
                        <div class="panel-heading">Search</div>
                        <div class="panel-body">
                            The search feature will help users filter the posts to a contain a certain tag or multiple tags.
                        </div>
                        <div class="panel-heading">Location</div>
                        <div class="panel-body">
                            Every post will have a location, there will be a range finder for locations. Users can locate postings near them.
                            <br><br>
                            Ex. 5Km, 10Km radius
                        </div>
                    </div>
                </div>
                
                <hr>
            </div>
        </section>