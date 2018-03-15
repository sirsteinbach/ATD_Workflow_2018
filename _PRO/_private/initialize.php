<?php
  
  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_ROOT", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . "/public");
  define("SHARED_PATH", PRIVATE_PATH . "/shared");
  
  // Assign time root URL to a PHP constants
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  define("WWW_ROOT" . '');
  
  require_once("functions.php");
  require_once("database.php");
  
  $db = db_connect();
  
?>