<?php
/**
* The Newchat Controller creates a new chat between
* users and redirects them to a chat page.
 * @author Team Point.
 */

/** New user to check if a current user exists. */
$user = new User();

// If the user isn't logged in, redirect to index.
$user->not_logged_in_redirect();

// Not properly setup.
if(!isset($_GET["user"])) {
  Redirect::to('index.php');
}

// Get the users IDs.
$user_to_id = 'user_' . $_GET["user"];
$user_from_id = $user->data()->user_id;

// Get all inboxes from the current user.
$inboxes = DB::getInstance()->get('inbox', array('user_from', '=', $user_from_id));

// No chat between two people exists yet.
$previous_chat = false;
$previous_inbox_id = '';

// Check if any inboxes exist.
if ($inboxes->count()) {
    foreach ($inboxes->results() as $inbox) {

      // Check if a previous chat exists with this user.
      if($inbox->user_to == $user_to_id) {
        $previous_chat = true;
        $previous_inbox_id = $inbox->inbox_id;
      }

    }
} else {
  // No previous chat exists.
  $previous_chat = false;
}

// If previous chat exist, redirect.
if($previous_chat) {
  // Redirect to previous chat.
  Redirect::to("/chat.php?inbox=" . substr($previous_inbox_id, 6));
}

// Create a unique inbox ID.
$inbox_id = uniqid('inbox_');

// Fields to be inserted.
$fields = array(
  'inbox_id' => $inbox_id,
  'user_to' => $user_to_id,
  'user_from' => $user_from_id
);

// Create new chat between users.
DB::getInstance()->insert('inbox', $fields);

// Redirect to new chat.
Redirect::to("/chat.php?inbox=" . substr($inbox_id, 6));
