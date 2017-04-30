<?php
/**
 * The register page gives the ability for a
 * person to create an account on the app.
 * @uses controllers/RegisterController - To handle the registering.
 * @uses views/Register/register        - For the pages UI.
 */

/** Load the pages controller. */
Controller::load('RegisterController');
?>

<form action="" method="post">

  <div class="field">
    <label for="user_first">First Name</label>
    <input type="text" name="user_first" value="<?php echo escape(Input::get('user_first')); ?>" id="user_first">
  </div>

  <div class="field">
    <label for="user_last">Last Name</label>
    <input type="text" name="user_last" value="<?php echo escape(Input::get('user_last')); ?>" id="user_last">
  </div>

  <div class="field">
    <label for="user_email">Email</label>
    <input type="text" name="user_email" id="user_email" value="<?php echo escape(Input::get('user_email')); ?>" autocomplete="off">
  </div>

  <div class="field">
    <label for="user_password">Password</label>
    <input type="password" name="user_password" id="user_password">
  </div>

  <div class="field">
    <label for="password_again">Password Again</label>
    <input type="password" name="password_again" id="password_again">
  </div>

  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
  <input type="submit" value="Register">
</form>
