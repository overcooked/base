<?php
/**
 * The chat page where users can message each other.
 * @uses controllers/ChatController - To control the chat page.
 * @uses views/Chat/Chat            - For the pages UI.
 */

/** REQUIRED Import For App Initialization. */
require_once (getcwd() . "/core/init.php");

/** Load the pages view. */
View::load('Chat');
?>
