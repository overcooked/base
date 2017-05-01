<?php
/**
 * Logged in page view.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- General. -->
    <title>Welcome <?php echo escape($user->data()->user_first) ?> | Overcooked</title>
    <meta name="description" content="Overcooked: Feed those in need, with your extra food.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Main Content -->
    <section class="main">
      <div class="container">

        <h3>Welcome, <?php echo escape($user->data()->user_first) . ' ' . escape($user->data()->user_last); ?>!</h3>

        <hr>

        <ul>
          <li><a href='post.php'>Create Post</a></li>
          <li><a href='logout.php'>Logout</a></li>
          <li><a href='update.php'>Update</a></li>
          <li><a href='changepassword.php'>Change Password</a></li>
        </ul>

      </div>
    </section>

  </body>
</html>
