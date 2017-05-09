<?php
/**
 * Logged in page view.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- General. -->
    <title>Welcome, <?php echo escape($user->data()->user_first) ?> | Overcooked</title>
    <meta name="description" content="Overcooked: Feed those in need, with your extra food.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/home-in/home-in.css">

    <!-- Script Files -->
    <script src="/public/js/post-resize.js" type="text/javascript"></script>

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Main Content -->
    <section class="main">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h3 class="lead-title">Welcome, <b><?php echo escape($user->data()->user_first) . ' ' . escape($user->data()->user_last); ?></b>!</h3>
            <hr>
          </div>
        </div>

        <div class="col-md-10 col-md-offset-1">

          <?php /** Check whether the user had a successful post. */
          if (Session::exists('successful_post')) { // Start
          ?>
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Session::flash('successful_post'); ?>
              </div>
          <?php

          } // End
          ?>

          <?php
          $postings = DB::getInstance()->query("SELECT * FROM posts ORDER BY post_date DESC");

          if ($postings->count()) {
              foreach ($postings->results() as $post) {

              // Get the image for the post.
              $post_image = DB::getInstance()->get('post_image', array('post_id', '=', $post->post_id));
                  $image = '';

              // Save into a variable.
              if ($post_image->count()) {
                  $image = $post_image->first();
              }

              // Format the description.
              $description = substr($post->post_description, 0, 100) . '..';

              // Convert the date.
              $post_date = strtotime($post->post_date);
                  $post_date = date('Y-m-d', $post_date);

              // Get the ID for the posting.
              $post_listing_url = '/listing.php?post=' . substr($post->post_id, 5);

                  echo "
              <div class='col-md-4 post'>
                <div class='thumbnail'>
                  <img src='{$image->post_image_url}' class='img-responsive' alt='Post Image'>
                  <div class='caption'>
                    <p class='title'>
                    {$post->post_title}
                    </p>
                    <p class='description'>{$description}</p>
                    <small class='stats-text'><b>Type: </b>{$post->post_tag} &nbsp;|&nbsp; <b>Posted: </b> {$post_date}</small>
                    <hr>
                    <p class='text-center'>
                      <a href='{$post_listing_url}' class='btn btn-primary view-btn' role='button'>View Listing</a>
                    </p>
                  </div>
                </div>
              </div>
              ";
              }
          } else {
              echo 'There are no posts available.';
          }
          ?>

          <!--
          Used to resize posts to the height of the
          tallest post. Do not modify.
          -->
          <script type="text/javascript">
              resize();
          </script>

          </div>

    </section>

  </body>
</html>
