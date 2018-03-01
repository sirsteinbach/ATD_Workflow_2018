<?php session_start(); ?>
<?php date_default_timezone_set('America/Los_Angeles'); ?>
<?php //Declare Variables
$userId = $_SESSION['id'];
$firstMtg='';
$PVname='';
$alaVid1='';
$alaVid2='';
$alaVid3='';
$alaVid4='';
?>
<?php require_once('../connections/conn_Clients.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);

  $logoutGoTo = "login.php?Status=Logout";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) {
  // For security, start by assuming the visitor is NOT authorized.
  $isValid = False;

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username.
  // Therefore, we know that a user is NOT logged in if that Session variable is blank.
  if (!empty($UserName)) {
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login.
    // Parse the strings into arrays.
    $arrUsers = Explode(",", $strUsers);
    $arrGroups = Explode(",", $strGroups);
    if (in_array($UserName, $arrUsers)) {
      $isValid = true;
    }
    // Or, you may restrict access to only certain users based on their username.
    if (in_array($UserGroup, $arrGroups)) {
      $isValid = true;
    }
    if (($strUsers == "") && true) {
      $isValid = true;
    }
  }
  return $isValid;
}

$MM_restrictGoTo = "login.php?Status=na";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0)
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo);
  exit;
}
?>
<?php
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST['MM_update'])) && ($_POST['MM_update'] == 'frmClientData')) {
  $updateSQL = sprintf("UPDATE ATD SET FirstName1=%s, LastName1=%s, FirstName2=%s, LastName2=%s, rsAddress=%s, rsCity=%s, rsState=%s, rsZipcode=%s, rsCountry=%s, rsPhone1=%s, rsPhone2=%s, rsEmail1=%s, rsEmail2=%s, NoteForClient=%s, NoteForAdmin=%s, PrepTime1=%s, PrepName1=%s, PrepAddr1=%s, PrepWeb1=%s, PrepSame=%s, PrepTime2=%s, PrepName2=%s, PrepAddr2=%s, PrepWeb2=%s, FirstMtg=%s, CeremonyTime=%s, CeremonyName=%s, CeremonyAddr=%s, CeremonyWeb=%s, RecptTime=%s, RecptName=%s, RecptAddr=%s, RecptWeb=%s, DIchoice=%s, ESchoice=%s, VFchoice=%s, PVchoice=%s, PVsong=%s, PVcolors=%s, MSchoice=%s, CRchoice=%s, CRsong=%s, CDchoice=%s, AccntStatus=%s, LastUpdate=%s WHERE DBID=%s",
                       GetSQLValueString($_POST['FirstName1'], "text"),
                       GetSQLValueString($_POST['LastName1'], "text"),
                       GetSQLValueString($_POST['FirstName2'], "text"),
                       GetSQLValueString($_POST['LastName2'], "text"),
                       GetSQLValueString($_POST['rsAddress'], "text"),
                       GetSQLValueString($_POST['rsCity'], "text"),
                       GetSQLValueString($_POST['rsState'], "text"),
                       GetSQLValueString($_POST['rsZipcode'], "text"),
                       GetSQLValueString($_POST['rsCountry'], "text"),
                       GetSQLValueString($_POST['rsPhone1'], "text"),
                       GetSQLValueString($_POST['rsPhone2'], "text"),
                       GetSQLValueString($_POST['rsEmail1'], "text"),
                       GetSQLValueString($_POST['rsEmail2'], "text"),
					   GetSQLValueString($_POST['NoteForClient'], "text"),
					   GetSQLValueString($_POST['NoteForAdmin'], "text"),
                       GetSQLValueString($_POST['PrepTime1'], "text"),
                       GetSQLValueString($_POST['PrepName1'], "text"),
                       GetSQLValueString($_POST['PrepAddr1'], "text"),
                       GetSQLValueString($_POST['PrepWeb1'], "text"),
                       GetSQLValueString(isset($_POST['PrepSame']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['PrepTime2'], "text"),
                       GetSQLValueString($_POST['PrepName2'], "text"),
                       GetSQLValueString($_POST['PrepAddr2'], "text"),
                       GetSQLValueString($_POST['PrepWeb2'], "text"),
                       GetSQLValueString($_POST['FirstMtg'], "text"),
                       GetSQLValueString($_POST['CeremonyTime'], "text"),
                       GetSQLValueString($_POST['CeremonyName'], "text"),
                       GetSQLValueString($_POST['CeremonyAddr'], "text"),
                       GetSQLValueString($_POST['CeremonyWeb'], "text"),
                       GetSQLValueString($_POST['RecptTime'], "text"),
                       GetSQLValueString($_POST['RecptName'], "text"),
                       GetSQLValueString($_POST['RecptAddr'], "text"),
                       GetSQLValueString($_POST['RecptWeb'], "text"),
                       GetSQLValueString($_POST['DIchoice'], "text"),
                       GetSQLValueString($_POST['ESchoice'], "text"),
                       GetSQLValueString($_POST['VFchoice'], "text"),
                       GetSQLValueString($_POST['PVchoice'], "text"),
                       GetSQLValueString($_POST['PVsong'], "text"),
                       GetSQLValueString($_POST['PVcolors'], "text"),
                       GetSQLValueString($_POST['MSchoice'], "text"),
                       GetSQLValueString($_POST['CRchoice'], "text"),
					   GetSQLValueString($_POST['CRsong'], "text"),
					   GetSQLValueString($_POST['CDchoice'], "text"),
                       GetSQLValueString($_POST['AccntStatus'], "text"),
                       GetSQLValueString($_POST['LastUpdate'], "date"),
                       GetSQLValueString($_POST['DBID'], "int"));

  mysql_select_db($database_conn_Clients, $conn_Clients);
  $Result1 = mysql_query($updateSQL, $conn_Clients) or die(mysql_error());

  $updateGoTo = "update.php";
	//Create Success Email
	$headers = "From: webmaster@abouttheday.com";
	$message = "The \"".$_POST['LastName1']."/".$_POST['LastName2']."\" account has been updated.\r\n".date('h:ia F j, Y', strtotime('-1 hours'))." (PST)\n";
	//Contact Info
	if($_POST['FirstName1']!=$_POST['dbFirstName1']){
		$message .= "FirstName1 was updated to: ".$_POST['FirstName1']."\n";}
	if($_POST['LastName1']!=$_POST['dbLastName1']){
		$message .= "LastName1 was updated to: ".$_POST['LastName1']."\n";}
	if($_POST['FirstName2']!=$_POST['dbFirstName2']){
		$message .= "FirstName2 was updated to: ".$_POST['FirstName2']."\n";}
	if($_POST['LastName2']!=$_POST['dbLastName2']){
		$message .= "LastName2 was updated to: ".$_POST['LastName2']."\n";}
	if($_POST['rsAddress']!=$_POST['dbAddress']){
		$message .= "Address was updated to: ".$_POST['rsAddress']."\n";}
	if($_POST['rsCity']!=$_POST['dbCity']){
		$message .= "City was updated to: ".$_POST['rsCity']."\n";}
	if($_POST['rsState']!=$_POST['dbState']){
		$message .= "State was updated to: ".$_POST['rsState']."\n";}
	if($_POST['rsZipcode']!=$_POST['dbZipcode']){
		$message .= "Zipcode was updated to: ".$_POST['rsZipcode']."\n";}
	if($_POST['rsCountry']!=$_POST['dbCountry']){
		$message .= "Country was updated to: ".$_POST['rsCountry']."\n";}
	if($_POST['rsPhone1']!=$_POST['dbPhone1']){
		$message .= "Phone1 was updated to: ".$_POST['rsPhone1']."\n";}
	if($_POST['rsPhone2']!=$_POST['dbPhone2']){
		$message .= "Phone2 was updated to: ".$_POST['rsPhone2']."\n";}
	if($_POST['rsEmail1']!=$_POST['dbEmail1']){
		$message .= "Email was updated to: ".$_POST['rsEmail1']."\n";}
	if($_POST['rsEmail2']!=$_POST['dbEmail2']){
		$message .= "Email2 was updated to: ".$_POST['rsEmail2']."\n";}
	//Schedule Info
	if($_POST['FirstMtg']!=$_POST['dbFirstMtg']){
		$message .= "FirstMtg was updated to: ".$_POST['FirstMtg']."\n";}
	if($_POST['PrepTime1']!=$_POST['dbPrepTime1']){
		$message .= "PrepTime1 was updated to: ".$_POST['PrepTime1']."\n";}
	if($_POST['PrepName1']!=$_POST['dbPrepName1']){
		$message .= "PrepName1 was updated to: ".$_POST['PrepName1']."\n";}
	if($_POST['PrepAddr1']!=$_POST['dbPrepAddr1']){
		$message .= "PrepAddr1 was updated to: ".$_POST['PrepAddr1']."\n";}
	if($_POST['PrepWeb1']!=$_POST['dbPrepWeb1']){
		$message .= "PrepWeb1 was updated to: ".$_POST['PrepWeb1']."\n";}
	if(!empty($_POST['PrepSame'])){$prepSame='1';}else{$prepSame='0';}
	if(!empty($_POST['dbPrepSame'])){$dbPrepSame='1';}else{$dbPrepSame='0';}
	if($prepSame=='1' && ($prepSame!=$dbPrepSame)){
		$message .= "PrepSame was changed to Yes.";}
	elseif($prepSame=='0' && ($prepSame!=$dbPrepSame)){
		$message .= "PrepSame was changed to No.";}
	if($_POST['PrepTime2']!=$_POST['dbPrepTime2']){
		$message .= "PrepTime2 was updated to: ".$_POST['PrepTime2']."\n";}
	if($_POST['PrepName2']!=$_POST['dbPrepName2']){
		$message .= "PrepName2 was updated to: ".$_POST['PrepName2']."\n";}
	if($_POST['PrepAddr2']!=$_POST['dbPrepAddr2']){
		$message .= "PrepAddr2 was updated to: ".$_POST['PrepAddr2']."\n";}
	if($_POST['PrepWeb2']!=$_POST['dbPrepWeb2']){
		$message .= "PrepWeb2 was updated to: ".$_POST['PrepWeb2']."\n";}
	if($_POST['CeremonyTime']!=$_POST['dbCeremonyTime']){
		$message .= "CeremonyTime was updated to: ".$_POST['CeremonyTime']."\n";}
	if($_POST['CeremonyName']!=$_POST['dbCeremonyName']){
		$message .= "CeremonyName was updated to: ".$_POST['CeremonyName']."\n";}
	if($_POST['CeremonyAddr']!=$_POST['dbCeremonyAddr']){
		$message .= "CeremonyAddr was updated to: ".$_POST['CeremonyAddr']."\n";}
	if($_POST['CeremonyWeb']!=$_POST['dbCeremonyWeb']){
		$message .= "CeremonyWeb was updated to: ".$_POST['CeremonyWeb']."\n";}
	if($_POST['ReceptTime']!=$_POST['dbReceptTime']){
		$message .= "ReceptTime was updated to: ".$_POST['ReceptTime']."\n";}
	if($_POST['ReceptName']!=$_POST['dbReceptName']){
		$message .= "CeremonyName was updated to: ".$_POST['ReceptName']."\n";}
	if($_POST['ReceptAddr']!=$_POST['dbReceptAddr']){
		$message .= "CeremonyAddr was updated to: ".$_POST['ReceptAddr']."\n";}
	if($_POST['ReceptWeb']!=$_POST['dbReceptWeb']){
		$message .= "ReceptWeb was updated to: ".$_POST['ReceptWeb']."\n";}
	//Options
	if($_POST['DIchoice']!=$_POST['dbDIchoice']){
		$message .= "DIchoice was updated to: ".$_POST['DIchoice']."\n";}
	if($_POST['ESchoice']!=$_POST['dbESchoice']){
		$message .= "ESchoice was updated to: ".$_POST['ESchoice']."\n";}
	if($_POST['VFchoice']!=$_POST['dbVFchoice']){
		$message .= "VFchoice was updated to: ".$_POST['VFchoice']."\n";}
	if($_POST['PVchoice']!=$_POST['dbPVchoice']){
		$message .= "PVchoice was updated to: ".$_POST['PVchoice']."\n";}
	if($_POST['PVsong']!=$_POST['dbPVsong']){
		$message .= "PVsong was updated to: ".$_POST['PVsong']."\n";}
	if($_POST['MSchoice']!=$_POST['dbMSchoice']){
		$message .= "MSchoice was updated to: ".$_POST['MSchoice']."\n";}
	if($_POST['CRchoice']!=$_POST['dbCRchoice']){
		$message .= "CRchoice was updated to: ".$_POST['CRchoice']."\n";}
	if($_POST['CRsong']!=$_POST['dbCRsong']){
		$message .= "CRsong was updated to: ".$_POST['CRsong']."\n";}
	if($_POST['CDchoice']!=$_POST['dbCDchoice']){
		$message .= "CDchoice was updated to: ".$_POST['CDchoice']."\n";}
	if($_POST['NoteForClient']!=$_POST['dbNFC']){
		$message .= "Client Note was viewed and deleted.";}
	//Send Success Message
	mail('abouttheday@gmail.com', 'Client Update :: Success', $message, $headers);
	//DW-End non-DW code
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_conn_Clients, $conn_Clients);
$query_rsUpdate = "SELECT * FROM ATD WHERE DBID = ' ".$userId." ' ";
$rsUpdate = mysql_query($query_rsUpdate, $conn_Clients) or die(mysql_error());
$row_rsUpdate = mysql_fetch_assoc($rsUpdate);
$totalRows_rsUpdate = mysql_num_rows($rsUpdate);
?>

<?php // Determine Region
if ($row_rsUpdate['RegionID']=='NW'){$Region='Northwest';}
if ($row_rsUpdate['RegionID']=='SW'){$Region='Southwest';}
if ($row_rsUpdate['RegionID']=='MW'){$Region='Midwest';}
if ($row_rsUpdate['RegionID']=='EC'){$Region='Eastcoast';}//OLD
if ($row_rsUpdate['RegionID']=='NE'){$Region='Northeast';}
if ($row_rsUpdate['RegionID']=='SE'){$Region='Southeast';}
if ($row_rsUpdate['RegionID']=='HI'){$Region='Hawaii';}
if ($row_rsUpdate['RegionID']=='AK'){$Region='Alaska';}
if ($row_rsUpdate['RegionID']=='MX'){$Region='Mexico';}
if ($row_rsUpdate['RegionID']=='CN'){$Region='Canada';}//OLD
if ($row_rsUpdate['RegionID']=='CW'){$Region='Western Canada';}
if ($row_rsUpdate['RegionID']=='CE'){$Region='Eastern Canada';}
if ($row_rsUpdate['RegionID']=='EU'){$Region='Europe';}
if ($row_rsUpdate['RegionID']=='AS'){$Region='Asia';}
if ($row_rsUpdate['RegionID']=='AF'){$Region='Africa';}
if ($row_rsUpdate['RegionID']=='AU'){$Region='Australia';}
if ($row_rsUpdate['RegionID']=='SA'){$Region='South America';}
if ($row_rsUpdate['RegionID']=='RU'){$Region='Russia';}

// Determine Name Type
if($row_rsUpdate['EventID']=='Wedding'){$NameType1='Groom';$NameType2='Bride';}
if($row_rsUpdate['EventID']=='Gay'){$NameType1='Partner1';$NameType2='Partner2';}
if($row_rsUpdate['EventID']=='Other'){$NameType1='Contact1';$NameType2='Contact2';}
// Determine Level
if ($row_rsUpdate['PackageID']=='P'){$pkLevel='Platinum';}
if ($row_rsUpdate['PackageID']=='G'){$pkLevel='Gold';}
if ($row_rsUpdate['PackageID']=='S'){$pkLevel='Silver';}
if ($row_rsUpdate['PackageID']=='B'){$pkLevel='Bronze';}
// Determine Format
if ($row_rsUpdate['FormatID']=='P'){$Format='Photo';}
if ($row_rsUpdate['FormatID']=='V'){$Format='Video';}
if ($row_rsUpdate['FormatID']=='B'){$Format='Both';}
// Determine Other Variables
if($row_rsUpdate['PVoption']=='PhotoMontage'){$PVname='Photo Montage';}
if($row_rsUpdate['PVoption']=='LoveStory'){$PVname='Love Story';}
?>

<?php
// Contract Exists Data
$contract="../_paper/".substr($row_rsUpdate['EventDate'], 0, 4)."/".$row_rsUpdate['LastName1']."/".$row_rsUpdate['RegionID']."".$row_rsUpdate['PackageID']."".$row_rsUpdate['FormatID'].".pdf";
$contractName=$row_rsUpdate['RegionID']."".$row_rsUpdate['PackageID']."".$row_rsUpdate['FormatID'];
$contractBtn="<a href=\"".substr($contract,2)."\" target=\"_blank\" title=\"Link to ".$contractName."\"><i class=\"fa fa-file-text\"></i></a>";
// Scan Exists Data
$scan="../_paper/".substr($row_rsUpdate['EventDate'], 0, 4)."/".$row_rsUpdate['LastName1']."/".str_replace("-","",substr($row_rsUpdate['EventDate'], 0, 10)).".pdf";
$contractNA="<i class=\"fa fa-ban\"></i>";
$scanBtn="<a href=\"".substr($scan,2)."\" target=\"_blank\"><i class=\"fa fa-print\"></i></a>";
//Scan NA
$scanNA="<i class=\"fa fa-ban alert\" title=\"Not Available\"></i>";
//--?>

<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<!--Hosted-->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<!-- Font-Awesome-->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- Foundation 5 -->
<link rel="stylesheet" href="../_css/F5/default.css">
<!--Local-->
<script src="/_js/myCustom/getTotal.js"></script>
<script src='/_js/myCustom/maskInput.min.js'></script>
<script src='/_js/myCustom/accountToggles.js'></script>
<link href="../_css/myCustom/panels.css" rel="stylesheet" type="text/css">
<!--link href="../_css/myCustom/font_buttons.css" rel="stylesheet" type="text/css"-->
<title><?php echo $row_rsUpdate['LastName1']; ?> :: <?php echo date('M d, Y', strtotime($row_rsUpdate['EventDate'])); ?></title>
<style type="text/css">
.fa-center {padding-top:10px;}
/*The accordion is closed*/
.accordion-icon:before {
	font-family: fontawesome;
    content: "\f0d7";
}
/*The accordion is open*/
.active .accordion-icon:before {
    content: "\f0d8";
	font-family: fontawesome;
}
.phphide {
    display:none;
}
.phpshow {
    display:block;
}
.complete {
	color:#43AC6A;
}
.incomplete {
	color:#F04124;
}
body {
	background:#272727 url('https://abouttheday.com/_img/bg/bg-body.gif') repeat center top;
	margin:0px;
	height:auto;
}
.panelMargin {margin:0px 8px 0px;}
.panelSurround {padding:1em 0px 0px;background-color:#444;}
.clientMenu {background-color:#222;}
#PP-alert{height:auto;line-height:1.3em;text-align:left;padding:8px;margin-top:-16px;background:#a4c9f5;border-radius:3px;color:#111;border:2px solid #008CBA;}
</style>
</head>

<body>
<form method="POST" action="<?php echo $editFormAction; ?>" name="frmClientData" data-abide>

<div class="row">
  <div class="small-12 columns hide-for-small">
  	&nbsp;
  </div>
</div>

<div class="row">
  <div class="large-8 large-centered medium-10 medium-centered columns">
    <div class="row"><!--CONTAINER-->
      <div class="medium-4 columns clientMenu">
        <img src="/_img/universal/trans1x1.gif" style="height:88px;width:4px;"><img src="/_img/logo/logo_thorn.png" width="161" height="68">
      </div>
      <div class="medium-8 columns text-right" style="background-color:#222;">
        <?php if(file_exists($contract)){ ?><a href="<?php echo $contract; ?>" class="button tiny info radius" title="Download <?php echo $row_rsUpdate['LastName1']."/".$contractName; ?> Contract" target="_blank"><strong>CONTRACT </strong><i class="fa fa-cloud-download fa-lg hide-for-small"></i></a><?php } ?> <button type="submit" class="button tiny success radius"><strong>UPDATE </strong><i class="fa fa-pencil-square-o fa-lg hide-for-small"></i></button> <a class="button tiny alert radius" href="<?php echo $logoutAction ?>"><strong>LOGOUT </strong><i class="fa fa-sign-out fa-lg hide-for-small"></i></a><img src="/_img/universal/trans1x1.gif" style="height:88px;width:4px;">
      </div>
    </div><!--END CONTAINER-->
  </div>
</div>

<div class="row">
  <div class="large-8 large-centered medium-10 medium-centered columns">
  	<!--CONTAINER-->
    <div class="row panelSurround">
      <!--COLUMN 1-->
      <div class="medium-6 columns">
        <!--Contact Info-->
        <div id="ContactInfo" class="row">
          <div class="panel empty radius panelMargin">
            <div class="row">
              <div class="small-12 columns">
                <h5>Contact Details</h5>
              </div>
            </div>
            <!--NAME1-->
            <div class="row collapse">
              <div class="small-5 columns">
              <label for="FirstName1" class="prefix radius"><?php echo $NameType1 ?> First Name:</label>
              </div>
              <div class="small-6 columns">
                <input type="text" value="<?php echo htmlentities($row_rsUpdate['FirstName1'], ENT_COMPAT, 'UTF-8'); ?>" name="FirstName1" id="FirstName1" required pattern="[a-zA-Z\s]+"><small class="error"><?php echo $NameType1 ?> first name is required!</small>
              </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <div class="row collapse">
              <div class="small-5 columns">
              <label for="LastName1" class="prefix radius"><?php echo $NameType1 ?> Last Name:</label>
              </div>
              <div class="small-6 columns">
                <input type="text" value="<?php echo htmlentities($row_rsUpdate['LastName1'], ENT_COMPAT, 'UTF-8'); ?>" name="LastName1" id="LastName1" required pattern="[a-zA-Z\s]+"><small class="error"><?php echo $NameType1 ?> last name is required!</small>
              </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <!--FirstName2-->
            <div class="row collapse">
              <div class="small-5 columns">
              <label for="FirstName2" class="prefix radius"><?php echo $NameType2 ?> First Name:</label>
              </div>
              <div class="small-6 columns">
                <input type="text" value="<?php echo htmlentities($row_rsUpdate['FirstName2'], ENT_COMPAT, 'UTF-8'); ?>" name="FirstName2" id="FirstName2" required pattern="[a-zA-Z\s]+"><small class="error"><?php echo $NameType2 ?> first name is required!</small>
              </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <!--LastName2-->
            <div class="row collapse">
              <div class="small-5 columns">
              <label for="LastName2" class="prefix radius"><?php echo $NameType2 ?> Last Name:</label>
              </div>
              <div class="small-6 columns">
                <input type="text" value="<?php echo htmlentities($row_rsUpdate['LastName2'], ENT_COMPAT, 'UTF-8'); ?>" name="LastName2" id="LastName2" required pattern="[a-zA-Z\s]+"><small class="error"><?php echo $NameType2 ?> last name is required!</small>
              </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <!--rsAddress-->
            <div class="row">
              <div class="small-12 columns">
                <label>Mailing Address:
                <input type="text" value="<?php echo htmlentities($row_rsUpdate['rsAddress'], ENT_COMPAT, 'UTF-8'); ?>" name="rsAddress" required></label><small class="error">City is required!</small>
              </div>
            </div>
            <!--rsCity/rsState/rsZip-->
            <div class="row">
              <div class="small-7 columns">
                <input type="text" value="<?php echo htmlentities($row_rsUpdate['rsCity'], ENT_COMPAT, 'UTF-8'); ?>" name="rsCity" placeholder="City" required pattern="[a-zA-Z\s]+">
                <small class="error">City is required!</small>
              </div>
              <div class="small-2 columns">
                <input type="text" value="<?php echo htmlentities($row_rsUpdate['rsState'], ENT_COMPAT, 'UTF-8'); ?>" name="rsState" placeholder="WA" required pattern="[A-Za-z]{2}">
                <small class="error">2 letters</small>
              </div>
              <div class="small-3 columns">
                <input type="text" value="<?php echo htmlentities($row_rsUpdate['rsZipcode'], ENT_COMPAT, 'UTF-8'); ?>" name="rsZipcode" placeholder="Zipcode" required pattern="[a-zA-Z0-9\s]+">
                <small class="error">Zipcode is required!</small>
              </div>
            </div>
            <!--rsPhone1-->
            <div class="row collapse">
              <div class="small-5 columns">
                <label for="rsPhone1" class="prefix radius">Phone: </label>
              </div>
              <div class="small-6 columns">
                <input type="text" value="<?php echo htmlentities($row_rsUpdate['rsPhone1'], ENT_COMPAT, 'UTF-8'); ?>" name="rsPhone1" id="phone-1" required pattern="^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}$"><small class="error">Phone is required!</small>
              </div>
              <div class="small-1 columns">
                <span class="postfix radius"><!--a href="#/" id="addPhone"><i id="iPhnNum" class="fa fa-plus-square"></i></a--><input type="button" id="addPhone" value="+" /></span>
              </div>
            </div>
            <!--rsPhone2-->
            <div class="row collapse toggleAddPhone">
              <div class="small-5 columns">
                <label for="rsPhone2" class="prefix radius">Phone 2:</label>
              </div>
              <div class="small-6 columns">
                <input type="text" value="<?php echo htmlentities($row_rsUpdate['rsPhone2'], ENT_COMPAT, 'UTF-8'); ?>" name="rsPhone2" id="phone-2" onfocus="this.select()" onmouseup="return false" /><small class="error">Please re-enter!</small>
              </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <!--rsEmail1-->
            <div class="row collapse">
              <div class="small-5 columns">
                <label for="rsEmail1" class="prefix radius">Email:</label>
              </div>
              <div class="small-6 columns">
                <input type="text" value="<?php echo htmlentities($row_rsUpdate['rsEmail1'], ENT_COMPAT, 'UTF-8'); ?>" name="rsEmail1" id="email-1" required><small class="error">Email is required!</small>
              </div>
              <div class="small-1 columns">
                <span class="postfix radius"><!--a href="#/" id="AddEmail"><i id="iEmail" class="fa fa-plus-square"></i></a--><input type="button" id="addEmail" value="+" /></span>
              </div>
            </div>
            <!--rsEmail2-->
            <div class="row collapse toggleAddEmail">
              <div class="small-5 columns">
                <label for="rsEmail2" class="prefix radius">Email 2:</label>
              </div>
              <div class="small-6 columns">
                <input type="text" value="<?php echo htmlentities($row_rsUpdate['rsEmail2'], ENT_COMPAT, 'UTF-8'); ?>" name="rsEmail2" id="email-2"><small class="error">Please re-enter!</small>
              </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
          </div>
        </div>
        <!--PaymentCenter-->
        <div id="PaymentCenter" class="row">
          <div class="panel money radius panelMargin">
            <div class="row">
              <div class="small-12 columns">
                <h5>Payment Center</h5>
              </div>
            </div>
            <!--PackageAmt-->
            <div class="row collapse">
              <div class="small-8 columns">
                <span class="prefix radius">Package Price :</span>
              </div>
              <div class="small-3 columns">
                <input type="text" name="PackageAmt" id="PackageAmt" value="<?php echo $row_rsUpdate['PackageAmt'] ?>" readonly style="cursor:default;">
              </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <!--TaxRate-->
            <div class="row collapse">
              <div class="small-8 columns">
                <span class="prefix radius">Tax Rate:</span>
              </div>
              <div class="small-3 columns">
               <input type="text" name="TaxRate" id="TaxRate" value="<?php echo $row_rsUpdate['TaxRate']?>" readonly style="cursor:default;">
               </div>
              <div class="small-1 columns">
                <span class="postfix radius">%</span>
              </div>
            </div>
            <!--Opt1Value-->
            <input type="hidden" id="Opt1Tax" value="<?php echo $row_rsUpdate['Opt1Tax']?>">
            <div class="row collapse <?php if($row_rsUpdate['Opt1Value']!=''){echo 'phpshow';}else{echo 'phphide';} ?>">
              <div class="small-8 columns">
                <input type="text" name="Opt1Value" value="<?php echo htmlentities($row_rsUpdate['Opt1Value'], ENT_COMPAT, 'UTF-8'); ?>" readonly style="cursor:default;">
                </div>
              <div class="small-3 columns">
                <input type="text" name="Opt1Amt" id="Opt1Amt" value="<?php echo $row_rsUpdate['Opt1Amt']?>" readonly style="cursor:default;">
                </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <!--Opt2Value-->
            <input type="hidden" id="Opt2Tax" value="<?php echo $row_rsUpdate['Opt2Tax']?>">
            <div class="row collapse <?php if($row_rsUpdate['Opt2Value']!=''){echo 'phpshow';}else{echo 'phphide';} ?>">
              <div class="small-8 columns">
                <input type="text" name="Opt2Value" value="<?php echo htmlentities($row_rsUpdate['Opt2Value'], ENT_COMPAT, 'UTF-8'); ?>" readonly style="cursor:default;">
                </div>
              <div class="small-3 columns">
                <input type="text" name="Opt2Amt" id="Opt2Amt" value="<?php echo $row_rsUpdate['Opt2Amt'] ?>" readonly style="cursor:default;">
                </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
                </div>
            </div>
            <!--Opt3Value-->
            <input type="hidden" id="Opt3Tax" value="<?php echo $row_rsUpdate['Opt3Tax']?>">
            <div class="row collapse <?php if($row_rsUpdate['Opt3Value']!=''){echo 'phpshow';}else{echo 'phphide';} ?>">
              <div class="small-8 columns">
                <input type="text" name="Opt3Value" value="<?php echo htmlentities($row_rsUpdate['Opt3Value'], ENT_COMPAT, 'UTF-8'); ?>" readonly>
                </div>
              <div class="small-3 columns">
                <input type="text" name="Opt3Amt" id="Opt3Amt" value="<?php echo $row_rsUpdate['Opt3Amt'] ?>" readonly style="cursor:default;">
                </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
                </div>
            </div>
            <!--DI ADD-->
            <div class="row collapse toggleAddDI <?php if(($row_rsUpdate['DIchoice']!='') && ($row_rsUpdate['DIchoice']!='Download')){echo 'phpshow';}else{echo 'phphide';} ?>">
              <div class="small-8 columns">
                <input type="text" name="DIVal" id="DIVal" value="" readonly style="cursor:default;">
                </div>
              <div class="small-3 columns">
                <input type="text" name="DIAmt" id="DIAmt" value="" readonly style="cursor:default;">
                </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
                </div>
            </div>
            <!--ES ADD-->
            <div class="row collapse toggleAddES <?php if($row_rsUpdate['ESchoice']!=''){echo 'phpshow';}else{echo 'phphide';} ?>">
              <div class="small-8 columns">
                <input type="text" name="ESVal" id="ESVal" value="" readonly style="cursor:default;">
                </div>
              <div class="small-3 columns">
                <input type="text" name="ESAmt" id="ESAmt" value="" readonly style="cursor:default;">
                </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
                </div>
            </div>
            <!--VF ADD-->
            <div class="row collapse toggleAddVF <?php if($row_rsUpdate['VFchoice']!=''){echo 'phpshow';}else{echo 'phphide';} ?>">
              <div class="small-8 columns">
                <input type="text" name="VFVal" id="VFVal" value="" readonly style="cursor:default;">
                </div>
              <div class="small-3 columns">
                <input type="text" name="VFAmt" id="VFAmt" value="" readonly style="cursor:default;">
                </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
                </div>
            </div>
            <!--SubTotal (Not Stored)-->
            <div class="row collapse">
              <div class="small-8 columns">
                <span class="prefix radius">Subtotal :</span>
              </div>
              <div class="small-3 columns">
                <input type="text" name="SubTotal" id="SubTotal" value="" readonly style="cursor:default;">
                </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <!--TaxTotal--(Not Stored)-->
            <div class="row collapse">
              <div class="small-8 columns">
                <span class="prefix radius">Tax :</span>
              </div>
              <div class="small-3 columns">
                <input type="text" name="TaxTotal" id="TaxTotal" value="" readonly style="cursor:default;">
                </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <!--AllTotal--(Not Stored)-->
            <div class="row collapse">
              <div class="small-8 columns">
                <span class="prefix radius">Total :</span>
              </div>
              <div class="small-3 columns">
                <input type="text" name="AllTotal" id="AllTotal" value="" readonly style="cursor:default;">
                </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <!--PaidAmt-->
            <div class="row collapse">
              <div class="small-8 columns">
                <span class="prefix radius">Amount Paid :</span>
              </div>
              <div class="small-3 columns">
                <input type="text" name="PaidAmt" id="PaidAmt" value="<?php echo $row_rsUpdate['PaidAmt'] ?>" readonly style="cursor:default;">
              </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <!--DueAmt (Not Stored)-->
            <div class="row collapse">
              <div class="small-8 columns">
                <span class="prefix radius">Amount Due :</span>
              </div>
              <div class="small-3 columns">
                <input type="text" name="AmtDue" id="AmtDue" value="" readonly style="cursor:default;">
              </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <!--PayPal.Me (Not Stored)-->
            <div class="row collapse toggleMP">
              <div class="small-8 columns">
                <span class="prefix radius">Make Payment :</span>
              </div>
              <div class="small-3 columns">
                <input type="text" name="PPme" id="PPme" value="" placeholder="0.00" onfocus="this.select()" onchange="this.value=FormatCurrency(this.value);doMath();" onmouseup="return false" />
              </div>
              <div class="small-1 columns">
                <span class="postfix radius"><a id="PPmeBtn" class="button postfix disabled" title="Enter amount and click to Paypal" onfocus="return false"><i class="fa fa-paypal"></i></a></span>
              </div>
            </div>
            <!--ADD PP-->
            <div id="PP-alert-Up" class="row collapse toggleAddPP <?php echo 'phpshow';?>">
              <div class="small-11 columns">
                <span id="PP-alert" class="prefix radius">Paypal will add $<strong id="PPfee">0</strong> (as shown) to this amount so we will get the correct amount intended. Do you wish to continue with this new amount?</span>
                </div>
              <div class="small-1 columns">
                <span class="postfix radius"><a id="PPmeBtn2" class="button postfix" title="Process via Paypal" onfocus="return false" style="cursor:pointer;"><i class="fa fa-paypal"></i></a></span>
                </div>
            </div>
            <!--ADD TIP--(Not Stored)-->
            <div class="row collapse toggleAT">
              <div class="small-8 columns">
                <span class="prefix radius">Add A Tip :</span>
              </div>
              <div class="small-3 columns">
                <input type="number" name="addTip" id="addTip" style="background:#fdbaae;" placeholder="0.00" value="" max="" min="1.00" step="0.01" onfocus="this.select()" onBlur="this.value=FormatCurrency(this.value);this.select()" />
              </div>
              <div class="small-1 columns">
                <span class="postfix radius"><a id="addTipBtn" class="button postfix disabled" title="Enter amount and click to Paypal" onfocus="return false"><i class="fa fa-paypal"></i></a></span>
              </div>
            </div>
            <!--PriceNote-->
            <?php if($row_rsUpdate['PriceNote']!=''){ ?>
            <div class="row collapse">
              <div class="small-4 columns">
                <span class="prefix radius">Note:</span>
              </div>
              <div class="small-7 columns">
                <textarea name="PriceNote" readonly><?php echo htmlentities($row_rsUpdate['PriceNote'], ENT_COMPAT, 'UTF-8'); ?></textarea>
              </div>
              <div class="small-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <?php }//End PriceNote ?>
          </div>
        </div>
      </div>
      <!--COLUMN 2-->
      <div class="medium-6 columns">
        <!--ScheduleInfo-->
        <div id="ScheduleInfo" class="row">
          <div class="panel schedule radius panelMargin">
            <div class="row">
              <div class="small-12 columns">
                <h5>Schedule for <?php echo date('M d, Y', strtotime($row_rsUpdate['EventDate'])); ?></h5>
              </div>
            </div>
            <!--FirstMeeting-->
            <div class="row collapse">
              <div class="small-5 columns">
                <span class="prefix radius">1st Meeting:</span>
              </div>
              <div class="small-7 columns">
                <select name="FirstMtg" id="FMchoice" style="cursor:context-menu;">
                  <option value="" <?php if (!(strcmp('', $row_rsUpdate['FirstMtg']))) {echo "selected=\"selected\"";} ?>>-- Choose --</option>
                  <option value="Before" <?php if (!(strcmp('Before', $row_rsUpdate['FirstMtg']))) {echo "selected=\"selected\"";} ?>>Before the Ceremony</option>
                  <option value="During" <?php if (!(strcmp('During', $row_rsUpdate['FirstMtg']))) {echo "selected=\"selected\"";} ?>>During the Ceremony</option>
                  <option value="Unsure" <?php if (!(strcmp('Unsure', $row_rsUpdate['FirstMtg']))) {echo "selected=\"selected\"";} ?>>We're not sure?</option>
                  <?php do { ?>
                  <?php }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0){mysql_data_seek($rsUpdate, 0);
                  $row_rsUpdate = mysql_fetch_assoc($rsUpdate);}
                  ?>
                </select>
              </div>
            </div>
            <!--FM ADD-->
            <div id="FM-alert-Up" class="row collapse toggleAddFM <?php if($row_rsUpdate['FirstMtg']=='Unsure'){echo 'phpshow';}else{echo 'phphide';} ?>">
              <div class="small-11 columns">
                <span id="FM-alert" class="prefix radius">You <em>really</em> need to read this! &nbsp;</span>
                </div>
              <div id="FM-alert-Up" class="small-1 columns">
                <span class="postfix radius"><a href="https://abouttheday.com/blog/couples-first-look/" target="_blank" class="button postfix alert" title="The First Look"><i class="fa fa-external-link"></i></a></span>
                </div>
            </div>
            <dl class="accordion" data-accordion>
              <!--Preps1-->
              <dd class="accordion-navigation">
                <a href="#BPreps">Preparations (<?php echo $NameType2; ?>) <i class="accordion-icon fa fa-caret-up fa-lg radius"></i></a>
                <div id="BPreps" class="content active">
                  <label>Preparations for both parties are at the same location: <input <?php if (!(strcmp($row_rsUpdate['PrepSame'],1))) {echo "checked=\"checked\"";} ?> name="PrepSame" type="checkbox" id="cbPrepSame">
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">Time:</span>
                    </div>
                    <div class="small-9 large-10 columns">
                      <input type="text" name="PrepTime1" id="PrepTime1" value="<?php echo $row_rsUpdate['PrepTime1']; ?>" placeholder="(example) 09:30 am">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">Location:</span>
                    </div>
                    <div class="small-9 large-10 columns">
                      <input type="text" name="PrepName1" value="<?php echo htmlentities($row_rsUpdate['PrepName1'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="(example) Hyatt, Room 566">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">Address:</span>
                    </div>
                    <div class="small-8 large-9 columns">
                      <input type="text" name="PrepAddr1" id="PrepAddr1" value="<?php echo htmlentities($row_rsUpdate['PrepAddr1'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="(example) 450 West St...">
                    </div>
                    <div class="small-1 columns">
                      <span class="postfix radius"><a href="#/" id="p1URL" title="View Map"><i class="fa fa-map-marker p1URL"></i></a></span>
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">http://</span>
                    </div>
                    <div class="small-9 large-10 columns">
                      <input type="text" name="PrepWeb1" value="<?php echo htmlentities($row_rsUpdate['PrepWeb1'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="(example) www.Hyatt.com">
                    </div>
                  </div>
                </div>
              </dd>
              <!--Prep2-->
              <dd class="accordion-navigation togglePrep2">
                <a href="#GPreps">Preparations (<?php echo $NameType1; ?>) <i class="accordion-icon fa fa-caret-down fa-lg"></i></a>
                <div id="GPreps" class="content">
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">Time:</span>
                    </div>
                    <div class="small-9 large-10 columns">
                      <input type="text" name="PrepTime2" id="PrepTime2" value="<?php echo $row_rsUpdate['PrepTime2']; ?>" placeholder="(example) 11:30 am">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">Name:</span>
                    </div>
                    <div class="small-9 large-10 columns">
                      <input type="text" name="PrepName2" value="<?php echo htmlentities($row_rsUpdate['PrepName2'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="(example) Hyatt, Room 222">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">Address:</span>
                    </div>
                    <div class="small-8 large-9 columns">
                      <input type="text" name="PrepAddr2" id="PrepAddr2" value="<?php echo htmlentities($row_rsUpdate['PrepAddr2'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="(example) 450 East Ave...">
                    </div>
                    <div class="small-1 columns">
                      <span class="postfix radius"><a href="#/" id="p2URL" title="View Map"><i class="fa fa-map-marker p2URL"></i></a></span>
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">http://</span>
                    </div>
                    <div class="small-9 large-10 columns">
                      <input type="text" name="PrepWeb2" value="<?php echo htmlentities($row_rsUpdate['PrepWeb2'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="(example) www.Hyatt.com">
                    </div>
                  </div>
                </div>
              </dd>
              <!--Ceremony-->
              <dd class="accordion-navigation">
                <a href="#Ceremony">Ceremony <i class="accordion-icon fa fa-caret-down fa-lg"></i></i></a>
                <div id="Ceremony" class="content">
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">Time:</span>
                    </div>
                    <div class="small-9 large-10 columns">
                      <input type="text" name="CeremonyTime" id="CeremonyTime" value="<?php echo $row_rsUpdate['CeremonyTime']; ?>" placeholder="(example) 03:00 pm">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">Name:</span>
                    </div>
                    <div class="small-9 large-10 columns">
                      <input type="text" name="CeremonyName" value="<?php echo htmlentities($row_rsUpdate['CeremonyName'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="(example) Rose Garden">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">Address:</span>
                    </div>
                    <div class="small-8 large-9 columns">
                      <input type="text" name="CeremonyAddr" id="CeremonyAddr" value="<?php echo htmlentities($row_rsUpdate['CeremonyAddr'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="(example) 750 North Dr...">
                    </div>
                    <div class="small-1 columns">
                      <span class="postfix radius"><a href="#/" id="caURL" title="View Map"><i class="fa fa-map-marker caURL"></i></a></span>
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">http://</span>
                    </div>
                    <div class="small-9 large-10 columns">
                      <input type="text" name="CeremonyWeb" value="<?php echo htmlentities($row_rsUpdate['CeremonyWeb'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="(example) www.RoseGarden.com">
                    </div>
                  </div>
                </div>
              </dd>
              <!--Reception-->
              <dd class="accordion-navigation">
                <a href="#Reception">Reception <i class="accordion-icon fa fa-caret-down fa-lg"></i></a>
                <div id="Reception" class="content">
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">Time:</span>
                    </div>
                    <div class="small-9 large-10 columns">
                      <input type="text" name="RecptTime" id="RecptTime" value="<?php echo $row_rsUpdate['RecptTime']; ?>" placeholder="(example) 07:30 pm">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">Name:</span>
                    </div>
                    <div class="small-9 large-10 columns">
                      <input type="text" name="RecptName" value="<?php echo htmlentities($row_rsUpdate['RecptName'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="(example) West Ballroom">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">Address:</span>
                    </div>
                    <div class="small-8 large-9 columns">
                      <input type="text" name="RecptAddr" id="RecptAddr" value="<?php echo htmlentities($row_rsUpdate['RecptAddr'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="(example) 240 Main Rd...">
                    </div>
                    <div class="small-1 columns">
                      <span class="postfix radius"><a href="#/" id="raURL" title="View Map"><i class="fa fa-map-marker raURL"></i></a></span>
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-3 large-2 columns">
                      <span class="prefix radius">http://</span>
                    </div>
                    <div class="small-9 large-10 columns">
                      <input type="text" name="RecptWeb" value="<?php echo htmlentities($row_rsUpdate['RecptWeb'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="(example) www.Ballroom.com">
                    </div>
                  </div>
                </div>
              </dd>
            </dl>
          </div>
        </div>
        <!--PackageOptions-->
        <div id="PackageOptions" class="row">
          <div class="panel selections radius panelMargin">
            <div class="row">
              <div class="small-12 columns">
                <h5>Package Options:</h5>
              </div>
            </div>
            <!--OnlineGallery-->
            <?php if($row_rsUpdate['OnlineGallery']=='1'){ ?>
            <div class="outline">
              <div class="row collapse">
                <div class="small-1 columns">
                  <span class="prefix radius"><i class="fa fa-<?php if($row_rsUpdate['OGstatus']!='1'){echo 'square-o';}else{echo 'check-square-o';}; ?> fa-lg"></i></span>
                </div>
                <div class="small-10 columns">
                  <span class="postfix">Online Gallery</span>
                  </div>
                <div class="small-1 columns">
                  <span class="postfix radius"><a href="#" data-reveal-id="OGmod" class="button postfix" title="More Information"><?php if($row_rsUpdate['OGstatus']!='1'){echo '<i class="fa fa-info-circle"></i>';}else{echo '<i class="fa fa-info-circle"></i>';} ?></a></span>
                </div>
              </div>
              <div class="row collapse">
                <div class="small-4 small-offset-1 columns">
                  <span class="prefix radius">Gallery #:</span>
                </div>
                <div class="small-5 columns">
                  <input type="text" name="GalleryID" value="<?php echo htmlentities($row_rsUpdate['GalleryID'], ENT_COMPAT, 'UTF-8'); ?>" readonly style="cursor:default;">
                </div>
                <div class="small-1 small-pull-1 columns">
                  <a href="http://photos.abouttheday.com/event/<?php echo htmlentities($row_rsUpdate['GalleryID'], ENT_COMPAT, 'UTF-8'); ?>" target="_blank" class="button postfix success" title="View Gallery #<?php echo $row_rsUpdate['GalleryID']; ?>"><i class="fa fa-external-link"></i></a>
                </div>
                <div class="small-1 small-pull-1 columns">
                  <span class="postfix radius"><?php if($row_rsUpdate['OGstatus']=='1'){ ?><i class="fa fa-lock"></i><?php }?></span>
                </div>
              </div>
              <?php if($row_rsUpdate['OGnote']!=''){ ?>
              <div class="row">
                <div class="small-10 small-offset-1">
                  <textarea readonly><?php echo htmlentities($row_rsUpdate['OGnote'], ENT_COMPAT, 'UTF-8'); ?></textarea>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php } //End OnlineGallery ?>
            <!--DigitalImages-->
            <?php if($row_rsUpdate['DigitalImages']=='1'){ ?>
            <div class="row collapse">
              <div class="small-1 columns">
                <span class="prefix radius"><i class="fa fa-<?php if($row_rsUpdate['DIstatus']!='1'){echo 'square-o';}else{echo 'check-square-o';}; ?> fa-lg"></i></span>
              </div>
              <div class="small-10 columns">
                <span class="postfix">Digital Images:</span>
                </div>
              <div class="small-1 columns">
                <span class="postfix radius"><a href="#" data-reveal-id="DImod" class="button postfix" title="More Information"><?php if($row_rsUpdate['DIstatus']!='1'){echo '<i class="fa fa-info-circle"></i>';}else{echo '<i class="fa fa-info-circle"></i>';} ?></a></span>
              </div>
            </div>
            <?php if($row_rsUpdate['DInote']!=''){ ?>
            <div class="row">
              <div class="small-10 small-offset-1">
                <textarea readonly><?php echo htmlentities($row_rsUpdate['DInote'], ENT_COMPAT, 'UTF-8'); ?></textarea>
              </div>
            </div>
            <?php } ?>
            <div class="row collapse">
              <div class="small-9 small-offset-1 columns">
                <select name="DIchoice" id="DIchoice" style="cursor:context-menu;">
                	<option value="" <?php if(!(strcmp('', $row_rsUpdate['DIchoice']))) {echo "selected=\"selected\"";} if((strcmp('', $row_rsUpdate['DIchoice'])) && ($row_rsUpdate['DIstatus']=='1')){echo ' disabled';} ?>>-- Choose --</option>
                    <option value="Download" <?php if(!(strcmp('Download', $row_rsUpdate['DIchoice']))){echo "selected=\"selected\"";} if((strcmp('Download', $row_rsUpdate['DIchoice'])) && ($row_rsUpdate['DIstatus']=='1')){echo ' disabled';} ?>>Full Download</option>
                    <option value="Drive" <?php if(!(strcmp('Drive', $row_rsUpdate['DIchoice']))){echo "selected=\"selected\"";} if((strcmp('Drive', $row_rsUpdate['DIchoice'])) && ($row_rsUpdate['DIstatus']=='1')){echo ' disabled';} ?>>Flash ($20)</option>
                    <option value="Disc" <?php if(!(strcmp('Disc', $row_rsUpdate['DIchoice']))){echo "selected=\"selected\"";} if((strcmp('Disc', $row_rsUpdate['DIchoice'])) && ($row_rsUpdate['DIstatus']=='1')){echo ' disabled';} ?>>DVD ($40)</option>
                    <?php do { ?>
                    <?php }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                    $rows = mysql_num_rows($rsUpdate);
                    if($rows > 0){mysql_data_seek($rsUpdate, 0);
                    $row_rsUpdate = mysql_fetch_assoc($rsUpdate);}
                    ?>
                  </select>
              </div>
              <div class="small-1 small-pull-1 columns">
                <span class="postfix radius"><?php if($row_rsUpdate['DIstatus']=='1'){ ?><i class="fa fa-lock"></i><?php }?></span>
              </div>
            </div>
            <?php } else { ?><input id="DIchoice" type="hidden" value=""><?php } //End DigitalImages ?>
            <!--EngShoot-->
            <?php if($row_rsUpdate['EngShoot']=='1'){ ?>
            <div class="row collapse">
              <div class="small-1 columns">
                <span class="prefix radius"><i class="fa fa-<?php if($row_rsUpdate['ESstatus']!='1'){echo 'square-o';}else{echo 'check-square-o';}; ?> fa-lg"></i></span>
              </div>
              <div class="small-10 columns">
                <span class="postfix">Engagement Session:</span>
                </div>
              <div class="small-1 columns">
                <span class="postfix radius"><a href="#" data-reveal-id="ESmod" class="button postfix" title="More Information"><?php if($row_rsUpdate['ESstatus']!='1'){echo '<i class="fa fa-info-circle"></i>';}else{echo '<i class="fa fa-info-circle"></i>';} ?></a></span>
              </div>
            </div>
            <?php if($row_rsUpdate['ESnote']!=''){ ?>
            <div class="row">
              <div class="small-10 small-offset-1">
                <textarea readonly><?php echo htmlentities($row_rsUpdate['ESnote'], ENT_COMPAT, 'UTF-8'); ?></textarea>
              </div>
            </div>
            <?php } ?>
            <div class="row collapse">
              <div class="small-9 small-offset-1 columns">
                <select name="ESchoice" id="ESchoice" style="cursor:context-menu;">
                  <option value="" <?php if(!(strcmp('', $row_rsUpdate['ESchoice']))) {echo "selected=\"selected\"";} if((strcmp('', $row_rsUpdate['ESchoice'])) && ($row_rsUpdate['ESstatus']=='1')){echo ' disabled';} ?>>-- Choose --</option>
                  <option value="WithDI" <?php if(!(strcmp('WithDI', $row_rsUpdate['ESchoice']))) {echo "selected=\"selected\"";} if((strcmp('WithDI', $row_rsUpdate['ESchoice'])) && ($row_rsUpdate['ESstatus']=='1')){echo ' disabled';} ?>>With Digital Images Only</option>
                  <option value="Book" <?php if(!(strcmp('Book', $row_rsUpdate['ESchoice']))) {echo "selected=\"selected\"";} if((strcmp('Book', $row_rsUpdate['ESchoice'])) && ($row_rsUpdate['ESstatus']=='1')){echo ' disabled';} ?>>Signature Album (Add $50)</option>
                  <option value="Frame" <?php if(!(strcmp('Frame', $row_rsUpdate['ESchoice']))) {echo "selected=\"selected\"";} if((strcmp('Frame', $row_rsUpdate['ESchoice'])) && ($row_rsUpdate['ESstatus']=='1')){echo ' disabled';} ?>>Signature Frame (Add $50)</option>
                  <option value="Both" <?php if(!(strcmp('Both', $row_rsUpdate['ESchoice']))) {echo "selected=\"selected\"";} if((strcmp('Both', $row_rsUpdate['ESchoice'])) && ($row_rsUpdate['ESstatus']=='1')){echo ' disabled';} ?>>Album &amp; Frame (Add $90)</option>
                  <?php do { ?>
                  <?php }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0){mysql_data_seek($rsUpdate, 0);
                  $row_rsUpdate = mysql_fetch_assoc($rsUpdate);}
                  ?>
                </select>
              </div>
              <div class="small-1 small-pull-1 columns">
                <span class="postfix radius"><?php if($row_rsUpdate['ESstatus']=='1'){ ?><i class="fa fa-lock"></i><?php }?></span>
              </div>
            </div>
            <?php } else { ?><input id="ESchoice" type="hidden" value=""><?php } //End EngShoot ?>
            <!--PCredit-->
            <?php if($row_rsUpdate['PCredit']=='1'){ ?>
            <div class="row collapse">
              <div class="small-1 columns">
                <span class="prefix radius"><i class="fa fa-<?php if($row_rsUpdate['PCstatus']!='1'){echo 'square-o';}else{echo 'check-square-o';}; ?> fa-lg"></i></span>
              </div>
              <div class="small-10 columns">
                <span class="postfix">Purchasing Credit:</span>
                </div>
              <div class="small-1 columns">
                <span class="postfix radius"><a href="#" data-reveal-id="PCmod" class="button postfix" title="More Information"><?php if($row_rsUpdate['PCstatus']!='1'){echo '<i class="fa fa-info-circle"></i>';}else{echo '<i class="fa fa-info-circle"></i>';} ?></a></span>
              </div>
            </div>
            <?php if($row_rsUpdate['PCnote']!=''){ ?>
            <div class="row">
              <div class="small-10 small-offset-1">
                <textarea readonly><?php echo htmlentities($row_rsUpdate['PCnote'], ENT_COMPAT, 'UTF-8'); ?></textarea>
              </div>
            </div>
            <?php } ?>
            <div class="row collapse">
              <div class="small-6 small-offset-1 columns">
                <span class="prefix radius">Credit Issued:</span>
              </div>
              <div class="small-3 columns">
                <input type="text" name="PCamt" id="PCamt" value="<?php echo htmlentities($row_rsUpdate['PCamt'], ENT_COMPAT, 'UTF-8'); ?>" readonly style="cursor:default;">
              </div>
              <div class="small-1 small-pull-1 columns">
                <span class="postfix radius"><?php if($row_rsUpdate['PCstatus']=='1'){ ?><i class="fa fa-lock"></i><?php }?></span>
              </div>
            </div>
            <div class="row collapse">
              <div class="small-6 small-offset-1 columns">
                <span class="prefix radius">Credit Used:</span>
              </div>
              <div class="small-3 columns">
                <input type="text" name="PCused" id="PCused" value="<?php echo htmlentities($row_rsUpdate['PCused'], ENT_COMPAT, 'UTF-8'); ?>" readonly style="cursor:default;">
              </div>
              <div class="small-1 small-pull-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <div class="row collapse">
              <div class="small-6 small-offset-1 columns">
                <span class="prefix radius">Credit Balance:</span>
              </div>
              <div class="small-3 columns">
                <input type="text" name="PCbal" id="PCbal" value="" readonly style="cursor:default;">
              </div>
              <div class="small-1 small-pull-1 columns">
                <span class="postfix radius">&nbsp;</span>
              </div>
            </div>
            <?php } //End PCredit ?>
            <!--VideoFormat-->
            <?php if($row_rsUpdate['VideoFormat']=='1'){ ?>
            <div class="row collapse">
              <div class="small-1 columns">
                <span class="prefix radius"><i class="fa fa-<?php if($row_rsUpdate['VFstatus']!='1'){echo 'square-o';}else{echo 'check-square-o';}; ?> fa-lg"></i></span>
              </div>
              <div class="small-10 columns">
                <span class="postfix">Video Format:</span>
                </div>
              <div class="small-1 columns">
                <span class="postfix radius"><a href="#" data-reveal-id="VFmod" class="button postfix" title="More Information"><?php if($row_rsUpdate['VFstatus']!='1'){echo '<i class="fa fa-info-circle"></i>';}else{echo '<i class="fa fa-info-circle"></i>';} ?></a></span>
              </div>
            </div>
            <?php if($row_rsUpdate['VFnote']!=''){ ?>
            <div class="row">
              <div class="small-10 small-offset-1">
                <textarea readonly><?php echo htmlentities($row_rsUpdate['VFnote'], ENT_COMPAT, 'UTF-8'); ?></textarea>
              </div>
            </div>
            <?php } ?>
            <div class="row collapse">
              <div class="small-9 small-offset-1 columns">
                <select name="VFchoice" id="VFchoice" style="cursor:context-menu;">
                  <option value="" <?php if(!(strcmp('', $row_rsUpdate['VFchoice']))) {echo "selected=\"selected\"";} if((strcmp('', $row_rsUpdate['VFchoice'])) && ($row_rsUpdate['VFstatus']=='1')){echo ' disabled';} ?>>-- Choose --</option>
                  <option value="SD" <?php if(!(strcmp('SD', $row_rsUpdate['VFchoice']))) {echo "selected=\"selected\"";} if((strcmp('SD', $row_rsUpdate['VFchoice'])) && ($row_rsUpdate['VFstatus']=='1')){echo ' disabled';} ?>>Standard DVD</option>
                  <option value="HD" <?php if(!(strcmp('HD', $row_rsUpdate['VFchoice']))) {echo "selected=\"selected\"";} if((strcmp('HD', $row_rsUpdate['VFchoice'])) && ($row_rsUpdate['VFstatus']=='1')){echo ' disabled';} ?>>HD Bluray (Add $1000)</option>
                  <?php do { ?>
                  <?php }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0){mysql_data_seek($rsUpdate, 0);
                  $row_rsUpdate = mysql_fetch_assoc($rsUpdate);}
                  ?>
                </select>
              </div>
              <div class="small-1 small-pull-1 columns">
                <span class="postfix radius"><?php if($row_rsUpdate['VFstatus']=='1'){ ?><i class="fa fa-lock"></i><?php }?></span>
              </div>
            </div>
            <?php } else { ?><input id="VFchoice" type="hidden" value=""><?php } //End VideoFormat ?>
            <!--PreVideo-->
            <?php if($row_rsUpdate['PreVideo']=='1'){ ?>
            <div class="row collapse">
              <div class="small-1 columns">
                <span class="prefix radius"><i class="fa fa-<?php if($row_rsUpdate['PVstatus']!='1' || $row_rsUpdate['PVsongLock']!='1' || $row_rsUpdate['PVcolorLock']!='1'){echo 'square-o';}else{echo 'check-square-o';}; ?> fa-lg"></i></span>
              </div>
              <div class="small-10 columns">
                <span class="postfix"><?php echo $PVname; ?></span>
                </div>
              <div class="small-1 columns">
                <span class="postfix radius"><a href="#" data-reveal-id="PVmod" class="button postfix" title="More Information"><?php if($row_rsUpdate['PVstatus']!='1'){echo '<i class="fa fa-info-circle"></i>';}else{echo '<i class="fa fa-info-circle"></i>';} ?></a></span>
              </div>
            </div>
            <?php if($row_rsUpdate['PVnote']!=''){ ?>
            <div class="row">
              <div class="small-10 small-offset-1">
                <textarea readonly><?php echo htmlentities($row_rsUpdate['PVnote'], ENT_COMPAT, 'UTF-8'); ?></textarea>
              </div>
            </div>
            <?php } ?>
            <div class="row collapse">
              <div class="small-9 small-offset-1 columns">
                <select name="PVchoice" style="cursor:context-menu;">
                  <option value="" <?php if(!(strcmp('', $row_rsUpdate['PVchoice']))) {echo "selected=\"selected\"";} if((strcmp('', $row_rsUpdate['PVchoice'])) && ($row_rsUpdate['PVstatus']=='1')){echo ' disabled';} ?>>-- Choose --</option>
                  <option value="Before" <?php if(!(strcmp('Before', $row_rsUpdate['PVchoice']))) {echo "selected=\"selected\"";} if((strcmp('Before', $row_rsUpdate['PVchoice'])) && ($row_rsUpdate['PVstatus']=='1')){echo ' disabled';} ?>>Completed Before The Event</option>
                  <option value="After" <?php if(!(strcmp("After", $row_rsUpdate['PVchoice']))) {echo "selected=\"selected\"";} if((strcmp('After', $row_rsUpdate['PVchoice'])) && ($row_rsUpdate['PVstatus']=='1')){echo ' disabled';} ?>>Completed After The Event</option>
                  <?php do { ?>
                  <?php }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0){mysql_data_seek($rsUpdate, 0);
                  $row_rsUpdate = mysql_fetch_assoc($rsUpdate);}
                  ?>
                </select>
              </div>
              <div class="small-1 small-pull-1 columns">
                <span class="postfix radius"><?php if($row_rsUpdate['PVstatus']=='1'){ ?><i class="fa fa-lock"></i><?php }?></span>
              </div>
            </div>
            <div class="row collapse">
              <div class="small-3 small-offset-1 columns">
                <span class="prefix radius">Song:</span>
              </div>
              <div class="small-6 columns">
                <input type="text" name="PVsong" value="<?php echo htmlentities($row_rsUpdate['PVsong'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="All of Me, John Legend"<?php if($row_rsUpdate['PVsongLock']=='1') {echo ' disabled';} ?>>
              </div>
              <div class="small-1 small-pull-1 columns">
                <span class="postfix radius"><?php if($row_rsUpdate['PVsongLock']=='1'){ ?><i class="fa fa-lock"></i><?php }?></span>
              </div>
            </div>
            <div class="row collapse">
              <div class="small-3 small-offset-1 columns">
                <span class="prefix radius">Colors:</span>
              </div>
              <div class="small-6 columns">
                <input type="text" name="PVcolors" value="<?php echo htmlentities($row_rsUpdate['PVcolors'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="Mocha & Seafoam"<?php if($row_rsUpdate['PVcolorLock']=='1') {echo ' disabled';} ?>>
              </div>
              <div class="small-1 small-pull-1 columns">
                <span class="postfix radius"><?php if($row_rsUpdate['PVcolorLock']=='1'){ ?><i class="fa fa-lock"></i><?php }?></span>
              </div>
            </div>
            <?php } //End PreVideo ?>
            <!--MusicStyle-->
            <?php if($row_rsUpdate['MusicStyle']=='1'){ ?>
            <div class="row collapse">
              <div class="small-1 columns">
                <span class="prefix radius"><i class="fa fa-<?php if($row_rsUpdate['MSstatus']!='1'){echo 'square-o';}else{echo 'check-square-o';}; ?> fa-lg"></i></span>
              </div>
              <div class="small-10 columns">
                <span class="postfix">Music Style:</span>
                </div>
              <div class="small-1 columns">
                <span class="postfix radius"><a href="#" data-reveal-id="MSmod" class="button postfix" title="More Information"><?php if($row_rsUpdate['MSstatus']!='1'){echo '<i class="fa fa-info-circle"></i>';}else{echo '<i class="fa fa-info-circle"></i>';} ?></a></span>
              </div>
            </div>
            <?php if($row_rsUpdate['MSnote']!=''){ ?>
            <div class="row">
              <div class="small-10 small-offset-1">
                <textarea readonly><?php echo htmlentities($row_rsUpdate['MSnote'], ENT_COMPAT, 'UTF-8'); ?></textarea>
              </div>
            </div>
            <?php } ?>
            <div class="row collapse">
              <div class="small-9 small-offset-1 columns">
                <select name="MSchoice" style="cursor:context-menu;">
                  <option value="" <?php if(!(strcmp('', $row_rsUpdate['MSchoice']))) {echo "selected=\"selected\"";} if((strcmp('', $row_rsUpdate['MSchoice'])) && ($row_rsUpdate['MSstatus']=='1')){echo ' disabled';} ?>>-- Choose --</option>
                  <option value="MT" <?php if(!(strcmp('MT', $row_rsUpdate['MSchoice']))) {echo "selected=\"selected\"";} if((strcmp('MT', $row_rsUpdate['MSchoice'])) && ($row_rsUpdate['MSstatus']=='1')){echo ' disabled';} ?>>Match Our Theme</option>
                  <option value="CL" <?php if(!(strcmp('CL', $row_rsUpdate['MSchoice']))) {echo "selected=\"selected\"";} if((strcmp('CL', $row_rsUpdate['MSchoice'])) && ($row_rsUpdate['MSstatus']=='1')){echo ' disabled';} ?>>Classical</option>
                  <option value="JZ" <?php if(!(strcmp('JZ', $row_rsUpdate['MSchoice']))) {echo "selected=\"selected\"";} if((strcmp('JZ', $row_rsUpdate['MSchoice'])) && ($row_rsUpdate['MSstatus']=='1')){echo ' disabled';} ?>>Jazz</option>
                  <option value="RK" <?php if(!(strcmp('RK', $row_rsUpdate['MSchoice']))) {echo "selected=\"selected\"";} if((strcmp('RK', $row_rsUpdate['MSchoice'])) && ($row_rsUpdate['MSstatus']=='1')){echo ' disabled';} ?>>Rock</option>
                  <option value="CW" <?php if(!(strcmp('CW', $row_rsUpdate['MSchoice']))) {echo "selected=\"selected\"";} if((strcmp('CW', $row_rsUpdate['MSchoice'])) && ($row_rsUpdate['MSstatus']=='1')){echo ' disabled';} ?>>Country</option>
                  <option value="UB" <?php if(!(strcmp('UB', $row_rsUpdate['MSchoice']))) {echo "selected=\"selected\"";} if((strcmp('UB', $row_rsUpdate['MSchoice'])) && ($row_rsUpdate['MSstatus']=='1')){echo ' disabled';} ?>>Upbeat / Pop</option>
                  <option value="MC" <?php if(!(strcmp('MC', $row_rsUpdate['MSchoice']))) {echo "selected=\"selected\"";} if((strcmp('MC', $row_rsUpdate['MSchoice'])) && ($row_rsUpdate['MSstatus']=='1')){echo ' disabled';} ?>>Match Our Culture</option>
                  <?php do { ?>
                  <?php }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0){mysql_data_seek($rsUpdate, 0);
                  $row_rsUpdate = mysql_fetch_assoc($rsUpdate);}
                  ?>
                </select>
              </div>
              <div class="small-1 small-pull-1 columns">
                <span class="postfix radius"><?php if($row_rsUpdate['MSstatus']=='1'){ ?><i class="fa fa-lock"></i><?php }?></span>
              </div>
            </div>
            <?php }//End MusicStyle ?>
            <!--Credits-->
            <?php if($row_rsUpdate['Credits']=='1'){ ?>
            <div class="row collapse">
              <div class="small-1 columns">
                <span class="prefix radius"><i class="fa fa-<?php if($row_rsUpdate['CRstatus']!='1' || $row_rsUpdate['CRsongLock']!='1'){echo 'square-o';}else{echo 'check-square-o';}; ?> fa-lg"></i></span>
              </div>
              <div class="small-10 columns">
                <span class="postfix">Ending Credits:</span>
                </div>
              <div class="small-1 column">
                <span class="postfix radius"><a href="#" data-reveal-id="ECmod" class="button postfix" title="More Information"><?php if($row_rsUpdate['CRstatus']!='1'){echo '<i class="fa fa-info-circle"></i>';}else{echo '<i class="fa fa-info-circle"></i>';} ?></a></span>
              </div>
            </div>
            <?php if($row_rsUpdate['CRnote']!=''){ ?>
            <div class="row">
              <div class="small-10 small-offset-1">
                <textarea readonly><?php echo htmlentities($row_rsUpdate['CRnote'], ENT_COMPAT, 'UTF-8'); ?></textarea>
              </div>
            </div>
            <?php } ?>
            <div class="row collapse">
              <div class="small-9 small-offset-1 columns">
                <select name="CRchoice" style="cursor:context-menu;">
                  <option value="" <?php if(!(strcmp('', $row_rsUpdate['CRchoice']))) {echo 'selected=\'selected\'';} if((strcmp('', $row_rsUpdate['CRchoice'])) && ($row_rsUpdate['CRstatus']=='1')){echo ' disabled';} ?>>-- Choose --</option>
                  <option value="TextOnly" <?php if(!(strcmp('TextOnly', $row_rsUpdate['CRchoice']))) {echo 'selected=\'selected\'';} if((strcmp('TextOnly', $row_rsUpdate['CRchoice'])) && ($row_rsUpdate['CRstatus']=='1')){echo ' disabled';} ?>>Text Only Credits</option>
                  <option value="Images" <?php if(!(strcmp('Images', $row_rsUpdate['CRchoice']))) {echo 'selected=\'selected\'';} if((strcmp('Images', $row_rsUpdate['CRchoice'])) && ($row_rsUpdate['CRstatus']=='1')){echo ' disabled';} ?>>Photo / Video Credits</option>
                  <?php do { ?>
                  <?php }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0){mysql_data_seek($rsUpdate, 0);
                  $row_rsUpdate = mysql_fetch_assoc($rsUpdate);}
                  ?>
                </select>
              </div>
              <div class="small-1 small-pull-1 columns">
                <span class="postfix radius"><?php if($row_rsUpdate['CRstatus']=='1'){ ?><i class="fa fa-lock"></i><?php }?></span>
              </div>
            </div>
            <div class="row collapse">
              <div class="small-3 small-offset-1 columns">
                <span class="prefix radius">Song:</span>
              </div>
              <div class="small-6 columns">
                <input type="text" name="CRsong" value="<?php echo htmlentities($row_rsUpdate['CRsong'], ENT_COMPAT, 'UTF-8'); ?>" placeholder="Happy, Pharrell Williams"<?php if($row_rsUpdate['CRsongLock']=='1') {echo ' disabled';} ?>>
              </div>
              <div class="small-1 small-pull-1 columns">
                <span class="postfix radius"><?php if($row_rsUpdate['CRsongLock']=='1'){ ?><i class="fa fa-lock"></i><?php }?></span>
              </div>
            </div>
            <?php } //End Credits ?>
            <!--CoverDesign-->
            <?php if($row_rsUpdate['CoverDesign']=='1'){ ?>
            <div class="row collapse">
              <div class="small-1 columns">
                <span class="prefix radius"><i class="fa fa-<?php if($row_rsUpdate['CDstatus']!='1'){echo 'square-o';}else{echo 'check-square-o';}; ?> fa-lg"></i></span>
              </div>
              <div class="small-10 columns">
                <span class="postfix">Cover Design:</span>
              </div>
              <div class="small-1 column">
                <span class="postfix radius"><a href="#" data-reveal-id="CDmod" class="button postfix" title="More Information"><?php if($row_rsUpdate['CDstatus']!='1'){echo '<i class="fa fa-info-circle"></i>';}else{echo '<i class="fa fa-info-circle"></i>';} ?></a></span>
              </div>
            </div>
            <?php if($row_rsUpdate['CDnote']!=''){ ?>
            <div class="row">
              <div class="small-10 small-offset-1">
                <textarea readonly><?php echo htmlentities($row_rsUpdate['CDnote'], ENT_COMPAT, 'UTF-8'); ?></textarea>
              </div>
            </div>
            <?php } ?>
            <div class="row collapse">
              <div class="small-9 small-offset-1 columns">
                <select name="CDchoice" style="cursor:context-menu;">
                  <option value="" <?php if(!(strcmp("", $row_rsUpdate['CDchoice']))) {echo "selected=\"selected\"";} if((strcmp('', $row_rsUpdate['CDchoice'])) && ($row_rsUpdate['CDstatus']=='1')){echo ' disabled';} ?>>-- Choose --</option>
                  <option value="Us" <?php if(!(strcmp('Us', $row_rsUpdate['CDchoice']))) {echo "selected=\"selected\"";} if((strcmp('Us', $row_rsUpdate['CDchoice'])) && ($row_rsUpdate['CDstatus']=='1')){echo ' disabled';} ?>>Design the cover for us</option>
                  <option value="Them" <?php if(!(strcmp('Them', $row_rsUpdate['CDchoice']))) {echo "selected=\"selected\"";} if((strcmp('Them', $row_rsUpdate['CDchoice'])) && ($row_rsUpdate['CDstatus']=='1')){echo ' disabled';} ?>>We will send the info</option>
                  <?php do { ?>
                  <?php }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0){mysql_data_seek($rsUpdate, 0);
                  $row_rsUpdate = mysql_fetch_assoc($rsUpdate);}
                  ?>
                </select>
              </div>
              <div class="small-1 small-pull-1 columns">
                <span class="postfix radius"><?php if($row_rsUpdate['CDstatus']=='1'){ ?><i class="fa fa-lock"></i><?php }?></span>
              </div>
            </div>
            <?php } //End CoverDesign ?>
          </div>
        </div>
      </div>
    </div>
   <!--OUTSIDE CONTAINER-->
  </div>
