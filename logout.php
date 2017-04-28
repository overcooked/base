<?php
/**
 * The logout page simply logs a user out.
 * @uses controllers/LogoutController - To handle the logout.
 */

/** REQUIRED Import For App Initialization. */
require_once (getcwd() . "/core/init.php");

/** Load the pages logout controller. */
Controller::load('LogoutController');
?>
