<?php
/**
 * The post page allows users to make a post.
 * @uses controllers/PostController - To handle the posting.
 * @uses views/Post/post            - For the pages UI.
 */

/* TODO:
- Add option not to put location. Defaults input to be "Contact Poster For Details"
- Pickup / Meetup Option.
- No swear words/profanity checker. (Possibly library.)
- Check for any banned items when typing. (Raw, uncooked, opened.)
- Warn users a higher quality image is better.
- Link to what a good post looks like.
- Scroll/Display and display what a good title looks like. (Fade In, Fade Out)
- Segment each input into grids/rows. Easier for explination.

- POST PREVIEW
- Javascript Letter Counter.
*/

/** REQUIRED Import For App Initialization. */
require_once (getcwd() . "/core/init.php");

/** Image Uploading Library (Secure Uploads.). */
require_once (getcwd() . "/model/bulletproof.php");

/** Import The Image Resizing Function. */
require_once (getcwd() . "/model/utils/func.image-resize.php");

/** Load the pages controller. */
Controller::load('PostController');

/** Load the pages view. */
View::load('Post');
?>
