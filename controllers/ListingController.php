<?php
/**
 * The listing controller shows the information
 * of a curtain posting given an url ID.
 * @author Team Point.
 */

/* SUDO CODE

Get the URL ID (xxxxxxxxx) - DONE
Add the post_ to the link url - DONE
Search if it exists within the database.
Print its information.

If doesn't exist, say listing doesn't exist.
*/

/** User to check logged in and get user data. */
$user = new User();

// If the user isn't logged in, redirect to index.
$user->not_logged_in_redirect();
