<?php
/**
 * Home page where the user would land
 * if just entered in the domain name.
 * @author Team Point.
 * @version 1.0
 */

/** User to check logged in and get user data. */
$user = new User();

// Check if user is logged in.
if ($user->is_logged_in()) {
    // User isn't logged in, import logged out view.
  require_once("logged-in.php");
} else {
    // User isn't logged in, import logged out view.
  require_once("logged-out.php");
}
