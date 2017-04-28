<?php
// Create a new user object.
$user = new User();

// If the user isn't logged in, redirect to index.
$user->is_not_logged_in();

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
    if(Hash::make(Input::get('current_password'), $user->data()->salt) !== $user->data()->password) {
      echo 'Your current password is wrong.';
    } else {

      // Update the new password using a new salt.
      $salt = Hash::salt(32);
      $user->update(array(
        'password' => Hash::make(Input::get('new_password'), $salt),
        'salt' => $salt
      ));
    }

    // Go back to the homepage.
    Redirect::to('index.php');
  } else {
    foreach($validation->errors() as $error) {
      echo $error . '</br>';
    }
  }

}
?>
