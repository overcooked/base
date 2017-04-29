<?php
/**
 * The change password controller is
 * used to change a users password.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();

// If the user isn't logged in, redirect to index.
$user->not_logged_in_redirect();

// If a flash success message exists, print the message.
if(Session::exists('changed')) {
  echo Session::flash('changed');
}

// Check if input exists, and the form token is valid.
if(Input::exists() && Token::check(Input::get('token'))) {

  // Check the validation on the form.
  $validate = new Validate();
  $validation = $validate->check($_POST, array(
    'current_password' => array(
      'field_name' => 'Current Password',
      'required' => true
    ),
    'new_password' => array(
      'field_name' => 'New Password',
      'required' => true,
      'min' => 6,
      'max' => 64
    ),
    'new_password_again' => array(
      'field_name' => 'New Password Again',
      'required' => true,
      'min' => 6,
      'max' => 64,
      'matches' => 'new_password'
    )
  ));

  // Check if the validation passed.
  if($validation->passed()) {

    // If the input password is equal to the users password.
    if(Hash::make(Input::get('current_password'), $user->data()->user_salt) === $user->data()->user_password) {

      try {
        // Update the new password using a new salt.
        $salt = Hash::salt(32);
        $user->update(array(
          'user_password' => Hash::make(Input::get('new_password'), $salt),
          'user_salt' => $salt
        ));
      } catch(Exception $e) {
        die($e->getMessage());
      }

      // Password change was successful.
      Session::flash('changed', 'Your password has been updated.');
      Redirect::to('changepassword.php');

    } else {
      // Password change failed.
      Session::flash('changed', 'Your current password is not correct.');
      Redirect::to('changepassword.php');
    }

  } else {
    foreach($validation->errors() as $error) {
      echo $error . '</br>';
    }
  }

}
?>
