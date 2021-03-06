<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="Travel";
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
		<title>Wedding Photography | Travel Photo Gallery</title>
		<meta name="description" content="Some of our favorite images from our travels around the world shooting destination weddings">
		<meta name="keywords" content="Wedding Travel Photos, Destination wedding images, photos from our trips, travel images">
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
					<h1 class="c_CCC">Photography</h1>
					<i class="fa fa-caret-right subheader" aria-hidden="true"></i>
					<h2 class="subheader">Our Travels</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox"  data-fancybox="group"  href="../_img/gallery/travel/travel-01.jpg"  data-caption="Red Storm of the Century<br><small>Sydney, Australia</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-01sm.jpg" alt="Sydney bridge fades into red sand storm of the century"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-02.jpg" data-caption="Sarajevo Apartments for Rent<br><small>Sarajevo, Bosnia and Herzegovina</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-02sm.jpg" alt="Wartorn Apartment buildings of Sarajevo"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-03.jpg" data-caption="Stari Most Bridge<br><small>Mostar, Bosnia and Herzegovina</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-03sm.jpg" alt="Stari Most, Mostar Bridge on a bright sunny afternoon"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-04.jpg" data-caption="Two Natural Bridges<br><small>Arches National Park, Utah</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-04sm.jpg" alt="Two Arches together in Arches National Park"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-05.jpg" data-caption="A Shadow of Ourselves<br><small>Split, Croatia</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-05sm.jpg" alt="Casting our own shadow on the stone streets of Split, Croatia"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-06.jpg" data-caption="Burj Khalifa<br><small>Dubai Mall, UAE</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-06sm.jpg" alt="Panarama of Downtown Dubai and the Burj Khalifa"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-07.jpg" data-caption="Santorini Sunset<br><small>Oia, Santorini, Greece</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-07sm.jpg" alt="Oia lights up during a spectacular sunset in Santorini"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-08.jpg" data-caption="Santorini Mule<br><small>Thira, Santorini, Greece</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-08sm.jpg" alt="A mule waits for another rider in Thira, Santorini"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-09.jpg" data-caption="The Duomo Lion<br><small>Milan, Italy</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-09sm.jpg" alt="The masive stone lion head in foreground of Milan Duomo"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-10.jpg" data-caption="The Castle Burg Eltz<br><small>M&uuml;nstermaifeld, Germany</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-10sm.jpg" alt="The Castle of Burg Eltz in M&uuml;nstermaifeld, Germany"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-11.jpg" data-caption="Cerkev Marijinega Vnebovzetja<br><small>Bled, Slovenia</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-11sm.jpg" alt="Pilgrimage Church of the Assumption of Maria in the morning"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-12.jpg" data-caption="Sonia Feeds The Birds<br><small>Piazza San Marco &bull; Venice, Italy</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-12sm.jpg" alt="Birds attack Sonia while she tries to feed them in Piazza San Marco"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-13.jpg" data-caption="Soriano nel Cimino at Night<br><small>Soriano nel Cimino, Italy</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-13sm.jpg" alt="Soriano nel Cimino Italy lights up at night"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-14.jpg" data-caption="Civita backstreets<br><small>Civita, Italy</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-14sm.jpg" alt="The charming and empty streets of Civita, Italy"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-15.jpg" data-caption="Sultan Ahmed Mosque<br><small>Istanbul, Turkey</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-15sm.jpg" alt="The Blue Mosque, Sultan Ahmed Mosque rises above the treeline in Istanbul, Turkey"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-16.jpg" data-caption="Downtown Milan from Duomo Roof<br><small>Milan, Italy</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-16sm.jpg" alt="Downtown Milan skyline in the distance from Duomo rooftop"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-17.jpg" data-caption="The Grand Canal<br><small>Venice, Italy</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-17sm.jpg" alt="A gondola crosses the Grand Canal in front of Rialto Bridge in Venice, Italy"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-18.jpg" data-caption="Saint Alexander Nevsky Cathedral<br><small>Tallinn, Estonia</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-18sm.jpg" alt="The radient colors of Saint Alexander Nevsky Cathedral"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-19.jpg" data-caption="Carlsberg Boathouse<br><small>Eskilstuna, Sweeden</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-19sm.jpg" alt="Green Carlsberg Boathouse in Eskilstuna, Sweeden"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-20.jpg" data-caption="Big Ben<br><small>London, England</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-20sm.jpg" alt="Big Ben in contrast to white sky in London England"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-21.jpg" data-caption="Panteão Nacional at Dawn<br><small>Lisbon, Portugal</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-21sm.jpg" alt="Panteão Nacional and city view at dawn in Lisbon, Portugal"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-22.jpg" data-caption="Backstreet Life in Civita<br><small>Civita, Italy</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-22sm.jpg" alt="People eat and relax along a back street in Civita, Italy"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-23.jpg" data-caption="Austrian Rubber Duckies<br><small>Moab, Utah</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-23sm.jpg" alt="Strorefront of Austrian Rubber Duckies in Salzburg"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/travel/travel-24.jpg" data-caption="Soriano nel Cimino<br><small>Soriano nel Cimino, Italy</small>"><img class="thumbnail" nopin="nopin" src="../_img/gallery/travel/travel-24sm.jpg" alt="Soriano nel Cimino, Italy through the trees along the road"></a>
			</div>
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