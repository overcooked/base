<form action="" method="post">
  <div class="field">
    <label for="user_email">Email</label>
    <input type="text" name="user_email" id="user_email" autocomplete="off" value="">
  </div>

  <div class="field">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" autocomplete="off" value="">
  </div>

  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
  <input type="submit" name="" value="Log In">
</form>
