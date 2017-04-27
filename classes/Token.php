<?php
/**
 * The Token class allows for Token based
 * authentication to help prevent against
 * cross site forgery requests using tokens.
 * @author Team Point.
 * @version 1.0
 */
class Token {

  /**
   * Generates and sets a token into a session variable.
   * @return String - The value of the generated token.
   */
  public static function generate() {
    return Session::set(Config::get('session/token_name'), md5(uniqid()));
  }

  /**
   * Authenticates whether a token is valid.
   * @param  String $token - The token from the input form.
   * @return boolean       - True if token is valid, false if not.
   */
  public static function check($token) {

    // Save the pre-defined global token name.
    $token_name = Config::get('session/token_name');

    // Check if a user token exists, and if it's equal to the input form token.
    if(Session::exists($token_name) && $token === Session::get($token_name)) {
      // Delete token if successful and return true.
      Session::delete($token_name);
      return true;
    }

    // Token was not valid, return false.
    return false;
  }

}
?>
