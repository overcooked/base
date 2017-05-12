<?php
/**
 * Profile page view.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();

// Error message if user doesn't exist.
$not_found = 'User does not exist!';

// Variable for the profile image URL.
$image = null;

// Default Profile Image
$default_image = 'https://static1.squarespace.com/static/56ba4348b09f95db7f71a726/t/58d7f267ff7c50b172895560/1490547315597/justin.jpg';

// Checks if user exists, all numbers/letters, and is 13 characters long.
if (isset($_GET["user"]) && ctype_alnum($_GET["user"]) && strlen($_GET["user"]) == 13) {

  // Add user_ prefix to ID.
  $user_id = 'user_' . $_GET["user"];

  // SELECT * FROM users WHERE user_id = 'user_590914d2a7062';
  $users = DB::getInstance()->get('users', array('user_id', '=', $user_id));

  // If the user exists.
  if ($users->count()) {
      $user = $users->first();

      // Get the profile image for the user.
      $profile_image = DB::getInstance()->get('users_profile', array('user_id', '=', $user->user_id));

      // Save image URL into a variable.
      if($profile_image->count()) {
          $image = $profile_image->first();
      }
  }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- General. -->
    <title>Profile | Overcooked.ca</title>
    <meta name="description" content="Overcooked lets you give your extra food to people who really need it.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/profile/profile.css">

    <!-- Script Files. -->
    <script src="/public/js/show-more.js" type="text/javascript"></script>
    <script src="/public/js/profile/profile.js" type="text/javascript"></script>

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Main Content -->
    <section class="main">
      <div class="container">

        <?php echo $user->user_id; ?>

      </div>
    </section>

  </body>
</html>
