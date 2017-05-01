<?php
/**
 * The post page allows users to make a post.
 * @uses controllers/PostController - To handle the posting.
 * @uses views/Post/post            - For the pages UI.
 */

/** REQUIRED Import For App Initialization. */
require_once (getcwd() . "/core/init.php");

/** Load the pages controller. */
Controller::load('PostController');

/** Load the pages view. */
View::load('Post');
?>
