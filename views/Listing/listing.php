<?php
/**
 * The listing page displays information
 * about a specific post given a post id.
 * @author Team Point.
 * @version 1.0
 */

/** User to check logged in and get user data. */
$user = new User();

// Error message if posting doesn't exist.
$not_found = 'Post does not exist!';

// Boolean for if post exists or not.
$post_exists = false;

// Checks if post exists, all numbers/letters, and is 13 characters long.
if (isset($_GET["post"]) && ctype_alnum($_GET["post"]) && strlen($_GET["post"]) == 13) {

  // Add post_ prefix to ID.
  $post_id = 'post_' . $_GET["post"];

  // SELECT * FROM posts WHERE post_id = 'post_590914d2a7062';
  $posting = DB::getInstance()->get('posts', array('post_id', '=', $post_id));

  // If the post exists.
  if ($posting->count()) {
      $post_exists = true;
      $post = $posting->first();
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- General. -->
    <title>Welcome, <?php echo escape($user->data()->user_first) ?> | Overcooked</title>
    <meta name="description" content="Overcooked: Feed those in need, with your extra food.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <style media="screen">

    body {
      background: #f9f8f7;
    }
    .main .container {
      border-radius: 3px;
      padding-left: 25px;
      padding-right: 25px;
      background: #fff;
      padding-top: 25px;
      box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
    }
    </style>

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Main Content -->
    <section class="main">
      <div class="container">

        <!-- Posting Information -->
        <div class="col-md-10 col-md-offset-1">

          <p class='text-center'>
            <a href='index.php' class='btn btn-primary' style='font-family: proximanova-bold, Helvetica, Arial, sans-serif; margin-top: -7px; padding: 8px 14px 7px; background-color: #fa7600; color: #fff; font-size: 13px; border: none; border-radius: 3px; text-transform: uppercase; letter-spacing: 1px; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;' role='button'>RETURN</a>
          </p>

          <hr>

          <?php

            if ($post_exists) {
                // Get the image for the post.
              $post_image = DB::getInstance()->get('post_image', array('post_id', '=', $post->post_id));
                $image = '';

              // Save into a variable.
              if ($post_image->count()) {
                  $image = $post_image->first();
              }

                echo "
              <!-- Post Listing -->
              <div class='col-md-8 col-md-offset-2' id='post-information'>

                <img class='img-responsive' src='{$image->post_image_url}' alt=''>

                <br>
                <h3>{$post->post_title}</h3>
                <hr>

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
                <br><br><br>

              </div>
              ";
            }
          ?>
        </div>

      </div>
    </section>

  </body>
</html>
