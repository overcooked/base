<?php
/**
 * Inbox View.
 * @author Team Point.
 */

$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- General. -->
    <title>Messages | Overcooked.ca</title>
    <meta name="description" content="Overcooked lets you give your extra food to people who really need it.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/messages/messages.css">

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Messaging // Start -->
    <section class="main">
      <div class="container" id="message-area">

        <!-- Update Form Header -->
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1" id="message-area-header">
            <h3 class="center" id="message-header-title">
              Recent Messages
            </h3>
          </div>
        </div>

        <!-- Message Area Content and Input -->
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1" id="message-area-content">

            <!-- Update Form -->
            <div class="row">

                <!-- Recent Conversations -->
                <div class="col-sm-5" id="recent-conversation-area">
                  <h1>Recent Messages</h1>

                  <div class="recent-conversation">

                    <!-- Profile Image -->
                    <div id="profile-image-wrapper">
                      <img id="profile-image" src="https://static1.squarespace.com/static/56ba4348b09f95db7f71a726/t/58d7f267ff7c50b172895560/1490547315597/justin.jpg">
                    </div>

                    <!-- Conversation Details -->
                    <p id="conversation-details">
                      <span id="fullname">Justin Leung</span><br>
                      <span id="related-post">Unwanted Fruits/Deformed Can't Sell..</span>
                    </p>

                  </div>

                </div>

                <!-- Recent / Current Chats. -->
                <div class="col-sm-7" id="current-chat">
                  <h3>Current Chat</h3>
                </div>

            </div>

            <!-- Footer/Input Form -->
            <div class="row">

                <!-- Bottom Navigation. -->
                <div class="col-sm-4 hidden-xs" id="desktop-">
                  <h3>Shortcut Icons</h3>
                </div>

                <!-- Input Form. -->
                <div class="col-sm-8" id="current-chat">
                  <h3>Input Form And Send Button.</h3>
                </div>

            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- Mobile Bottom Navigation. -->
    <?php require_once (getcwd() . "/views/Template/responsive-footer-nav.php"); ?>

  </body>
</html>