</div>

<div class="row">
  <div class="large-8 large-centered medium-10 medium-centered columns">
    <div class="row"><!--CONTAINER-->
      <div class="medium-12 columns text-right clientMenu">
        <?php if (file_exists($contract)){ ?><a href="<?php echo $contract; ?>" class="button tiny info radius" title="Download <?php echo $row_rsUpdate['LastName1']."/".$contractName; ?> Contract" target="_blank"><i class="fa fa-cloud-download fa-lg"></i></a><?php } ?> <button type="submit" class="button tiny success radius" title="Update"><i class="fa fa-pencil-square-o fa-lg"></i></button> <a class="button tiny alert radius" title="Logout" href="<?php echo $logoutAction ?>"><i class="fa fa-sign-out fa-lg"></i></a><img src="/_img/universal/trans1x1.gif" style="height:68px;width:4px;">
      </div>
    </div><!--END CONTAINER-->
  </div>
</div>

<div class="row">
  <div class="small-12 columns text-center">
    <small style="color:#888;">Last Update: <?php echo date('M d, Y - h:ia', strtotime($row_rsUpdate['LastUpdate'])); ?> (PST)</small>
    <br>
  </div>
</div>

<input type="hidden" name="DBID" value="<?php echo $row_rsUpdate['DBID']; ?>">
<input type="hidden" name="dbFirstName1" value="<?php echo $row_rsUpdate['FirstName1']; ?>">
<input type="hidden" name="dbLastName1" value="<?php echo $row_rsUpdate['LastName1']; ?>">
<input type="hidden" name="dbFirstName2" value="<?php echo $row_rsUpdate['FirstName2']; ?>">
<input type="hidden" name="dbLastName2" value="<?php echo $row_rsUpdate['LastName2']; ?>">
<input type="hidden" name="dbAddress" value="<?php echo $row_rsUpdate['rsAddress']; ?>">
<input type="hidden" name="dbCity" value="<?php echo $row_rsUpdate['rsCity']; ?>">
<input type="hidden" name="dbState" value="<?php echo $row_rsUpdate['rsState']; ?>">
<input type="hidden" name="dbZipcode" value="<?php echo $row_rsUpdate['rsZipcode']; ?>">
<input type="hidden" name="dbPhone1" value="<?php echo $row_rsUpdate['rsPhone1']; ?>">
<input type="hidden" name="dbPhone2" value="<?php echo $row_rsUpdate['rsPhone2']; ?>">
<input type="hidden" name="dbEmail1" value="<?php echo $row_rsUpdate['rsEmail1']; ?>">
<input type="hidden" name="dbEmail2" value="<?php echo $row_rsUpdate['rsEmail2']; ?>">
<input type="hidden" name="dbPrepTime1" value="<?php echo $row_rsUpdate['PrepTime1']; ?>">
<input type="hidden" name="dbPrepName1" value="<?php echo $row_rsUpdate['PrepName1']; ?>">
<input type="hidden" name="dbPrepAddr1" value="<?php echo $row_rsUpdate['PrepAddr1']; ?>">
<input type="hidden" name="dbPrepWeb1" value="<?php echo $row_rsUpdate['PrepWeb1']; ?>">
<input type="hidden" name="dbPrepSame" value="<?php echo $row_rsUpdate['PrepSame']; ?>">
<input type="hidden" name="dbPrepTime2" value="<?php echo $row_rsUpdate['PrepTime2']; ?>">
<input type="hidden" name="dbPrepName2" value="<?php echo $row_rsUpdate['PrepName2']; ?>">
<input type="hidden" name="dbPrepAddr2" value="<?php echo $row_rsUpdate['PrepAddr2']; ?>">
<input type="hidden" name="dbPrepWeb2" value="<?php echo $row_rsUpdate['PrepWeb2']; ?>">
<input type="hidden" name="dbFirstMtg" value="<?php echo $row_rsUpdate['FirstMtg']; ?>">
<input type="hidden" name="dbCeremonyTime" value="<?php echo $row_rsUpdate['CeremonyTime']; ?>">
<input type="hidden" name="dbCeremonyName" value="<?php echo $row_rsUpdate['CeremonyName']; ?>">
<input type="hidden" name="dbCeremonyAddr" value="<?php echo $row_rsUpdate['CeremonyAddr']; ?>">
<input type="hidden" name="dbCeremonyWeb" value="<?php echo $row_rsUpdate['CeremonyWeb']; ?>">
<input type="hidden" name="dbRecptTime" value="<?php echo $row_rsUpdate['RecptTime']; ?>">
<input type="hidden" name="dbRecptName" value="<?php echo $row_rsUpdate['RecptName']; ?>">
<input type="hidden" name="dbRecptAddr" value="<?php echo $row_rsUpdate['RecptAddr']; ?>">
<input type="hidden" name="dbRecptWeb" value="<?php echo $row_rsUpdate['RecptWeb']; ?>">
<input type="hidden" name="dbDIchoice" value="<?php echo $row_rsUpdate['DIchoice']; ?>">
<input type="hidden" name="dbESchoice" value="<?php echo $row_rsUpdate['ESchoice']; ?>">
<input type="hidden" name="dbVFchoice" value="<?php echo $row_rsUpdate['VFchoice']; ?>">
<input type="hidden" name="dbPVchoice" value="<?php echo $row_rsUpdate['PVchoice']; ?>">
<input type="hidden" name="dbPVsong" value="<?php echo $row_rsUpdate['PVsong']; ?>">
<input type="hidden" name="dbMSchoice" value="<?php echo $row_rsUpdate['MSchoice']; ?>">
<input type="hidden" name="dbCRchoice" value="<?php echo $row_rsUpdate['CRchoice']; ?>">
<input type="hidden" name="dbCRsong" value="<?php echo $row_rsUpdate['CRsong']; ?>">
<input type="hidden" name="dbCDchoice" value="<?php echo $row_rsUpdate['CDchoice']; ?>">
<input type="hidden" name="LastUpdate" value="<?php echo date('Y-m-d H:i:s', strtotime('-1 hour')); ?>">
<input type="hidden" name="NoteForAdmin" value="<?php echo $row_rsUpdate['NoteForAdmin'].'Note: ['.$row_rsUpdate['NoteForClient'].'] &gt;&gt;Deleted on '.date('m/d/Y H:ia', strtotime('-1 hour')); ?>">
<input type="hidden" id="TempNote" value="<?php if($_GET['do']!='deleteNote'){echo $row_rsUpdate['NoteForClient'];}else{echo '';} ?>">
<input type="hidden" name="dbNFC" value="<?php echo $row_rsUpdate['NoteForClient']; ?>">
<input type="hidden" name="NoteForClient" value="<?php if($_GET['do']!='deleteNote'){echo $row_rsUpdate['NoteForClient'];}else{echo '';} ?>">
<input type="hidden" name="MM_update" value="frmClientData">
</form>

