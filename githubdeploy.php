<?php
if ( $_POST['payload'] ) {
  // ran as www-data
  shell_exec( 'cd /var/www/html/ && git pull' );
}
?>
