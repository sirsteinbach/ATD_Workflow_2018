<?php
session_set_cookie_params(0,"/",".abouttheday.com");
session_start();
require("../_php/referer.php");
$thisPage="Password";
?>

<!DOCTYPE html>
<html lang="en" xml:lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#22659C">
    <meta name="author" content="Stephen Steinbach">
    <meta name="webBuild" content="Foundation6.2.4">
    <? include_once($_SERVER['DOCUMENT_ROOT']."/_php/googleAnalytics.php");?>  
    <title>Password</title>
    <link rel="stylesheet" href="../_css/F6/Zurbed.css">      
  </head>
  
<body>
    
<script language="JavaScript">
<!--hide
var password;
var pass1="starbucks";

password=prompt("Please enter your password to view this page!"," ");
if (password==pass1){window.location="/gallery/boudoir.php";} else {alert("That possword is incorrect. Please contact us to request access.");window.history.back();}
//-->
</script>

</body>
</html>