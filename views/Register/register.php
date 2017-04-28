<?php
Controller::load('RegisterController');
?>

<form action="" method="post">
  <div class="field">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="<?php echo escape(Input::get('email')); ?>" autocomplete="off">
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
