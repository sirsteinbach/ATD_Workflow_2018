<?php //ONLY VIEW FOR PHOTOGRAPHY
  if((!isset($_GET['Format'])) || ($_GET['Format']!="P")){
    header("Location:../packages/prices.php?Region=".$_SESSION['Region']."&Format=".$_SESSION['Format']);
    exit;
  }
  if((!isset($_GET['Region'])) || (isset($_GET['Region']) && $_GET['Region']=="") || (isset($_GET['Region']) && $_GET['Region']=="XX")){
    header("Location:../packages/region.php?Format=".$_SESSION['Format']);
    exit;
  }
?>
<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
  date_default_timezone_set("America/Los_Angeles");
	$expire=time()+60*60*24*60;
	$thisPage="Compare";$thisMenu="Prices";
	$_SESSION['EyesOn']['Page']=$thisPage;
	$_SESSION['EyesOn']['Menu']=$thisMenu;
	$_SESSION['EyesOn']['Sub']="";
	$_SESSION['EyesOn']['Set']="";
	$_SESSION['Viewed'][$thisPage]=$thisPage;
	$visited=implode(",",array_unique($_SESSION['Viewed']));
	setcookie("Visited",$visited,$expire,"/",".abouttheday.com");
  require("../_php/referer.php");
	require("../_php/priceBin.php");
	require("../_php/checkpoints.php");
