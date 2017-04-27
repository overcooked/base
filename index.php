<?php
/** REQUIRED file */
require_once (getcwd() . "/core/init.php");

$user = new User();
if($user->is_logged_in()) {

  $welcome = "<p>Welcome " . escape($user->data()->username) . "</p>";
  $login = "<ul><li><a href='logout.php'>Logout</a></li></ul>";

  echo $welcome . $login;
} else {
  $alt = "<p>You need to <a href='login.php'>login</a> or <a href='register.php'>register</a></p>";

  echo $alt;
}
?>
