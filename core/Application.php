<?php
/**
  * The Application class is used for
  * control of the views on the site.
  * @author Team Point.
  */
class Application {

  /** The current instance of the application. */
  private static $_instance = null;

  /**
   * Checks if instance of appliction exists, if
   * not create a new instance of the application.
   * @return Application - Instance of the Application object.
   */
  public static function getInstance() {
    if (!isset(self::$_instance)) {
      self::$_instance = new Application();
    }

    self::load_view();
    return self::$_instance;
  }

  /**
    * Loads the view if one exists, if not
    * it redirects to a error 404 page.
    * @return true if page exists, false if not.
    */
  public static function load_view() {

    // Check to see if a URI exists.
    if (isset($_SERVER['REQUEST_URI'])) {

      // $_SERVER['REQUEST_URI'], or the file loaded.
      $url = $_SERVER['REQUEST_URI'];

      // Trim the starting slash. ( '/index.php' --> 'index.php' )
      $url = trim($url, '/');

      // If the url is the index, then load the index page.
      if ($url === '' || $url === 'index.php') {
        require_once (getcwd() . '/views/Home/home.php');
        return true;
      }

      // Explode url into array.
      $url = explode('/', trim($url, '/'));

      // If file is loaded from base url.
      if (count($url) === 1) {

        // Load all files from views directory.
        $views = array_diff(scandir($_SERVER['DOCUMENT_ROOT'] . "/views/"), array('.', '..'));

        // Loop through all views.
        foreach ($views as $view) {

          // Formats view (Login -> login -> login.php)
          $temp = strtolower($view) . '.php';

          // Check if the view exists.
          if ($url[0] === $temp) {
            require_once (getcwd() . '/views/' . $view . '/' . $url[0]);
            return true;
          }

        }
      }

    }

    echo '404 | No page found.';
    return false;
  }

}

?>
