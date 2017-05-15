<?php
/**
 * The about page displays information about
 * the website project and what are trying to achieve.
 * @uses views/About/about - For the pages UI.
 */

/** REQUIRED Import For App Initialization. */
require_once(getcwd() . "/core/init.php");

/** Load the pages view. */
View::load('About');