<!--MODALS-->
<div id="mod-ClientNote" class="reveal-modal small" data-reveal>
<a class="close-reveal-modal"><i class="fa fa-times-circle" style="color:#BF3831;"></i></a>
  <div class="row">
    <div class="small-12 columns">
      <h4>A message from About The Day</h4>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <p class="tight"><?php echo $row_rsUpdate['NoteForClient']; ?></p>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <a href="<?php echo $_SERVER['PHP_SELF']; ?>?do=deleteNote" class="button small alert radius">Delete Note &nbsp;<i class="fa fa-trash fa-lg"></i></a> <a href="#/" class="button small success radius closeReveal">Remind Me &nbsp;<i class="fa fa-refresh fa-lg"></i></a>
    </div>
  </div>
</div>

<!--OnlineGallery-->
<div id="OGmod" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<a class="close-reveal-modal"><i class="fa fa-times-circle clrRed"></i></a>
  <div class="row">
    <div class="small-12 columns">
      <h3><strong>Online Gallery Information</strong></h3>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <p class="tight">&nbsp; Once we've finished processing your photos, we upload all of them to ShootProof.com<small>&copy;</small> which is where you'll be able to view your gallery online.<br>
      &nbsp; From your online gallery, you can view, share, lock, edit, categorize, and order the photos we've taken.<br>
      &nbsp; Your ShootProof<small>&copy;</small> credentials were created with the name and email we have shown for this option, and give you administrative power over your ShootProof.com<small>&copy;</small> gallery.</p>
    </div>
  </div>
