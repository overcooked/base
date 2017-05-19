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

        <!-- Message Area Content and Input -->
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1" id="message-area-content">

            <!-- Recent Convos and Open Convo -->
            <div class="row" id="middle-section">

                <!-- Recent Conversations -->
                <div class="col-sm-5" id="recent-conversation-area">
                  <h1>Recent Messages</h1>

                  <!-- Conversation -->
                  <div class="recent-conversation">

                    <!-- Profile Image -->
                    <div id="profile-image-wrapper">
                      <img id="profile-image" src="https://www.digitalocean.com/assets/media/employees/mike_jennings-a7c68dde.png">
                    </div>

                    <!-- Conversation Details -->
                    <p id="conversation-details">
                      <span id="fullname">Mike Jennings</span><br>
                      <span id="post">Post:</span>
                      <span id="related-post-name">Unwanted Fruits/Deformed Can't Sel...</span>
                    </p>

                  </div>

                  <!-- Conversation -->
                  <div class="recent-conversation">
                    <!-- Profile Image -->
                    <div id="profile-image-wrapper">
                      <img id="profile-image" src="http://www.american.edu/uploads/profiles/large/chris_palmer_profile_11.jpg">
                    </div>

                    <!-- Conversation Details -->
                    <p id="conversation-details">
                      <span id="fullname">Daniel Barney</span><br>
                      <span id="post">Post:</span>
                      <span id="related-post-name">Unwanted Fruits/Deformed Can't Sel...</span>
                    </p>
                  </div>

                </div>

                <!-- Recent / Current Chats. -->
                <div class="col-sm-7" id="messaging-area">

                  <!-- Message Display -->
                  <div id="messages">

                    <!-- Message -->
                    <div class="message">
                      <div class="from message-size">
                        <span class="ss-icon">dropdown</span>
                        <p class="text">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                      </div>
                    </div>

                    <!-- Message -->
                    <div class="message">
                      <div class="from message-size">
                        <span class="ss-icon">dropdown</span>
                        <p class="text">Hey man!</p>
                      </div>
                    </div>

                    <!-- Message -->
                    <div class="message">
                      <div class="to message-size">
                        <span>Whats Up Bro!</span>
                      </div>
                    </div>

                  </div>

                </div>

            </div>

            <!-- Footer/Input Form -->
            <div class="row" style="padding: 15px; text-align: center; color: #eee;">

                <!-- Bottom Navigation. -->
                <div class="col-sm-5 hidden-xs" id="desktop-">
                  <h5>Shortcut Icons</h5>
                </div>

                <!-- Input Form. -->
                <div class="col-sm-7" id="current-chat">
                  <h5>Input Form And Send Button.</h5>
                </div>

            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- To Size The Message Area -->
    <script type="text/javascript">
      $(document).ready(function(){
        /* Corrects Message Sizing. */
        $('.message').each(function(index, obj){
          if($(this).children('.message-size').height() <= 20) {
            var message_width = $(this).children('.message-size').children('.text').width() + 30;
            $(this).children('.message-size').css("width", message_width);
          }
        });
      });
    </script>

    <!-- Mobile Bottom Navigation. -->
    <?php require_once (getcwd() . "/views/Template/responsive-footer-nav.php"); ?>

  </body>
</html>
