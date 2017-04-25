<?php

class Input {

  /* Checks to see if a form was submitted or not. */
  public static function exists() {
    return (!empty($_POST)) ? true : false;
  }

  /* Gets the input data given an item/input name. */
  public static function get($item) {
    if (isset($_POST[$item]))
      return $_POST[$item];
    return '';
  }

}
?>
