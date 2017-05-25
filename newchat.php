<?php
/**
 * The newchat.php creates a new chat between
 * users and redirects them to a chat page.
 * @uses controllers/LogoutController - To create the chat.
 */

/** REQUIRED Import For App Initialization. */
require_once (getcwd() . "/core/init.php");

/** Load the pages logout controller. */
Controller::load('NewchatController');

?>
