<?php
$user = new User();
// If user is logged in, redirect them to index.
if($user->is_logged_in()) {
  Redirect::to('index.php');
}

// Checks to see if a token exists.
if(Input::exists() && Token::check(Input::get('token'))) {
  $validate = new Validate();
  $validation = $validate->check($_POST, array(
    'email' => array('field_name' => 'Email', 'required' => true ),
    'password' => array('field_name' => 'Password', 'required' => true)
  ));

  if($validation->passed()) {
    if($user->login(Input::get('email'), Input::get('password'))) {
      Redirect::to('index.php');
    } else {
      echo 'Incorrect Login Details';
    }
  } else {
    foreach($validation->errors() as $error) {
      echo $error, '<br>';
    }
  }

}
?>
