<?php
/**
 * The Redirect class redirects users to other
 * pages using PHP's header functionality.
 * @author Team Point.
 * @version 1.0
 */
class Redirect {

  /**
   * Redirects to a curtain page given a page.
   * @param  string $location - The page to be redirected to.
   */
  public static function to($location) {
    header('Location: ' . $location);
    exit();
  }

  /**
   * Redirects to a curtain page given a page.
   * @param  string $location - The page to be redirected to.
   */
  public static function to_alt($location) {
    echo "<script type='text/javascript'>location.href = '" . $location . "';</script>";
  }

}
?>
