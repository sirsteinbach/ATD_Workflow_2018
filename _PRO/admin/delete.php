<?php require_once('../connections/conn_Clients.php'); ?> <?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if ((isset($_GET['DBID'])) && ($_GET['DBID'] != "")) {
  $deleteSQL = sprintf("DELETE FROM ATD WHERE DBID=%s",
                       GetSQLValueString($_GET['DBID'], "int"));

  mysql_select_db($database_conn_Clients, $conn_Clients);
  $Result1 = mysql_query($deleteSQL, $conn_Clients) or die(mysql_error());

 
}

$deleteGoTo = "/admin/master.php";
//if (isset($_SERVER['QUERY_STRING'])) {$deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";$deleteGoTo .= $_SERVER['QUERY_STRING'];}
header(sprintf("Location: %s", $deleteGoTo));
?>