<?php
/**
 * The change password page is used
 * to change a users password.
 * @uses controllers/ChangePasswordController - To handle the password change.
 * @uses views/ChangePassword/changepassword  - For the pages UI.
 */

/** REQUIRED Import For App Initialization. */
require_once (getcwd() . '/core/init.php');

/** Load the pages controller. */
Controller::load('ChangePasswordController');

/** Load the pages view. */
View::load('ChangePassword');
?>
