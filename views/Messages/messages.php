<?php
/**
 * Chat View.
 * @author Team Point.
 */

// User object.
$user = new User();

// If the user isn't logged in, redirect to index.
$user->not_logged_in_redirect();

// Check if a chat exists with ID.
$previous_chat = false;

// Current Inbox ID.
$current_inbox_id = '';

$user_from = '';
$user_to = '';

// Inbox ID exists.
if(isset($_GET["inbox"])) {

  $current_inbox_id = "inbox_" . $_GET["inbox"];

  // Get all inboxes from the current user.
  $inboxes = DB::getInstance()->get('inbox', array('user_from', '=', $user->data()->user_id));

  // Check if any inboxes exist.
  if ($inboxes->count()) {
    foreach ($inboxes->results() as $inbox) {

      // See if a chat exists for this user with the current ID.
      if($inbox->inbox_id == $current_inbox_id) {
        $previous_chat = true;
        $user_from = $inbox->user_from;
        $user_to = $inbox->user_to;
      }

    }
  }

  if(!$previous_chat) {
    // Get all inboxes from the current user.
    $inboxes = DB::getInstance()->get('inbox', array('user_to', '=', $user->data()->user_id));

    // Check if any inboxes exist.
    if ($inboxes->count()) {
      foreach ($inboxes->results() as $inbox) {

        // See if a chat exists for this user with the current ID.
        if($inbox->inbox_id == $current_inbox_id) {
          $previous_chat = true;
          $user_from = $inbox->user_from;
          $user_to = $inbox->user_to;
        }

      }
    }
  }



}
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- General. -->
    <title>Overcooked: Messages</title>
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

                <!-- Recently Talked To People -->
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

                  <!-- Conversation -->
                  <div class="recent-conversation" id="active-chat">

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

                    <!-- Starting Message -->
                    <div id="start-of-conversation">
                      <p>Start of Conversation</p>
                    </div>

                    <?php

                    // If a previous chat exists get its messages.
                    if($previous_chat) {

                      $messages = DB::getInstance()->get('inbox_messages', array('inbox_id', '=', $current_inbox_id));
                      if ($messages->count()) {
                          foreach ($messages->results() as $message) {

                            // Whether the message was from current user or another one.
                            if($message->user_from == $user->data()->user_id) {
                              echo '
                              <div class="message">
                                <div class="to message-size">
                                  <span class="ss-icon">dropdown</span>
                                  <p class="text">
                                  ' . $message->inbox_message . '
                                  </p>
                                </div>
                              </div>';
                            } else {
                              echo '
                              <div class="message">
                                <div class="from message-size">
                                  <span class="ss-icon">dropdown</span>
                                  <p class="text">
                                  ' . $message->inbox_message . '
                                  </p>
                                </div>
                              </div>';
                            }

                          }
                      }

                    }

                    ?>

                  </div>

                </div>

            </div>

            <!-- Footer/Input Form -->
            <div class="row" id="create-message-area">

                <!-- Input Form. -->
                <div class="col-sm-7 col-sm-offset-5" id="current-chat">
                  <div class="col-sm-10">
                    <input id="create-message-input" type="text" name="" value="" placeholder="type a message...">
                  </div>
                  <div class="col-sm-2" id="send-wrapper">
                    <a id="send-message-button">Send</a>
                  </div>
                </div>

            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- To Size The Message Area -->
    <script type="text/javascript">

    $(document).ready(function(){
      if($("#middle-section").height() > 550) {
        $("#messaging-area").css("height", $("#middle-section").height());
      }
    });

    $(document).ready(function() {
      /* Corrects Message Sizing. */
      $('.message').each(function(index, obj) {
        if($(this).children('.message-size').height() <= 20) {
          var message_width = $(this).children('.message-size').children('.text').width() + 30;
          if(message_width < 300) {
              $(this).children('.message-size').attr('style', 'width: ' + message_width + 'px !important');
          } else {
            $(this).children('.message-size').css("width", message_width);
          }
        }
      });

      $('#messaging-area').scrollTop($('#messaging-area')[0].scrollHeight);
    });

    </script>

    <!-- Chat Code. -->
    <script type="text/javascript">
      $(document).ready(function() {

        console.log($('.message').length);

        $("#send-message-button").on("click",function() {

          // Get the input message.
          var message = $("#create-message-input").val();

          // As long as it isn't an empty message.
          if(message !== '') {
            $("#messages").append('<div class="message"> <div class="to message-size"> <span class="ss-icon">dropdown</span> <p class="text"> ' + message + ' </p> </div> </div>');

            /* Corrects Message Sizing. */
            $('.message').each(function(index, obj) {
              if($(this).children('.message-size').height() <= 20) {
                var message_width = $(this).children('.message-size').children('.text').width() + 30;
                if(message_width < 300) {
                    $(this).children('.message-size').attr('style', 'width: ' + message_width + 'px !important');
                } else {
                  $(this).children('.message-size').css("width", message_width);
                }
              }
            });

            $('#messaging-area').scrollTop($('#messaging-area')[0].scrollHeight);

            $.ajax({
              url: "send.php",
              type: "post",
              data: {
              'inbox_id': '<?php echo $current_inbox_id; ?>',
              'user_from': '<?php echo $user->data()->user_id; ?>',
              'inbox_message': message,
              },
              success: function (response) {
                console.log(response);
              },
              error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
              }
            });

            $("#create-message-input").val('');
          }
        });

      });
    </script>

    <script type="text/javascript">

     $(document).ready(function() {

       var time = 0;
       setInterval(function() {

         time++;
         $.ajax({
           url: "newmessages.php",
           type: "post",
           data: {
           'inbox_id': '<?php echo $current_inbox_id; ?>',
           'current_time': time
           },
           success: function (response) {

             // If message was successful.
             if(response) {
               time = 0;
               var message = response.split("//////////////");

               if(message[1] !== '<?php echo $user->data()->user_id; ?>') {
                 $("#messages").append('<div class="message"> <div class="from message-size"> <span class="ss-icon">dropdown</span> <p class="text"> ' + message[0] + ' </p> </div> </div>');
               }

               /* Corrects Message Sizing. */
               $('.message').each(function(index, obj) {
                 if($(this).children('.message-size').height() <= 20) {
                   var message_width = $(this).children('.message-size').children('.text').width() + 30;
                   if(message_width < 300) {
                       $(this).children('.message-size').attr('style', 'width: ' + message_width + 'px !important');
                   } else {
                     $(this).children('.message-size').css("width", message_width);
                   }
                 }
               });

               $('#messaging-area').scrollTop($('#messaging-area')[0].scrollHeight);
             }

           }
         });

       }, 1000);

     });

    </script>

  </body>
</html>
