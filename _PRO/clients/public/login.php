<?php
session_set_cookie_params(0,'/','.abouttheday.com');
session_start();
require('../_php/referer.php');
$thisPage='login';$thisMenu='clients';
$_SESSION['EyesOn']['Page']=$thisPage;
$_SESSION['EyesOn']['Menu']='';
$_SESSION['EyesOn']['Sub']='';
$_SESSION['EyesOn']['Set']='';
$_SESSION['Viewed'][$thisPage]=$thisPage;
$visited=implode(',',array_unique($_SESSION['Viewed']));
setcookie('Visited',$visited,$expire,'/',$domain);
require('../_php/checkpoints.php');
?> <?php
require_once('../connections/conn_Clients.php');
?> <?php
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
?> <?php
$loginFormAction=$_SERVER['PHP_SELF'];
if(isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl']=$_GET['accesscheck'];
}

if(isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization='';
  $MM_redirectLoginSuccess='master.php';
  $MM_redirectLoginFailed='login.php?Status=Failed';
  $MM_redirecttoReferrer=false;
  mysql_select_db($database_conn_Clients, $conn_Clients);
  
  //Remember me feature
  if($_POST['cb_remember']){
	  setcookie('remember_me',$loginUsername,$expire,'/',$domain);
	  setcookie('password',$password,$expire,'/',$domain);	  
	  }
	  elseif(!isset($_POST['cb_remember'])){
		if(isset($_COOKIE['remember_me'])){
			$delete=time()-100;
			setcookie('remember_me','gone',$delete,'/',$domain);
			setcookie('password','gone',$delete,'/',$domain);
		}
  }
  //END Remember Me
  
  $LoginRS__query=sprintf("SELECT DBID, rsUsername, rsPassword FROM ATD WHERE rsUsername=%s AND rsPassword=%s",
    GetSQLValueString($loginUsername, "int"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $conn_Clients) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  $pullRecordSet=mysql_fetch_assoc($LoginRS);//DW-Added Row
  
  if($loginFoundUser){
	  $loginStrGroup='';
	  //if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
	  $_SESSION['MM_Username']=$loginUsername;
	  $_SESSION['MM_UserGroup']=$loginStrGroup;
	  
	  if(isset($_SESSION['PrevUrl'])&&false){$MM_redirectLoginSuccess=$_SESSION['PrevUrl'];}
	  $_SESSION['id']=$pullRecordSet['DBID'];//USED TO PASS USER ATHENTICATION ON NEXT PAGE
	  
	  header("Location: ". $MM_redirectLoginSuccess);
  }
  else{header("Location: ".$MM_redirectLoginFailed);}
}
?> <?php
$status=isset($_GET['Status']) ? htmlspecialchars($_GET['Status']) : '';
if($status=='Failed'){
	$status_i='fa-exclamation-triangle';
	$status_c='c_Red';
	$status_bg='bg_Red';
	$status_m='Login Failed - Try Again';
}
elseif($status=='Logout'){
	$status_i='fa-sign-out';
	$status_c='c_DkGreen';
	$status_bg='bg_DkGreen';
	$status_m='Logout Success';
}
elseif($status=='na'){
	$status_i='fa-exclamation-triangle';
	$status_c='c_DkOrange';
	$status_bg='bg_DkOrange';
	$status_m='Access Denied - Login Please';
}
else{
	$status_i='fa-sign-in';
	$status_c='c_Blue';
	$status_bg='bg_Blue';
	$status_m='Login To Your Account';
}?> <!DOCTYPE html><html lang="en" xml:lang="en" class="no-js"><head><meta charset="utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="theme-color" content="#22659C"><meta name="author" content="Stephen Steinbach"><meta name="webBuild" content="Foundation6.2.4"> <? include_once($_SERVER['DOCUMENT_ROOT'].'/_php/googleAnalytics.php');?> <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script><link rel="stylesheet" href="/_css/F6.2.4/foundation.min.css"><link rel="stylesheet" href="/_css/F6.2.4/atd.min.css"><title>Admin Login</title><link rel="stylesheet" href="/_css/myCustom/inputs.min.css"></head><body><div class="column row show-for-large space1em"></div> <?php require('../_php/navMain.php'); ?> <div class="row BgMain"><div class="column row space4em"></div><div class="column show-for-large row space4em"></div></div><div class="row BgMain"><div class="small-11 small-centered medium-8 medium-centered large-6 large-centered columns"><section><div class="secHead <? echo $status_bg;?>"><div class="iLine <? echo $status_c;?>"><span class="fa-stack ilinePOS <? echo $status_c;?>"><i class="fa fa-square fa-stack-2x"></i><i class="fa <? echo $status_i;?> fa-stack-1x fa-inverse"></i></span><h1 class="c_333"><? echo $status_m;?></h1></div></div><form action="<? echo $loginFormAction;?>" name="loginForm" id="loginForm" method="POST" data-abide novalidate><div class="column row space1em"></div><div class="row"><div class="small-11 small-centered columns"><div data-abide-error class="alert callout small" style="display:none;padding-left:1em;"><span class="fa-stack ilinePOS c_Red"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-exclamation-circle fa-stack-1x fa-inverse"></i></span><span>There are errors in your entry</span></div><div class="input-group"><span class="input-group-addon"><i id="iUsername" class="fa fa-user fa-fw"></i></span> <input type="text" id="username" name="username" value="<? if(isset($_COOKIE['remember_me'])){echo ($_COOKIE['remember_me']);} ?>" placeholder="Accout Username" required pattern="[a-zA-Z\s.']+.{2,}"> <span class="input-group-error"><span class="input-group-cell"></span> <span class="input-group-cell"><small class="form-error">The account username is required</small></span></span></div><div class="input-group"><span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span> <input type="password" id="password" name="password" value="<? if(isset($_COOKIE['password'])){echo ($_COOKIE['password']);} ?>" placeholder="Accout Password" required pattern="[a-zA-Z0-9\s.']+.{8,}"><div class="input-group-addon" style="white-space:nowrap;padding:0 1em;"><input type="checkbox" name="cb_remember" id="cb_remember" <?php if(isset($_COOKIE['remember_me'])){echo 'checked="checked"';}else{echo '';} ?>><label for="cb_remember">Remember</label></div><span class="input-group-error"><span class="input-group-cell"></span> <span class="input-group-cell"><small class="form-error">The assigned password is required</small></span></span></div><div class="column row space1em"></div><div class="row"><div class="small-12 text-right columns"><button class="button success" type="submit" value="Submit">Submit</button> <button class="button warning" type="reset" value="Reset">Reset</button></div></div><div class="row Bglite"><div class="column row space1em"></div></div></div></div></form></section></div></div><div class="row BgMain"><div class="column row space4em"></div><div class="column show-for-large row space4em"></div></div> <?php require("../_php/footer.php");?> <div class="column row show-for-large space2em"></div><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="../_js/F6/Zurbed.min.js"></script><script>$(document).foundation();</script></body></html>