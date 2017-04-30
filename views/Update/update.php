<?php
/**
 * The update page allows users to
 * update their personal information.
 * @uses controllers/UpdateController - To handle the updates.
 * @uses views/Update/update          - For the pages UI.
 */

/** Load the pages controller. */
Controller::load('UpdateController');

/** User to check logged in and get user data. */
$user = new User();
?>

<form action="" method="post">
  <div class="field">
    <label for="user_email">Email</label>
    <input type="text" name="user_email" id="user_email" value="<?php echo escape($user->data()->user_email); ?>">

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" name="submit" value="Update">
  </div>
</form>