</div>

<!--DigitalImages-->
<div id="DImod" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<a class="close-reveal-modal"><i class="fa fa-times-circle clrRed"></i></a>
  <div class="row">
    <div class="small-12 columns">
      <h3><strong>Digital Images Information</strong></h3>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <p class="tight">&nbsp; Once we've finished processing your photos, you can choose how you want those images to be returned to you by selecting one of the following formats from the drop-down menu we've provided in your account.
      <p>
      <p class="tight">&nbsp; &bull; <strong>DVD-Rom</strong>: A read-only disc that cannot be edited or changed.<br>
      &nbsp; &bull; <strong>USB Flash Drive</strong>: A universal drive that can be overwritten, so be sure to make a backup.<br>
      &nbsp; &bull; <strong>ShootProof</strong><small>&copy;</small> <strong>Download</strong>: Instant access to your images for 48hrs, but you're responsible for backing them up.</p>
      <p class="tight"><i class="fa fa-exclamation-triangle clrOrange"></i> <strong>Note</strong>:<br>
      &nbsp; You must make a selection before we send the images to you. No selection means (by default) we are still waiting on your preference.<br>
      &nbsp; If no selection is made, we will hold your images for at least 5 years.</p>
    </div>
  </div>
</div>

<!--EngagementSession-->
<div id="ESmod" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<a class="close-reveal-modal"><i class="fa fa-times-circle clrRed"></i></a>
  <div class="row">
    <div class="small-12 columns">
      <h3><strong>Engagement Session Information</strong></h3>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <p class="tight">&nbsp; We schedule a time and place for the photos to be taken with you in advance and notate that in your account and on our website's calendar.<br>
      &nbsp; Once we've finished processing your photos and have uploaded them to your online gallery, you can choose how you would prefer to have your session presented by selecting one of the following options from the drop-down menu we've provided in your account.
      <p>
      <p class="tight">&nbsp; &bull; <strong>Signature Frame</strong>: One 8x10" image (you select&sup1;), framed with a large matte for signing.<br>
      &nbsp; &bull; <strong>Signature Album</strong>: 22 smaller images (you select&sup1;) will be placed in an album for signing.<br>
      &nbsp; &bull; <strong>Both Frame &amp; Album</strong></p>
      <p class="tight"><i class="fa fa-exclamation-triangle clrOrange"></i> <strong>Note</strong>:<br>
      &nbsp; You must make a selection 2 weeks prior to the wedding. No selection means (by default) you do not require the presentation.<br>
      &nbsp; &sup1;Create a folder in your ShootProof gallery and put your selection(s) in it. Let us know when your selection is finalized!</p>
    </div>
  </div>
