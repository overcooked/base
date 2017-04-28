<?php
/**
 * The login page allows for a user to login to
 * the website given an email and password.
 * @uses controllers/LoginController - To handle the login.
 * @uses views/Login/login           - For the pages UI.
 */

/** REQUIRED Import For App Initialization. */
require_once (getcwd() . "/core/init.php");

/** Load the pages view. */
View::load('Login');
?>
