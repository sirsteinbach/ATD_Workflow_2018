<?php require_once('../connections/conn_Clients.php'); ?> <?php date_default_timezone_set('America/Los_Angeles'); ?> <?php // Determine if the page is insert or update
if($_GET['do']=='insert'){$pageName='insert';}else{$pageName='update';}
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
//SS insert code
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "frmData")) {
  $insertSQL = sprintf("INSERT INTO ATD (DBID, RegionID, PackageID, FormatID, EventID, EventDate, FirstName1, LastName1, FirstName2, LastName2, rsAddress, rsCity, rsState, rsZipcode, rsCountry, rsPhone1, rsPhone2, rsEmail1, rsEmail2, rsUsername, rsPassword, Referral, PackageAmt, Opt1Value, Opt1Amt, Opt1Tax, Opt2Value, Opt2Amt, Opt2Tax, Opt3Value, Opt3Amt, Opt3Tax, TaxRate, PaidAmt, PriceNote, PrepTime1, PrepName1, PrepAddr1, PrepWeb1, PrepSame, AllSame, PrepTime2, PrepName2, PrepAddr2, PrepWeb2, FirstMtg, CeremonyTime, CeremonyName, CeremonyAddr, CeremonyWeb, RecptTime, RecptName, RecptAddr, RecptWeb, OnlineGallery, OGstatus, GalleryID, PictName, PictOwner, PictEmail, OGnote, DigitalImages, DIstatus, DInote, DIchoice, EngShoot, ESstatus, ESnote, ESchoice, PCredit, PCstatus, PCnote, PCamt, PCused, VideoFormat, VFstatus, VFnote, VFchoice, PreVideo, PVoption, PVstatus, PVnote, PVchoice, PVsong, PVsongLock, PVcolors, PVcolorLock, MusicStyle, MSstatus, MSnote, MSchoice, Credits, CRchoice, CRstatus, CRnote, CRsong, CRsongLock, CoverDesign, CDstatus, CDnote, CDchoice, NoteForAdmin, NoteForClient, AccntStatus, LastUpdate, ToDo, ProjectDone) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['DBID'], "int"),
                       GetSQLValueString($_POST['RegionID'], "text"),
                       GetSQLValueString($_POST['PackageID'], "text"),
                       GetSQLValueString($_POST['FormatID'], "text"),
                       GetSQLValueString($_POST['EventID'], "text"),
                       GetSQLValueString($_POST['EventDate'], "date"),
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
                       GetSQLValueString($_POST['rsUsername'], "text"),
                       GetSQLValueString($_POST['rsPassword'], "text"),
                       GetSQLValueString($_POST['Referral'], "text"),
                       GetSQLValueString($_POST['PackageAmt'], "double"),
                       GetSQLValueString($_POST['Opt1Value'], "text"),
                       GetSQLValueString($_POST['Opt1Amt'], "double"),
                       GetSQLValueString(isset($_POST['Opt1Tax']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['Opt2Value'], "text"),
                       GetSQLValueString($_POST['Opt2Amt'], "double"),
                       GetSQLValueString(isset($_POST['Opt2Tax']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['Opt3Value'], "text"),
                       GetSQLValueString($_POST['Opt3Amt'], "double"),
                       GetSQLValueString(isset($_POST['Opt3Tax']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['TaxRate'], "double"),
                       GetSQLValueString($_POST['PaidAmt'], "double"),
                       GetSQLValueString($_POST['PriceNote'], "text"),
                       GetSQLValueString($_POST['PrepTime1'], "text"),
                       GetSQLValueString($_POST['PrepName1'], "text"),
                       GetSQLValueString($_POST['PrepAddr1'], "text"),
                       GetSQLValueString($_POST['PrepWeb1'], "text"),
                       GetSQLValueString(isset($_POST['PrepSame']) ? "true" : "", "defined","1","0"),
					   GetSQLValueString(isset($_POST['AllSame']) ? "true" : "", "defined","1","0"),
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
                       GetSQLValueString(isset($_POST['OnlineGallery']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['OGstatus']) ? "true" : "", "defined","1","0"),
					   GetSQLValueString($_POST['GalleryID'], "text"),
					   GetSQLValueString($_POST['PictName'], "text"),
					   GetSQLValueString($_POST['PictOwner'], "text"),
					   GetSQLValueString($_POST['PictEmail'], "text"),
					   GetSQLValueString($_POST['OGnote'], "text"),
                       GetSQLValueString(isset($_POST['DigitalImages']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['DIstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['DInote'], "text"),
                       GetSQLValueString($_POST['DIchoice'], "text"),
                       GetSQLValueString(isset($_POST['EngShoot']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['ESstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['ESnote'], "text"),
                       GetSQLValueString($_POST['ESchoice'], "text"),
                       GetSQLValueString(isset($_POST['PCredit']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['PCstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['PCnote'], "text"),
                       GetSQLValueString($_POST['PCamt'], "double"),
                       GetSQLValueString($_POST['PCused'], "double"),
                       GetSQLValueString(isset($_POST['VideoFormat']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['VFstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['VFnote'], "text"),
                       GetSQLValueString($_POST['VFchoice'], "text"),
                       GetSQLValueString(isset($_POST['PreVideo']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['PVoption'], "text"),
                       GetSQLValueString(isset($_POST['PVstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['PVnote'], "text"),
                       GetSQLValueString($_POST['PVchoice'], "text"),
                       GetSQLValueString($_POST['PVsong'], "text"),
					   GetSQLValueString(isset($_POST['PVsongLock']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['PVcolors'], "text"),
					   GetSQLValueString(isset($_POST['PVcolorLock']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['MusicStyle']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['MSstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['MSnote'], "text"),
                       GetSQLValueString($_POST['MSchoice'], "text"),
                       GetSQLValueString(isset($_POST['Credits']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['CRchoice'], "text"),
                       GetSQLValueString(isset($_POST['CRstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['CRnote'], "text"),
					   GetSQLValueString($_POST['CRsong'], "text"),
					   GetSQLValueString(isset($_POST['CRsongLock']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['CoverDesign']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['CDstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['CDnote'], "text"),
                       GetSQLValueString($_POST['CDchoice'], "text"),
                       GetSQLValueString($_POST['NoteForAdmin'], "text"),
                       GetSQLValueString($_POST['NoteForClient'], "text"),
                       GetSQLValueString($_POST['AccntStatus'], "text"),
                       GetSQLValueString($_POST['LastUpdate'], "date"),
					   GetSQLValueString($_POST['ToDo'], "text"),
					   GetSQLValueString(isset($_POST['ProjectDone']) ? "true" : "", "defined","1","0"));

  mysql_select_db($database_conn_Clients, $conn_Clients);
  $Result1 = mysql_query($insertSQL, $conn_Clients) or die(mysql_error());

  $insertGoTo = "master.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

//SS update code
if ((isset($_POST["MM_update"])) && ($_POST["MM_update"]=="frmData")){
  $updateSQL = sprintf("UPDATE ATD SET RegionID=%s, PackageID=%s, FormatID=%s, EventID=%s, EventDate=%s, FirstName1=%s, LastName1=%s, FirstName2=%s, LastName2=%s, rsAddress=%s, rsCity=%s, rsState=%s, rsZipcode=%s, rsCountry=%s, rsPhone1=%s, rsPhone2=%s, rsEmail1=%s, rsEmail2=%s, rsUsername=%s, rsPassword=%s, Referral=%s, PackageAmt=%s, Opt1Value=%s, Opt1Amt=%s, Opt1Tax=%s, Opt2Value=%s, Opt2Amt=%s, Opt2Tax=%s, Opt3Value=%s, Opt3Amt=%s, Opt3Tax=%s, TaxRate=%s, PaidAmt=%s, PriceNote=%s, PrepTime1=%s, PrepName1=%s, PrepAddr1=%s, PrepWeb1=%s, PrepSame=%s, AllSame=%s, PrepTime2=%s, PrepName2=%s, PrepAddr2=%s, PrepWeb2=%s, FirstMtg=%s, CeremonyTime=%s, CeremonyName=%s, CeremonyAddr=%s, CeremonyWeb=%s, RecptTime=%s, RecptName=%s, RecptAddr=%s, RecptWeb=%s, OnlineGallery=%s, OGstatus=%s, GalleryID=%s, PictName=%s, PictOwner=%s, PictEmail=%s, OGnote=%s, DigitalImages=%s, DIstatus=%s, DInote=%s, DIchoice=%s, EngShoot=%s, ESstatus=%s, ESnote=%s, ESchoice=%s, PCredit=%s, PCstatus=%s, PCnote=%s, PCamt=%s, PCused=%s, VideoFormat=%s, VFstatus=%s, VFnote=%s, VFchoice=%s, PreVideo=%s, PVoption=%s, PVstatus=%s, PVnote=%s, PVchoice=%s, PVsong=%s, PVsongLock=%s, PVcolors=%s, PVcolorLock=%s, MusicStyle=%s, MSstatus=%s, MSnote=%s, MSchoice=%s, Credits=%s, CRchoice=%s, CRstatus=%s, CRnote=%s, CRsong=%s, CRsongLock=%s, CoverDesign=%s, CDstatus=%s, CDnote=%s, CDchoice=%s, NoteForAdmin=%s, NoteForClient=%s, AccntStatus=%s, LastUpdate=%s, ToDo=%s, ProjectDone=%s WHERE DBID=%s",
                       GetSQLValueString($_POST['RegionID'], "text"),
                       GetSQLValueString($_POST['PackageID'], "text"),
                       GetSQLValueString($_POST['FormatID'], "text"),
                       GetSQLValueString($_POST['EventID'], "text"),
                       GetSQLValueString($_POST['EventDate'], "date"),
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
                       GetSQLValueString($_POST['rsUsername'], "text"),
                       GetSQLValueString($_POST['rsPassword'], "text"),
                       GetSQLValueString($_POST['Referral'], "text"),
                       GetSQLValueString($_POST['PackageAmt'], "double"),
                       GetSQLValueString($_POST['Opt1Value'], "text"),
                       GetSQLValueString($_POST['Opt1Amt'], "double"),
                       GetSQLValueString(isset($_POST['Opt1Tax']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['Opt2Value'], "text"),
                       GetSQLValueString($_POST['Opt2Amt'], "double"),
                       GetSQLValueString(isset($_POST['Opt2Tax']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['Opt3Value'], "text"),
                       GetSQLValueString($_POST['Opt3Amt'], "double"),
                       GetSQLValueString(isset($_POST['Opt3Tax']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['TaxRate'], "double"),
                       GetSQLValueString($_POST['PaidAmt'], "double"),
                       GetSQLValueString($_POST['PriceNote'], "text"),
					   GetSQLValueString($_POST['PrepTime1'], "text"),
                       GetSQLValueString($_POST['PrepName1'], "text"),
                       GetSQLValueString($_POST['PrepAddr1'], "text"),
                       GetSQLValueString($_POST['PrepWeb1'], "text"),
                       GetSQLValueString(isset($_POST['PrepSame']) ? "true" : "", "defined","1","0"),
					   GetSQLValueString(isset($_POST['AllSame']) ? "true" : "", "defined","1","0"),
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
                       GetSQLValueString(isset($_POST['OnlineGallery']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['OGstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['GalleryID'], "text"),
					   GetSQLValueString($_POST['PictName'], "text"),
					   GetSQLValueString($_POST['PictOwner'], "text"),
					   GetSQLValueString($_POST['PictEmail'], "text"),
					   GetSQLValueString($_POST['OGnote'], "text"),
                       GetSQLValueString(isset($_POST['DigitalImages']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['DIstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['DInote'], "text"),
                       GetSQLValueString($_POST['DIchoice'], "text"),
                       GetSQLValueString(isset($_POST['EngShoot']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['ESstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['ESnote'], "text"),
                       GetSQLValueString($_POST['ESchoice'], "text"),
                       GetSQLValueString(isset($_POST['PCredit']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['PCstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['PCnote'], "text"),
                       GetSQLValueString($_POST['PCamt'], "double"),
                       GetSQLValueString($_POST['PCused'], "double"),
                       GetSQLValueString(isset($_POST['VideoFormat']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['VFstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['VFnote'], "text"),
                       GetSQLValueString($_POST['VFchoice'], "text"),
                       GetSQLValueString(isset($_POST['PreVideo']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['PVoption'], "text"),
                       GetSQLValueString(isset($_POST['PVstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['PVnote'], "text"),
                       GetSQLValueString($_POST['PVchoice'], "text"),
                       GetSQLValueString($_POST['PVsong'], "text"),
					   GetSQLValueString(isset($_POST['PVsongLock']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['PVcolors'], "text"),
					   GetSQLValueString(isset($_POST['PVcolorLock']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['MusicStyle']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['MSstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['MSnote'], "text"),
                       GetSQLValueString($_POST['MSchoice'], "text"),
                       GetSQLValueString(isset($_POST['Credits']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['CRchoice'], "text"),
                       GetSQLValueString(isset($_POST['CRstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['CRnote'], "text"),
					   GetSQLValueString($_POST['CRsong'], "text"),
					   GetSQLValueString(isset($_POST['CRsongLock']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['CoverDesign']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['CDstatus']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['CDnote'], "text"),
                       GetSQLValueString($_POST['CDchoice'], "text"),
                       GetSQLValueString($_POST['NoteForAdmin'], "text"),
                       GetSQLValueString($_POST['NoteForClient'], "text"),
                       GetSQLValueString($_POST['AccntStatus'], "text"),
                       GetSQLValueString($_POST['LastUpdate'], "date"),
					   GetSQLValueString($_POST['ToDo'], "text"),
					   GetSQLValueString(isset($_POST['ProjectDone']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['DBID'], "int"));

  mysql_select_db($database_conn_Clients, $conn_Clients);
  $Result1 = mysql_query($updateSQL, $conn_Clients) or die(mysql_error());

  $updateGoTo = "details.php";
  if (isset($_SERVER['QUERY_STRING'])) {
	  $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
	  $updateGoTo .= $_SERVER['QUERY_STRING'];
	  }
	  header(sprintf("Location: %s", $updateGoTo));
}

//SS Added lines
if($pageName!='insert'){

$maxRows_rsUpdate = 10;
$pageNum_rsUpdate = 0;
if (isset($_GET['pageNum_rsUpdate'])) {
  $pageNum_rsUpdate = $_GET['pageNum_rsUpdate'];
}
$startRow_rsUpdate = $pageNum_rsUpdate * $maxRows_rsUpdate;

$colname_rsUpdate = "-1";
if (isset($_GET['DBID'])) {
  $colname_rsUpdate = $_GET['DBID'];
}
mysql_select_db($database_conn_Clients, $conn_Clients);
$query_rsUpdate = sprintf("SELECT * FROM ATD WHERE DBID = %s", GetSQLValueString($colname_rsUpdate, "int"));
$query_limit_rsUpdate = sprintf("%s LIMIT %d, %d", $query_rsUpdate, $startRow_rsUpdate, $maxRows_rsUpdate);
$rsUpdate = mysql_query($query_limit_rsUpdate, $conn_Clients) or die(mysql_error());
$row_rsUpdate = mysql_fetch_assoc($rsUpdate);

if (isset($_GET['totalRows_rsUpdate'])) {
  $totalRows_rsUpdate = $_GET['totalRows_rsUpdate'];
} else {
  $all_rsUpdate = mysql_query($query_rsUpdate);
  $totalRows_rsUpdate = mysql_num_rows($all_rsUpdate);
}
$totalPages_rsUpdate = ceil($totalRows_rsUpdate/$maxRows_rsUpdate)-1;
}//SS Added end
?> <!doctype html><html class="no-js" lang="en"><head><meta charset="utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="theme-color" content="#22659C"><meta name="author" content="Stephen Steinbach"><meta name="webBuild" content="construction"><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script><link rel="stylesheet" href="../_css/reset.min.css"><link rel="stylesheet" href="../dev/_css/bootstrapBtns.min.css"><title><? echo ucfirst($pageName);?>Client Data</title><link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css"><script src="/_js/myCustom/getTotal.min.js"></script><script src="/_js/myCustom/maskInput.min.js"></script><script src="/_js/myCustom/accountToggles.min.js"></script><style>/* MOBILE FIRST */
body{background-color:#d2b48c;margin:0 auto;max-width:600px}
header{background:#222}
#details{background:#666}
#contact{background:#444}
#schedule{background:#888}
#options{background:#AAA}
footer{background:#222}

@media only screen and (max-width: 1199px) and (min-width: 800px){
body{background-color:#796d5e;margin:0 auto;max-width:900px}
form{display:grid;grid-template-columns:repeat(2,1fr);grid-template-rows:auto;grid-template-areas:"header header" "details schedule" "contact options" "footer footer"}
header{grid-area:header}
#details{grid-area:details}
#contact{grid-area:contact}
#schedule{grid-area:schedule}
#options{grid-area:options}
footer{grid-area:footer}
}
@media only screen and (min-width: 1200px){
body{background-color:orange;margin:10 auto;max-width:1200px}
form{display:grid;grid-template-columns:repeat(4,1fr);grid-template-rows:auto;grid-template-areas:"header header header header" "details contact schedule options" "footer footer footer footer"}
header{grid-area:header}
#details{grid-area:details}
#contact{grid-area:contact}
#schedule{grid-area:schedule}
#options{grid-area:options}
footer{grid-area:footer}
}</style><title><? echo ucfirst($pageName);?></title></head><body><form method="POST" action="<? echo $editFormAction; ?>" name="frmData"><input name="DBID" type="hidden" value="<? echo $row_rsUpdate['DBID']; ?>"><header><nav><img id="Logo" alt="" src="/_img/logo/logo.svg"> <a href="#/" data-reveal-id="TDmod" class="btn btn-info">Notes:</a> <button type="submit" value="submit" name="submit" class="btn btn-success"> <? if($pageName=='insert'){echo'Insert';}else{echo'Update';} ?> </button> <a href="master.php" class="btn btn-warning">Exit</a></nav></header><section id="details"><h3>Package</h3><input id="PDlock" type="checkbox" name="ProjectDone" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['ProjectDone'],1))){echo' checked';}} ?> > <label for="PDlock">lock</label><div><select name="RegionID"><option value="NW" <? if(!(strcmp('NW',$row_rsUpdate['RegionID']))){echo' selected';}?>>Northwest</option><option value="SW" <? if(!(strcmp('SW',$row_rsUpdate['RegionID']))){echo' selected';}?>>Southwest</option><option value="MW" <? if(!(strcmp('MW',$row_rsUpdate['RegionID']))){echo' selected';}?>>Midwest</option><option value="EC" <? if(!(strcmp('EC',$row_rsUpdate['RegionID']))){echo' selected';}?>>Eastcoast</option><option value="NE" <? if(!(strcmp('NE',$row_rsUpdate['RegionID']))){echo' selected';}?>>Northeast</option><option value="SE" <? if(!(strcmp('SE',$row_rsUpdate['RegionID']))){echo' selected';}?>>Southeast</option><option value="HI" <? if(!(strcmp('HI',$row_rsUpdate['RegionID']))){echo' selected';}?>>Hawaii</option><option value="AK" <? if(!(strcmp('AK',$row_rsUpdate['RegionID']))){echo' selected';}?>>Alaska</option><option value="CN" <? if(!(strcmp('CN',$row_rsUpdate['RegionID']))){echo' selected';}?>>Canada</option><option value="MX" <? if(!(strcmp('MX',$row_rsUpdate['RegionID']))){echo' selected';}?>>Mexico</option><option value="EU" <? if(!(strcmp('EU',$row_rsUpdate['RegionID']))){echo' selected';}?>>Europe</option> <? do{ ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0) {
                      mysql_data_seek($rsUpdate, 0);
                      $row_rsUpdate = mysql_fetch_assoc($rsUpdate);
                  } ?> </select></div><div><select name="PackageID"><option value="P" <? if(!(strcmp('P',$row_rsUpdate['PackageID']))){echo' selected';}?>>Platinum</option><option value="G" <? if(!(strcmp('G',$row_rsUpdate['PackageID']))){echo' selected';}?>>Gold</option><option value="S" <? if(!(strcmp('S',$row_rsUpdate['PackageID']))){echo' selected';}?>>Silver</option><option value="B" <? if(!(strcmp('B',$row_rsUpdate['PackageID']))){echo' selected';}?>>Bronze</option> <? do{ ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0) {
                      mysql_data_seek($rsUpdate, 0);
                      $row_rsUpdate = mysql_fetch_assoc($rsUpdate);
                  } ?> </select></div><div><select name="EventID"><option value="Wedding" <? if(!(strcmp('Wedding',$row_rsUpdate['EventID']))){echo' selected';}?>>Wedding</option><option value="Gay" <? if(!(strcmp('Gay',$row_rsUpdate['EventID']))){echo' selected';}?>>Gay</option><option value="Cultural" <? if(!(strcmp('Cultural',$row_rsUpdate['EventID']))){echo' selected';}?>>Cultural</option> <? do{ ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0) {
                      mysql_data_seek($rsUpdate, 0);
                      $row_rsUpdate = mysql_fetch_assoc($rsUpdate);
                  } ?> </select></div><div><select name="FormatID"><option value="P" <? if(!(strcmp('P',$row_rsUpdate['FormatID']))){echo' selected';}?>>Photography</option><option value="V" <? if(!(strcmp('V',$row_rsUpdate['FormatID']))){echo' selected';}?>>Videography</option><option value="B" <? if(!(strcmp('B',$row_rsUpdate['FormatID']))){echo' selected';}?>>Both</option><option value="C" <? if(!(strcmp('C',$row_rsUpdate['FormatID']))){echo' selected';}?>>Custom</option> <? do{ ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0) {
                      mysql_data_seek($rsUpdate, 0);
                      $row_rsUpdate = mysql_fetch_assoc($rsUpdate);
                  } ?> </select></div><div><input type="text" name="EventDate" id="eventDate" value="<? echo $row_rsUpdate['EventDate'];?>" onfocus="this.select()" onmouseup="return false"></div><div><input type="text" name="Referral" value="<? echo trim($row_rsUpdate['Referral']);?>" onfocus="this.select()" onmouseup="return false"></div><div><select name="AccntStatus"><option value="Normal" <? if(!(strcmp('Normal',$row_rsUpdate['AccntStatus']))){echo' selected';}?>>Normal</option><option value="Sample" <? if(!(strcmp('Sample',$row_rsUpdate['AccntStatus']))){echo' selected';}?>>Sample</option><option value="Completed" <? if(!(strcmp('Completed',$row_rsUpdate['AccntStatus']))){echo' selected';}?>>Completed</option><option value="Cancelled" <? if(!(strcmp('Cancelled',$row_rsUpdate['AccntStatus']))){echo' selected';}?>>Cancelled</option><option value="Expired" <? if(!(strcmp('Expired',$row_rsUpdate['AccntStatus']))){echo' selected';}?>>Expired</option> <? do{ ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0) {
                      mysql_data_seek($rsUpdate, 0);
                      $row_rsUpdate = mysql_fetch_assoc($rsUpdate);
                  } ?> </select></div> <?php
    if($pageName!="insert"){
      $contract="https://abouttheday.com/_paper/".substr($row_rsUpdate["EventDate"], 0, 4)."/".$row_rsUpdate["LastName1"]."/".$row_rsUpdate["RegionID"]."".$row_rsUpdate["PackageID"]."".$row_rsUpdate["FormatID"].".pdf";
      $scan="https://abouttheday.com/_paper/".substr($row_rsUpdate["EventDate"], 0, 4)."/".$row_rsUpdate["LastName1"]."/".str_replace("-","",substr($row_rsUpdate["EventDate"], 0, 10)).".pdf";
    ?> <div> <?php
    $env=explode(".",gethostname());
    if(($env[0]=="Boromir")||($env[0]=="Azog")){
      $headers = @get_headers($contract);
      //VIEW ARRAY//echo "<pre>";print_r($headers);echo "/<pre>";
      if(strpos($headers[0],"200")===false){
        echo"<input type=\"button\" value=\"No Contract\" class=\"btn btn-default\" disabled />";}
      else echo"<a href=\"".$contract."\" target=\"_blank\" class=\"btn btn-success\">Contract</a> | ";
      $headers = @get_headers($scan);
      //VIEW ARRAY//echo "<pre>";print_r($headers);echo "/<pre>";
      if(strpos($headers[0],"200")===false){
        echo"<input type=\"button\" value=\"No Scan\" class=\"btn btn-default\" disabled />";}
        else echo"<a href=\"".$scan."\" target=\"_blank\" class=\"btn btn-success\">Scan</a>";
    } //--End Boromir or Azog
    if($env[1]=="bluehost"){
      if(file_exists($contract)){
        echo "<a href=\"".$contract."\" target=\"_blank\" class=\"btn btn-success\">Contract</a> | ";}
      else {echo"<input type=\"button\" value=\"No Contract\" class=\"btn btn-default\" disabled /> | ";}
      if(file_exists($scan)){
        echo "<a href=\"".$scan."\" target=\"_blank\" class=\"btn btn-success\">Scan</a>";}
      else {echo"<input type=\"button\" value=\"No Scan\" class=\"btn btn-default\" disabled />";}
        clearstatcache();
    } //--End Bluehost ?> </div> <? } ?> <div>Package Price: <input type="text" name="PackageAmt" id="PackageAmt" value="<? echo $row_rsUpdate['PackageAmt'];?>" onBlur="this.value=FormatCurrency(this.value);doMath();" onfocus="this.select()" onmouseup="return false"> <input type="button" id="AddOpt1" value="+" class="btn btn-info"></div><div>Tax Rate: <input type="text" name="TaxRate" id="TaxRate" value="<? echo $row_rsUpdate['TaxRate'];?>" onBlur="this.value=this.value;doMath();" onfocus="this.select()" onmouseup="return false"> %</div><div class="toggleOpt1"><input type="text" name="Opt1Value" id="Opt1Value" value="<? echo trim($row_rsUpdate['Opt1Value']);?>" onfocus="this.select()" onmouseup="return false"> <input name="Opt1Amt" id="Opt1Amt" type="text" value="<? echo $row_rsUpdate['Opt1Amt'];?>" onfocus="this.select()" onBlur="this.value=FormatCurrency(this.value);doMath();" onmouseup="return false"> <input type="checkbox" name="Opt1Tax" id="Opt1Tax" <? if($pageName!='insert'){ if(!(strcmp($row_rsUpdate['Opt1Tax'],1))){echo' checked';}?> value="<? echo $row_rsUpdate['Opt1Tax'];?>" onClick="doMath();" <? } ?> > <input type="button" id="AddOpt2" value="+" class="btn btn-info"></div><div class="toggleOpt2"><input type="text" name="Opt2Value" id="Opt2Value" value="<? echo trim($row_rsUpdate['Opt2Value']);?>" onfocus="this.select()" onmouseup="return false"> <input type="text" name="Opt2Amt" id="Opt2Amt" value="<? echo $row_rsUpdate['Opt2Amt'];?>" onfocus="this.select()" onBlur="this.value=FormatCurrency(this.value);doMath();" onmouseup="return false"> <input type="checkbox" name="Opt2Tax" id="Opt2Tax" <? if($pageName!='insert'){ if(!(strcmp($row_rsUpdate['Opt2Tax'],1))){echo' checked';}?> value="<? echo $row_rsUpdate['Opt2Tax'];?>" onClick="doMath();" <? } ?> > <input type="button" id="AddOpt3" value="+" class="btn btn-info"></div><div class="toggleOpt3"><input type="text" name="Opt3Value" id="Opt3Value" value="<? echo trim($row_rsUpdate['Opt3Value']);?>" onfocus="this.select()" onmouseup="return false"> <input type="text" name="Opt3Amt" id="Opt3Amt" value="<? echo $row_rsUpdate['Opt3Amt'];?>" onBlur="this.value=FormatCurrency(this.value);doMath();" onfocus="this.select()" onmouseup="return false"> <input type="checkbox" class="buttonCB" name="Opt3Tax" id="Opt3Tax" <? if($pageName!='insert'){ if(!(strcmp($row_rsUpdate['Opt3Tax'],1))){echo' checked';}?> value="<? echo $row_rsUpdate['Opt3Tax'];?>" onClick="doMath();" <? } ?> ></div><div class="toggleAddDI <?php if(($row_rsUpdate['DIchoice']!='') || ($row_rsUpdate['DIchoice']!='Download')){echo 'phpshow';}else{echo 'phphide';} ?>"><input type="text" id="DIVal" value=""> <input type="text" id="DIAmt" value=""></div><div class="toggleAddES <?php if(($row_rsUpdate['ESchoice']!='') || ($row_rsUpdate['ESchoice']!='WithDI')){echo 'phpshow';}else{echo 'phphide';} ?>"><input type="text" id="ESVal" value=""> <input type="text" id="ESAmt" value=""></div><div class="toggleAddVF <?php if($row_rsUpdate['VFchoice']!=''){echo 'phpshow';}else{echo 'phphide';} ?>"><input type="text" id="VFVal" value=""> <input type="text" id="VFAmt" value=""></div><div>Sub Total: <input type="text" id="SubTotal" value="" readonly="readonly"></div><div>Tax Total: <input type="text" id="TaxTotal" value="" readonly="readonly"></div><div>All Total: <input type="text" id="AllTotal" value="" readonly="readonly"></div><div>Paid Amt: <input type="text" name="PaidAmt" id="PaidAmt" value="<? echo $row_rsUpdate['PaidAmt'];?>" onfocus="this.select()" onBlur="this.value=FormatCurrency(this.value);doMath();" onmouseup="return false"></div><div>All Total: <input type="text" id="AmtDue" value="" readonly="readonly"></div><div>Price Note: <input type="button" id="PNview" value="+" class="btn btn-info"></div><div class="togglePN"><textarea name="PriceNote" id="PNvalue"><? echo trim($row_rsUpdate['PriceNote']);?></textarea></div><div>Client Note: <input type="button" id="NFCview" value="+" class="btn btn-info"></div><div class="toggleNFC"><textarea name="NoteForClient" id="NFCvalue"><? echo trim($row_rsUpdate['NoteForClient']);?></textarea></div><div>Admin Note: <input type="button" id="NFAview" value="+" class="btn btn-info"></div><div class="toggleNFA"><textarea name="NoteForAdmin" id="NFAvalue"><? echo trim($row_rsUpdate['NoteForAdmin']);?></textarea></div></section><section id="contact"><h3>Contact</h3><div>First Name 1: <input type="text" name="FirstName1" id="FirstName1" value="<? echo trim($row_rsUpdate['FirstName1']);?>" onfocus="this.select()" onmouseup="return false"></div><div>Last Name 1: <input type="text" name="LastName1" id="LastName1" value="<? echo trim($row_rsUpdate['LastName1']);?>" onfocus="this.select()" onmouseup="return false"></div><div>First Name 2: <input type="text" name="FirstName2" id="FirstName2" value="<? echo trim($row_rsUpdate['FirstName2']);?>" onfocus="this.select()" onmouseup="return false"></div><div>Last Name 2: <input type="text" name="LastName2" id="LastName2" value="<? echo trim($row_rsUpdate['LastName2']);?>" onfocus="this.select()" onmouseup="return false"></div><div><input type="text" name="rsAddress" value="<? echo trim($row_rsUpdate['rsAddress']);?>" onfocus="this.select()" onmouseup="return false"></div><div><input type="text" name="rsCity" value="<? echo trim($row_rsUpdate['rsCity']);?>" onfocus="this.select()" onmouseup="return false"> <input type="text" name="rsState" value="<? echo $row_rsUpdate['rsState'];?>" onfocus="this.select()" onmouseup="return false" maxlength="2"> <input type="text" name="rsZipcode" value="<? echo $row_rsUpdate['rsZipcode'];?>" onfocus="this.select()" onmouseup="return false"></div><div><input type="text" name="rsCountry" value="<? echo trim($row_rsUpdate['rsCountry']);?>" onfocus="this.select()" onmouseup="return false"></div><div><input type="tel" name="rsPhone1" id="phone-1" value="<? echo $row_rsUpdate['rsPhone1'];?>" onfocus="this.select()" onmouseup="return false" required> <input type="button" id="addPhone" value="+" class="btn btn-info"></div><div class="toggleAddPhone"><input type="tel" name="rsPhone2" id="phone-2" value="<? echo $row_rsUpdate['rsPhone2'];?>" onfocus="this.select()" onmouseup="return false"> <input type="button" id="phone-x" value="x" class="btn btn-info"></div><div><input type="email" name="rsEmail1" id="email-1" value="<? echo trim($row_rsUpdate['rsEmail1']);?>" onfocus="this.select()" onmouseup="return false"> <input type="button" id="addEmail" value="+" class="btn btn-info"></div><div class="toggleAddEmail"><input type="email" name="rsEmail2" id="email-2" value="<? echo trim($row_rsUpdate['rsEmail2']);?>" onfocus="this.select()" onmouseup="return false"> <input type="button" id="email-x" value="x" class="btn btn-info"></div><div><input type="text" name="rsUsername" id="username" value="<? echo trim($row_rsUpdate['rsUsername']);?>" onfocus="this.select()" onmouseup="return false" required> <input type="button" id="makeUN" value="&hellip;" class="btn btn-info"></div><div><input type="text" name="rsPassword" id="password" value="<? echo trim($row_rsUpdate['rsPassword']);?>" onfocus="this.select()" onmouseup="return false"> <input type="button" id="makePW" value="&hellip;" class="btn btn-info"></div></section><section id="schedule"><h3>Schedule</h3><div class="input-group"><span class="input-group-label"><i class="fa fa-eye fa-fw"></i></span> <select name="FirstMtg" class="input-group-field classic"><option value="" <? if(!(strcmp('',$row_rsUpdate['FirstMtg']))){echo' selected';}?>>- Choose -</option><option value="Before" <? if(!(strcmp('Before',$row_rsUpdate['FirstMtg']))){echo' selected';}?>>Before</option><option value="During" <? if(!(strcmp('During',$row_rsUpdate['FirstMtg']))){echo' selected';}?>>During</option><option value="Unsure" <? if(!(strcmp('Unsure',$row_rsUpdate['FirstMtg']))){echo' selected';}?>>Unsure</option> <? do{ ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0) {
                      mysql_data_seek($rsUpdate, 0);
                      $row_rsUpdate = mysql_fetch_assoc($rsUpdate);
                  } ?> </select></div><label> <? if($pageName=='insert'){ ?> <input type="checkbox" name="PrepSame" value="" id="cbPrepSame"> <? }else{ ?> <input <? if(!(strcmp($row_rsUpdate['PrepSame'],1))){echo' checked';}?> type="checkbox" id="cbPrepSame" name="PrepSame"> <? } ?> Preparations for both parties are at the same location</label><br><label> <? if($pageName=='insert'){ ?> <input type="checkbox" name="AllSame" value="" id="cbAllSame"> <? }else{ ?> <input <? if(!(strcmp($row_rsUpdate['AllSame'],1))){echo' checked';}?> type="checkbox" id="cbAllSame" name="AllSame"> <? } ?> Everything is at the same location</label><ul class="accordion" data-accordion><li class="accordion-item is-active" data-accordion-item><a href="#" class="accordion-title">Preps1</a><ul class="accordion-content" data-tab-content><li><div class="input-group"><span class="input-group-label">Time:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['PrepTime1']);?>" type="text" name="PrepTime1" id="PrepTime1" onfocus="this.select()" onmouseup="return false"></div></li><li><div class="input-group"><span class="input-group-label">Place:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['PrepName1']);?>" type="text" name="PrepName1" id="PrepName1" onfocus="this.select()" onmouseup="return false"></div></li><li><div class="input-group"><span class="input-group-label">Address:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['PrepAddr1']);?>" type="text" name="PrepAddr1" id="PrepAddr1" onfocus="this.select()" onmouseup="return false"></div></li><li><div class="input-group"><span class="input-group-label">Website:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['PrepWeb1']);?>" type="text" name="PrepWeb1" id="PrepWeb1" onfocus="this.select()" onmouseup="return false"></div></li></ul></li><li class="accordion-item" data-accordion-item><a href="#" class="accordion-title">Preps2</a><ul class="accordion-content" data-tab-content><li><div class="input-group"><span class="input-group-label">Time:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['PrepTime2']);?>" type="text" name="PrepTime2" id="PrepTime2" onfocus="this.select()" onmouseup="return false"></div></li><li><div class="input-group"><span class="input-group-label">Place:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['PrepName2']);?>" type="text" name="PrepName2" id="PrepName2" onfocus="this.select()" onmouseup="return false"></div></li><li><div class="input-group"><span class="input-group-label">Address:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['PrepAddr2']);?>" type="text" name="PrepAddr2" id="PrepAddr2" onfocus="this.select()" onmouseup="return false"></div></li><li><div class="input-group"><span class="input-group-label">Website:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['PrepWeb2']);?>" type="text" name="PrepWeb2" id="PrepWeb2" onfocus="this.select()" onmouseup="return false"></div></li></ul></li><li class="accordion-item" data-accordion-item><a href="#" class="accordion-title">Ceremony</a><ul class="accordion-content" data-tab-content><li><div class="input-group"><span class="input-group-label">Time:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['CeremonyTime']);?>" type="text" name="CeremonyTime" id="CeremonyTime" onfocus="this.select()" onmouseup="return false"></div></li><li><div class="input-group"><span class="input-group-label">Place:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['CeremonyName']);?>" type="text" name="CeremonyName" id="CeremonyName" onfocus="this.select()" onmouseup="return false"></div></li><li><div class="input-group"><span class="input-group-label">Address:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['CeremonyAddr']);?>" type="text" name="CeremonyAddr" id="CeremonyAddr" onfocus="this.select()" onmouseup="return false"></div><input type="button" id="caURL" class="small success"></li><li><div class="input-group"><span class="input-group-label">Website:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['CeremonyWeb']);?>" type="text" name="CeremonyWeb" id="CeremonyWeb" onfocus="this.select()" onmouseup="return false"></div></li></ul></li><li class="accordion-item" data-accordion-item><a href="#" class="accordion-title">Reception</a><ul class="accordion-content" data-tab-content><li><div class="input-group"><span class="input-group-label">Time:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['ReceptTime']);?>" type="text" name="ReceptTime" id="ReceptTime" onfocus="this.select()" onmouseup="return false"></div></li><li><div class="input-group"><span class="input-group-label">Place:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['ReceptName']);?>" type="text" name="ReceptName" id="ReceptName" onfocus="this.select()" onmouseup="return false"></div></li><li><div class="input-group"><span class="input-group-label">Address:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['ReceptAddr']);?>" type="text" name="ReceptAddr" id="ReceptAddr" onfocus="this.select()" onmouseup="return false"></div></li><li><div class="input-group"><span class="input-group-label">Website:</span> <input class="input-group-field" value="<? echo trim($row_rsUpdate['ReceptWeb']);?>" type="text" name="ReceptWeb" id="ReceptWeb" onfocus="this.select()" onmouseup="return false"></div></li></ul></li></ul></section><section id="options"><h3>Options</h3><div><input id="cbOG" type="checkbox" name="OnlineGallery" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['OnlineGallery'],1))){echo' checked';}} ?> > <label for="cbOG">Online Gallery</label> <input type="button" id="OGnView" value="+" class="btn btn-info"></div><div class="toggleOG">Gallery #: <input value="<? echo $row_rsUpdate['GalleryID'];?>" type="text" name="GalleryID"> <a href="http://photos.abouttheday.com/event/<? echo htmlentities($row_rsUpdate['GalleryID'],ENT_COMPAT,'UTF-8');?>" target="_blank" title="View Gallery #<? echo $row_rsUpdate['GalleryID'];?>">Link</a> <input type="checkbox" id="OGlock" name="OGstatus" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['OGstatus'],1))){echo' checked';}} ?> > <label for="OGlock">Lock</label></div><div class="toggleOG toggleOGn"><textarea id="OGnote" name="OGnote"><? echo $row_rsUpdate['OGnote'];?></textarea></div><div><input id="cbDI" type="checkbox" name="DigitalImages" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['DigitalImages'],1))){echo' checked';}} ?> > <label for="cbDI">Digital Images</label> <input type="button" id="DInView" value="+" class="btn btn-info"></div><div class="toggleDI"><select name="DIchoice" id="DIchoice"><option value="" <? if(!(strcmp('',$row_rsUpdate['DIchoice']))){echo' selected';} ?>>-- Choose --</option><option value="Download" <? if(!(strcmp('Download',$row_rsUpdate['DIchoice']))){echo' selected';} ?>>Full Download</option><option value="Drive" <? if(!(strcmp('Drive',$row_rsUpdate['DIchoice']))){echo' selected';} ?>>Flash ($20)</option><option value="Disc" <? if(!(strcmp('Disc',$row_rsUpdate['DIchoice']))){echo' selected';} ?>>DVD ($40)</option><option value="xDI" <? if(!(strcmp('xDI',$row_rsUpdate['DIchoice']))){echo' selected';} ?>>No Fee</option> <? do{ ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                    $rows = mysql_num_rows($rsUpdate);
                    if($rows > 0) {
                        mysql_data_seek($rsUpdate, 0);
                        $row_rsUpdate = mysql_fetch_assoc($rsUpdate);
                    } ?> </select> <input type="checkbox" id="DIlock" name="DIstatus" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['DIstatus'],1))){echo' checked';}} ?> > <label for="DIlock">Lock</label></div><div class="toggleDI toggleDIn"><textarea id="DInote" name="DInote"><? echo $row_rsUpdate['DInote'];?></textarea></div><div><input id="cbPC" type="checkbox" name="PCredit" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['PCredit'],1))){echo' checked';}} ?> > <label for="cbPC">Purchasing Credit</label> <input type="button" id="PCnView" value="+" class="btn btn-info"></div><div class="collapse togglePC"><div>Amount: <input type="text" name="PCamt" id="PCamt" value="<? echo $row_rsUpdate['PCamt'];?>"> <input type="checkbox" id="PClock" name="PCstatus" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['PCstatus'],1))){echo' checked';}} ?> > <label for="PClock">Lock</label></div><div>Used: <input type="text" name="PCused" id="PCused" value="<? echo $row_rsUpdate['PCused'];?>"></div><div>Balance: <input type="text" name="PCbal" id="PCbal" value=""></div></div><div class="togglePC togglePCn"><textarea id="PCnote" name="PCnote"><? echo $row_rsUpdate['PCnote'];?></textarea></div><div><input id="cbES" type="checkbox" name="EngShoot" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['EngShoot'],1))){echo' checked';}} ?> > <label for="cbES">Engagement Shoot</label> <input type="button" id="ESnView" value="+" class="btn btn-info"></div><div class="toggleES"><select name="ESchoice" id="ESchoice"><option value="" <? if(!(strcmp('',$row_rsUpdate['ESchoice']))){echo' selected';} ?>>-- Choose --</option><option value="WithDI" <? if(!(strcmp('WithDI',$row_rsUpdate['ESchoice']))){echo' selected';}?>>With Digital Images</option><option value="Book" <? if(!(strcmp('Book',$row_rsUpdate['ESchoice']))){echo' selected';}?>>Book ($50)</option><option value="Frame" <? if(!(strcmp('Frame',$row_rsUpdate['ESchoice']))){echo' selected';}?>>Frame ($50)</option><option value="Both" <? if(!(strcmp('Both',$row_rsUpdate['ESchoice']))){echo' selected';}?>>Both ($90)</option><option value="xES" <? if(!(strcmp('xES',$row_rsUpdate['ESchoice']))){echo' selected';}?>>No Fee</option> <? do { ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                    $rows = mysql_num_rows($rsUpdate);
                    if($rows > 0) {
                        mysql_data_seek($rsUpdate, 0);
                        $row_rsUpdate = mysql_fetch_assoc($rsUpdate);
                    } ?> </select> <input type="checkbox" id="ESlock" name="ESstatus" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['ESstatus'],1))){echo' checked';}} ?> > <label for="ESlock">Lock</label></div><div class="toggleES toggleESn"><textarea id="ESnote" name="ESnote"><? echo $row_rsUpdate['ESnote'];?></textarea></div><div><input id="cbVF" type="checkbox" name="VideoFormat" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['VideoFormat'],1))){echo' checked';}} ?> > <label for="cbVF">Video Format</label> <input type="button" id="VFnView" value="+" class="btn btn-info"></div><div class="collapse toggleVF"><select name="VFchoice" id="VFchoice"><option value="" <? if(!(strcmp('',$row_rsUpdate['VFchoice']))){echo' selected';}?>>- Choose -</option><option value="SD" <? if(!(strcmp('SD',$row_rsUpdate['VFchoice']))){echo' selected';}?>>SD</option><option value="HD" <? if(!(strcmp('HD',$row_rsUpdate['VFchoice']))){echo' selected';}?>>HD ($1000)</option><option value="VFx" <? if(!(strcmp('VFx',$row_rsUpdate['VFchoice']))){echo' selected';}?>>No Fee</option> <? do{ ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                    $rows = mysql_num_rows($rsUpdate);
                    if($rows > 0) {
                        mysql_data_seek($rsUpdate, 0);
                        $row_rsUpdate = mysql_fetch_assoc($rsUpdate);
                    } ?> </select> <input type="checkbox" id="VFlock" name="VFstatus" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['VFstatus'],1))){echo' checked';}} ?> > <label for="VFlock">Lock</label></div><div class="toggleVF toggleVFn"><textarea id="VFnote" name="VFnote"><? echo $row_rsUpdate['VFnote'];?></textarea></div><div><input id="cbPV" type="checkbox" name="PreVideo" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['PreVideo'],1))){echo' checked';}} ?> > <select name="PVoption"><option value="" <? if(!(strcmp('',$row_rsUpdate['PVoption']))) {echo' selected';}?>>-- Choose Presentation --</option><option value="PhotoMontage" <? if(!(strcmp('PhotoMontage',$row_rsUpdate['PVoption']))) {echo' selected';}?>>PhotoMontage</option><option value="LoveStory" <? if(!(strcmp('LoveStory',$row_rsUpdate['PVoption']))) {echo' selected';}?>>LoveStory</option> <? do{ ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                    $rows = mysql_num_rows($rsUpdate);
                    if($rows > 0) {
                        mysql_data_seek($rsUpdate, 0);
                        $row_rsUpdate = mysql_fetch_assoc($rsUpdate);
                    } ?> </select> <input type="button" id="PVnView" value="+" class="btn btn-info"></div><div class="togglePV"><select name="PVchoice"><option value="" <? if(!(strcmp('',$row_rsUpdate['PVchoice']))){echo' selected';}?>>-- Choose --</option><option value="Before" <? if(!(strcmp('Before',$row_rsUpdate['PVchoice']))){echo' selected';}?>>Completed Before the Event</option><option value="After" <? if(!(strcmp('After',$row_rsUpdate['PVchoice']))){echo' selected';}?>>Completed After the Event</option> <? do{ ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0){mysql_data_seek($rsUpdate, 0);
                  $row_rsUpdate = mysql_fetch_assoc($rsUpdate);}
                  ?> </select> <input type="checkbox" id="PVlock" name="PVstatus" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['PVstatus'],1))){echo' checked';}} ?> > <label for="PVlock">Lock</label><div>Song: <input value="<? echo $row_rsUpdate['PVsong'];?>" type="text" name="PVsong"> <input type="checkbox" id="PVsl" name="PVsongLock" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['PVsongLock'],1))){echo' checked';}} ?> > <label for="PVsl">Lock</label></div><div>Colors: <input value="<? echo $row_rsUpdate['PVcolors'];?>" type="text" name="PVcolors"> <input type="checkbox" id="PVcl" name="PVcolorLock" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['PVcolorLock'],1))){echo' checked';}} ?> > <label for="PVcl">Lock</label></div></div><div class="togglePV togglePVn"><textarea id="PVnote" name="PVnote"><? echo $row_rsUpdate['PVnote'];?></textarea></div><div><input id="cbCR" type="checkbox" name="Credits" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['Credits'],1))){echo' checked';}} ?> > <label for="cbCR">Credits</label> <input type="button" id="CRnView" value="+" class="btn btn-info"></div><div class="toggleCR"><select name="CRchoice"><option value="" <? if(!(strcmp('',$row_rsUpdate['CRchoice']))){echo' selected';}?>>-- Choose --</option><option value="TextOnly" <? if(!(strcmp('TextOnly',$row_rsUpdate['CRchoice']))){echo' selected';}?>>Text Only Credits</option><option value="Images" <? if(!(strcmp('Images',$row_rsUpdate['CRchoice']))){echo' selected';}?>>Photo / Video Credits</option> <? do{ ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                  $rows = mysql_num_rows($rsUpdate);
                  if($rows > 0){mysql_data_seek($rsUpdate, 0);
                  $row_rsUpdate = mysql_fetch_assoc($rsUpdate);}
                  ?> </select> <input type="checkbox" id="CRlock" name="CRstatus" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['CRstatus'],1))){echo' checked';}} ?> > <label for="CRlock">Lock</label><div>Song: <input value="<? echo $row_rsUpdate['CRsong'];?>" type="text" name="CRsong"> <input type="checkbox" id="CRsl" name="CRsongLock" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['CRsongLock'],1))){echo' checked';}} ?> > <label for="CRsl">Lock</label></div></div><div class="toggleCR toggleCRn"><textarea id="CRnote" name="CRnote"><? echo $row_rsUpdate['CRnote'];?></textarea></div><div><input id="cbMS" type="checkbox" name="MusicStyle" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['MusicStyle'],1))){echo' checked';}} ?> > <label for="cbMS">Music Style</label> <input type="button" id="MSnView" value="+" class="btn btn-info"></div><div class="toggleMS"><select name="MSchoice"><option value="" <? if(!(strcmp('',$row_rsUpdate['MSchoice']))){echo' selected';}?>>- Choose -</option><option value="MT" <? if(!(strcmp('MT',$row_rsUpdate['MSchoice']))){echo' selected';}?>>Match Our Theme</option><option value="CL" <? if(!(strcmp('CL',$row_rsUpdate['MSchoice']))){echo' selected';}?>>Classical</option><option value="JZ" <? if(!(strcmp('JZ',$row_rsUpdate['MSchoice']))){echo' selected';}?>>Jazz</option><option value="RK" <? if(!(strcmp('RK',$row_rsUpdate['MSchoice']))){echo' selected';}?>>Rock</option><option value="CW" <? if(!(strcmp('CW',$row_rsUpdate['MSchoice']))){echo' selected';}?>>Country</option><option value="UB" <? if(!(strcmp('UB',$row_rsUpdate['MSchoice']))){echo' selected';}?>>UpBeat - Pop</option><option value="MC" <? if(!(strcmp('MC',$row_rsUpdate['MSchoice']))){echo' selected';}?>>Match Our Culture</option> <? do{ ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                    $rows = mysql_num_rows($rsUpdate);
                    if($rows > 0) {
                        mysql_data_seek($rsUpdate, 0);
                        $row_rsUpdate = mysql_fetch_assoc($rsUpdate);
                    } ?> </select> <input type="checkbox" id="MSlock" name="MSstatus" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['MSstatus'],1))){echo' checked';}} ?> > <label for="MSlock">Lock</label></div><div class="toggleMS toggleMSn"><textarea id="MSnote" name="MSnote"><? echo $row_rsUpdate['MSnote'];?></textarea></div><div><input id="cbCD" type="checkbox" name="CoverDesign" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['CoverDesign'],1))){echo' checked';}} ?> > <label for="cbCD">Cover Design</label> <input type="button" id="CDnView" value="+" class="btn btn-info"></div><div class="toggleCD"><select name="CDchoice"><option value="" <? if(!(strcmp('',$row_rsUpdate['CDchoice']))){echo' selected';}?>>- Choose -</option><option value="Us" <? if(!(strcmp('Us',$row_rsUpdate['CDchoice']))){echo' selected';}?>>Us</option><option value="Them" <? if(!(strcmp('Them',$row_rsUpdate['CDchoice']))){echo' selected';}?>>Them</option> <? do{ ?> <? }while ($row_rsUpdate = mysql_fetch_assoc($rsUpdate));
                    $rows = mysql_num_rows($rsUpdate);
                    if($rows > 0) {
                        mysql_data_seek($rsUpdate, 0);
                        $row_rsUpdate = mysql_fetch_assoc($rsUpdate);
                    } ?> </select> <input type="checkbox" id="CDlock" name="CDstatus" <? if($pageName=='insert'){ ?> value="" <? }else{ if(!(strcmp($row_rsUpdate['CDstatus'],1))){echo' checked';}} ?> > <label for="CDlock">Lock</label></div><div class="toggleCD toggleCDn"><textarea id="CDnote" name="CDnote"><? echo $row_rsUpdate['CDnote'];?></textarea></div></section><footer><button type="submit" value="submit" name="submit" class="btn btn-success"> <? if($pageName=='insert'){echo'Insert';}else{echo'Update';} ?> </button> <a href="master.php" class="btn btn-warning">Exit</a> <a onClick="confirm('Are you sure you want to delete <? echo $row_rsUpdate['LastName1']; ?>\'s account?'); return false;" href="delete.php?DBID=<? echo $row_rsUpdate['DBID']; ?>" class="btn btn-danger">Delete</a></footer> <? if($pageName!='insert'){ ?> <div class="row"><div class="small-12 columns text-center"><small>Last Update: <? echo date('M d, Y h:i', strtotime($row_rsUpdate['LastUpdate']));?></small></div></div> <? }//End LastUpdate ?> <input type="hidden" name="<? if($pageName=='insert'){echo 'MM_insert';}else{echo 'MM_update';} ?>" value="frmData"> <input type="hidden" name="LastUpdate" value="<? echo date('Y-m-d H:i:s a');?>"><div id="TDmod" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog"><a class="close-reveal-modal"><i class="fa fa-times-circle clrRed"></i></a><div class="row"><div class="small-12 columns"><h3>Things TO DO</h3><hr></div></div><div class="row"><div class="small-12 columns"><textarea name="ToDo" id="ToDo"><? echo $row_rsUpdate['ToDo'];?></textarea></div></div></div><script>doMath();</script></body></html> <?php
mysql_free_result($rsUpdate);
?>