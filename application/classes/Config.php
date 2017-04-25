<?php
/**
  * The Config class allows access to get
  * values from the global config variable.
  * @author Justin leung
  * @version 1.0
  */
class Config {

  /**
    * Gets a value from the config global variable.
    * @param path - The path to the wanted value.
    * @return config - The value from the config variable.
    */
  public static function get($path = null) {
    if($path) {
      $config = $GLOBALS['config'];
      $path = explode('/', $path);

      foreach($path as $bit) {
        if(isset($config[$bit])) {
          $config = $config[$bit];
        }
      }
      return $config;
    }
  }

}
?>