</div>

<!--PurchasingCredit-->
<div id="PCmod" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<a class="close-reveal-modal"><i class="fa fa-times-circle clrRed"></i></a>
  <div class="row">
    <div class="small-12 columns">
      <h3><strong>Purchasing Credit Information</strong></h3>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <p class="tight">&nbsp; Purchasing credit allows you the freedom of choosing $<?php echo htmlentities($row_rsUpdate['PCamt'], ENT_COMPAT, 'UTF-8'); ?> worth of any of the products we offer, as part of your package. This temporary credit will be issued to your email once your images have been finished and uploaded to your gallery.<br>
      &nbsp; Examples of how your Purchasing Credit can be used would be:</p>
      <p class="tight">&nbsp; &bull; Ordering directly through your gallery.<br>
      &nbsp; &bull; Requesting edits or effects from us.&sup1;<br>
      &nbsp; &bull; Outside costs like expedited shipping.&sup1;</p>
      <p class="tight"><i class="fa fa-exclamation-triangle clrOrange"></i> <strong>Note</strong>:<br>
      &nbsp; Purchasing credit does not have a cash value and cannot be traded for a discount of equal value. Also, the purchasing credit will expire when the initial gallery's expiration is set, after-which the credit cannot be issued again.<br>
      &nbsp; &sup1;Contact us directly to have an estimate cost first.</p>
    </div>
  </div>
