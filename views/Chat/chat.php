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

// Inbox ID exists.
if(isset($_GET["inbox"])) {

  // Get all inboxes from the current user.
  $inboxes = DB::getInstance()->get('inbox', array('user_from', '=', $user->data()->user_id));
  $current_inbox_id = "inbox_" . $_GET["inbox"];

  // Check if any inboxes exist.
  if ($inboxes->count()) {
    foreach ($inboxes->results() as $inbox) {

      // See if a chat exists for this user with the current ID.
      if($inbox->inbox_id == $current_inbox_id) {
        $previous_chat = true;
      }

    }
  }

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- General. -->
    <meta name="description" content="Overcooked: Feed those in need, with your extra food.">
    <script type="text/javascript" src="/public/js/libraries/jquery.min.js"></script>

    <!-- Bootstrap CSS/JS Imports -->
    <link rel="stylesheet" href="/public/css/bootstrap/bootstrap.min.css">
    <script defer type="text/javascript" src="/public/js/bootstrap/bootstrap.min.js"></script>

  </head>
  <body>

    <!-- Chat Input and Display -->
    <div class="container">
      <div class="col-xs-4 col-xs-offset-4">

        <div id="messages">

          <?php

          // If a previous chat exists get its messages.
          if($previous_chat) {

            $messages = DB::getInstance()->get('inbox_messages', array('inbox_id', '=', $current_inbox_id));
            if ($messages->count()) {
                foreach ($messages->results() as $message) {

                  // Whether the message was from current user or another one.
                  if($message->user_from == $user->data()->user_id) {
                    echo "<p style='text-align: right;'>{$message->inbox_message}</p>";
                  } else {
                    echo "<p>{$message->inbox_message}</p>";
                  }

                }
            }

          }

          ?>

        </div>

        <br><br>
        <!-- Input form and send button -->
        <div style="display: inline">
          <input type="text" class="form-control" style="width: 150px; display: inline-block;" id="message-input">
          <button style="display: inline-block; margin-top: -3px;" class="btn btn-default" type="button" name="button" id="send-button">Send</button>
        </div>

      </div>
    </div>
    
  </body>
</html>
