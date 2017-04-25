<?php
/**
  * The Token class allows for Token based
  * authentication to help prevent against
  * cross site forgery requests using tokens.
  * @author Justin leung
  * @version 1.0
  */
class Token {

  /**
    * Generates and saves a token into a session variable.
    * @return the value of the token you have created.
    */
  public static function generate() {
    return Session::set(Config::get('session/token_name'), md5(uniqid()));
  }

  /**
    * Authenticates whether the token are valid.
    * @param token - The token that was submitted.
    * @return boolean - Whether the token was valid or not.
    */
  public static function check($token) {
    $tokenName = Config::get('session/token_name');

    if(Session::exists($tokenName) && $token === Session::get($tokenName)) {
      Session::delete($tokenName);
      return true;
    }

    return false;
  }

}
?>
