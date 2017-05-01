<?php
/**
 * The update controller is used to
 * update user information.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();

// If user is logged in, redirect them to index.
$user->not_logged_in_redirect();

// If a flash success message exists, print the message.
if(Session::exists('updated')) {
  echo Session::flash('updated');
}

// Check if input exists, and the form token is valid.
if(Input::exists() && Token::check(Input::get('token'))) {
  $validate = new Validate();
  $validation = $validate->check($_POST, array(
    'user_email' => array(
      'field_name' => 'Email',
      'required' => true,
      'max' => 255,
      'unique' => 'users'
    )
  ));

  if($validation->passed()) {

    $user = new User();

    try {
      $user->update(array(
        'user_email' => Input::get('user_email')
      ));
    } catch(Exception $e) {
      die($e->getMessage());
    }

    Session::flash('updated', 'Your information has been updated.');
    Redirect::to('update.php');
  } else {
    foreach ($validation->errors() as $error) {
      echo $error . '</br>';
    }
  }
}
?>
