<?php

if (Input::exists() && Token::check(Input::get('token'))) {
  $validate = new Validate();
  $validation = $validate->check($_POST, array(
    'email' => array(
      'field_name' => 'Email',
      'required' => true,
      'min' => 2,
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
    ),
    'name' => array(
      'field_name' => 'Name',
      'required' => true,
      'min' => 2,
      'max' => 50
    )
  ));

  if($validation->passed()) {

    $user = new User();
    $salt = Hash::salt(32);

    try {
      $user->create(array(
        'email' => Input::get('email'),
        'password' => Hash::make(Input::get('password'), $salt),
        'salt' => $salt,
        'name' => Input::get('name'),
        'joined' => date('Y-m-d H:i:s'),
        'permission' => 1
      ));

      $user->login(Input::get('email'), Input::get('password'));
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