</div>

<!--VideoFormat-->
<div id="VFmod" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<a class="close-reveal-modal"><i class="fa fa-times-circle clrRed"></i></a>
  <div class="row">
    <div class="small-12 columns">
      <h3><strong>Video Format Information</strong></h3>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <p class="tight">&nbsp; Our normal (and default) format to edit your video in is "Standard Definition" (which is DVD quality) resolution. Although DVD is not considered High Definition, in our opinion, there isn't much difference without using a magnifing glass.<br>
      &nbsp; You can request High Definition (or Bluray quality) as your finalized option, but it must be requested (and the difference paid for) in advance.</p>
      <p class="tight">&nbsp; &bull; <strong>DVD</strong>: Standard resolution is 854x480.<br>
      &nbsp; &bull; <strong>Bluray</strong>&sup1;: Resolution is 1280x720.</p>
      <p class="tight"><i class="fa fa-exclamation-triangle clrOrange"></i> <strong>Note</strong>:<br>
      &sup1;We shoot in 1920x1080, but for purposes of editing, file size, and cropping, we finalize at 1280x720.</p>
    </div>
  </div>
</div>

<!--PresentationVideo-->
<div id="PVmod" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<a class="close-reveal-modal"><i class="fa fa-times-circle clrRed"></i></a>
  <div class="row">
    <div class="small-12 columns">
      <h3><strong><?php echo $PVname; ?> Information</strong></h3>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <p class="tight"><?php if($pkLevel=='Platinum' || $pkLevel=='Gold'){ ?> &nbsp; You can choose whether you would like to have the <?php echo $PVname; ?> finished before or after the event. However, the <strong>Before</strong> option must be selected at least 1 month before the event or <strong>After</strong> will be selected automatically.<br><?php }?>
      &nbsp; <strong>Photos</strong>: We need anywhere from 15-25 photos of each of you growing up and about <?php if($PVname=='Photo Montage'){echo '15-25';}else{echo '50-70';} ?> of you both as a couple. On average, there should be around <?php if($PVname=='Photo Montage'){echo '50-80';}else{echo '80-100';} ?> photos total. (We may not use them all, but it's better to have too many then not enough.)</br>
      &nbsp; <strong>Music</strong>: We will also need a couple of songs for the growing up portion (one song for each person), and one song for both as a couple.<?php if($Format='Video'){echo' (Try not to pick a song you will also be using as a first dance or in your video credits too.)';}?><br>
      &nbsp; You can share the required photos and music files in a Dropbox<small>&copy;</small> folder, or by mailing us a disc or USB drive.</p>
      <p class="tight"><i class="fa fa-exclamation-triangle clrOrange"></i> <strong>Note</strong>:<br>
      &nbsp; The photos <strong>must be in an obvious and numbered order</strong> or we cannot use them until they are. (We don't want to guess at the order the photos should be shown and be wrong!)</p>
    </div>
    <div class="small-5 small-offset-1 columns">
      <p class="tight"><strong>Correct</strong>:<br>
      <i class="fa fa-check-circle clrGreen"></i> Jim01.jpg<br>
      <i class="fa fa-check-circle clrGreen"></i> Jim02.jpg<br>
      <i class="fa fa-check-circle clrGreen"></i> Jim03.jpg</p>
    </div>
    <div class="small-6 columns">
      <p class="tight"><strong>Incorrect</strong>:<br>
      <i class="fa fa-ban clrRed"></i> JumpingDog.jpg:<br>
      <i class="fa fa-ban clrRed"></i> img4573.jpg<br>
      <i class="fa fa-ban clrRed"></i> BabyWithFood.jpg</p>
    </div>
  </div>
</div>

<!--MusicStyle-->
<div id="MSmod" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<a class="close-reveal-modal"><i class="fa fa-times-circle clrRed"></i></a>
  <div class="row">
    <div class="small-12 columns">
      <h3><strong>Music Style Information</strong></h3>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <p class="tight">&nbsp; When we edit, we try to do our best to find music that seems suitable, but letting us know your personal musical prefernces can really help us narrow down the <strong>background music</strong> to fit your video (<em>and your style</em>).<br>
      &nbsp; From your selection in the drop-down menu, we can use instrumental music (that still matches your selection), without struggling to make the video match a specific song that might not fit well, or work around a song with lyrics that might conflict with the videos dialog.</p>
      <p class="tight"><i class="fa fa-exclamation-triangle clrOrange"></i> <strong>Note</strong>:<br>
      &nbsp; We don't mind extra song suggestions you have, but it doesn't mean we will be able to use them. It's easier to just pick a style.<br>
      &nbsp; If no selections are made, we will assume you still haven't decided. (That will keep us from working on your project.)</p>
    </div>
  </div>
</div>

<!--EndingCredits-->
<div id="ECmod" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<a class="close-reveal-modal"><i class="fa fa-times-circle clrRed"></i></a>
  <div class="row">
    <div class="small-12 columns">
      <h3><strong>Ending Credits Information</strong></h3>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <p class="tight">&nbsp; You will have many people that you will wish to thank and acknowledge after your wedding. The credits (just like any movie) are where you have the ability to do that!<br>
      &nbsp; For example, you can list the participants and their names, Groomsmen, Bridesmaids, Minister, Family, Friends, Vendors, Musicians, and other Special Thanks, etc...)<br>
      &nbsp; It doesn't have to be anything too long, but <strong>PLEASE</strong> double-check your details and spelling. We will copy the information you provide 'as is' without questioning your work.
      <?php if($row_rsUpdate['CRchoice']=='Images'){ ?><br>
      &nbsp; We also incorporate photos and video that you provide (usually from the Honeymoon), to play along with the scrolling credits for an extra entertaining ending.<?php }?></p>
      <p class="tight">&nbsp; Use the "Song" entry field to let us know your song choice.</p>
      <p class="tight">&nbsp; You can share the required document and music in a Dropbox<small>&copy;</small> folder, or by emailing the files to us directly.</p>
      <p class="tight"><i class="fa fa-exclamation-triangle clrOrange"></i> <strong>Note</strong>:<br>
      &nbsp; If no selections are made, and no credits are sent, we will assume you are still working on this... and obviously, it's not something we would know. (That will keep us from working on your project until it's checked off.)</p>
    </div>
  </div>
