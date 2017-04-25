<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Global variable of all related data for a user session.
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

// Allows use to autoload classes only when an instance of that class is used.
spl_autoload_register(function($class) {
  require_once('classes/' . $class . '.php');
});

require_once 'functions/sanitize.php';
?>
