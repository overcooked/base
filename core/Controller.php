<?php
/**
 * Controller for the model.
 * @author Team Point.
 * @version 1.0
 */
class Controller
{

  /**
   * Loads a controller given a name.
   * @param  string $controller - The name of the controller.
   */
  public static function load($controller)
  {
      require_once(getcwd() . "/controllers/" . $controller . ".php");
  }
}
