<?php
// if webhook
if ( $_POST['payload'] ) {
  // navigate and pull (using user www-data)
  shell_exec( 'cd /var/www/html/ && sudo git pull' );
}
?>
