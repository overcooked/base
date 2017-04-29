<?php
/**
 * The index page is the home page of the website.
 * This page either displays a logged out view
 * or a logged in view depending on the user.
 * @uses controllers/HomeController - To control the home page.
 * @uses views/Home/home            - For the pages UI.
 */

/** REQUIRED Import For App Initialization. */
require_once (getcwd() . "/core/init.php");

/** Load the pages controller. */
Controller::load('HomeController');

/** Load the pages view. */
View::load('Home');
?>
