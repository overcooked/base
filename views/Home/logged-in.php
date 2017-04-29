<?php
/**
 * Logged out View.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome!</title>
  </head>
  <body>

    <p>Welcome, <?php echo escape($user->data()->user_first) . ' ' . escape($user->data()->user_last); ?>!</p>

    <ul>
      <li><a href='logout.php'>Logout</a></li>
      <li><a href='update.php'>Update</a></li>
      <li><a href='changepassword.php'>Change Password</a></li>
    </ul>

  </body>
</html>
