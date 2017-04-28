<?php
$user = new User();

// If the user isn't logged in, redirect to index.
if($user->is_not_logged_in()) {
  Redirect::to("index.php");
}

// If a flash success message exists, print the message.
if(Session::exists('updated')) {
  echo Session::flash('updated');
}

// Check if input exists, and the form token is valid.
if(Input::exists() && Token::check(Input::get('token'))) {
  $validate = new Validate();
  $validation = $validate->check($_POST, array(
    'name' => array(
      'field_name' => 'Name',
      'required' => true,
      'min' => 2,
      'max' => 50
    )
  ));

  if($validation->passed()) {

    try {
      $user->update(array(
        'name' => Input::get('name')
      ));
    } catch(Exception $e) {
      die($e->getMessage());
    }

    Session::flash('updated', 'Your Information Has Been Updated.');
    Redirect::to("update.php");

  } else {
    foreach ($validation->errors() as $error) {
      echo $error . '</br>';
    }
  }
}
?>
