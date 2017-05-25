<?php
/**
 * The init.php was created to initialize curtain files
 * with useful imports and data to support code re-use.
 * @author Team Point.
 *
 *   - Supported Intialization Features -
 *   1.) PHP Session starting.
 *   2.) PHP Error Displaying Enabled.
 *   3.) GLOBAL Config Information. (DB info, Global Variable Names)
 *   4.) Loads the Controller for the MVC.
 *   5.) Loads the Model for the MVC.
 *   6.) Autoloader To Import Classes.
 *   7.) Login Cookie Checker With Auto Login.
 *   8.) Escape function to help escape dangerous strings.
 */

/** 1.) Start the session for the users browser. */
session_start();

/** 2.) Turn on error display options. */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/** 3.) Global information about shared data */
$GLOBALS['config'] = array(
  'mysql' => array(
    'host' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'db' => 'overcooked_db'
  ),
  'remember' => array(
    'cookie_name' => 'hash',
    'cookie_expiry' => 604800
  ),
  'session' => array(
    'session_name' => 'user',
    'token_name' => 'token'
  )
);

/** 4.) Include sanitize functions to secure inputs. */
require_once (getcwd() . '/core/Controller.php');

/** 5.) Include sanitize functions to secure inputs. */
require_once (getcwd() . '/core/View.php');

/** Include sanitize functions to secure inputs. */
require_once (getcwd() . '/model/bulletproof.php');

/** 6.) Automatic class loader. */
spl_autoload_register(function($class) {
  require_once (getcwd() . '/model/'  . $class . '.php');
});

/** 7.) Checks for saved cookie, and logs user in automatically. */
if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))) {

  // Get the users saved cookie value.
  $hash = Cookie::get(Config::get('remember/cookie_name'));

  // Check if that cookie is expired or exists.
  $hash_check = DB::getInstance()->get('users_session', array('session_hash', '=', $hash));

  // If cookie is valid, log the user in automatically.
  if($hash_check->count()) {
    $user = new User($hash_check->results()[0]->user_id);
    $user->login();
  }
}

/**
 * 8.) Used to escape strings and sql queries.
 * @param  string $string - The string to be escaped.
 * @return string         - The escaped string.
 */
function escape($string) {
  return htmlentities($string, ENT_QUOTES, 'UTF-8');
}
?>
