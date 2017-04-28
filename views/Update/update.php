<?php
Controller::load('UpdateController');
?>

<form action="" method="post">
  <div class="field">
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php echo escape($user->data()->name); ?>">

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" name="" value="Update">
  </div>
</form>
