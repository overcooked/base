<?php
/**
 * The update controller is used to
 * update user information.
 * @author Team Point.
 */

/*
TODO:
- Profile Description
- Users location with a dropdown for metro vancouver locations.
*/

/** User to check logged in and get user data. */
$user = new User();

// If user is logged in, redirect them to index.
$user->not_logged_in_redirect();

// Check if input exists, and the form token is valid.
if(Input::exists() && Token::check(Input::get('token'))) {

  $validate = new Validate();

  if(isset($_POST['user_email']) && $_POST['user_email'] !== $user->data()->user_email) {
    $validation = $validate->check($_POST, array(
      'user_first' => array(
        'field_name' => 'First name',
        'max' => 50,
        'min' => 2
      ),
      'user_last' => array(
        'field_name' => 'Last name',
        'max' => 50,
        'min' => 2
      ),
      'user_email' => array(
        'field_name' => 'Email',
        'max' => 255,
        'min' => 6,
        'unique' => 'users'
      ),
      'profile_description' => array(
        'field_name' => 'Description',
        'max' => 500
      )
    ));
  } else {
    $validation = $validate->check($_POST, array(
      'user_first' => array(
        'field_name' => 'First name',
        'max' => 50,
        'min' => 2
      ),
      'user_last' => array(
        'field_name' => 'Last name',
        'max' => 50,
        'min' => 2
      ),
      'profile_description' => array(
        'field_name' => 'Description',
        'max' => 500
      )
    ));
  }

  // If validation passed.
  if($validation->passed()) {

    $user = new User();

    try {

      // U
      if(isset($_POST['user_first']) || isset($_POST['user_last'])) {
        $user->update('users', array(
          'user_first' => Input::get('user_first'),
          'user_last' => Input::get('user_last')
        ));
      }

      // Update the users email.
      if(isset($_POST['user_email']) && $user->data()->user_email !== Input::get('user_email')) {
        $user->update('users', array(
          'user_email' => Input::get('user_email')
        ));
      }

      // Update the users location in vancouver.
      if(isset($_POST['user_location'])) {
        $user->update('users', array(
          'user_location' => Input::get('user_location')
        ));
      }

      // Update the profile description for the user.
      if(isset($_POST['profile_description'])) {
        $user->update('users_profile', array(
          'profile_description' => Input::get('profile_description')
        ));
      }

    } catch(Exception $e) {
      die($e->getMessage());
    }

    // Redirect to page and inform that information was updated.
    Session::flash('updated', 'Your information has been updated.');
    Redirect::to('update.php');
  } else {
    // Errors with validation, redirect to other page.
    Session::flash('validation_errors', $validation->errors());
    Redirect::to('update.php');
  }
}
?>
