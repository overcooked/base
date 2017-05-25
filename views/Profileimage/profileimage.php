<?php
/**
 * Profile Image View.
 * @author Team Point.
 */

$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- General. -->
    <title>Overcooked: Upload Profile Image</title>
    <meta name="description" content="Overcooked lets you give your extra food to people who really need it.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/changepassword/changepassword.css">
    <link rel="stylesheet" href="/public/css/profileimage/profileimage.css">

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
              <span class="ss-icon" style="position: relative; top: 4px; right: 3px;">adduser</span>
              Upload Profile Image
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

            <form method="POST" enctype="multipart/form-data">

              <?php
              $profile_image = DB::getInstance()->get('users_profile', array('user_id', '=', $user->data()->user_id));
              $profile_image = $profile_image->first();

              if($profile_image->profile_image_url) {
                echo "
                <div class='row'>
                  <div class='col-sm-4 col-sm-offset-4'>
                    <img style='height: 90px; width: 90px; display: block; margin: auto; border-radius: 100px; margin-bottom: 25px; object-fit: cover;' src='{$profile_image->profile_image_url}'>
                  </div>
                </div>
                ";
              } else {
                echo "
                <div class='row'>
                  <div class='col-sm-4 col-sm-offset-4'>
                    <img style='height: 90px; width: 90px; display: block; margin: auto; border-radius: 100px; margin-bottom: 25px; object-fit: cover;' src='https://static1.squarespace.com/static/56ba4348b09f95db7f71a726/t/58d7f267ff7c50b172895560/1490547315597/justin.jpg'>
                  </div>
                </div>
                ";
              }
              ?>

              <!-- Profile Image Upload -->
              <div class="form-group">
                <label class="btn btn-default btn-file">
                    <span class="ss-icon" style="position: relative; top: 2px; right: 2px;">upload</span> Choose Profile Image
                    <input class="form-control" type="file" name="profile_image" id="profile_image" required="true" accept="image/jpeg,image/x-png,image/png,/image/jpg"/>
                </label>
              </div>

              <hr>

              <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
              <input type="submit" class="btn btn-default update-btn" id="update-btn" name="submit" value="Upload Image">
            </form>
          </div>
        </div>

      </div>
    </section>

  </body>
</html>
