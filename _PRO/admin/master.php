<?php session_start(); ?> <?php //bypass Access ID
//if (isset($_SESSION['id']) && $_SESSION['id']=='1'){
//	$userId = $_SESSION['id'];
//}
//else header('Location: login.php?Status=Failed');
?> <?php require_once('../connections/conn_Clients.php'); ?> <?php
//SQL variables
//Default
if (($_GET['ob']=='') && ($_GET['dir']=='')){
	$icon_glob='sort';
	$icon_blob='sort';
	$icon_date='sort-numeric-desc';
	$sql_orderby='EventDate';
	$sql_dir='DESC';
	$tog_dir='ASC';
}

if (($_GET['ob']=='g') && ($_GET['dir']=='DESC')){
	$icon_glob='sort-alpha-desc';
	$icon_blob='sort';
	$icon_date='sort';
	$sql_orderby='LastName1';
	$sql_dir='DESC';
	$tog_dir='ASC';	
}
if (($_GET['ob']=='g') && ($_GET['dir']=='ASC')){
	$icon_glob='sort-alpha-asc';
	$icon_blob='sort';
	$icon_date='sort';
	$sql_orderby='LastName1';
	$sql_dir='ASC';
	$tog_dir='DESC';
}
if (($_GET['ob']=='b') && ($_GET['dir']=='DESC')){
	$icon_glob='sort';
	$icon_blob='sort-alpha-desc';
	$icon_date='sort';
	$sql_orderby='LastName2';
	$sql_dir='DESC';
	$tog_dir='ASC';	
}
if (($_GET['ob']=='b') && ($_GET['dir']=='ASC')){
	$icon_glob='sort';
	$icon_blob='sort-alpha-asc';
	$icon_date='sort';
	$sql_orderby='LastName2';
	$sql_dir='ASC';
	$tog_dir='DESC';
}
if (($_GET['ob']=='d') && ($_GET['dir']=='DESC')){
	$icon_glob='sort';
	$icon_blob='sort';
	$icon_date='sort-numeric-desc';
	$sql_orderby='EventDate';
	$sql_dir='DESC';
	$tog_dir='ASC';	
}
if (($_GET['ob']=='d') && ($_GET['dir']=='ASC')){
	$icon_glob='sort';
	$icon_blob='sort';
	$icon_date='sort-numeric-asc';
	$sql_orderby='EventDate';
	$sql_dir='ASC';
	$tog_dir='DESC';
}
?> <?php
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

