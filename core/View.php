<?php
/**
 * View Class for the MVC.
 * @author Team Point.
 * @version 1.0
 */
class View {

  /**
   * Loads the specific view component.
   * @param  string $view - The location of the view.
   */
  public static function load($view) {
    $file = strtolower($view);
    require_once (getcwd() . "/views/" . $view . '/' . $file . ".php");
  }

}
?>
