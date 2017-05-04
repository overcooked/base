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
    <title>Overcooked: Feed those in need with your extra food.</title>
    <meta name="description" content="Overcooked lets you give your extra food to people who really need it.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/update/update.css">


  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Main Content // Start -->
    <section class="main">
      <div class="container update-area">
        <h2 class="center">Update Your Profile</h2>
        <form action="" method="post">
          <div class="field">
            <label for="user_email">Email</label>
            <input type="text" name="user_email" class="form-control" id="user_email" value="<?php echo escape($user->data()->user_email); ?>">

            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            <input type="submit" class="btn btn-default update-btn" name="submit" value="Update">
          </div>
        </form>
      </div>
    </section>



    <!-- Header Section -->
    <?php // View::footer(); ?>

  </body>
</html>
