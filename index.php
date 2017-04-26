<?php
require_once 'core/init.php';

if(Session::exists('success')) {
  echo Session::flash('success');
}

$user = new User();

if($user->isLoggedIn()) {
?>
  <p>Welcome <?php echo escape($user->data()->username); ?></p>

  <ul>
    <li><a href="logout.php">Logout</a></li>
  </ul>
<?php
} else {
  echo '<p>You need to <a href="login.php">login</a> or <a href="register.php">register</a></p>';
}
?>
