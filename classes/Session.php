<?php
/**
  * The Session class allows for easy assignment
  * and deletion of the session variable.
  * @author Justin leung
  * @version 1.0
  */
class Session {

  /**
    * Sets a session variable with a name and value.
    * @param name - The name of the session variable.
    * @param value - The value of the session variable.
    * @return the value of the session you created.
    */
  public static function set($name, $value) {
    return $_SESSION[$name] = $value;
  }

  /**
    * Returns a session variables value.
    * @param name - The name of the session variable.
    * @return the value of a session variable.
    */
  public static function get($name) {
    return $_SESSION[$name];
  }

  /**
    * Checks to see if session variable is set.
    * @param name - The name of the session variable.
    * @return true if exists, false if not.
    */
  public static function exists($name) {
    return (isset($_SESSION[$name])) ? true : false;
  }

  /**
    * Deletes a session variable if it exists.
    * @param name - The name of the session variable.
    */
  public static function delete($name) {
    if(self::exists($name)) {
      unset($_SESSION[$name]);
    }
  }

}

?>
