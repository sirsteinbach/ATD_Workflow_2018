<?php
//BASE PRICE
$bBase=1495;
$sBase=1995;
$gBase=2795;
$pBase=3895;

//ADD ON VIDEO
$adV1=500;
$adV2=1000;
$adV3=1000;
$adV4=1500;

//PURCHASING CREDIT
$PCBamt=0;
$PCSamt=150;
$PCGamt=300;
$PCPamt=600;

//REGION ADD
$_SESSION['Region']=$_GET['Region'];
setcookie("Region",$_GET['Region'],$expire,"/",".abouttheday.com");
if($_GET['Region']=="NW"){$regionAdd=0;$PD=200;$_SESSION['RegionName']="the Northwest";}
if($_GET['Region']=="CW"){$regionAdd=100;$PD=200;$_SESSION['RegionName']="Western Canada";}
if($_GET['Region']=="CE"){$regionAdd=100;$PD=200;$_SESSION['RegionName']="Eastern Canada";}
if($_GET['Region']=="SW"){$regionAdd=300;$PD=200;$_SESSION['RegionName']="the Southwest";}
if($_GET['Region']=="MW"){$regionAdd=500;$PD=300;$_SESSION['RegionName']="the Midwest";}
if($_GET['Region']=="CA"){$regionAdd=500;$PD=400;$_SESSION['RegionName']="Central America";}
if($_GET['Region']=="NE"){$regionAdd=600;$PD=400;$_SESSION['RegionName']="the Northeast";}
if($_GET['Region']=="SE"){$regionAdd=600;$PD=400;$_SESSION['RegionName']="the Southeast";}
if($_GET['Region']=="HI"){$regionAdd=600;$PD=400;$_SESSION['RegionName']="Hawaii";}
if($_GET['Region']=="AK"){$regionAdd=600;$PD=400;$_SESSION['RegionName']="Alaska";}
if($_GET['Region']=="EU"){$regionAdd=800;$PD=300;$_SESSION['RegionName']="Europe";}
if($_GET['Region']=="AU"){$regionAdd=1000;$PD=300;$_SESSION['RegionName']="Australia";}
if($_GET['Region']=="SA"){$regionAdd=1000;$PD=400;$_SESSION['RegionName']="South America";}
if($_GET['Region']=="AS"){$regionAdd=1200;$PD=400;$_SESSION['RegionName']="Asia";}
if($_GET['Region']=="AF"){$regionAdd=1500;$PD=400;$_SESSION['RegionName']="Africa";}

//DISCOUNTS
if ($Promo=="XYZ"){$Discount=100;}else{$Discount=0;}

//CALCULATIONS
$ppPrice=($pBase+$regionAdd)-$Discount;
$pvPrice=($pBase+$regionAdd)+500-$Discount;
$pbPrice=($pBase+$pBase+$regionAdd+$regionAdd)+500-$Discount;
$gpPrice=($gBase+$regionAdd)-$Discount;
$gvPrice=($gBase+$regionAdd)+500-$Discount;
$gbPrice=($gBase+$gBase+$regionAdd+ $regionAdd)+500-$Discount;
$spPrice=($sBase+$regionAdd)-$Discount;
$svPrice=($sBase+$regionAdd)+400-$Discount;
$sbPrice=($sBase+$sBase+$regionAdd+$regionAdd)+400-$Discount;
$bpPrice=($bBase+$regionAdd)-$Discount;
$bvPrice=($bBase+$regionAdd)+400-$Discount;
$bbPrice=($bBase+$bBase+$regionAdd+$regionAdd)+400-$Discount;

$Deposit=500;
//Transaction Fee
$TF=3; 
//Digital Images
$DI=500;$DIn="Choice of Disc / Drive / Download - if not already included in your package"; 
//Engagment Session
$ES=500;$ESn="Engagement / Boudoir / Family (if not already included)";
//Hourly Rate
$HR=300;$HRn="time beyond package hours";
//Editing Hourly
$EH=75;$EHn="Hourly price for requested editing beyond scope of packages";
//Photo Montage
$PM=250;$PMn="Your photos set to your choice of music with motion and tiles";
//Honeymoon Ending
$HE=250;$HEn="Your honeymoon photos incorporated into the credits";
//Love Story
$LS=750;$LSn="Video documentary of your own story, set with photos, video interviews, and music";
//Extra Photo Discs
$XP=20;$XPn="Duplicates of inital purchased or included disc";
//Highlight Video
$HV=500;$HVn="A condenced version of the full-lenght video, set to music, and formated to share both onine and on DVD"; 
//Extra Wedding Discs
$XD=25;$XDn="Additional copies of included (or purchased) original disc"; 
//Add-On Videos
$WCdiy="Do-It-Yourself. We film the ceremony and afterwards we hand over the footage directly to you.";
$WCedit="We film the ceremony and afterwards we edit your video for you.";
$FCdiy="Do-It-Yourself. We film the all the important parts of the day (during our photography hours), including the ceremony. Afterwards we hand over the footage directly to you.";
$FCedit="We film the all the important parts of the day (during our photography hours), including the ceremony. Afterwards we edit the video for you.";
?> <?php
if(isset($_GET['Format']) && ($_GET['Format']=="V")){
	$formatName="Videography";
	$_SESSION['Format']="V";
	$pPrice=$pvPrice;
	$gPrice=$gvPrice;
	$sPrice=$svPrice;
	$bPrice=$bvPrice;
	$pageName="VideoPrices";
	setcookie("Format","V",$expire,"/",".abouttheday.com");
	}
elseif(isset($_GET['Format']) && ($_GET['Format']=="B")){
	$formatName="Photo & Video";
	$_SESSION['Format']="B";
	$pPrice=$pbPrice;
	$gPrice=$gbPrice;
	$sPrice=$sbPrice;
	$bPrice=$bbPrice;
	$pageName="BothPrices";
	setcookie("Format","B",$expire,"/",".abouttheday.com");
	}
else {
	$formatName="Photography";
	$_SESSION['Format']="P";
	$pPrice=$ppPrice;
	$gPrice=$gpPrice;
	$sPrice=$spPrice;
	$bPrice=$bpPrice;
	setcookie("Format","P",$expire,"/",".abouttheday.com");
	}
?>