<?php
if ( $_POST['payload'] ) {
  shell_exec( 'cd /var/www/html/ && git pull' );
}
?>
