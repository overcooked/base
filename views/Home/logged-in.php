<?php
/**
 * Logged out View.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- General. -->
    <title>Home - Recent Posts</title>
    <meta name="description" content="Overcooked: Feed those in need, with your extra food.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->

    <!-- Script Files. -->

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
