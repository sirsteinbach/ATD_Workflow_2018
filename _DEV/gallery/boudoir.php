<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="Boudoir";
	$thisMenu="Gallery";
	$_SESSION['EyesOn']['Page']=$thisPage;
	$_SESSION['EyesOn']['Menu']=$thisMenu;
	$_SESSION['EyesOn']['Sub']="Photography";
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
		<link rel="stylesheet" href="../_css/fancyBox/app3.css">
		<title>Wedding Boudoir Photography Gallery</title>
		<meta name="description" content="Best of Wedding Boudoir Photography images from Stephen & Sonia of About The Day Photography, Wedding Boudoir Gallery 1">
		<meta name="keywords" content="Wedding Boudoir Photography Gallery, Sexy Wedding Boudoir Images, Boudoir, Bedroom">		
	</head>
	
	<body>
		
		<!--HEADSPACE-->
		<div class="column row show-for-large space1em"></div>
		
		<!--NAVBAR-->
		<?php require("../_php/navMain.php");?>
		
		<section class="row BgMain pullup noRadius">
			
			<!--HEADING-->
			<header class="small-12 large-4 columns secHead nav">
				<div class="iLine c_333">
					<span class="fa-stack ilinePOS c_333"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-camera fa-stack-1x fa-inverse"></i></span>
					<h1 class="c_CCC">Boudoir Photography</h1>
					<i class="fa fa-caret-right subheader" aria-hidden="true"></i>
					<h2 class="subheader">Boudoir</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="April<br><small>Olympia, Washington</small>" href="../_img/gallery/boudoir/boudoir-01.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-01sm.jpg" alt="Wedding boudoir shoot with blond on bed in Olympia, WA"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="LaShelle<br><small>Destin, Florida</small>" href="../_img/gallery/boudoir/boudoir-02.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-02sm.jpg" alt="Lovely dark hair and skin boudoir girl in Destin, Florida"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Kristin<br><small>Olympia, Washington</small>" href="../_img/gallery/boudoir/boudoir-03.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-03sm.jpg" alt="Bridal boudoir with white veil and background"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Engrid<br><small>Manchester Grand Hyatt - San Diego, California</small>" href="../_img/gallery/boudoir/boudoir-04.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-04sm.jpg" alt="Beautiful Bride look out from behind her viel at Manchester Grand Hyatt"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Cassie<br><small>Albuquerque, New Mexico</small>" href="../_img/gallery/boudoir/boudoir-05.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-05sm.jpg" alt="Cassie lays on one rail of the train track in Albuquerque, NM"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Katrina<br><small>Olympia, Washington</small>" href="../_img/gallery/boudoir/boudoir-06.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-06sm.jpg" alt="Beautiful asian girl on bed for wedding boudoir"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Christy<br><small>Azalea, Oregon</small>" href="../_img/gallery/boudoir/boudoir-07.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-07sm.jpg" alt="Boudoir model poses on a bed in studio shoot"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Mackenzie<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/boudoir/boudoir-08.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-08sm.jpg" alt="Freezing cold wedding boudoir in Kamloops, BC"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="LaShelle<br><small>Destin, Florida</small>" href="../_img/gallery/boudoir/boudoir-09.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-09sm.jpg" alt="Lovely dark hair and skin boudoir girl in Destin, Florida"></a>
				</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/boudoir/boudoir-10.jpg" data-caption="Ariana<br><small>Seattle, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-10sm.jpg" alt="Beautiful girl shows off pink boots in boudoir session"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Morgan<br><small>Olympia, Washington</small>" href="../_img/gallery/boudoir/boudoir-11.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-11sm.jpg" alt="Marilyn Monroe lookalike boudoir session in Olympia, Washington"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Angeleen<br><small>Olympia, Washington</small>" href="../_img/gallery/boudoir/boudoir-12.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-12sm.jpg" alt="Wedding boudoir shoot with blond on bed in Olympia, WA"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ariana<br><small>Olympia, Washington</small>" href="../_img/gallery/boudoir/boudoir-13.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-13sm.jpg" alt="Sexy girl plays a blue Ibanez guitar in boudoir shoot"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Brittney<br><small>Girls of Geek - Olympia, Washington</small>" href="../_img/gallery/boudoir/boudoir-14.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-14sm.jpg" alt="Girls of Geek boudoir Miss October 2012"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Geena<br><small>Olympia, Wasington</small>" href="../_img/gallery/boudoir/boudoir-15.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-15sm.jpg" alt="Wedding boudoir shoot with brunette on bed in Olympia, WA"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Zoey<br><small>Olympia, Washington</small>" href="../_img/gallery/boudoir/boudoir-16.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-16sm.jpg" alt="Wedding boudoir shoot with gorgeous blond on bed in Olympia, WA"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Stormy<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/boudoir/boudoir-17.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-17sm.jpg" alt="Wedding boudoir shoot with brunette on bed in Kamloops, BC"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Zac & Monika<br><small>Bonita Springs, Florida</small>" href="../_img/gallery/boudoir/boudoir-18.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-18sm.jpg" alt="Zac & Monika get wet for boudoir shoot in Bonita Springs, FL"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Savanah<br><small>Dallas, Texas</small>" href="../_img/gallery/boudoir/boudoir-19.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-19sm.jpg" alt="Lovely boudoir backside in blue leppard print and lace"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jaimee-Lea<br><small>Atlantic City, New Jersey</small>" href="../_img/gallery/boudoir/boudoir-20.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-20sm.jpg" alt="Wedding boudoir in Atlantic City, New Jersey"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jocelyn<br><small>Savannah, Georgia</small>" href="../_img/gallery/boudoir/boudoir-21.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-21sm.jpg" alt="Wedding boudoir width fur and fire in Savanah, GA"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="LaShelle<br><small>Destin, Florida</small>" href="../_img/gallery/boudoir/boudoir-22.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-22sm.jpg" alt="Lovely dark hair and skin boudoir girl in pink in Destin, Florida"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Christy<br><small>Azalea, Oregon</small>" href="../_img/gallery/boudoir/boudoir-23.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-23sm.jpg" alt="Christy lights up the room for wedding boudoir session"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Katrina<br><small>Olympia, Washington</small>" href="../_img/gallery/boudoir/boudoir-24.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/boudoir/boudoir-24sm.jpg" alt="Beautiful asian girl covers up topless for wedding boudoir"></a>
			</div>
		</div>
		
		<!--FOOTER-->
    <?php require("../_php/footer.php");?>
		
		<!--FLOORSPACE-->
    <div class="column row show-for-large space2em"></div>
		
		<!--HOSTED-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<!--PAGE SPECIFIC-->
		<script src="../_js/specific/navPhoto.js"></script>
		
		<!--SELF-->
		<script src="../_js/F6/Zurbed.js"></script>
		<script src="../_js/fancyBox/jquery.app3.js"></script>
		<script>$(document).foundation();</script>
		
  </body>
</html>