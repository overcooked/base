<?php
/**
 * The Redirect class redirects users to other
 * pages using PHP's header functionality.
 * @param  [type] $location [description]
 * @return [type]           [description]
 */
class Redirect {

  /**
   * Redirects to a curtain page given a page.
   * @param  string $location - The page to be redirected to.
   */
  public static function to($location = null) {
    header('Location: ' . $location);
    exit();
  }

}
?>
