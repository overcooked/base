<?php
/**
 * The profile controller is used to
 * view a users profile page.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();

// If the user isn't logged in, redirect to index.
$user->not_logged_in_redirect();
