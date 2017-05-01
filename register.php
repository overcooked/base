<?php
/**
 * The register page gives the ability for a
 * person to create an account on the app.
 * @uses controllers/RegisterController - To handle the registering.
 * @uses views/Register/register        - For the pages UI.
 */

/** REQUIRED Import For App Initialization. */
require_once (getcwd() . "/core/init.php");

/** Load the pages controller. */
Controller::load('RegisterController');

/** Load the pages view. */
View::load('Register');
?>
