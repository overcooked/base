<?php
/**
 * The register controller is used to
 * register a new user.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();

// Check if user is logged in.
$user->logged_in_redirect();

if (Input::exists() && Token::check(Input::get('token'))) {
  $validate = new Validate();
  $validation = $validate->check($_POST, array(
    'user_first' => array(
      'field_name' => 'First name',
      'required' => true,
      'min' => 2,
      'max' => 50
    ),
    'user_last' => array(
      'field_name' => 'Last name',
      'required' => true,
      'min' => 2,
      'max' => 50
    ),
    'user_email' => array(
      'field_name' => 'Email',
      'required' => true,
      'max' => 255,
      'unique' => 'users'
    ),
    'password' => array(
      'field_name' => 'Password',
      'required' => true,
      'min' => 6,
      'max' => 64
    ),
    'password_again' => array(
      'field_name' => 'Password again',
      'required' => true,
      'matches' => 'password'
    )
  ));

  if($validation->passed()) {

    $user = new User();
    $salt = Hash::salt(32);

    try {
      $user->create(array(
        'user_first' => Input::get('user_first'),
        'user_last' => Input::get('user_last'),
        'user_email' => Input::get('user_email'),
        'password' => Hash::make(Input::get('password'), $salt),
        'salt' => $salt,
        'joined' => date('Y-m-d H:i:s')
      ));

      $user->login(Input::get('user_email'), Input::get('password'));
      Redirect::to('index.php');
    } Catch(Exception $e) {
      die($e->getMessage()); // Message about broken register.
    }
  } else {
    foreach($validation->errors() as $error) {
      echo $error . '<br>';
    }
  }
}

?>
