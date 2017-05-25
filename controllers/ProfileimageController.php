<?php
/**
 * The home controller is used to
 * control the home page functionality.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();

// If the user isn't logged in, redirect to index.
$user->not_logged_in_redirect();

/* Image Uploading */
$image = new Bulletproof\Image($_FILES);

// Upload validation check.
$upload = null;

// If the inputs exists and the token is valid.
if (Input::exists() && Token::check(Input::get('token'))) {

  // Pass name (and optional chmod) to create folder for storage
  $image->setLocation(getcwd() . "/uploads/profile_images");

  // Define allowed mime types to upload
  $image->setMime(array("jpeg", "jpg", "png"));

  // Define the min/max image upload size (size in bytes)
  $image->setSize(1, 9000000);

  if($image["profile_image"]) {

    // Try uploading the image.
    $upload = $image->upload();

    if($upload) {

      // Resize the image.
      $resize = Bulletproof\resize(
            $image->getFullPath(),
            $image->getMime(),
            $image->getWidth(),
            $image->getHeight(),
            500,
            500,
        true
      );

      $user->update('users_profile', array(
        'profile_image_url' => '/uploads/profile_images/' . $image->getName() . '.' . $image->getMime()
      ));

      Redirect::to('/profile.php?user=' . substr($user->data()->user_id, 5));
    }

  }

}

?>
