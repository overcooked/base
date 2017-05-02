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

if(Input::exists() && Token::check(Input::get('token'))) {

  $validate = new Validate();
  $validation = $validate->check($_POST, array(
    'post_title' => array(
      'field_name' => 'Post title',
      'required' => true,
      'min' => 2,
      'max' => 50
    ),
    'post_pickup_location' => array(
      'field_name' => 'Pickup location',
      'required' => true,
    ),
    'post_description' => array(
      'field_name' => 'Description',
      'required' => true,
      'min' => 50,
      'max' => 1000
    )
  ));
  
  if($validation->passed()) {
    echo 'Successful Upload';
  } else {
    Session::flash('errors', $validation->errors());
  }

}
?>
