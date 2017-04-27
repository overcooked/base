<?php
/**
 * The Input class is used to extract info
 * from inputs using the $_POST variable.
 * @author Team Point.
 * @version 1.0
 */
class Input {

  /**
   * Checks if a form was submitted or not.
   * @return boolean - True if form has been submitted, false if not.
   */
  public static function exists() {
    return (!empty($_POST)) ? true : false;
  }

  /**
   * Returns the value from a $_POST given a name.
   * @param  string $item - The name of the post variable.
   * @return string       - The value of the post variable.
   */
  public static function get($item) {
    if (isset($_POST[$item]))
      return $_POST[$item];
    return '';
  }

}
?>
