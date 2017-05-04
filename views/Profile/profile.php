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
        <h4>Vancouver, BC</h4>
        <p>I recently saw a wonderful play called Floydada for which the music was composed by an artist whose bio begins like this.</p>
        <hr>
        </div>
        <div class="col-md-4 middle-tab">

          <?php
          $postings = DB::getInstance()->get('posts', array('user_id', '=', $user->data()->user_id));

          if($postings->count()) {
            foreach ($postings->results() as $post) {
              echo $post->post_title . '<br>';
              echo $post->post_description . '<br>';
              echo $post->post_pickup_location . '<br>';
              echo '<br>';
            }
          } else {
            echo 'No posts for this user.';
          }
          ?>

        </div>
        <div class="col-md-4 right-tab">
          <p>asdf</p>

        </div>
      </div>
    </section>



    <!-- Footer Section -->
    <?php View::footer(); ?>

  </body>
</html>
