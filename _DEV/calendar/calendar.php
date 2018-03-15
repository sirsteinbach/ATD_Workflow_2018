<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60; //HOLD 60 DAYS
	$thisPage="Calendar";
	$thisMenu="About";
	$_SESSION['EyesOn']['Page']=$thisPage;
	$_SESSION['EyesOn']['Menu']=$thisMenu;
	$_SESSION['EyesOn']['Sub']="";
	$_SESSION['EyesOn']['Set']="";
	$_SESSION['Viewed'][$thisMenu]=$thisMenu;
	$_SESSION['Viewed'][$thisPage]=$thisPage;
	$visited=implode(",",array_unique($_SESSION['Viewed']));
	setcookie("Visited",$visited,$expire,"/",".abouttheday.com");
	require("../_php/referer.php");
	require("../_php/checkpoints.php");
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
		<link rel="stylesheet" href="../_css/specific/calendar.css">
		<title>Wedding Photography | Wedding Event Calendar</title>
		<meta name="keywords" content="Wedding Photography, Wedding Photographers, Best Wedding Photographers, Husband and Wife Wedding Photographers, Wedding Photography">
		<meta name="description" content="Wedding Photography Gallery from the Award Winning Husband and Wife Team of Wedding Photographers, About The Day Wedding Photography">
	</head>
  
	<body>
    
		<!--HEADSPACE-->
		<div class="column row show-for-large space1em"></div>
    
		<!--NAVBAR-->
		<?php require("../_php/navMain.php");?>
    
		<!--INNER HEADSPACE-->
		<div class="column row space1em BgMain"></div>
    
		<!--CONTENT-->
		<main class="row BgMain">
			<div id="calContain" class="large-8 columns">
        
				<section class="pullup">
					<header class="secHead bg_Blue">
						<div class="iLine c_Blue">
							<span class="fa-stack ilinePOS c_Blue"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-calendar fa-stack-1x fa-inverse"></i></span>
							<h1 class="c_333">Event Calendar</h1>
						</div>
					</header>
				</section>
        
        <!--CALENDAR-->
				<div class="box">
					<div class="boxCenter">
						<h5 class="c_333">LOADING CALENDAR</h5>
						<div class="delayText">Slower connections might take longer</div>
						<i class="fa fa-refresh fa-spin spinner"></i>
					</div>
					<iframe class="boxContent" src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=1&amp;showDate=1&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=500&amp;wkst=1&amp;bgcolor=%23EBF1FF&amp;src=hof3fhhmgai6ta3g00q0c57gf4%40group.calendar.google.com&amp;color=%23711616&amp;src=n152u47of0ugti4ujpakbqg048%40group.calendar.google.com&amp;color=%232952A3&amp;src=8j35eplpgk2lhfosfk7rg53no8%40group.calendar.google.com&amp;color=%238C500B&amp;ctz=America%2FLos_Angeles" onload="this.style.visibility='visible';"></iframe>
				</div>
			</div>
      
			<div class="large-4 columns">
        
				<section>
					<header class="secHead bg_Red">
						<div class="iLine c_Red">
							<span class="fa-stack ilinePOS c_Red"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-lock fa-stack-1x fa-inverse"></i></span>
							<h2 class="c_333">Confirmed Date</h2>
						</div>
					</header>
					<p>These dates are already locked in with a deposit and are not available. (Pending dates are not shown or valid until a deposit is paid.)</p>
					<br>
					<header class="secHead noRadius bg_DkOrange">
						<div class="iLine c_DkOrange">
							<span class="fa-stack ilinePOS c_DkOrange"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-plane fa-stack-1x fa-inverse"></i></span>
							<h2 class="c_333">Scheduled Travel</h2>
						</div>
					</header>
					<p>Our travel can often be changed to work around other potential events, so if you are considering a date during these times, please check with us to see if we can make a change for you.</p>
					<br>
					<header class="secHead noRadius bg_Blue">
						<div class="iLine c_Blue">
							<span class="fa-stack ilinePOS c_Blue"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-unlock fa-stack-1x fa-inverse"></i></span>
							<h2 class="c_333">Other Dates</h2>
						</div>
					</header>
					<p>These dates are scheduled, but remain fairly flexible and easier to adjust if the need arises. If you are considering one of these dates, let us know.</p>
				</section>
        
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