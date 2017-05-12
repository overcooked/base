<?php
/**
 * 404 Error page view.
 * @author Team Point.
 */
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
    <link rel="stylesheet" href="/public/css/errors/404.css">

  </head>
  <body>


    <?php

    /** User to check logged in and get user data. */
    $user = new User();

    if ($user->is_logged_in()) {
        View::header_logged_in();
    } else {
        View::header_logged_out();
    }
    ?>

    <!-- Main Content // Start -->
    <section class="main">
      <div class="container error-area">

        <!-- error Form Header -->
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3" id="error-form-header">
            <h3 class="center" id="error-page-title">
              <span class="ss-icon" style="position: relative; top: 3px; right: 1px;">alert</span>
              Uh oh!
            </h3>
          </div>
        </div>

        <!-- error Form -->
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3" id="error-info-form">

            <?php
            /** Check whether the user had a information error. */
            if (Session::exists('errord')) { // Start
            ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <span class="ss-icon" id="error-success-icon">check</span> <?php echo Session::flash('errord'); ?>
                </div>
            <?php

            } // End

            if (Session::exists('validation_errors')) {
                $form_errors = Session::flash('validation_errors');

                foreach ($form_errors as $error) {
                    $error = explode('/', $error);
                    $error_message = $error[1];

                    echo "
                    <div class='alert alert-danger alert-dismissible' role='alert' style='padding-top: 6px; padding-bottom: 5px;'>
                      <span class='ss-icon' style='position: relative; top: 2px; right: 2px;'>Alert</span>
                      <span class='sr-only'>Error:</span>
                      {$error_message}
                    </div>
                    ";
                }
            }
            ?>

            <form method="post">

              <!-- First Name -->
              <div class="form-group">
                <label>An error has occured!</label>
                <br>
                <code>Error code: 404 (Page not found)</code>
                <br>
                <hr>
                <p>This probably means that you typed in the URL wrong, or we tried to send you to a page that doesn't exist.</p>
              </div>

              <hr>

              <a href="/" class="btn btn-default error-btn" id="error-btn">Go Home</a>
            </form>
          </div>
        </div>

      </div>
    </section>



    <!-- Footer Section -->
    <!-- <?php View::footer(); ?> -->

  </body>
</html>
