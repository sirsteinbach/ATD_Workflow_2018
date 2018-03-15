<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="Candids";
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
		<title>Wedding Photography | Candid Wedding Photo Gallery</title>
		<meta name="description" content="Best of Candid Wedding Photography images from Stephen & Sonia of About The Day Photography, Candid Wedding Gallery">
		<meta name="keywords" content="Candid Wedding Photography Gallery, Mixed Candid Wedding Highlight Images, Candid Wedding, Candid Photography">
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
					<h2 class="subheader">Candids</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-01.jpg" data-caption="Joe & Margaret<br><small>French Quarter &bull; New Orleans, Louisiana</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-01sm.jpg" alt="Bride and Groom kiss beneath long flowing veil"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-02.jpg" data-caption="Charlie & Brittany<a href='/blog/w_cbh/' target='_blank'>View Blog</a><br><small>Charles Krug Winery &bull; Calistoga, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-02sm.jpg" alt="Bride and her twin sister are laughing"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-03.jpg" data-caption="Jacob & Nichole<br><small>Pasco, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-03sm.jpg" alt="Bride laughs hysterically at the best man toast"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-04.jpg" data-caption="Derek & Christina<a href='/blog/w_dcc/' target='_blank'>View Blog</a><br><small>Edgewood &bull; South Lake Tahoe, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-04sm.jpg" alt="Bride and groom kiss on the beach of Lake Tahoe"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-05.jpg" data-caption="Adrian & Donna<br><small>Hyatt Place &bull; San Jose, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-05sm.jpg" alt="Bride and Bridesmaid snap a selfie"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-06.jpg" data-caption="Phillip & Lisa<br><small>The Ritz Carlton &bull; Dana Point, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-06sm.jpg" alt="Bride and Groom look at the ocean in Dana Point"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-07.jpg" data-caption="Andrew & Jessica<br><small>JM Cellars &bull; Woodenville, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-07sm.jpg" alt="Bride and Groom sneak a kiss in the barrel room of JM Cellars"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-08.jpg" data-caption="Justin & Emilia<br><small>Crown Paradise &bull; Cancun, Mexico</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-08sm.jpg" alt="Bride cries while dancing with her father"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-09.jpg" data-caption="Andrew & Rikki<a href='/blog/wedding-arg/' target='_blank'>View Blog</a><br><small>Double JJ Resort &bull; New Era, Michigan</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-09sm.jpg" alt="A big thank you from the Bride and Groom"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-10.jpg" data-caption="Stefan & Virginia<a href='/blog/w_svh/' target='_blank'>View Blog</a><br><small>Blueberry Hills Inn &bull; Goshen, Vermont</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-10sm.jpg" alt="Bride and Groom in the golden rays of sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-11.jpg" data-caption="Chad & Katrina<br><small>Blue Ribbon Cooking &bull; Seattle, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-11sm.jpg" alt="Bride sneaks a look before the ceremony"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-12.jpg" data-caption="John & Josie<br><small>Point Pleasant, New Jersey</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-12sm.jpg" alt="Groom gets ready to feed the Bride some wedding cake"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-13.jpg" data-caption="Ruben & Zuri<br><small>Birmingham, Alabama</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-13sm.jpg" alt="Ruben and Zuri get out on the dance floor"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-14.jpg" data-caption="Tristen & Jennifer<br><small>Frankfurt, Germany</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-14sm.jpg" alt="All the Bridesmaids admire the Brides diamond ring"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-15.jpg" data-caption="Derek & Julie<br><small>San Diego, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-15sm.jpg" alt="Bride and Groom dance in colored lights">
			</a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-16.jpg" data-caption="Tristan & Ashley<a href='/blog/w_tar/' target='_blank'>View Blog</a><br><small>Red Rock State Park &bull; Sedona, Arizona</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-16sm.jpg" alt="Bride and Groom twirl in the sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-17.jpg" data-caption="Macy & Cassie<br><small>Quartz Mountain Resort &bull; Lone Wolf, Oklahoma</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-17sm.jpg" alt="Bride cries during Grooms vows"></a></div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-18.jpg" data-caption="Jacky & Amber<br><small>Thompson River Inn &bull; Kamloops, British Columbia</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-18sm.jpg" alt="Asian Bride glows in sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-19.jpg" data-caption="Jesse & Brooke<a href='/blog/w_jbo/' target='_blank'>View Blog</a><br><small>Wedding at Red Mountain Ranch &bull; Creede, Colorado</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-19sm.jpg" alt="Groom gets choked up when he see the Bride in the isle"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-20.jpg" data-caption="Ari & Janet<a href='/blog/w_ajp/' target='_blank'>View Blog</a><br><small>Princeville, Kauai, Hawaii</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-20sm.jpg" alt="Bride and Groom kiss on the black rocks of Princeville, Hawaii"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-21.jpg" data-caption="Ben & Kari<br><small>Vaals, Neitherlands</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-21sm.jpg" alt="Bride and Groom outstanding in their field"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-22.jpg" data-caption="Joe & Margaret<br><small>French Quarter &bull; New Orleans, Louisiana</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-22sm.jpg" alt="Bride and Groom kiss in the French Quarter"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-23.jpg" data-caption="Brian & Jocelyn<br><small>Immaculata Cathedral &bull; San Diego, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-23sm.jpg" alt="Bride and Groom wave from white limo leaving Immaculata Cathedral"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/candids/candid-24.jpg" data-caption="Scott & Codi<a href='/blog/wedding-scl/' target='_blank'>View Blog</a><br><small>Grand Princess &bull; Playa del Carmen, Mexico</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/candids/candid-24sm.jpg" alt="Bearded Groom finishes tying his shoes"></a>
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