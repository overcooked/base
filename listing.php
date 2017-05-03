<?php
/**
 * Listing page is used to post a curtain
 * pages listing given an ID.
 * @author Team Point.
 */

 /** REQUIRED Import For App Initialization. */
 require_once (getcwd() . "/core/init.php");

 /** Load the pages controller. */
 Controller::load('ListingController');

 /** Load the pages view. */
 View::load('Listing');
?>
