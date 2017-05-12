<?php
/**
 * Profile page view.
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
    <link rel="stylesheet" href="/public/css/profile/profile.css">

    <!-- Script Files. -->
    <script src="/public/js/show-more.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Main Content // Start -->
    <section class="main">
      <div class="profile-content container profile-area">
        <div class="left-tab">
          <img class="profile-pic" src="https://github.com/tehp.png" width="200" height="200">
          <h3>
          <?php //echo $user->data()->user_first;?>
          <?php //echo $user->data()->user_last;?>
          Mackenzie Craig
        </h3>
        <h4>Port Coquitlam</h4>

        <span class="bio-content more">
          Enjoys long walks on the beach. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </span>

        </div>
      </div>
        <div class="split"><p class="font-semibold split-text">Recent Posts</p></div>

        <div class="posts-area">

        <div class="container">

          <?php
          $postings = DB::getInstance()->get('posts', array('user_id', '=', $user->data()->user_id));

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

              // Save into a variable.
              if ($post_image->count()) {
                  $image = $post_image->first();
              }

                  echo '<div class="item">';
                  echo '<p class="title">';
                  echo $post->post_title . '<br>';
                  echo '</p>';
                  echo '<p class="description">';
                  echo $description . '<br>';
                  echo '</p>';
                  echo $post->post_pickup_location;
                  echo '<br><small class="stats-text">Type: ' . $post->post_tag . ' | Posted: ' . $post->post_date . '</small';
                  echo '</div><hr>';
                  echo '<a href=' . $post_listing_url . ' class="view-btn btn btn-primary">View Listing</a>';
              }
          } else {
              echo 'No posts for this user.';
          }
          ?>

        </div>
      </div>
    </section>



    <!-- Footer Section -->
    <!-- <?php View::footer(); ?> -->

  </body>
</html>
