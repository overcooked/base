<?php
if ( $_POST['payload'] ) {
  shell_exec( 'cd /var/www/html/ && sudo -u www-data git pull' );
}
?>
