<?php
$user = new User();
if($user->is_logged_in()) {

  // $welcome = "<p>Welcome " . escape($user->data()->email) . "</p>";
  $login = "<li><a href='logout.php'>Logout</a></li>";
  $update = "<li><a href='update.php'>Update</a></li>";
  $changepassword = "<li><a href='changepassword.php'>Change Password</a></li>";

  $list = "<ul>" . $update . $login . $changepassword . "</ul>";

  echo $list;
} else {
  $alt = "<p>You need to <a href='login.php'>login</a> or <a href='register.php'>register</a></p>";

  echo $alt;
}
?>
