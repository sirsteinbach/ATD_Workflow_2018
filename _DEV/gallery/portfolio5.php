<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="WG5";
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
		<title>Wedding Photography Gallery | Portfolio 5</title>
		<meta name="description" content="Best of Wedding Photography images from Stephen & Sonia of About The Day Photography, Gallery 5">
		<meta name="keywords" content="Wedding Photography Gallery, Mixed Wedding Highlight Images, Wedding Gallery 5">
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
					<h2 class="subheader">Gallery 5</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-01.jpg" data-caption="Matt & Laura<a href='/blog/w_mlb/' target='_blank'>View Blog</a><br><small>The Old Whaling Station &bull; Monterey, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-01sm.jpg" alt="Cute Bride leans out to peek at the Groom"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-02.jpg" data-caption="Tyler & Kaelynn<a href='/blog/w_tkc/' target='_blank'>View Blog</a><br><small>Chateau Rive &bull; Spokane, WA</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-02sm.jpg" alt="Wedding ceremony at Chateau Rive with smoke in the sky"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-03.jpg" data-caption="Joe & Kelsea<a href='/blog/wedding-jke/' target='_blank'>View Blog</a><br><small>Val Vista Lakes &bull; Gilbert, Arizona</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-03sm.jpg" alt="Harry Potter theme wedding with Thank you in the sky"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-04.jpg" data-caption="Jordan & Gislaine<br><small>Dragonfly Retreat &bull; Bothell, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-04sm.jpg" alt="Newly married couple walks down the isle at Dragonfly Retreat"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-05.jpg" data-caption="Josh & Breanna<a href='/blog/w_jbe/' target='_blank'>View Blog</a><br><small>Thompson Park &bull; Guymon, Oklahoma</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-05sm.jpg" alt="Bride with her lovely yellow flowers and jewelry"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-06.jpg" data-caption="Scott & Codi<a href='/blog/wedding-scl/' target='_blank'>View Blog</a><br><small>Grand Princess &bull; Playa del Carmen, Mexico</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-06sm.jpg" alt="Bride and Groom pose under the trees at Grand Princess"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-07.jpg" data-caption="Brad & Amber<a href='/blog/wedding-bal/' target='_blank'>View Blog</a><br><small>The Dunes &bull; Kamloops, British Columbia</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-07sm.jpg" alt="Wedding party with blue umbrellas in the rain"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-08.jpg" data-caption="Stefan & Virginia<a href='/blog/w_svh/' target='_blank'>View Blog</a><br><small>Blueberry Hill Inn &bull; Goshen, Vermont</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-08sm.jpg" alt="Bride and Groom in the last light of the day at Blueberry Hill Inn"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-09.jpg" data-caption="Cody & Kelly<br><small>Apple Tree Lane B&B &bull; Waupaca, Wisconsin</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-09sm.jpg" alt="Wedding rings on the marriage license"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-10.jpg" data-caption="Marc & Taya<a href='/blog/w_mtm/' target='_blank'>View Blog</a><br><small>Wallowa Lake &bull; Joseph, Oregon</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-10sm.jpg" alt="Wedding couple kissing behind the foreground of grass"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-11.jpg" data-caption="Cameron & Sabrina<br><small>Rancho De La Fuente &bull; Lakeport, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-11sm.jpg" alt="Bride with red boots and the boys"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-12.jpg" data-caption="Tristan & Ashley<a href='/blog/w_tar/' target='_blank'>View Blog</a><br><small>Red Rock State Park &bull; Sedona, Arizona</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-12sm.jpg" alt="Bride and Groom on a bridge at Red Rock State Park"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-13.jpg" data-caption="Garrett & Janelle<a href='/blog/wedding-gjc/' target='_blank'>View Blog</a><br><small>Scotts Bluff Monument &bull; Nebraska</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-13sm.jpg" alt="Wedding couple kisses with Scotts Bluff Monument in background"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-14.jpg" data-caption="Andrew & Rikki<a href='/blog/wedding-arg/' target='_blank'>View Blog</a><br><small>Double JJ Resort &bull; New Era, Michigan</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-14sm.jpg" alt="Wedding couple poses near Double JJ Resort"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-15.jpg" data-caption="Brandon & Megan<a href='/blog/wedding-bms/' target='_blank'>View Blog</a><br><small>Grafton Dells River Park &bull; Milwaukee, Wisconsin</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-15sm.jpg" alt="Bride and Groom pose back to back at sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-16.jpg" data-caption="Matt & Laura<a href='/blog/w_mlb/' target='_blank'>View Blog</a><br><small>The Old Whaling Station &bull; Monterey, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-16sm.jpg" alt="Bride smiles during vows at The Old Whaling Station"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-17.jpg" data-caption="Tommy & Felicia<a href='/blog/wedding-tff/' target='_blank'>View Blog</a><br><small>Lake Siskiyou &bull; Mt. Shasta, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-17sm.jpg" alt="Shotgun shell Boutonnière on Groom"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-18.jpg" data-caption="Aaron & Jamie<br><small>Edmonton, Alberta</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-18sm.jpg" alt="A wedding kiss on the cheek in the snow in Edmonton"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-19.jpg" data-caption="Jeffrey & Kelsey<a href='/blog/wedding-jkm/' target='_blank'>View Blog</a><br><small>Moore Mansion in Pasco, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-19sm.jpg" alt="Big sky over wedding couple at Moore Mansion"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-20.jpg" data-caption="Taylor & Hannah<a href='/blog/wedding-ths/' target='_blank'>View Blog</a><br><small>Springwood Ranch &bull; Ellensburg, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-20sm.jpg" alt="Lovely wedding boquet at Springwood Ranch"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-21.jpg" data-caption="Meshan & Alicia<a href='/blog/wedding-mat/' target='_blank'>View Blog</a><br><small>Legislative Building &bull; Regina, Saskatchewan</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-21sm.jpg" alt="Bride eye in oval mirror"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-22.jpg" data-caption="Tristan & Ashley<a href='/blog/w_tar/' target='_blank'>View Blog</a><br><small>Red Rock State Park &bull; Sedona, Arizona</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-22sm.jpg" alt="Wedding couple dance in a blur"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-23.jpg" data-caption="John & Heather<a href='/blog/w_jhm/' target='_blank'>View Blog</a><br><small>Peninsula Room &bull; Traverse City, Michigan</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-23sm.jpg" alt="Wedding couple silhouette at the Peninsula Room in Traverse City"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio5/wedding_5-24.jpg" data-caption="Jeremy & Michelle<a href='/blog/wedding-jmm/' target='_blank'>View Blog</a><br><small>Rio Grande River &bull; Del Rio, Texas</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio5/wedding_5-24sm.jpg" alt="Bride and Groom by old rustic doors in Del Rio, Texas"></a>
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