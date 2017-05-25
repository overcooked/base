<?php

/** REQUIRED Import For App Initialization. */
require_once(getcwd() . "/core/init.php");

if(isset($_POST['inbox_id'])) {
  
  $messages = DB::getInstance()->get('inbox_messages', array('inbox_id', '=', $_POST['inbox_id']));
  if ($messages->count()) {
      foreach ($messages->results() as $message) {

        $current = new DateTime();
        $current = $current->getTimestamp() - $_POST['current_time'];

        $message_time = new DateTime($message->inbox_message_sent_time);
        $message_time = $message_time->getTimestamp();

        if($message_time > $current) {
          echo $message->inbox_message . '//////////////' . $message->user_from;
        }

      }
  }

}

?>
