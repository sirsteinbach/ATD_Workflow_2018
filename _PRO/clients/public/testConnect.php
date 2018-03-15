<?php 
// This demonstrates the 5 fundamental steps of DB interaction using php

// Credentials
$dbhost = "localhost";
$dbuser = "sirsteinbach";
$dbpass = "stein7722";
$dbname = "admin";

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// 2. Perform database query

// 3. Use returned data (if any)

// 4. Release returned database

// 5. Close database connection
mysqli_close($connection);
?>