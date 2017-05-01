<?php
/**
 * The update page allows users to
 * update their personal information.
 * @uses controllers/UpdateController - To handle the updates.
 * @uses views/Update/update          - For the pages UI.
 */

/** REQUIRED Import For App Initialization. */
require_once (getcwd() . "/core/init.php");

/** Load the pages controller. */
Controller::load('UpdateController');

/** Load the pages view. */
View::load('Update');
?>
