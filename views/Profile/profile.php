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


  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Main Content // Start -->
    <section class="main">
      <div class="container profile-area">
        <div class="col-md-4 left-tab">
          <img class="profile-pic" src="https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97200&w=200&h=200">
          <h3>
          <?php echo $user->data()->user_first; ?>
          <?php echo $user->data()->user_last; ?>
        </h3>
        <h4>user_location</h4>
        <p>This user has not written their bio yet.</p>
        <hr>
        </div>
        <div class="col-md-8 right-tab">
          <?php
          $postings = DB::getInstance()->get('posts', array('user_id', '=', $user->data()->user_id));

          if($postings->count()) {
            foreach ($postings->results() as $post) {
              // Get the image for the post.
              $post_image = DB::getInstance()->get('post_image', array('post_id', '=', $post->post_id));
              $image = '';

              // Save into a variable.
              if($post_image->count()) {
              	$image = $post_image->first();
              }

              echo '
              <div class="row post">
              <div class="col-xs-3 hidden-xs">
              <img class="post-pic" src="' . $image->post_image_url . '" height="150" width="150">
              </div>
              <div class="col-xs-9">
              ';
              echo '<h3>';
              echo $post->post_title . '<br>';
              echo '</h3>';
              echo '<h4>';
              echo $post->post_description . '<br>';
              echo '</h4><hr>';
              echo $post->post_pickup_location . '<br>';
              echo '<br>';
              echo '
              </div>
              </div>
              ';

            }
          } else {
            echo 'No posts for this user.';
          }
          ?>

        </div>
      </div>
    </section>



    <!-- Footer Section -->
    <?php View::footer(); ?>

  </body>
</html>
