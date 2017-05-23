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
    <script src="/public/js/search.js" type="text/javascript"></script>
    <script src="/public/js/filter.js" type="text/javascript"></script>

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
            <span class="ss-icon search-icon">search</span>
          </div>
        </div>
        <div style="background-color: #343C40; color: white" class="row" id="filters">
          <div class="radio">
            <label class="radio-inline"><input id="rad1" type="radio" name="optradio">Meat</label>
            <label class="radio-inline"><input id="rad2" type="radio" name="optradio">Vegetables</label>
            <label class="radio-inline"><input id="rad3" type="radio" name="optradio">Fruit</label>
        </div>
      </div>

      </div>
    </section>

    <!-- Display Listings -->
    <section class="listings">
      <div class="container-fluid">

        <!-- Recent Posts. -->
        <div class="row" id="listing-rows">

          <?php /** Check whether the user had a successful post. */
          if (Session::exists('successful_post')) { // Start
          ?>
              <div class="alert alert-success alert-dismissible col-lg-10 col-lg-offset-1" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Session::flash('successful_post'); ?>
              </div>
          <?php

          } // End
          ?>

          <!-- Display Grid For Posts. -->
          <div class="col-md-10 col-md-offset-1 grid">

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
                    $description = substr($post->post_description, 0, 100) . '...';

                    // Convert the date.
                    $post_date = strtotime($post->post_date);
                        $post_date = date('Y-m-d', $post_date);

                    // Get the ID for the posting.
                    $post_listing_url = '/listing.php?post=' . substr($post->post_id, 5);

                        echo "
                      <div class='thumbnail grid-item'>
                        <a href='{$post_listing_url}'>
                          <img src='{$image->post_image_url}' class='img-responsive' alt='Post Image'>
                          <div class='caption'>
                            <p class='title'>
                            {$post->post_title}
                            </p>
                            <p class='description'>
                              {$description}
                              <a href='{$post_listing_url}' style='color: #50ba4a !important; font-family: proximanova-regular; letter-spacing: 0.5px;'>read more</a>
                            </p>
                            <div class='form-divider' style='margin: 5px 0 9px;'></div>
                            <small class='stats-text'>
                                <b>Posted: </b> {$post_date}
                                <img class='hidden-xs' id='user-post-profile-image' src='https://static1.squarespace.com/static/56ba4348b09f95db7f71a726/t/58d7f267ff7c50b172895560/1490547315597/justin.jpg' />
                            </small>
                            <tags style='display: none;'>{$post->post_tag}</tags>
                          </div>
                        </a>
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
    </section>

    <!-- Footer Section -->
    <?php View::footer(); ?>

    <?php require_once(getcwd() . "/views/Template/responsive-footer-nav.php"); ?>

    <script type="text/javascript">
    $( document ).ready(function() {
      var elem = document.querySelector('.grid');
      var msnry = new Masonry( elem, {
        // options
        itemSelector: '.grid-item',
        columnWidth: 250
      });

      window.dispatchEvent(new Event('resize'));

      // element argument can be a selector string
      //   for an individual element
      var msnry = new Masonry( '.grid', {
        // options
      });
    });
    </script>

  </body>
</html>
