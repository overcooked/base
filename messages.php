<?php
/**
 * The messages page so users can send messsages.
 * @uses controllers/MessagesController - To handle the messaging.
 * @uses views/Messages/Messages        - For the pages UI.
 */

/** REQUIRED Import For App Initialization. */
require_once (getcwd() . "/core/init.php");

/** Load the pages logout controller. */
Controller::load('MessagesController');

/** Load the pages view. */
View::load('Messages');
?>
