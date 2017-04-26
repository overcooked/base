<?php
require_once 'core/init.php';

if(Input::exists() && Token::check(Input::get('token'))) {
  $validate = new Validate();
  $validation = $validate->check($_POST, array(
    'username' => array(
      'inputname' => 'Username',
      'required' => true
    ),
    'password' => array(
      'inputname' => 'Password',
      'required' => true
    )
  ));

  if($validation->passed()) {
    $user = new User();
    $login = $user->login(Input::get('username'), Input::get('password'));

    // TODO: Add session flash.
    if($login) {
      Redirect::to('index.php');
    } else {
      echo 'Problem logging in.';
    }
  } else {
    foreach($validation->errors() as $error) {
      echo $error, '<br>';
    }
  }
}
?>

<form action="" method="post">
  <div class="field">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" autocomplete="off" value="">
  </div>

  <div class="field">
    <label for="password">Password</label>
    <input type="text" name="password" id="password" autocomplete="off" value="">
  </div>

  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
  <input type="submit" name="" value="Log In">
</form>
