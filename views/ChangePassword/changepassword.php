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
    <title>Change Password | Overcooked.ca</title>
    <meta name="description" content="Overcooked lets you give your extra food to people who really need it.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/changepassword/changepassword.css">


  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Main Content // Start -->
    <section class="main">
      <div class="container password-change-area">
        <h2 class="center">Change Password</h2>
        <hr />
        <form action="" method="post">
          <div class="field">
            <label for="current_password">Current Password</label>
            <input type="password" required="true" name="current_password" class="form-control" placeholder="Current Password" id="current_password">
          </div>

          <div class="field">
            <label for="new_password">New Password</label>
            <input type="password" required="true" name="new_password" class="form-control" placeholder="New Password" id="new_password">
          </div>

          <div class="field">
            <label for="new_password_again">New Password Again</label>
            <input type="password" required="true" name="new_password_again" class="form-control" placeholder="Confirm New Password" id="new_password_again">
          </div>

          <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
          <input type="submit" class="btn btn-default" value="Change Password">
        </form>
      </div>
    </section>

    <!-- Header Section -->
    <?php // View::footer(); ?>

  </body>
</html>
