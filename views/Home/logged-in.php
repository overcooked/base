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

    <!-- Script Files -->
    <script src="/public/js/libraries/typing.js" type="text/javascript"></script>

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
    .thumbnail {
      padding-left: 20px;
      padding-right: 20px;
      border: none;
      box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
    }
    .thumbnail img {
        margin-top: 10px;
        width: 370px;
        height: 250px;
        display: block;
    }
    </style>

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Main Content -->
    <section class="main">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h3>Welcome, <b><?php echo escape($user->data()->user_first) . ' ' . escape($user->data()->user_last); ?></b>!</h3>
            <hr>
          </div>
        </div>

        <div class="col-md-10 col-md-offset-1">

          <?php /** Check whether the user had a successful post. */
          if(Session::exists('successful_post'))
          { // Start
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

          if($postings->count()) {
            foreach ($postings->results() as $post) {

              // Get the image for the post.
              $post_image = DB::getInstance()->get('post_image', array('post_id', '=', $post->post_id));
              $image = '';

              // Save into a variable.
              if($post_image->count()) {
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
              <div class='col-md-6'>
                <div class='thumbnail'>
                  <img src='{$image->post_image_url}' class='img-responsive' alt='Post Image'>
                  <div class='caption'>
                    <p style='padding-top: 10px; padding-bottom: 6px; font-size: 19px; font-family: proximanova-semibold; text-transform: capitalize;'>
                    {$post->post_title}
                    </p>
                    <div style='height: 1px; width: 50px; background-color: #eee; margin-bottom: 10px;'></div>
                    <p style='color: #7b7b7b; line-height: 19px; font-size: 14px; padding-bottom: 10px;'>{$description}</p>
                    <div style='height: 1px; width: 50px; background-color: #eee; margin-bottom: 10px;'></div>
                    <small style='color: #666; font-family: proximanova-regularitalic'><b>Type: </b>{$post->post_tag} &nbsp;|&nbsp; <b>Posted: </b> {$post_date}</small>
                    <hr>
                    <p class='text-center'>
                      <a href='{$post_listing_url}' class='btn btn-primary' style='font-family: proximanova-bold, Helvetica, Arial, sans-serif; margin-top: -7px; padding: 8px 14px 7px; background-color: #50ba4a; color: #fff; font-size: 13px; border: none; border-radius: 3px; text-transform: uppercase; letter-spacing: 1px; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;' role='button'>View Listing</a>
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

          </div>

      </div>
    </section>

  </body>
</html>
