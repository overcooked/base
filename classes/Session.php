<?php
/**
 * The Session class applies setters and getters
 * for easy access to the $_SESSION variable.
 * @author Team Point.
 * @version 1.0
 */
class Session {

  /**
   * Sets a session variable with a name and value.
   * @param String $name  - The name of the session variable.
   * @param String $value - The value of the session variable.
   */
  public static function set($name, $value) {
    return $_SESSION[$name] = $value;
  }

  /**
   * Returns a session variables value.
   * @param  String $name - The name of the session variable.
   * @return String       - The value of the session variable.
   */
  public static function get($name) {
    return $_SESSION[$name];
  }

  /**
   * Checks to see if session variable is set.
   * @param  String $name - The name of the session variable.
   * @return boolean      - True if the session exists, false if not.
   */
  public static function exists($name) {
    return (isset($_SESSION[$name])) ? true : false;
  }

  /**
   * Deletes a session variable if it exists
   * @param  String $name - The name of the session variable.
   * @return void
   */
  public static function delete($name) {
    if(self::exists($name)) {
      unset($_SESSION[$name]);
    }
  }

  /**
   * Flash is used to send a temporary message
   * to another page that is flashed once.
   * @param  String $name     - The name of the session variable.
   * @param  String $contents - The flash message to be saved.
   * @return String           - The contents of the flash message.
   */
  public static function flash($name, $contents = '') {
    if(self::exists($name)) {
      $session = self::get($name);
      self::delete($name);
      return $session;
    } else {
      self::set($name, $contents);
    }

    return '';
  }

}
?>
