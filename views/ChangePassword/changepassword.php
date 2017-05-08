<form action="" method="post">
  <div class="field">
    <label for="current_password">Current Password</label>
    <input type="password" name="current_password" id="current_password">
  </div>

  <div class="field">
    <label for="new_password">New Password</label>
    <input type="password" name="new_password" id="new_password">
  </div>

  <div class="field">
    <label for="new_password_again">Confirm Password</label>
    <input type="password" name="new_password_again" id="new_password_again">
  </div>

  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
  <input type="submit" value="Change Password">
</form>
