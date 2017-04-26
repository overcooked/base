<?php

/**
  * The application class is used to control
  * the views of the application.
  */
class Application {

  /**
    * Constructor for the application, it loads
    * a new view if one exists within the view folder.
    */
  public function __construct() {
    self::load_view();
  }

  /**
    * Loads the view if one exists, if not
    * it redirects to a error 404 page.
    * @return true if page exists, false if not.
    */
  public static function load_view() {
    if (isset($_SERVER['REQUEST_URI'])) {

      // Split the URL from the '/'
      $url = trim($_SERVER['REQUEST_URI'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);

      // If the url is the index, then load the index page.
      if ($url === '' || $url === 'index.php') {
        require_once 'includes/views/index.php';
        return;
      }

      // File may be deeper in heirarchy, keep going.
      $url = explode('/', $url);

      // Find the file name.
      foreach ($url as $chunk) {
        $link = $chunk;
      }

      // Check to see if the view exists or not.
      $files = scandir($_SERVER['DOCUMENT_ROOT'] . "/includes/views/");
      foreach($files as $filename) {
        if ($link != '.' && $link != '..') { // This is an issue.
          if ($link === $filename) {
            require_once 'includes/views/' . $link;
            return true;
          }
        }
      }

      // No view was found, delete.
      require_once 'includes/errors/404.php';
      return false;
    }
  }

}

?>
