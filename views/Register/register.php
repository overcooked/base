<?php
/**
 * Register View.
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
    <link rel="stylesheet" href="/public/css/login/login.css">


  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_out(); ?>

    <!-- Main Content // Start -->
    <section class="main">
      <div class="container login-area">
        <h2 class="center">Register</h2>
        <form action="" method="post">

          <div class="field">
            <input type="text" name="user_first" class="form-control" placeholder="First Name" value="<?php echo escape(Input::get('user_first')); ?>" id="user_first">
          </div>

          <div class="field">
            <input type="text" name="user_last" class="form-control" placeholder="Last Name" value="<?php echo escape(Input::get('user_last')); ?>" id="user_last">
          </div>

          <div class="field">
            <input type="text" name="user_email" class="form-control" placeholder="Email" id="user_email" value="<?php echo escape(Input::get('user_email')); ?>" autocomplete="off">
          </div>

          <div class="field">
            <input type="password" name="user_password" class="form-control" placeholder="Password" id="user_password">
          </div>

          <div class="field">
            <input type="password" name="password_again" class="form-control" placeholder="Repeat Password" id="password_again">
          </div>

          <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
          <input type="submit" class="btn btn-default login-btn" value="Register">
        </form>
      </div>
    </section>



    <!-- Header Section -->
    <?php // View::footer(); ?>

  </body>
</html>
