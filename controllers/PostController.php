<?php
/**
 * The post controller is used to create
 * new postings on the website.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();

// If the user isn't logged in, redirect to index.
$user->not_logged_in_redirect();

// Image object for uploading an image.
$image = new Bulletproof\Image($_FILES);

// Upload validation check.
$upload = null;

// If the inputs exists and the token is valid.
if(Input::exists() && Token::check(Input::get('token'))) {

  // Pass name (and optional chmod) to create folder for storage
  $image->setLocation(getcwd() . "/uploads/", 2);

  // Define allowed mime types to upload
  $image->setMime(array("jpeg", "jpg", "png"));

  // Define the min/max image upload size (size in bytes)
  $image->setSize(1, 9000000);

  // Validate the input form data.
  $validate = new Validate();

  // Check if the image was valid or not.
  $_SESSION['image_check'] = ($image['post_image']) ? 1 : 0;

  // Check Validation.
  $validation = $validate->check($_POST, array(
    'post_title' => array(
      'field_name' => 'Post title',
      'required' => true,
      //'min' => 2,
      'max' => 50
    ),
    'post_pickup_location' => array(
      'field_name' => 'Pickup location',
      'required' => true,
    ),
    'post_description' => array(
      'field_name' => 'Description',
      'required' => true,
      //'min' => 50,
      'max' => 1000
    ),
    'post_image' => array(
      'required' => true
    )
  ));

  // Check if validation passed.
  if($validation->passed()) {

    // Try uploading the image.
    $upload = $image->upload();

    // Check if the upload was successful.
    if($upload) {

      // Resize the image.
      $resize = Bulletproof\resize(
  			$image->getFullPath(),
  			$image->getMime(),
  			$image->getWidth(),
  			$image->getHeight(),
  			600,
  			450,
        true
  	  );

      // Create a new post object.
      $post = new Post();

      // Try to create a new post.
      try {

        // Create a unique post ID.
        $post_id = uniqid('post_');

        // Create new posting.
        $post->create(array(
          'post_id' => $post_id,
          'user_id' => $user->data()->user_id,
          'post_title' => Input::get('post_title'),
          'post_description' => Input::get('post_description'),
          'post_pickup_location' => Input::get('post_pickup_location'),
          'post_tag' => 'Food',
          'post_date' => date('Y-m-d H:i:s')
        ), $post_id);

        // Insert the image into the post_images table.
        $post->add_post_image(array(
          'post_id' => $post_id,
          'post_image_url' => '/uploads/' . $image->getName() . '.' . $image->getMime()
        ));

        // Post was successfully created.
        Session::flash('successful_post', 'Your new post was successfully created.');
        Redirect::to('index.php');
      } catch(Exception $e) {
        // Creating post failed.
        Session::flash('errors', $e->getMessage());
      }

    } else {
      Session::flash('image_error', $image['error']);
    }

  } else {
    Session::flash('errors', $validation->errors());
  }

}
?>
