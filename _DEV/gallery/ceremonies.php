<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	date_default_timezone_set("America/Los_Angeles");
	$expire=time()+60*60*24*60;
	$thisPage="Ceremonies";
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
		<title>Wedding Photography | Wedding Ceremonies Photo Gallery</title>
		<meta name="description" content="Best of Wedding Ceremony Photography images from Stephen & Sonia of About The Day Photography, Wedding Ceremony Gallery">
		<meta name="keywords" content="Wedding Ceremony Photography Gallery, Mixed Wedding Ceremony Highlight Images, Wedding Ceremony">
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
					<h1 class="c_CCC">Wedding Photography</h1>
					<i class="fa fa-caret-right subheader" aria-hidden="true"></i>
					<h2 class="subheader">Ceremonies</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jeffrey & Kelsey<br><small>Moore Mansion - Pasco Washington</small>" href="/_img/gallery/ceremonies/ceremony-01.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-01sm.jpg" alt="Wedding in the background of a happy sign"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Beau & Nicole<br><small>Snoqualmie Ridge - Snoqualmie, Washington</small>" href="/_img/gallery/ceremonies/ceremony-02.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-02sm.jpg" alt="Beautiful wedding overlooking Mt. Si"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Matt & Laura<br><small>The Old Wailers Station - Monterey, California</small>" href="/_img/gallery/ceremonies/ceremony-03.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-03sm.jpg" alt="Father walks the Bride down the isle"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Chris & Michelle<br><small>Bok Tower - Lake Wales, Florida</small>" href="/_img/gallery/ceremonies/ceremony-04.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-04sm.jpg" alt="Wedding ceremony in front of Bok Tower"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Colin & Rachel<br><small>St. Marys Cathedral - West Lafayette, Indiana</small>" href="/_img/gallery/ceremonies/ceremony-05.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-05sm.jpg" alt="View of wedding ceremony from St. Marys balcony"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Hickory & Angie<br><small>The Annunciation Cathedral - Columbus, Ohio</small>" href="/_img/gallery/ceremonies/ceremony-06.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-06sm.jpg" alt="Bride and Groom being tied together"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ruben & Zuri<br><small>Birmingham, Alabama</small>" href="/_img/gallery/ceremonies/ceremony-07.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-07sm.jpg" alt="Ruben and Zuri Studdard exit their wedding"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Matt & Laura<br><small>Old Wailers Station - Monterey, California</small>" href="/_img/gallery/ceremonies/ceremony-08.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-08sm.jpg" alt="The Bride and Grooms recessional"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Hickory & Angie<br><small>The Annunciation Cathedral - Columbus, Ohio</small>" href="/_img/gallery/ceremonies/ceremony-09.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-09sm.jpg" alt="View of the Greek Orthodox ceremony"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Josh & Breanna<br><small>Victory Memorial Church - Guymon, Oklahoma</small>" href="/_img/gallery/ceremonies/ceremony-10.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-10sm.jpg" alt="Bride and Groom run for their car"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Mika & Katlin<br><small>Schloss Leopoldskron - Salzburg, Austria</small>" href="/_img/gallery/ceremonies/ceremony-11.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-11sm.jpg" alt="Wedding at Schloss Leopoldskron in Salzburg, Austria"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Joe & Margret<br><small>French Quater - New Orleans, Lousiana</small>" href="/_img/gallery/ceremonies/ceremony-12.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-12sm.jpg" alt="Wedding procession in New Orleans style"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Dominic & Shannon<br><small>Paradise Cove, Hawaii</small>" href="/_img/gallery/ceremonies/ceremony-13.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-13sm.jpg" alt="The Groom laughs during the wedding"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Akil & Erika<br><small>MCAS Miramar - San Diego, California</small>" href="/_img/gallery/ceremonies/ceremony-14.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-14sm.jpg" alt="Wedding at MCAS Miramar in San Diego, California"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Qi & Xiaohan<br><small>Thornewood Castle - Lakewood, Washington</small>" href="/_img/gallery/ceremonies/ceremony-15.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-15sm.jpg" alt="Outdoor wedding ceremony at Thornewood Castle"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Clinton & Shannon<br><small>Fort Walton Beach, Florida</small>" href="/_img/gallery/ceremonies/ceremony-16.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-16sm.jpg" alt="Worms eye view of a wedding ceremony"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Sal & Kaylee<br><small>Mons, Belgium</small>" href="/_img/gallery/ceremonies/ceremony-17.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-17sm.jpg" alt="Bride and her father walk down the isle"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Dominic & Shannon<br><small>Paradise Cove - Kapolei, Hawaii</small>" href="/_img/gallery/ceremonies/ceremony-18.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-18sm.jpg" alt="Clasping hands during Hawaiin wedding"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Eric & Irene<br><small>Snoqualmie Ridge - Snoqualmie, Washington</small>" href="/_img/gallery/ceremonies/ceremony-19.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-19sm.jpg" alt="Grand exit for Bride and Groom"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Sai & Kaylee<br><small>Mons, Belgium</small>" href="/_img/gallery/ceremonies/ceremony-20.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-20sm.jpg" alt="Bride and Groom exchange rings"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Keith & Kimberly<br><small>The Beach House - Koloa, Kauai</small>" href="/_img/gallery/ceremonies/ceremony-21.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-21sm.jpg" alt="Wedding ceremony with surfers in the background"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Andrew & Connie<br><small>The State Capitol - Olympia Washington</small>" href="/_img/gallery/ceremonies/ceremony-22.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-22sm.jpg" alt="Wedding ceremony in the Washington State Capitol building"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Dominic & Shannon<br><small>Paradise Cove - Kapolei, Hawaii</small>" href="/_img/gallery/ceremonies/ceremony-23.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-23sm.jpg" alt="Back view of wedding at Paradise Cove"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ian & Macy<br><small>Zenith Vineyards - Salem, Oregon</small>" href="/_img/gallery/ceremonies/ceremony-24.jpg"><img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/ceremonies/ceremony-24sm.jpg" alt="Wedding at Zenith Vineyards in Salem, Oregon"></a>
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