</div>

<!--CoverDesign-->
<div id="CDmod" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<a class="close-reveal-modal"><i class="fa fa-times-circle clrRed"></i></a>
  <div class="row">
    <div class="small-12 columns">
      <h3><strong>Cover Design Information</strong></h3>
      <hr>
    </div>
  </div>
  <div class="row clrAltBgOdd">
    <div class="small-12 columns">
      <p class="tight">&nbsp; There are 2 options in the provided drop-down menu.<br>
      &nbsp; If you have the "Design the cover for us" option selected, there's nothing more you need to do, and the option should already be locked.<br>
      &nbsp; However, if you have the "We will send the info" option selected, there will be a few things we will require you either email or Dropbox<small>&copy;</small> to us before we can check this option as completed.</p>
      <p class="tight">&nbsp; &bull; 6-10 of your favorite photos to use on the back.<br>
      &nbsp; &bull; Choose your favorite (vertical) photo for the cover.<br>
      &nbsp; &bull; If you like, you can write a 500 word (max) story for the back as well.</p>
      <p class="tight"><i class="fa fa-exclamation-triangle clrOrange"></i> <strong>Note</strong>:<br>
      &nbsp; We have several samples on our website (See: Gallery / DVD Artwork) for some additional inspiration and possible ideas too.</p>
    </div>
  </div>