if ((isset($_GET['DBID'])) && ($_GET['DBID'] != "")) {
  $deleteSQL = sprintf("DELETE FROM ATD WHERE DBID=%s",
                       GetSQLValueString($_GET['DBID'], "int"));

  mysql_select_db($database_conn_Clients, $conn_Clients);
  $Result1 = mysql_query($deleteSQL, $conn_Clients) or die(mysql_error());

  $deleteGoTo = "master.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rsClients = 39;
$pageNum_rsClients = 0;
if (isset($_GET['pageNum_rsClients'])) {
  $pageNum_rsClients = $_GET['pageNum_rsClients'];
}
$startRow_rsClients = $pageNum_rsClients * $maxRows_rsClients;

//Custom Recordset Behavior
mysql_select_db($database_conn_Clients, $conn_Clients);
if (isset($_POST['txt_Search']))
{ // Show search results
	$searchword = $_POST['txt_Search'];
	$query_rsClients = "SELECT * FROM ATD WHERE (LastName1 LIKE '%".$searchword."%') OR (LastName2 LIKE '%".$searchword."%') OR (FirstName1 LIKE '%".$searchword."%') OR (FirstName2 LIKE '%".$searchword."%')";
}
else // Show All Records
{	
	$query_rsClients = "SELECT * FROM ATD ORDER BY ".$sql_orderby." ".$sql_dir."";
}
$query_limit_rsClients = sprintf("%s LIMIT %d, %d", $query_rsClients, $startRow_rsClients, $maxRows_rsClients);
$rsClients = mysql_query($query_limit_rsClients, $conn_Clients) or die(mysql_error());
$row_rsClients = mysql_fetch_assoc($rsClients);
//end Custom Recordset Behavior

if (isset($_GET['totalRows_rsClients'])) {
  $totalRows_rsClients = $_GET['totalRows_rsClients'];
} else {
  $all_rsClients = mysql_query($query_rsClients);
  $totalRows_rsClients = mysql_num_rows($all_rsClients);
}
$totalPages_rsClients = ceil($totalRows_rsClients/$maxRows_rsClients)-1;

//$maxRows_rsClients = 39;
//$pageNum_rsClients = 0;
//if (isset($_GET['pageNum_rsClients'])) {
  //$pageNum_rsClients = $_GET['pageNum_rsClients'];
//}
//$startRow_rsClients = $pageNum_rsClients * $maxRows_rsClients;

$queryString_rsClients = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rsClients") == false && 
        stristr($param, "totalRows_rsClients") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rsClients = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rsClients = sprintf("&totalRows_rsClients=%d%s", $totalRows_rsClients, $queryString_rsClients);
?> <?php
// Contract Exists Data
$contract="../_paper/".substr($row_rsClients['EventDate'], 0, 4)."/".$row_rsClients['LastName1']."/".$row_rsClients['RegionID']."".$row_rsClients['PackageID']."".$row_rsClients['FormatID'].".pdf";
$contractName=$row_rsClients['RegionID']."".$row_rsClients['PackageID']."".$row_rsClients['FormatID'];
$contractLink="<a href=\"".substr($contract,2)."\" target=\"_blank\" title=\"Link to ".$contractName."\"><i class=\"fa fa-file-text\"></i></a>";
$contractNA="<i class=\"fa fa-ban\"></i>";
// Scan Exists Data
$scan="../_paper/".substr($row_rsClients['EventDate'], 0, 4)."/".$row_rsClients['LastName1']."/".str_replace("-","",substr($row_rsClients['EventDate'], 0, 10)).".pdf";
$scanLink="<a href=\"".substr($scan,2)."\" target=\"_blank\"><i class=\"fa fa-print\"></i></a>";
//Scan NA
$scanNA="<i class=\"fa fa-ban alert\" title=\"Not Available\"></i>";
//--?> <!DOCTYPE html><!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]--><html class="no-js" lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0"><script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><link rel="stylesheet" href="../_css/F5/default.min.css"><link rel="stylesheet" href="../_css/myCustom/panels.min.css"><style>body {
	background:#272727 url('https://www.abouttheday.com/_img/bg/bg-body.gif') repeat center top;
	margin:0px;
	height:auto;
}
.menuBG {background:#222;}
.radiusTop {border-radius:10px 10px 0px 0px;}
.radiusBot {border-radius:0px 0px 10px 10px;}
.pageBG {background:#DDD;}
.smTxt {color:#008CBA;}
.logoPad {padding:8px;}
a.Strike {color:#333;text-decoration:line-through;}</style></head><body><div class="small-12 columns" id="container"><div class="row"><div class="small-12 columns"><img src="/_img/universal/trans1x1.gif" width="10" height="10"></div></div></div><div class="row"><div class="small-12 columns"><div class="row menuBG radiusTop"><div class="medium-4 large-6 columns"><img src="/_img/logo/logo_thorn.png" class="logoPad"></div><div class="medium-8 large-6 columns"><div class="row hide-for-small"><div class="small-12 columns"><img src="/_img/universal/trans1x1.gif" width="22" height="22"></div></div><form method="post" name="form_Search" id="form_Search" action=""><div class="row collapse postfix-round"><div class="small-3 medium-2 columns element"><a class="button small radius success prefix" href="details.php?do=insert">Insert &nbsp;<i class="fa fa-plus-square fa-lg"></i></a></div><div class="small-6 medium-8 columns"><input name="txt_Search" id="txt_Search" type="Search" placeholder="Search Database"></div><div class="small-3 medium-2 columns"><a class="button small radius alert postfix" href="<?php echo $logoutAction ?>">logout &nbsp;<i class="fa fa-sign-out fa-lg"></i></a></div></div></form></div></div></div></div><div class="row pageBG"><div class="small-12 columns">&nbsp;</div></div><div class="row pageBG"><div class="small-12 columns"><div class="row"><div class="small-7 medium-5 columns"><a class="button tiny radius" href="?dir=<?php echo $tog_dir ?>&ob=g">GROOM <i class="fa fa-<?php echo $icon_glob ?> fa-lg"></i></a></div><div class="small-5 medium-5 columns"><a class="button tiny radius" href="?dir=<?php echo $tog_dir ?>&ob=b">BRIDE <i class="fa fa-<?php echo $icon_blob ?> fa-lg"></i></a></div><div class="hide-for-small medium-2 columns"><a class="button tiny radius" href="?dir=<?php echo $tog_dir ?>&ob=d">DATE <i class="fa fa-<?php echo $icon_date ?> fa-lg"></i></a></div></div><div class="row"><div class="small-12 columns"> <?php do { ?>  <?php
	  // Collect set Payment values from database
	  $vPackageAmt=$row_rsClients['PackageAmt'];
	  $vTaxRate=$row_rsClients['TaxRate'];
	  $vOpt1Amt=$row_rsClients['Opt1Amt'];
	  $vOpt2Amt=$row_rsClients['Opt2Amt'];
	  $vOpt3Amt=$row_rsClients['Opt3Amt'];
	  $vPaidAmt=$row_rsClients['PaidAmt'];		  
	  //ApplyTax
	  if($row_rsClients['Opt1Tax']=='1'){$vOpt1Tax=$vOpt1Amt;}else{$vOpt1Tax=0;}
	  if($row_rsClients['Opt2Tax']=='1'){$vOpt2Tax=$vOpt2Amt;}else{$vOpt2Tax=0;}
	  if($row_rsClients['Opt2Tax']=='1'){$vOpt3Tax=$vOpt3Amt;}else{$vOpt3Tax=0;}	  
	  //Caculate Combined Elements
	  $vSubAmt=$vPackageAmt+$vOpt1Amt+$vOpt2Amt+$vOpt3Amt;
	  $vTaxAmt=(($vPackageAmt+$vOpt1Tax+$vOpt2Tax+$vOpt3Tax)*$vTaxRate/100);
	  $vFullAmt=$vTaxAmt+$vSubAmt;
	  $vAmtDue=$vFullAmt-$vPaidAmt;
	  //Output Style	  
	  if($vFullAmt==$vAmtDue){$payClass=' clrRed';}elseif($vPaidAmt>=$vFullAmt || str_replace(",", "", number_format($vAmtDue, 2)) < str_replace(",", "", number_format(10, 2))){$payClass=' clrGreen';}else{$payClass=' clrOrange';}
	  //Scan Exists Data
	  $scan="../_paper/".substr($row_rsClients['EventDate'], 0, 4)."/".$row_rsClients['LastName1']."/".str_replace("-","",substr($row_rsClients['EventDate'], 0, 10)).".pdf";
	  $scanLink="<a href=\"".substr($scan,2)."\" target=\"_blank\"><i class=\"fa fa-lock fa-fw clrGreen\"></i></a>";
	  $scanNA="<i class=\"fa fa-ban fa-fw clrRed\"></i>";
	  ?> <div class="row<? echo ($i%2==0? ' clrAltBgOdd':''); ?>"><div class="small-7 medium-5 columns"><a href="#/"><? if($row_rsClients['ProjectDone']=='1'){echo '<i class="fa fa-check-square'. $payClass .'"></i>';}else{echo '<i class="fa fa-square'. $payClass .'"></i>';} ?></a>&nbsp;<a class="<? if($row_rsClients['AccntStatus']=='Cancelled'){echo 'Strike';} ?>" href="details.php?DBID=<?php echo $row_rsClients['DBID']; ?>&do=update"> <?php echo $row_rsClients['LastName1']; ?></a> <?php if($row_rsClients['ToDo']!=''){echo '<span class="clrRed"><i class="fa fa-comment" title="'.$row_rsClients['ToDo'].'"></i></span>';}?> <?php if(($row_rsClients['DIchoice']!='') && ($row_rsClients['DIstatus']!='1')){echo '<span title="'.$row_rsClients['DIchoice'].'"><i class="fa fa-user-plus"></i></span>';}?> </div><div class="small-5 medium-5 columns"><a class="<? if($row_rsClients['AccntStatus']=='Cancelled'){echo 'Strike';} ?>" href="details.php?DBID=<?php echo $row_rsClients['DBID']; ?>&do=update"> <?php echo $row_rsClients['LastName2']; ?></a></div><div class="hide-for-small medium-2 columns"><a href="details.php?DBID=<?php echo $row_rsClients['DBID']; ?>&do=update"> <?php echo date('Y/m/d',strtotime($row_rsClients['EventDate'])); ?></a>&nbsp;<a href="#/"><? if (file_exists($scan)){echo $scanLink;}else{echo $scanNA;} ?></a></div></div> <?php
      $i++;
	  } while (($row_rsClients = mysql_fetch_assoc($rsClients)) && ($row_rsClients['EventDate'] > date('Y-m-d'))); ?>  <?php if($pageNum_rsClients < 1){ ?> <div class="row"><div class="small-12 columns clrRedBg" style="height:1px;"><img src="/_img/universal/trans1x1.gif" width="1" height="1"></div></div> <?php } ?> <?php do { ?>  <?php
	  // Collect set Payment values from database
	  $vPackageAmt=$row_rsClients['PackageAmt'];
	  $vTaxRate=$row_rsClients['TaxRate'];
	  $vOpt1Amt=$row_rsClients['Opt1Amt'];
	  $vOpt2Amt=$row_rsClients['Opt2Amt'];
	  $vOpt3Amt=$row_rsClients['Opt3Amt'];
	  $vPaidAmt=$row_rsClients['PaidAmt'];		  
	  //ApplyTax
	  if($row_rsClients['Opt1Tax']=='1'){$vOpt1Tax=$vOpt1Amt;}else{$vOpt1Tax=0;}
	  if($row_rsClients['Opt2Tax']=='1'){$vOpt2Tax=$vOpt2Amt;}else{$vOpt2Tax=0;}
	  if($row_rsClients['Opt2Tax']=='1'){$vOpt3Tax=$vOpt3Amt;}else{$vOpt3Tax=0;}	  
	  //Caculate Combined Elements
	  $vSubAmt=$vPackageAmt+$vOpt1Amt+$vOpt2Amt+$vOpt3Amt;
	  $vTaxAmt=(($vPackageAmt+$vOpt1Tax+$vOpt2Tax+$vOpt3Tax)*$vTaxRate/100);
	  $vFullAmt=$vTaxAmt+$vSubAmt;
	  $vAmtDue=$vFullAmt-$vPaidAmt;
	  //Output Style	  
	  if($vFullAmt==$vAmtDue){$payClass=' clrRed';}elseif($vPaidAmt>=$vFullAmt || str_replace(",", "", number_format($vAmtDue, 2)) < str_replace(",", "", number_format(10, 2))){$payClass=' clrGreen';}else{$payClass=' clrOrange';}
	  //Scan Exists Data
	  $scan="../_paper/".substr($row_rsClients['EventDate'], 0, 4)."/".$row_rsClients['LastName1']."/".str_replace("-","",substr($row_rsClients['EventDate'], 0, 10)).".pdf";
	  $scanLink="<a href=\"".substr($scan,2)."\" target=\"_blank\"><i class=\"fa fa-lock fa-fw clrGreen\"></i></a>";
	  $scanNA="<i class=\"fa fa-ban fa-fw clrRed\"></i>";
	  ?> <div class="row<? echo ($i%2==0? ' clrAltBgOdd':''); ?>"><div class="small-7 medium-5 columns"><a href="#/"><? if($row_rsClients['ProjectDone']=='1'){echo '<i class="fa fa-check-square'. $payClass .'"></i>';}else{echo '<i class="fa fa-square'. $payClass .'"></i>';} ?></a>&nbsp;<a class="<? if($row_rsClients['AccntStatus']=='Cancelled'){echo 'Strike';} ?>" href="details.php?DBID=<?php echo $row_rsClients['DBID']; ?>&do=update"> <?php echo $row_rsClients['LastName1']; ?></a> <?php if($row_rsClients['ToDo']!=''){echo '<span class="clrRed"><i class="fa fa-comment" title="'.$row_rsClients['ToDo'].'"></i></span>';}?> <?php if(($row_rsClients['DIchoice']!='') && ($row_rsClients['DIstatus']!='1')){echo '<span title="'.$row_rsClients['DIchoice'].'"><i class="fa fa-user-plus"></i></span>';}?> </div><div class="small-5 medium-5 columns"><a class="<? if($row_rsClients['AccntStatus']=='Cancelled'){echo 'Strike';} ?>" href="details.php?DBID=<?php echo $row_rsClients['DBID']; ?>&do=update"> <?php echo $row_rsClients['LastName2']; ?></a></div><div class="hide-for-small medium-2 columns"><a href="details.php?DBID=<?php echo $row_rsClients['DBID']; ?>&do=update"> <?php echo date('Y/m/d',strtotime($row_rsClients['EventDate'])); ?></a>&nbsp;<a href="#/"><? if (file_exists($scan)){echo $scanLink;}else{echo $scanNA;} ?></a></div></div> <?php
	  $i++;
	  } while (($row_rsClients = mysql_fetch_assoc($rsClients)) && ($row_rsClients['EventDate'] < date('Y-m-d'))); ?> </div></div></div></div><div class="row pageBG"><div class="small-12 columns">&nbsp;</div></div><div class="row menuBG"><div class="small-12 columns">&nbsp;</div></div><div class="row menuBG radiusBot"><div class="medium-3 columns text-center"><a href="master.php" class="button tiny radius alert">Show All &nbsp;<i class="fa fa-refresh fa-lg"></i></a></div><div class="medium-6 columns text-center"> <?php if ($pageNum_rsClients > 0) { // Show if not first page ?> <a class="button tiny radius success" href="<?php printf("%s?pageNum_rsClients=%d%s", $currentPage, 0, $queryString_rsClients); ?>"><i class="fa fa-fast-backward fa-lg"></i></a> <?php } // Show if not first page
   else echo '<a class="button tiny radius disabled" href="#"><i class="fa fa-fast-backward fa-lg"></i></a>' ?> <?php if ($pageNum_rsClients > 0) { // Show if not first page ?> <a class="button tiny radius success" href="<?php printf("%s?pageNum_rsClients=%d%s", $currentPage, max(0, $pageNum_rsClients - 1), $queryString_rsClients); ?>"><i class="fa fa-play fa-rotate-180 fa-lg"></i></a> <?php } // Show if not first page
   else echo '<a class="button tiny radius disabled" href="#"><i class="fa fa-play fa-rotate-180 fa-lg"></i></a>' ?> <?php if ($pageNum_rsClients < $totalPages_rsClients) { // Show if not last page ?> <a class="button tiny radius success" href="<?php printf("%s?pageNum_rsClients=%d%s", $currentPage, min($totalPages_rsClients, $pageNum_rsClients + 1), $queryString_rsClients); ?>"><i class="fa fa-play fa-lg"></i></a> <?php } // Show if not last page
   else echo '<a class="button tiny radius disabled" href="#"><i class="fa fa-play fa-lg"></i></a>' ?> <?php if ($pageNum_rsClients < $totalPages_rsClients) { // Show if not last page ?> <a class="button tiny radius success" href="<?php printf("%s?pageNum_rsClients=%d%s", $currentPage, $totalPages_rsClients, $queryString_rsClients); ?>"><i class="fa fa-fast-forward fa-lg"></i></a> <?php } // Show if not last page
   else echo '<a class="button tiny radius disabled" href="#"><i class="fa fa-fast-forward fa-lg"></i></a>' ?> </div><div class="medium-3 columns text-center"><small class="smTxt">Records <?php echo ($startRow_rsClients + 1) ?> to <?php echo min($startRow_rsClients + $maxRows_rsClients, $totalRows_rsClients) ?> of <?php echo $totalRows_rsClients ?></small></div></div></body></html> <?php
mysql_free_result($rsClients);
?>