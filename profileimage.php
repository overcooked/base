<?php
/**
 * The profile image page allows users
 * to upload there own profile image.
 * @uses controllers/ProfileimageController - To display the users info.
 * @uses views/Profileimage/profileimage    - For the pages UI.
 */

/** REQUIRED Import For App Initialization. */
require_once (getcwd() . "/core/init.php");

/** Image Uploading Library (Secure Uploads.). */
require_once (getcwd() . "/model/bulletproof.php");

/** Import The Image Resizing Function. */
require_once (getcwd() . "/model/utils/func.image-resize.php");

/** Load the pages controller. */
Controller::load('ProfileimageController');

/** Load the pages view. */
View::load('Profileimage');
?>
