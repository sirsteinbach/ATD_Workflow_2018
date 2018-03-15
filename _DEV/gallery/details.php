<?php
session_set_cookie_params(0,"/",".abouttheday.com");
session_start();
$expire=time()+60*60*24*60;
$thisPage="Details";
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
		<title>Wedding Photography | Wedding Details Photo Gallery</title>
		<meta name="description" content="Best of Wedding Details Photography images from Stephen & Sonia of About The Day Photography, Wedding Details Gallery">
		<meta name="keywords" content="Wedding Details Photography Gallery, Mixed Wedding Details Highlight Images, Wedding Details">
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
					<h2 class="subheader">Details</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-01.jpg" data-caption="Tommy & Felicia<a href='/blog/wedding-tff/' target='_blank'>View Blog</a><br><small>Mt. Shasta, Californa</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-01sm.jpg" alt="Groom shows his new tattoo of wife's name"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-02.jpg" data-caption="Stefan & Virginia<a href='/blog/w_svh/' target='_blank'>View Blog</a><br><small>Blueberry Hill Inn &bull;Goshen, Vermont</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-02sm.jpg" alt="Wedding at Blueberry Hill Inn in Goshen, Vermont"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-03.jpg" data-caption="Josh & Breanna<a href='/blog/w_jbe/' target='_blank'>View Blog</a><br><small>Victory Memorial Church &bull; Guymon, Oklahoma</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-03sm.jpg" alt="Brides dress hangs on the church doors"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-04.jpg" data-caption="Chris & Jacy<br><small>Port Orchard, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-04sm.jpg" alt="Brides lovely boquet held in front of her"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-05.jpg" data-caption="Jeffrey & Kristin<br><small>Edgemont, Arkansas</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-05sm.jpg" alt="Sliced steak for the wedding feast"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-06.jpg" data-caption="Charlie & Brittany<a href='/blog/w_cbh/' target='_blank'>View Blog</a><br><small>Charles Krug Winery &bull; Calistoga, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-06sm.jpg" alt="Grooms yellow flowers"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-07.jpg" data-caption="Jeremy & Shabnam<br><small>Park Hyatt &bull; Dubai, UAE</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-07sm.jpg" alt="Henna hands in Dubai"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-08.jpg" data-caption="Jesse & Brooke<a href='/blog/w_jbo/' target='_blank'>View Blog</a><br><small>Red Mountain Ranch &bull; Creede, Colorado</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-08sm.jpg" alt="Cannot wait to eat these cupcakes"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-09.jpg" data-caption="Josh & Breanna<a href='/blog/w_jbe/' target='_blank'>View Blog</a><br><small>Victory Memorial Church &bull; Guymon, Oklahoma</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-09sm.jpg" alt="Brides dress and lovely yellow flowers"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-10.jpg" data-caption="Kevin & Brandi<br><small>Rock Creek Gardens &bull; Puyallup, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-10sm.jpg" alt="Follow the sign to the wedding ceremony"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-11.jpg" data-caption="Kenji & Yuriko<br><small>Newport Beach, Californa</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-11sm.jpg" alt="White wedding cake with yellow flowers"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-12.jpg" data-caption="Colton & Mary<br><small>Atlanta, Georgia</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-12sm.jpg" alt="Hands holding the box with the diamond wedding ring"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-13.jpg" data-caption="Cody & Kelly<br><small>Apple Tree Lane B&B &bull; Waupaca, Wisconsin</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-13sm.jpg" alt="Bride signs license with red roses in the foreground"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-14.jpg" data-caption="Charlie & Brittany<a href='/blog/w_cbh/' target='_blank'>View Blog</a><br><small>Charles Krug Winery &bull; Calistoga, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-14sm.jpg" alt="Spring colored bridal boquets"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-15.jpg" data-caption="Manuel & Kari<br><small>Countryside, Illinois</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-15sm.jpg" alt="Love spelled with scrabble and a diamond ring"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-16.jpg" data-caption="Ben & Kari<br><small>Aspen Meadows &bull; Colton, Oregon</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-16sm.jpg" alt="Bridal dress, flowers, and jewlery"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-17.jpg" data-caption="Alex & Kim<br><small>Kirkland, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-17sm.jpg" alt="Wedding rings on the Seattle Times"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-18.jpg" data-caption="Rajeev & Neha<a href='/blog/w_rnc/' target='_blank'>View Blog</a><br><small>Snoqualmie Ridge &bull; North Bend, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-18sm.jpg" alt="Lovely henna hands"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-19.jpg" data-caption="Chad & Jessica<br><small>Redlands, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-19sm.jpg" alt="Red roses in front of a black and white wedding dress"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-20.jpg" data-caption="Brian & Carey<br><small>New York, New York</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-20sm.jpg" alt="Purple and Gold up-lighting for wedding reception"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-21.jpg" data-caption="Micheal & Meredith<br><small>Friendship Bell &bull; San Diego, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-21sm.jpg" alt="Holding Rings and Roses"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-22.jpg" data-caption="Daniel & Amy<br><small>San Diego Wild Animal Park &bull; California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-22sm.jpg" alt="A wild animal wedding cake"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-23.jpg" data-caption="Jeffrey & Kristin<br><small>Edgemont, Arkansas</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-23sm.jpg" alt="Mom pins the fathers flower on his suit"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/details/details-24.jpg" data-caption="Cody & Kelly<br><small>Apple Tree Lane B&B &bull; Waupaca, Wisconsin</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/details/details-24sm.jpg" alt="Wedding rings on the marriage license"></a>
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