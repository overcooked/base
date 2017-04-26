<?php
class Hash {

  public static function make($string, $salt = '') {
     return hash('sha256', $string . $salt);
  }

  public static function salt($length) {
    return utf8_encode(openssl_random_pseudo_bytes(32));
  }

  public static function unique() {
    return self::make(uniqid());
  }

}

?>
