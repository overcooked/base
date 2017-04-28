<?php
// Create a new user object.
$user = new User();

// If the user isn't logged in, redirect to index.
$user->is_not_logged_in();
?>
