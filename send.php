<?php

/** REQUIRED Import For App Initialization. */
require_once(getcwd() . "/core/init.php");

if(isset($_POST['inbox_id'])) {

  // Fields to be inserted.
  $fields = array(
    'inbox_id' => $_POST['inbox_id'],
    'user_from' => $_POST['user_from'],
    'inbox_message' => $_POST['inbox_message'],
    'inbox_message_sent_time' => date('Y-m-d H:i:s')
  );

  echo $_POST['inbox_message'];

  // Create new chat between users.
  $hmm = DB::getInstance()->insert('inbox_messages', $fields);

}

?>
