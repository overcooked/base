<?php
// Loads the login controller.
Controller::load('LoginController');
?>

<form action="" method="post">
  <div class="field">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" autocomplete="off" value="">
  </div>

  <div class="field">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" autocomplete="off" value="">
  </div>

  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
  <input type="submit" name="" value="Log In">
</form>
