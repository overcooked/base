<?php

/**
 * Used to escape strings and sql queries.
 * @param  string $string - The string to be escaped.
 * @return string         - The escaped string.
 */
function escape($string) {
  return htmlentities($string, ENT_QUOTES, 'UTF-8');
}

?>
