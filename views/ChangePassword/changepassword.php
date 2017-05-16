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

        <!-- Change Password Form Header -->
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3" id="password-form-header">
            <h3 class="center" id="password-page-title">
              <span class="ss-icon" style="position: relative; top: 3px; right: 1px;">lock</span>
              Change Your Password
            </h3>
          </div>
        </div>

        <!-- Change Password Form -->
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3" id="password-change-form">

            <?php
            /** Check whether the user had a information update. */
            if (Session::exists('changed')) { // Start
            ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <span class="ss-icon" id="update-success-icon">check</span> <?php echo Session::flash('changed'); ?>
                </div>
            <?php

            }

            if (Session::exists('validation_errors')) {
                $form_errors = Session::flash('validation_errors');

                echo "
                <div class='alert alert-danger alert-dismissible' role='alert' style='padding-top: 6px; padding-bottom: 5px;'>
                  <span class='ss-icon' style='position: relative; top: 2px; right: 2px;'>Alert</span>
                  <span class='sr-only'>Error:</span>
                  {$form_errors}
                </div>
                ";
            }
            ?>

            <form method="post">

              <!-- Current Password -->
              <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" required="true" name="current_password" class="form-control" placeholder="Current Password" id="current_password">
              </div>

              <hr>

              <!-- New Password -->
              <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" required="true" name="new_password" class="form-control" placeholder="New Password" id="new_password">
              </div>

              <hr>

              <!-- New Password Again -->
              <div class="form-group">
                <label for="new_password_again">New Password Again</label>
                <input type="password" required="true" name="new_password_again" class="form-control" placeholder="Confirm New Password" id="new_password_again">
              </div>

              <hr>

              <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
              <input type="submit" class="btn btn-default update-btn" id="update-btn" name="submit" value="Change Password">
            </form>
          </div>
        </div>

      </div>
    </section>

    <!-- Footer Section -->
    <?php View::footer(); ?>

    <?php require_once(getcwd() . "/views/Template/responsive-footer-nav.php"); ?>

  </body>
</html>
