<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="EG2";
	$thisMenu="Gallery";
	$thisSet="Engagements";
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
		<title>Wedding Engagement Photography Gallery | Portfolio 2</title>
		<meta name="description" content="Best of Wedding Engagement Photography images from Stephen & Sonia of About The Day Photography, Engagement Gallery 2">
		<meta name="keywords" content="Wedding Engagement Photography Gallery, Mixed Wedding Engagement Highlight Images, Wedding Engagement Gallery 2">
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
					<h2 class="subheader">Engagement 2</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Charlie & Brittany<a href='/blog/e_cbh/' target='_blank'>View Blog</a><br><small>Regusci Vineyards &bull; Napa, California</small>" href="../_img/gallery/engagements2/eng2-01.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-01sm.jpg" alt="Couple kisses in the sunset above Regusci Vineyards"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Kevin & Brandi<br><small>Lacey, Washington</small>" href="../_img/gallery/engagements2/eng2-02.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-02sm.jpg" alt="Engaged couple laughs in fall forest near Olympia"></a>
			</div>
			<div class="column">
				<a class="fancybox" href="../_img/gallery/engagements2/eng2-03.jpg" data-fancybox="group" data-caption="Danny & Joycelyn<a href='/blog/eng-djz/' target='_blank'>View Blog</a><br><small>Coronado Beach, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-03sm.jpg" alt="Engaged couple display their save the date sign"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Steve & Amanda<br><small>Clearwater Beach, Florida</small>" href="../_img/gallery/engagements2/eng2-04.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-04sm.jpg" alt="Engaged couple lays on Clearwater Beach at dusk"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Matt & Laura<a href='/blog/e_mlb/' target='_blank'>View Blog</a><br><small>Half Moon Bay, California</small>" href="../_img/gallery/engagements2/eng2-05.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-05sm.jpg" alt="Engaged couple kisses at Piegon Point Lighthouse"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jeff & Kristina<br><small>Plum Island, Massachusetts</small>" href="../_img/gallery/engagements2/eng2-06.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-06sm.jpg" alt="Engaged couple wear warm sweaters in bright colors"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Charlie & Brittany<a href='/blog/e_cbh/' target='_blank'>View Blog</a><br><small>Regusci Vineyards &bull; Napa, California</small>" href="../_img/gallery/engagements2/eng2-07.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-07sm.jpg" alt="Engaged couple clostup at Regusci Vineyards"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Nicholas & Jennifer<br><small>Darmstadt, Germany</small>" href="../_img/gallery/engagements2/eng2-08.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-08sm.jpg" alt="Engaged couple snuggle in their orange Lotus"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="James & Candice<br><small>Dunedin, Florida</small>" href="../_img/gallery/engagements2/eng2-09.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-09sm.jpg" alt="Beach glows white for engaged couple"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Chris & Michelle<a href='/blog/e_cmp/' target='_blank'>View Blog</a><br><small>Fishermans Warf &bull; Monterey, California</small>" href="../_img/gallery/engagements2/eng2-10.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-10sm.jpg" alt="Engaged military couple kiss on Monterey Warf"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Gary & Shirley<a href='/blog/e_gst/' target='_blank'>View Blog</a><br><small>Newport Beach, California</small>" href="../_img/gallery/engagements2/eng2-11.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-11sm.jpg" alt="Engaged couple on tile steps in Newport Beach"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Andrew & Kel<br><small>Naples, Florida</small>" href="../_img/gallery/engagements2/eng2-12.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-12sm.jpg" alt="Engaged couple behind palm trees in Naples"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Michael & Devon<a href='/blog/eng-mds/' target='_blank'>View Blog</a><br><small>Olympia, Washington</small>" href="../_img/gallery/engagements2/eng2-13.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-13sm.jpg" alt="Engaged couple poses on Olympia waterfront"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jacob & Nichole<br><small>Alki Beach &bull; Seattle, Washington</small>" href="../_img/gallery/engagements2/eng2-14.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-14sm.jpg" alt="Engaged couple kiss with Seattle skyline in background"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Chad & Jessica<br><small>Dana Point, California</small>" href="../_img/gallery/engagements2/eng2-15.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-15sm.jpg" alt="Engaged couple hold hands with beach in the back"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jeffrey & Angela<br><small>Islamorada, Florida</small>" href="../_img/gallery/engagements2/eng2-16.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-16sm.jpg" alt="Couple snuggles beside an old boat and a palm tree"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Joe & Kelsie<br><small>Phoenix, Arizona</small>" href="../_img/gallery/engagements2/eng2-17.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-17sm.jpg" alt="Engaged couple kiss under fierce Phoenix sky"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Marko & Victoria<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/engagements2/eng2-18.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-18sm.jpg" alt="Engaged couple pose along the Thompson River"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Stephen & Sonia<br><small>Santorini, Greece</small>" href="../_img/gallery/engagements2/eng2-19.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-19sm.jpg" alt="We got ourselves in a photo in Santorini"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Greg & Sarah<br><small>Portland, Oregon</small>" href="../_img/gallery/engagements2/eng2-20.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-20sm.jpg" alt="Engaged couple laughs on lawn in downtown Portland"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Michael & Devon<a href='/blog/eng-mds/' target='_blank'>View Blog</a><br><small>Olympia, Washington</small>" href="../_img/gallery/engagements2/eng2-21.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-21sm.jpg" alt="Engaged couple gets close at Priest Point Park"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Tony & Anh-Thu<br><small>Santorini, Greece</small>" href="../_img/gallery/engagements2/eng2-22.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-22sm.jpg" alt="Couple poses with Oia in the background"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Evan & Sierra<a href='/blog/eng-esr/' target='_blank'>View Blog</a><br><small>Frisco, Texas</small>" href="../_img/gallery/engagements2/eng2-23.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-23sm.jpg" alt="Engaged couple poses under Texas sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Gary & Shirley<a href='/blog/e_gst/' target='_blank'>View Blog</a><br><small>Newport Beach, California</small>" href="../_img/gallery/engagements2/eng2-24.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements2/eng2-24sm.jpg" alt="Engaged couple sits on beach wall in Newport Beach"></a>
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