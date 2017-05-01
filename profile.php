<?php
/**
 * The profile page displays info
 * about the users account details.
 * @uses controllers/ProfileController - To display the users info.
 * @uses views/Profile/profile         - For the pages UI.
 */

/** REQUIRED Import For App Initialization. */
require_once (getcwd() . "/core/init.php");

/** Load the pages controller. */
Controller::load('ProfileController');

/** Load the pages view. */
View::load('Profile');
?>
