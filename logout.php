<?php
require_once (getcwd() . "/core/init.php");

$user = new User();
if($user->is_logged_in()) {
  $user->logout();
}

Redirect::to('index.php');
?>
