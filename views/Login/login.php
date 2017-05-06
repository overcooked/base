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
                <span class="input-group-addon addon-left" id="addon"><span class="ss-icon">email</span></span>
                <input type="email" name="user_email" class="input-centered" placeholder="Email Address" id="user_email">
              </div>

              <div class="input-group input-group-sm margin-bottom-20">
                <span class="input-group-addon addon-left"><span class="ss-icon">lock</span></span>
                <input type="password" name="user_password" placeholder="Password" id="user_password">
                <a class="input-group-addon addon-right" href="index.php">
                  <span id="password-divider">|</span>
                  <span id="password-forgot">Forgot?</span>
                </a>
              </div>

              <div class="divider"></div>

              <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
              <input type="submit" class="btn btn-submit" value="Sign In">

            </form>

          </div>
        </div>
    </section>

  </body>
</html>
