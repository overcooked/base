<?php
/**
 * The init.php was created to initialize every other file
 * with useful imports and data to support code re-use.
 * @author Team Point.
 *
 *   - Supported Intialization Features -
 *   1.) PHP Session starting.
 *   2.) PHP Error Displaying Enabled.
 *   3.) GLOBAL Config Information. (DB info, Global Variable Names)
 *   4.) Sanitization Functions Import.
 *   5.) Autoloader To Import Classes.
 *   6.) Login Cookie Checker With Auto Login.
 *
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
    'db' => 'Leftover'
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
require_once 'functions/sanitize.php';

/** 5.) Automatic class loader. */
spl_autoload_register(function($class) {
  require_once('classes/' . $class . '.php');
});

/** 6.) Checks for saved cookie, and logs user in automatically. */
if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))) {

  // Get the users saved cookie value.
  $hash = Cookie::get(Config::get('remember/cookie_name'));

  // Check if that cookie is expired or exists.
  $hash_check = DB::getInstance()->get('users_session', array('hash', '=', $hash));

  // If cookie is valid, log the user in automatically.
  if($hash_check->count()) {
    $user = new User($hash_check->results()[0]->user_id);
    $user->login();
  }
}
?>
