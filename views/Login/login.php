<?php
/**
 * The login page allows for a user to login to
 * the website given an email and password.
 * @uses controllers/LoginController - To handle the login.
 * @uses views/Login/login           - For the pages UI.
 */

/** Loads the login controller. */
Controller::load('LoginController');
?>

<form action="" method="post">
  <div class="field">
    <label for="user_email">Email</label>
    <input type="text" name="user_email" id="user_email" autocomplete="off">
  </div>

  <div class="field">
    <label for="user_password">Password</label>
    <input type="password" name="user_password" id="user_password" autocomplete="off">
  </div>

  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
  <input type="submit" name="" value="Log In">
</form>
=======
 * Logged out View.
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
        <h2 class="center">Login</h2>
        <form action="" method="post">
          <div class="field">
            <input type="text" name="user_email" class="form-control" placeholder="Email" id="user_email" autocomplete="off">
          </div>
          <div class="field">
            <input type="password" name="user_password" class="form-control" placeholder="Password" id="user_password" autocomplete="off">
          </div>
          <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
          <input type="submit" class="btn btn-default login-btn" name="" value="Log In">
        </form>
      </div>
    </section>



    <!-- Header Section -->
    <?php // View::footer(); ?>

  </body>
</html>
