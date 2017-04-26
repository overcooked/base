<?php
require_once 'core/init.php';

if (Input::exists() && Token::check(Input::get('token'))) {
  $validate = new Validate();
  $validation = $validate->check($_POST, array(
    'username' => array(
      'inputname' => 'Username',
      'required' => true,
      'min' => 2,
      'max' => 20,
      'unique' => 'users'
    ),
    'password' => array(
      'inputname' => 'Password',
      'required' => true,
      'min' => 6,
      'max' => 64
    ),
    'password_again' => array(
      'inputname' => 'Password Again',
      'required' => true,
      'matches' => 'password'
    ),
    'name' => array(
      'inputname' => 'Name',
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
        'username' => Input::get('username'),
        'password' => Hash::make(Input::get('password'), $salt),
        'salt' => $salt,
        'name' => Input::get('name'),
        'joined' => date('Y-m-d H:i:s'),
        'permission' => 1
      ));

      Session::flash('success', 'You have registered!');
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

<form action="" method="post">
  <div class="field">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>" autocomplete="off">
  </div>

  <div class="field">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
  </div>

  <div class="field">
    <label for="password_again">Password Again</label>
    <input type="password" name="password_again" id="password_again">
  </div>

  <div class="field">
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php echo escape(Input::get('name')); ?>" id="name">
  </div>

  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
  <input type="submit" value="Register">
</form>