</div>

<!--AlaCart-->
<div id="alaCart-modal" class="reveal-modal medium" data-reveal>
  <h3>Ala-Cart Video</h3>
  <hr>
  <div style="background-color:#DDD;padding:10px 10px 1px;"><p class="tight" style="color:#222;">We offer an <strong>Ala-Cart Video</strong> option for those who will not sacrifice the photography to include a costly video... But still would like a small, quality video.</p></div>
  <div id="modal-list">
    <ul>
      <li>Ceremony Only (DIY) :: $<strong><?php echo money_format('%i', $alaVid1);?></strong></li>
      <li>Ceremony Only (Edit) :: $<strong><?php echo money_format('%i', $alaVid2);?></strong></li>
      <li>Ceremony & Hi-Lites (DIY) :: $<strong><?php echo money_format('%i', $alaVid3);?></strong></li>
      <li>Ceremony & Hi-Lites (Edit) :: $<strong><?php echo money_format('%i', $alaVid4);?></strong></li>
    </ul>
  </div>
  <div style="background-color:#DDD;padding:10px 10px 1px;"><p class="tight" style="color:#222;"></p>(DIY): 4-camera HD coverage / Un-Edited / Available by download or external device<br>
  (Edit) Multi-camera HD coverage / Edited to DVD<br>
  This offer remains available until 30 days prior to the wedding (so if you want to move forward with Photography now, you can add this later.)</p></div>
  <a class="close-reveal-modal"><i class="fa fa-times-circle" style="color:#BF3831;"></i></a>
</div>
</div>
<!--End Modals-->

</body>

<script>doMath();</script>
<script src="/_js/foundation5/all.js"></script>
<script>
    jQuery(document).foundation();

	$('.closeReveal').click(function(){
		$('#mod-ClientNote').foundation('reveal','close');
	});

	$(document).ready(function(){
		if ($('#TempNote').val()!=''){
		$('#mod-ClientNote').foundation('reveal', 'open');}
});
</script>

</html>
<?php
mysql_free_result($rsUpdate);
?>
