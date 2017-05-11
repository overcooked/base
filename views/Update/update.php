<?php
/**
 * Update View.
 * @author Team Point.
 */

$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- General. -->
    <title>Update Profile | Overcooked.ca</title>
    <meta name="description" content="Overcooked lets you give your extra food to people who really need it.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/update/update.css">

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Update Profile Information // Start -->
    <section class="main">
      <div class="container update-area">

        <!-- Update Form Header -->
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3" id="update-form-header">
            <h3 class="center" id="update-page-title">Update Your Profile</h3>
          </div>
        </div>

        <!-- Update Form -->
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3" id="update-info-form">

            <?php
            /** Check whether the user had a information update. */
            if (Session::exists('updated')) { // Start
            ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <span class="ss-icon" id="update-success-icon">check</span> <?php echo Session::flash('updated'); ?>
                </div>
            <?php

            } // End
            ?>

            <form method="post" enctype="multipart/form-data">

              <!-- First Name -->
              <div class="form-group">
                <label for="user_first">First Name</label>
                <input type="text" name="user_first" class="form-control" id="user_first" placeholder="First Name" value="<?php echo escape($user->data()->user_first); ?>">
              </div>

              <hr>

              <!-- Last Name -->
              <div class="form-group">
                <label for="user_last">Last Name</label>
                <input type="text" name="user_last" class="form-control" id="user_last" placeholder="Last Name" value="<?php echo escape($user->data()->user_last); ?>">
              </div>

              <hr>

              <!-- Email Address -->
              <div class="form-group">
                <label for="user_email">Email Address</label>
                <input type="email" name="user_email" class="form-control" id="user_email" placeholder="Email Address" value="<?php echo escape($user->data()->user_email); ?>">
              </div>

              <hr>

              <!-- Profile Description -->
              <div class="form-group">
                <label for="profile_description">Profile Description</label>
                <textarea rows="4" class="form-control post_input" name="profile_description" placeholder="Profile Description" class="form-control" id="profile_description" placeholder="Profile Description"></textarea>
              </div>

              <hr>

              <!-- Submit Buttons -->
              <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
              <input type="submit" class="btn btn-default update-btn" id="update-btn" name="submit" value="Update">
            </form>
          </div>
        </div>

      </div>
    </section>

    <?php
      if (Session::exists('validation_errors')) {
          $form_errors = Session::flash('validation_errors');

          foreach ($form_errors as $error) {
              $error = explode('/', $error);
              $error_form = $error[0];
              $error_message = $error[1];

              echo "
              <script type='text/javascript'>
                $('#{$error_form}').css('border-color', '#ff9b9b');
                $('#{$error_form}').attr('placeholder', '{$error_message}');
              </script>
            ";
          }
      }

    ?>

    <?php require_once (getcwd() . "/views/Template/responsive-footer-nav.php"); ?>

  </body>
</html>
