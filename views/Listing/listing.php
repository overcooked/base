<?php
/**
 * The listing page displays information
 * about a specific post given a post id.
 * @author Team Point.
 * @version 2.0
 */

/** User to check logged in and get user data. */
$user = new User();

/* The posters information. */
$poster = null;

// Variable for the profile image URL.
$profile = null;

// Image variable.
$image = null;

// Get the link to a users profile.
$user_profile_url = null;

// Variable to store the psters location.
$posters_location = null;

// Checks if post exists, all numbers/letters, and is 13 characters long.
if (isset($_GET["post"]) && ctype_alnum($_GET["post"]) && strlen($_GET["post"]) == 13) {

  // Add post_ prefix to ID.
  $post_id = 'post_' . $_GET["post"];

  // SELECT * FROM posts WHERE post_id = 'post_590914d2a7062';
  $posting = DB::getInstance()->get('posts', array('post_id', '=', $post_id));

  // If the post exists.
  if ($posting->count()) {
      $post = $posting->first();

    // Get the image for the post.
    $post_image = DB::getInstance()->get('post_image', array('post_id', '=', $post->post_id));

    // Save into a variable.
    $image = $post_image->first();

    // Get the profile image for the user.
    $user_profile = DB::getInstance()->get('users_profile', array('user_id', '=', $post->user_id));

    // Save image URL into a variable.
    $profile = $user_profile->first();

      if ($profile->profile_image_url !== '') {
          $profile = $profile->profile_image_url;
      } else {
          $profile = 'https://static1.squarespace.com/static/56ba4348b09f95db7f71a726/t/58d7f267ff7c50b172895560/1490547315597/justin.jpg';
      }

    // Get the user that the post belongs to.
    $poster = DB::getInstance()->get('users', array('user_id', '=', $post->user_id));
      $poster = $poster->first();

    // Get the link to a users profile.
    $user_profile_url = '/profile.php?user=' . substr($poster->user_id, 5);
  }
} else {
    // No posting found, redirect.
  Redirect::to('404.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- General. -->
    <title>Welcome, <?php echo escape($user->data()->user_first) ?> | Overcooked</title>
    <meta name="description" content="Overcooked: <?php $post->post_title ?>">

    <!-- TODO: Echo tags here -->
    <!-- <meta name="keywords" content=""> -->

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Styling Sheets. -->
    <link rel="stylesheet" href="/public/css/listing/listing.css">

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Listing Image Section -->
    <section id="listing-image-header">

      <!-- The postings image -->
      <div id="listing-image">
        <img src="<?php echo $image->post_image_url ?>">
      </div>

    </section>

    <!-- Main Posting Content -->
    <section class="main">
      <div class="container" id="area">

        <!-- Posting Information -->
        <div class="col-md-10 col-md-offset-1">

          <?php

              echo "
              <!-- Post Listing -->
              <div class='col-md-8 col-md-offset-2' id='post-information'>

                <div id='listing-title'>
                  <h3>{$post->post_title}</h3>
                </div>

                <div class='form-divider'></div>

                <div id='listing-poster-info'>
                  <img src='{$profile}' id='profile-img' alt='Profile Image'/>
                  <p id='posted-by'>
                  Posted By
                  <a href='{$user_profile_url}'>{$poster->user_first} {$poster->user_last}</a><br>
                  <small>Lives In {$poster->user_location}</small>
                  </p>
                </div>

                <div class='form-divider'></div>

                <p>{$post->post_description}</p>
                <hr>

                <small>
                  <b>Pickup Location:</b>
                  {$post->post_pickup_location}
                </small>
                <br>

                <small>
                  <b>Food Tags:</b>
                  {$post->post_tag}
                </small>
                <br>

                <small>
                  <b>Post Date:</b>
                  {$post->post_date}
                </small>
                <br><br><br><br><br><br><br>

              </div>
              ";

          ?>
        </div>

      </div>
    </section>

    <!-- Footer Section -->
    <?php View::footer(); ?>

  </body>
</html>
