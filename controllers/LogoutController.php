<?php
/**
 * The logout controller is used to
 * logout a signed in user.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();

// If the user is logged in, log them out.
if ($user->is_logged_in()) {
    $user->logout();
}

// Redirect back to home page.
Redirect::to('index.php');
