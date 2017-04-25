<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Application {

  public function __construct() {
    self::load_view();
  }

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

      // Check if the view is available.
      if(is_dir("../includes/views/")) {
        $files = scandir("../includes/views/");
        foreach($files as $filename) {
          if ($link != '.' && $link != '..') { // This is an issue.
            if ($link === $filename) {
              require_once 'includes/views/' . $link;
              return;
            }
          }
        }
      }

      // No view was found, delete.
      require_once 'includes/errors/404.php';
    }
  }

}

?>
