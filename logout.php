<?php
require_once 'core/init.php';

$user = new User();
if($user->isLoggedIn()) {
  $user->logout();
}

Redirect::to('index.php');
?>
