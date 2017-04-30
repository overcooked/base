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

  /**
   * Loads the boiler plate head file.
   * @return void
   */
  public static function head() {
    require_once (getcwd() . "/views/Template/head.php");
  }

  /**
   * Loads the boiler plate header file
   * for a logged out user.
   * @return void
   */
  public static function header_logged_out() {
    require_once (getcwd() . "/views/Template/header-logged-out.php");
  }

  /**
   * Loads the boiler plate header file
   * for a logged in user.
   * @return void
   */
  public static function header_logged_in() {
    require_once (getcwd() . "/views/Template/header-logged-in.php");
  }

  /**
   * Loads the boiler plate footer file.
   * @return void
   */
  public static function footer() {
    require_once (getcwd() . "/views/Template/footer.php");
  }

}
?>
