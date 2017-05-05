<?php
/**
 * Change Password View
 * @author Team Point.
 */

$user = new User();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- General. -->
    <title>Overcooked: Feed those in need with your extra food.</title>
    <meta name="description" content="Overcooked lets you give your extra food to people who really need it.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/changepassword/changepassword.css">


  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_out(); ?>

    <!-- Main Content // Start -->
    <section class="main">
      <div class="container change-area">
        <h2 class="center">Change Password</h2>
        <form action="" method="post">
          <div class="field">
            <label for="current_password">Current Password</label>
            <input type="password" name="current_password" id="current_password">
          </div>

          <div class="field">
            <label for="new_password">New Password</label>
            <input type="password" name="new_password" id="new_password">
          </div>

          <div class="field">
            <label for="new_password_again">New Password Again</label>
            <input type="password" name="new_password_again" id="new_password_again">
          </div>

          <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
          <input type="submit" value="Change Password">
        </form>
          <input type="submit" class="btn btn-default login-btn" name="" value="Log In">
        </form>
      </div>
    </section>

    <!-- Header Section -->
    <?php // View::footer(); ?>

  </body>
</html>
