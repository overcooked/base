<form action="" method="post">
  <div class="field">
    <label for="user_email">Email</label>
    <input type="text" name="user_email" id="user_email" autocomplete="off">
  </div>

  <div class="field">
    <label for="user_password">Password</label>
    <input type="password" name="user_password" id="user_password" autocomplete="off">
  </div>

  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
  <input type="submit" name="" value="Log In">
</form>
