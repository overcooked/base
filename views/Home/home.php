<?php
/**
 * The index page is the home page of the website.
 * This page either displays a logged out view
 * or a logged in view depending on the user.
 * @uses controllers/HomeController - To control the home page.
 * @uses views/Home/home            - For the pages UI.
 */

/** Load the pages controller. */
Controller::load('HomeController');

/** User to check logged in and get user data. */
$user = new User();

// Check if user is logged in.
if($user->is_logged_in()) {
  // User isn't logged in, import logged out view.
  require_once ("logged-in.php");
} else {
  // User isn't logged in, import logged out view.
  require_once ("logged-out.php");
}
?>
