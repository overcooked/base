<?php
/**
 * Login View.
 * @author Team Point.
 */

$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- General. -->
    <title>Sign In | Overcooked</title>
    <meta name="description" content="Overcooked lets you give your extra food to people who really need it.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/login/login.css">

  </head>
  <body>

    <!-- Header -->
    <section class="absolute-center">
        <div class="text-vertical-center">
          <div class="col-lg-4 col-lg-offset-4">

            <!-- Sign In Form -->
            <form method="post" class="absolute-center-form">

              <!-- Brand Logo -->
              <a href="/index.php">
                <img class="img-responsive" id="logo" src="/public/assets/images/overcooked-logo.svg" alt="Overcooked Logo">
              </a>

              <div class="divider"></div>

              <div class="input-group input-group-sm margin-bottom-15">
                <span class="input-group-addon addon-left" id="login-addon"><span class="ss-icon">email</span></span>
                <input type="email" name="user_email" class="input-centered" placeholder="Email Address" id="user_email">
              </div>

              <div class="input-group input-group-sm margin-bottom-20">
                <span class="input-group-addon addon-left" id="password-addon-1"><span class="ss-icon">lock</span></span>
                <input type="password" name="user_password" placeholder="Password" id="user_password">
                <a class="input-group-addon addon-right" href="index.php" id="password-addon-2">
                  <span id="password-divider">|</span>
                  <span id="password-forgot">Forgot?</span>
                </a>
              </div>

              <div class="divider"></div>

              <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
              <input type="submit" class="btn btn-submit" value="Sign In">

            </form>

    <!-- Main Content // Start -->
    <section class="main">
      <div class="container login-area">
        <h2 class="center">Login</h2>
        <hr />
        <form action="" method="post">
          <div class="field">
            <input type="text" name="user_email" class="form-control" placeholder="Email" id="user_email" autocomplete="off">
          </div>
          <div class="field">
            <input type="password" name="user_password" class="form-control" placeholder="Password" id="user_password" autocomplete="off">
          </div>
        </div>
    </section>

    <!-- Form Error Display -->
    <?php

      if(Session::exists('form_errors')) {
        $form_errors = Session::flash('form_errors');

        foreach ($form_errors as $error) {
          $error = explode('/', $error);
          $error_form = $error[0];
          $error_message = $error[1];

          echo "
          <script type='text/javascript'>
            var error_form = '$error_form';
            var error_message = '{$error_message}';

            // Add/check for error on email input.
            if(error_form === 'user_email') {
              $('#user_email').css('border-color', '#ff9b9b');
              $('#user_email').attr('placeholder', error_message);
              $('#user_email').addClass('error-placeholder');
              $('#login-addon').css('border-color', '#ff9b9b');
              $('#login-addon').css('color', '#ff9b9b');
            }

            // Add/check for error on password input.
            if(error_form === 'user_password') {
              $('#user_password').css('border-color', '#ff9b9b');
              $('#user_password').attr('placeholder', error_message);
              $('#user_password').addClass('error-placeholder');
              $('#password-addon-1').css('border-color', '#ff9b9b');
              $('#password-addon-1').css('color', '#ff9b9b');
              $('#password-addon-2').css('border-color', '#ff9b9b');
              $('#password-addon-2').css('color', '#ff9b9b');
              $('#password-divider').css('color', '#ff9b9b');
            }
          </script>
          ";
        }
      }

    ?>

  </body>
</html>
