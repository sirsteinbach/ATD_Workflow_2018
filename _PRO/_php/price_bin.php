<?php
//BASE PRICE
$bBase=1495;
$sBase=1895;
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
setcookie('Region',$_GET['Region'],$expire,'/',$domain);
if($_GET['Region']=='NW'){$regionAdd=0;$regionName='Northwest';}
if($_GET['Region']=='CW'){$regionAdd=100;$regionName='Western Canada';}
if($_GET['Region']=='CE'){$regionAdd=100;$regionName='Eastern Canada';}
if($_GET['Region']=='SW'){$regionAdd=300;$regionName='Southwest';}
if($_GET['Region']=='MW'){$regionAdd=500;$regionName='Midwest';}
if($_GET['Region']=='CA'){$regionAdd=500;$regionName='Central America';}
if($_GET['Region']=='NE'){$regionAdd=600;$regionName='Northeast';}
if($_GET['Region']=='SE'){$regionAdd=600;$regionName='Southeast';}
if($_GET['Region']=='HI'){$regionAdd=600;$regionName='Hawaii';}
if($_GET['Region']=='AK'){$regionAdd=800;$regionName='Alaska';}
if($_GET['Region']=='EU'){$regionAdd=800;$regionName='Europe';}
if($_GET['Region']=='AU'){$regionAdd=1000;$regionName='Australia';}
if($_GET['Region']=='SA'){$regionAdd=1000;$regionName='South America';}
if($_GET['Region']=='AS'){$regionAdd=1200;$regionName='Asia';}
if($_GET['Region']=='AF'){$regionAdd=1500;$regionName='Africa';}

//DISCOUNTS
if ($Promo=='XYZ'){$Discount=100;}else{$Discount=0;}

//CALCULATE
$ppPrice=($pBase+$regionAdd)-$Discount;
$pvPrice=($pBase+$regionAdd)+400-$Discount;
$pbPrice=($pBase+$pBase+$regionAdd+$regionAdd)+400-$Discount;
$gpPrice=($gBase+$regionAdd)-$Discount;
$gvPrice=($gBase+$regionAdd)+400-$Discount;
$gbPrice=($gBase+$gBase+$regionAdd+ $regionAdd)+400-$Discount;
$spPrice=($sBase+$regionAdd)-$Discount;
$svPrice=($sBase+$regionAdd)+400-$Discount;
$sbPrice=($sBase+$sBase+$regionAdd+$regionAdd)+400-$Discount;
$bpPrice=($bBase+$regionAdd)-$Discount;
$bvPrice=($bBase+$regionAdd)+400-$Discount;
$bbPrice=($bBase+$bBase+$regionAdd+$regionAdd)+400-$Discount;

//OPTIONS
$Deposit=500;
$PD=500; //Photo Disc
$OM=100; //Online Montage
$ES=500; //Engagment Session
$EB=75; //Frame & Guestbook
$HR=300; //Hourly Rate
$EH=75; //Editing Hourly
$PM=250; //Photo Montage
$HE=250; //Honeymoon Ending
$LS=750; //Love Story
$HD=750; //High Definition
$RV=50; //Raw Video
$DT=100; //Drive Transfer
$XP=20; //Extra Photo Discs
$HV=750; //Highlight Video
$XH=10; //Extra Highlight Discs
$XW=20; //Extra Wedding Discs
$TF=3; //Transaction Fee
?>