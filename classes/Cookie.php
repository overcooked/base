<?php
/**
 * The Cookie class applies setters and getters
 * and easy access to the $_COOKIE variable.
 * @author Team Point.
 * @version 1.0
 */
class Cookie {

  /**
   * Checks to see if a cookie exists.
   * @param  string $name - The name of the cookie.
   * @return boolean      - True if the cookie exists, false if not.
   */
  public static function exists($name) {
    return (isset($_COOKIE[$name])) ? true : false;
  }

  /**
   * Get the value from a cookie variable.
   * @param  string $name - The name of the cookie.
   * @return string       - The value of the cookie.
   */
  public static function get($name) {
    return $_COOKIE[$name];
  }

  /**
   * Set a cookie with a name, value, and expiry date.
   * @param string $name   - The name of the cookie.
   * @param string $value  - The value of the cookie.
   * @param int    $expiry - The expiry date of the cookie.
   */
  public static function set($name, $value, $expiry) {
    if(setcookie($name, $value, time() + $expiry, '/')) {
      return true;
    }
    return false;
  }

  /**
   * Deletes a cookie given it's name.
   * @param  string $name - The name of the cookie.
   * @return void
   */
  public static function delete($name) {
    self::set($name, '', time() - 1);
  }

}
?>
