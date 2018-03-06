<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	date_default_timezone_set("America/Los_Angeles");
	$expire=time()+60*60*24*60;
	$thisPage="WG4";
	$thisMenu="Gallery";
	$thisSet="Weddings";
	$_SESSION['EyesOn']['Page']=$thisPage;
	$_SESSION['EyesOn']['Menu']=$thisMenu;
	$_SESSION['EyesOn']['Sub']="Photography";
	$_SESSION['EyesOn']['Set']=$thisSet;
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
		<title>Wedding Photography Gallery | Portfolio 4</title>
		<meta name="description" content="Best of Wedding Photography images from Stephen & Sonia of About The Day Photography, Gallery 4">
		<meta name="keywords" content="Wedding Photography Gallery, Mixed Wedding Highlight Images, Wedding Gallery 4">
	</head>
	
	<body>
		
		<!--HEADSPACE-->
		<div class="column row show-for-large space1em"></div>
		
		<!--NAVBAR-->
		<?php require("../_php/navMain.php");?>
		
		<section class="row BgMain pullup noRadius">
			
			<!--HEADING-->
			<header class="small-12 large-4 columns secHead nav">
				<div class="iLine c_333"><span class="fa-stack ilinePOS c_333"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-camera fa-stack-1x fa-inverse"></i></span>
					<h1 class="c_CCC">Wedding Photography</h1>
					<i class="fa fa-caret-right subheader" aria-hidden="true"></i>
					<h2 class="subheader">Gallery 4</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-01.jpg" data-caption="Justin & Cara<br><small>Merritt, British Columbia</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-01sm.jpg" alt="Wedding couple sits on an old junkyard car"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-02.jpg" data-caption="Jeff & Kristina<br><small>Jeff & Kristina</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-02sm.jpg" alt="Bride and Groom stand at the doors of Blessed Sacrament in Seattle"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-03.jpg" data-caption="Cody & Kelly<br><small>Apple Tree Lane B&B - Waupaca, Wisconsin</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-03sm.jpg" alt="Bride slides on Grooms wedding ring"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-04.jpg" data-caption="Jacob & Nichole<br><small>Pasco, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-04sm.jpg" alt="Bride and Groom pose with Red Mustang"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-05.jpg" data-caption="Ben & Kari<br><small>Aspen Meadow Church - Colton, Oregon</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-05sm.jpg" alt="Bride and Groom outstanding in their field"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-06.jpg" data-caption="Keith & Kimberly<br><small>The Beach House, Koloa, Hawaii</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-06sm.jpg" alt="Wedding ceremony with surfers in the background"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-07.jpg" data-caption="Josh & Breanna<br><small>Thompson Park - Guymon, Oklahoma</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-07sm.jpg" alt="Bride and Groom pose under yellow trees"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-08.jpg" data-caption="Tupac & Ayiana<br><small>Indian Wells Country Club - Palm Desert, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-08sm.jpg" alt="Great wedding party photo at ndian Wells Country Club "></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-09.jpg" data-caption="Cody & Kelly<br><small>Apple Tree Lane B&B - Waupaca, Wisconsin</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-09sm.jpg" alt="Sassy blonde Bride holds out her red roses"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-10.jpg" data-caption="Ari & Janet<br><small>Princeville, Hawaii</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-10sm.jpg" alt="Barefoot Bride and Groom on the black rocks of Hawaii"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-11.jpg" data-caption="James & Malorie<br><small>Mogollon Rim, Arizona</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-11sm.jpg" alt="Firery sunset wedding portrait at Mogollon Rim"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-12.jpg" data-caption="Jon & Oriana<br><small>Hornblower Garden - Plymouth, Massachusetts</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-12sm.jpg" alt="30s theme wedding couple look at each other"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-13.jpg" data-caption="Scott & Codi<br><small>Grand Princess - Playa del Carmen, Mexico</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-13sm.jpg" alt="Bearded Groom finishes tying his shoes"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-14.jpg" data-caption="Tristen & Jennifer<br><small>Kalama, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-14sm.jpg" alt="Bride becomes emotional walking in with her father"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-15.jpg" data-caption="Chris & Jacy<br><small>Trophy Lake - Port Orchard, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-15sm.jpg" alt="Wedding at Trophy Lake"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-16.jpg" data-caption="Greg & Sarah<br><small>Oregon City, Oregon</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-16sm.jpg" alt="Bride poses with sexy firemen"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-17.jpg" data-caption="Hickory & Angie<br><small>Annunciation Cathedral - Columbus, Ohio</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-17sm.jpg" alt="Wedding photos in The Annunciation Greek Orthodox Cathedral"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-18.jpg" data-caption="Chris & Yoriko<br><small>The Harbor Club - Bellveue, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-18sm.jpg" alt="Wedding couple kisses in the garden at the Harbor Club"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-19.jpg" data-caption="Mike & Casey<br><small>Rancho Palos Verdes, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-19sm.jpg" alt="Bride and Groom kiss behind a short brick wall over looking the ocean"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-20.jpg" data-caption="Derek & Christina<br><small>Edgewood Resort - Lake Tahoe, Nevada</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-20sm.jpg" alt="Bride and groom kiss on the beach of Lake Tahoe"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-21.jpg" data-caption="Tommy & Felicia<br><small>Lake Siskiyou - Mt. Shasta, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-21sm.jpg" alt="Bride and Groom lit by the sun in the forest"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-22.jpg" data-caption="Jacob & Nichole<br><small>Pasco, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-22sm.jpg" alt="Bride laughs hysterically at the best man toast"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-23.jpg" data-caption="Tyler & Kaelynn<br><small>Chateau Rive - Spokane, WA</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-23sm.jpg" alt="Groom and groomsmen stand for a photo at Chateau Rive"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio4/wedding_4-24.jpg" data-caption="Scott & Codi<br><small>Grand Princess - Playa del Carmen, Mexico</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio4/wedding_4-24sm.jpg" alt="Georgous wedding couple posing by the beach in Playa del Carmen"></a>
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