<?php
/**
 * Profile page view.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user_current = new User();

/** For the current user on the profile. */
$user = new User();

// Error message if user doesn't exist.
$not_found = 'User does not exist!';

// Variable for the profile image URL.
$profile = null;

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
      $user_profile = DB::getInstance()->get('users_profile', array('user_id', '=', $user->user_id));

      // Save image URL into a variable.
      if($user_profile->count()) {
          $profile = $user_profile->first();
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

    <!-- Profile Top // Start -->
    <section class="profile-top">
      <div class="container profile-area">

        <!-- Display Users Information -->
        <div class="row">

          <!-- Profile Image -->
          <?php
          if($profile->profile_image_url !== '') {
            echo "
            <div id='user-profile-image'>
              <img src='{$profile->profile_image_url}' alt='Profile Image'>
            </div>
            ";
          } else {
            echo "
            <div id='user-profile-image'>
              <img src='{$default_image}' alt='Profile Image'>
            </div>
            ";
          }
          ?>

          <!-- Users Full Name -->
          <div id="user-full-name">
            <?php echo $user->user_first . ' ' . $user->user_last; ?>
          </div>

          <!-- Users Location -->
          <?php
          if($user->user_location !== '') {
            echo "
            <div id='user-location'>
              <p>{$user->user_location}</p>
            </div>
            ";
          }
          ?>

          <div class="form-divider" style="width: 35px; background-color: #ececec; border-radius: 16px;"></div>

          <!-- Profile Description -->
          <?php
          if($profile->profile_description !== '') {
            echo "
            <div id='profile-description'>
              <p>{$profile->profile_description}</p>
            </div>
            ";
          }
          ?>

        </div>

      </div>

    </section>

    <section id="users-posts">
      <div class="container-fluid" id="users-posts-divider">
        <!-- Middle Divider -->
        <div class="row text-center" id="user-posts-divider">
          <p id="users-posts-title">
            <span class="ss-icon" style="position: relative; top: 3px; right: 1px;">compose</span>
            Users Posts
          </p>
        </div>
      </div>

      <!-- All Of The Users Postings -->
      <div class="container" id="users-posts-content">

        <?php
        $postings = DB::getInstance()->get('posts', array('user_id', '=', $user_current->data()->user_id));

        if ($postings->count()) {
            foreach ($postings->results() as $post) {

              // $post->post_title;
              // $post->post_description;
              // Convert the date.
              $post_date = strtotime($post->post_date);
              $post_date = date('Y-m-d', $post_date);
              // Get the ID for the posting.
              $post_listing_url = '/listing.php?post=' . substr($post->post_id, 5);

              echo "
              <!-- User Post -->
              <div class='row'>
                <div class='col-md-12'>
                  <div class='user-post-display'>
                    <a href='{$post_listing_url}'>
                      <h3>{$post->title}</h3>
                      <div class='form-divider' style='margin: 10px 0 10px;'></div>
                      <p id='post_description'>{$post->post_description}</p>
                      <div class='form-divider' style='margin: 10px 0 10px;'></div>
                      <p id='post-date'>Posted On {$post_date}</p>
                    </a>
                  </div>
                </div>
              </div>
              ";

            }
        } else {
          echo "
          <!-- User Post -->
          <div class='row'>
            <div class='col-md-12 text-center'>
              <div class='user-post-display' style='padding-bottom: 25px;'>
                <h3>There are no postings by this user!</h3>
              </div>
            </div>
          </div>
          ";
        }
        ?>

      </div>
    </section>

  </body>
</html>
