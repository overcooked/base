<?php
/**
 * 404 error page
 * @uses views/Errors/404 - For the pages UI.
 */

/** REQUIRED Import For App Initialization. */
require_once(getcwd() . "/core/init.php");

/** Load the pages view. */
View::load('404');
