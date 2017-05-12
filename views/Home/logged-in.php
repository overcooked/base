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
    <script src="/public/js/masonry.js" type="text/javascript"></script>

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Main Content -->
    <section class="main">

      <p class="text-center" id="find-food">
        Begin
        <span id="finding">Finding</span>
        <span id="or">or</span>
        <span id="listing">Listing</span>
        Food!
      </p>

      <div class="container">
        <!-- Search Bar -->
        <div class="row" id="search-bar-area">
          <div class="col-md-10 col-md-offset-1">
            <input type="text" class="main-search" placeholder="Search For Food.." id="search-2" name="search-2" data-toggle="hideseek" data-list=".default_list_data" data-nodata="No Stores found" autocomplete="off">
          </div>
        </div>

      </div>
    </section>

    <section class="listings">
      <div class="container-fluid">
        <!-- Recent Posts. -->
        <div class="row" id="listing-rows">
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

              <div class="grid">

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
                      <div class='thumbnail grid-item'>
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

                    ";
                    }
                } else {
                    echo 'There are no posts available.';
                }
                ?>
              </div>
            </div>
        </div>
      </div>
    </section>

    <!-- Footer Section -->
    <?php View::footer(); ?>

    <?php require_once (getcwd() . "/views/Template/responsive-footer-nav.php"); ?>

    <script>
    var elem = document.querySelector('.grid');
    var msnry = new Masonry( elem, {
      // options
      itemSelector: '.grid-item',
      columnWidth: 250
    });

    // element argument can be a selector string
    //   for an individual element
    var msnry = new Masonry( '.grid', {
      // options
    });
    </script>

  </body>
</html>