?>
<?php //Upgrade Formulas
	$b2sUp=($sPrice-$bPrice); //Bronze to Silver
	$s2gUp=($gPrice-$sPrice); //Silver to Gold
	$g2pUp=($pPrice-$gPrice); //Gold to Platinum	
	$sUpVal=(($HR*2)+$PCSamt); //Silver Value
	$gUpVal=(($HR*2)+($PCGamt-$PCSamt)+$PD); //Gold Value
	$pUpVal=(($HR*4)+($PCPamt-$PCGamt)+$ES); //Platinum Value
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
		<!--ANALYTICS-->
		<?php include_once($_SERVER['DOCUMENT_ROOT']."/_php/googleAnalytics.php");?>    
		<!--SELF-->
		<link rel="icon" href="../_img/universal/favicon.ico">
		<link rel="stylesheet" href="../_css/F6/Zurbed.css">
		<!--PAGE SPECIFIC-->
		<title>Compare Wedding Photography Packages</title>
		<link rel="stylesheet" href="../_css/specific/compare.css">
	</head>
  
	<body>
    
		<!--HEADSPACE-->
		<div class="column row show-for-large space1em"></div>
    
		<!--NAVBAR-->
		<?php require("../_php/navMain.php");?>
    
		<!--PAD-->
		<div class="column row space1em BgMain"></div>    
		<main class="column row BgMain">
      
			<!--COMPARE CHART-->  
			<div class="row BgMain">
				<div class="small-12 columns">
					<section>
						<header class="secHead bg_LtBlue">
							<div class="iLine c_LtBlue">
								<span class="fa-stack ilinePOS c_LtBlue"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-balance-scale fa-stack-1x fa-inverse"></i></span>
								<h1 class="c_333">Compare Wedding Photography Packages</h1>
							</div>
						</header>
						<div class="tableFull">
							<table class="center" cellspacing="0" cellpadding="0">
								<tr class="bg_LtBlue">
									<td class="horzLine padL padTall table3rd">&nbsp;</td>
									<td class="horzLine text-center table6th">
										<h3>Bronze</h3>
									</td>
									<td class="horzLine text-center table6th">
										<h3>Silver</h3>
									</td>
									<td class="horzLine text-center table6th">
										<h3>Gold</h3>
									</td>
									<td class="horzLine text-center table6th">
										<h3>Platinum</h3>
									</td>
								</tr>
								<tr>
									<td class="horzLine padLeft">
										<h3>Travel:</h3>
									</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-check-circle Green"></i><br>Included</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-check-circle Green"></i><br>Included</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-check-circle Green"></i><br>Included</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-check-circle Green"></i><br>Included</td>
								</tr>
								<tr class="bg_ExLtBlue">
									<td class="horzLine padLeft">
										<h3>Gallery:</h3>
									</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-check-circle Green"></i><br>Included</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-check-circle Green"></i><br>Included</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-check-circle Green"></i><br>Included</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-check-circle Green"></i><br>Included</td>
								</tr>
								<tr>
									<td class="horzLine padLeft">
										<h3>Photographers:</h3>
									</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-star Orange"></i><br>1</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-star Green"></i><br>2</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><br>2</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><br>2</td>
								</tr>
								<tr class="bg_ExLtBlue">
									<td class="horzLine padLeft">
										<h3>Hours:</h3>
									</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-star Orange"></i><br>4 hrs</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-star Green"></i><br>6 hrs</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><br>8 hrs</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><br>Unlimited</td>
								</tr>
								<tr>
									<td class="horzLine padLeft">
										<h3>Purchase Credit:</h3>
									</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-times-circle Red"></i><br>
										None
									</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-star Green"></i><br><sup>$</sup><?php echo $PCSamt;?> Credit</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><br><sup>$</sup><?php echo $PCGamt;?> Credit</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><br><sup>$</sup><?php echo $PCPamt;?> Credit</td>
								</tr>
								<tr class="bg_ExLtBlue">
									<td class="horzLine padLeft">
										<h3>Digital Images:</h3>
									</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-times-circle Red"></i><br>
										None
									</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-check-circle Orange"></i><br>&frac12; Price</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-check-circle Green"></i><br>Included</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-check-circle Green"></i><br>Included</td>
								</tr>
								<tr>
									<td class="horzLine padLeft">
										<h3>Engagement:</h3>
									</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-times-circle Red"></i><br>
										None
									</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-times-circle Red"></i><br>None</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-check-circle Orange"></i><br>&frac12; Price</td>
									<td class="text-center vertLine horzLine smText"><i class="fa fa-check-circle Green"></i><br>Included</td>
								</tr>
								<tr class="bg_LtBlue">
									<td class="padL padTall">&nbsp;</td>
									<td class="text-center">
										<sup>$</sup>
										<h3><?php echo $bpPrice;?></h3>
									</td>
									<td class="text-center">
										<sup>$</sup>
										<h3><?php echo $spPrice;?></h3>
									</td>
									<td class="text-center">
										<sup>$</sup>
										<h3><?php echo $gpPrice;?></h3>
									</td>
									<td class="text-center">
										<sup>$</sup>
										<h3><?php echo $ppPrice;?></h3>
									</td>
								</tr>
							</table>
						</div>
					</section>
				</div>
			</div>
      
			<!--UPGRADE-->
			<div class="row BgMain">
				<div class="medium-4 columns">
					<section>
						<header class="secHead bg_LtBlue text-center">
							<div class="iLine c_LtBlue">
								<h3 class="c_333">Bronze <i class="fa fa-chevron-circle-right c_LtBlue"></i> Silver</h3>
							</div>
						</header>
            
						<!--BRONZE-SILVER-->
						<div class="tableFull">
							<table class="center" cellspacing="0" cellpadding="0">
								<tr>
									<td class="text-center padCenter tableHalf horzLine smText"><i class="fa fa-star Orange"></i><br>4 hrs</td>
									<td class="text-center tableHalf vertLine horzLine smText"><i class="fa fa-star Green"></i><br>6 hrs</td>
								</tr>
								<tr>
									<td colspan="2" class="horzLine padLR MdText">Adding 2 extra hours to the Bronze will cost <sup>$</sup><?php echo ($HR*2) ?>. That costs more then the upgrade!</td>
								</tr>
								<tr>
									<td class="text-center padCenter horzLine smText"><i class="fa fa-times-circle Red"></i><br>None</td>
									<td class="text-center horzLine vertLine smText"><i class="fa fa-star Green"></i><br><sup>$</sup><?php echo $PCSamt;?> Credit</td>
								</tr>
								<tr>
									<td colspan="2" class="horzLine padLR MdText">We give you <sup>$</sup><?php echo $PCSamt;?> to spend with the Silver. Nothing with the Bronze.</td>
								</tr>
								<tr class="bg_LtBlue">
									<td colspan="2" class="text-center padExTall">
										<h3>Upgrade: <sup>$</sup><?php echo $sPrice-$bPrice ?> <i class="fa fa-chevron-circle-right c_LtBlue"></i> Value: <sup>$</sup><?php echo $sUpVal;?></h3>
									</td>
								</tr>
							</table>
						</div>
					</section>
				</div>
        
				<!--SILVER-GOLD-->
				<div class="medium-4 columns">
					<section>
						<header class="secHead bg_LtBlue text-center">
							<div class="iLine c_LtBlue">
								<h3 class="c_333">Silver <i class="fa fa-chevron-circle-right c_LtBlue"></i> Gold</h3>
							</div>
						</header>
						<div class="tableFull">
							<table class="center" cellspacing="0" cellpadding="0">
								<tr>
									<td class="text-center padCenter tableHalf horzLine smText"><i class="fa fa-star Green"></i><br>6 hrs</td>
									<td class="text-center tableHalf vertLine horzLine smText"><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><br>8 hrs</td>
								</tr>
								<tr>
									<td colspan="2" class="horzLine padLR MdText">If you add 2 hours to the Silver it will cost <sup>$</sup><?php echo ($HR*2);?>, which is almost the upgrade anyway.</td>
								</tr>
								<tr>
									<td class="text-center padCenter horzLine smText"><i class="fa fa-star Green"></i><br><sup>$</sup><?php echo $PCSamt;?> Credit</td>
									<td class="text-center horzLine vertLine smText"><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><br><sup>$</sup><?php echo $PCGamt;?> Credit</td>
								</tr>
								<tr>
									<td colspan="2" class="horzLine padLR MdText">We give you <sup>$</sup><?php echo $PCGamt;?> credit with the Gold. That&rsquo;s double the Silver.</td>
								</tr>
								<tr>
									<td class="text-center padCenter horzLine smText"><i class="fa fa-check-circle Orange"></i><br>&frac12; Price</td>
									<td class="text-center horzLine vertLine smText"><i class="fa fa-check-circle Green"></i><br>Included</td>
								</tr>
								<tr>
									<td colspan="2" class="horzLine padLR MdText">The Gold includes the <sup>$</sup><?php echo $DI;?> Digital Images. With the Silver, you&rsquo;d have to pay &frac12; price (<small><sup>$</sup><?php echo $DI/2;?></small>) more.</td>
								</tr>
								<tr class="bg_LtBlue">
									<td colspan="2" class="text-center padExTall">
										<h3>Upgrade: <sup>$</sup><?php echo $gPrice-$sPrice ?> <i class="fa fa-chevron-circle-right c_LtBlue"></i> Value: <sup>$</sup><?php echo $gUpVal;?></h3>
									</td>
								</tr>
							</table>
						</div>
					</section>
				</div>
        
				<!--GOLD-PLATINUM-->
				<div class="medium-4 columns">
					<section>
						<header class="secHead bg_LtBlue text-center">
							<div class="iLine c_LtBlue">
								<h3 class="c_333">Gold <i class="fa fa-chevron-circle-right c_LtBlue"></i> Platinum</h3>
							</div>
						</header>
						<div class="tableFull">
							<table class="center" cellspacing="0" cellpadding="0">
								<tr>
									<td class="text-center padCenter tableHalf horzLine smText"><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><br>8 hrs</td>
									<td class="text-center tableHalf vertLine horzLine smText"><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><br>Unlimited</td>
								</tr>
								<tr>
									<td colspan="2" class="horzLine padLR MdText">A 12hr day (<small>+4hrs more</small>) would cost <sup>$</sup><?php echo ($HR*4);?> in extra hours. <em>The upgrade costs less!</em></td>
								</tr>
								<tr>
									<td class="text-center padCenter horzLine smText"><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><br><sup>$</sup><?php echo $PCGamt;?> Credit</td>
									<td class="text-center horzLine vertLine smText"><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><i class="fa fa-star Green"></i><br><sup>$</sup><?php echo $PCPamt;?> Credit</td>
								</tr>
								<tr>
									<td colspan="2" class="horzLine padLR MdText">Double up again! It&rsquo;s <sup>$</sup><?php echo $PCPamt-$PCGamt;?> more credit with the Platinum then the Gold!</td>
								</tr>
								<tr>
									<td class="text-center padCenter horzLine smText"><i class="fa fa-times-circle Red"></i><br>None</td>
									<td class="text-center horzLine vertLine smText"><i class="fa fa-check-circle Green"></i><br>Included</td>
								</tr>
								<tr>
									<td colspan="2" class="horzLine padLR MdText">With the Platinum, you&rsquo;ve got your engagement, or rehearsal, or boudoir included. (<small><sup>$</sup><?php echo $ES;?> value</small>).</td>
								</tr>
								<tr class="bg_LtBlue">
									<td colspan="2" class="text-center padExTall">
										<h3>Upgrade: <sup>$</sup><?php echo $pPrice-$gPrice ?> <i class="fa fa-chevron-circle-right c_LtBlue"></i> Value: <sup>$</sup><?php echo $pUpVal;?></h3>
									</td>
								</tr>
							</table>
						</div>
					</section>
				</div>
			</div>
		</main>
    
		<!--FOOTER-->
		<?php require("../_php/footer.php");?>
		
    <!--FLOORSPACE-->
		<div class="column row show-for-large space2em"></div>
    
    <!--HOSTED-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!--SELF-->
    <script src="../_js/F6/Zurbed.js"></script>
    <script>$(document).foundation();</script>
    
	</body>
</html>