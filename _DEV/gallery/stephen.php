<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	date_default_timezone_set("America/Los_Angeles");
	$expire=time()+60*60*24*60;
	$thisPage="SEF";
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
		<title>Wedding Photography | Stephen's Favorite Photo Gallery</title>
		<meta name="description" content="Stephens choice of his favorite photography from About The Day Photography">
		<meta name="keywords" content="Stephen Pic, Stephen Favorites, Stephen Best of">
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
					<h1 class="c_CCC">Photography</h1>
					<i class="fa fa-caret-right subheader" aria-hidden="true"></i>
					<h2 class="subheader">Stephen's Favories</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-01.jpg" data-caption="Jason & Chelsie<br><small>David Arthur Vineyards - St. Helena, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-01sm.jpg" alt="Bride and Groom kiss overlooking David Arthur Vineyards"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-02.jpg" data-caption="Red Storm of the Century<br><small>Sydney Harbor Bridge - Australia</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-02sm.jpg" alt="Sydney bridge fades into red sand storm"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-03.jpg" data-caption="Daniel & Amy<br><small>San Diego Wild Animal Park - California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-03sm.jpg" alt="Bride and Groom kiss beneath an ominous sky"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-04.jpg" data-caption="Jesse & Brooke<br><small>Red Mountain Ranch - Creede, Colorado</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-04sm.jpg" alt="Cannot wait to eat these cupcakes"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-05.jpg" data-caption="Stefan & Virginia<br><small>Blueberry Hill Inn - Goshen, Vermont</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-05sm.jpg" alt="Wedding tent lights up at the Blueberry Hill Inn"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-06.jpg" data-caption="Cody & Kelly<br><small>Apple Tree Lane B&B - Waupaca, Wisconsin</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-06sm.jpg" alt="Blonde Bride shows her flowers"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-07.jpg" data-caption="Jason & Chelsie<br><small>Santa Rosa, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-07sm.jpg" alt="Lovely couple sits for a photo in a vineyard"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-08.jpg" data-caption="Derek & Christina<br><small>Edgewood - Stateline, Nevada</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-08sm.jpg" alt="Kissing in the pine trees near Lake Tahoe"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-09.jpg" data-caption="Ari & Janet<br><small>Princeville, Hawaii</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-09sm.jpg" alt="Bride and groom stand on black rocks of Kawaii"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-10.jpg" data-caption="Brandon & Katie<br><small>Washington Bulb Company - Mt. Vernon, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-10sm.jpg" alt="Kissing in endless pink tulips"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-11.jpg" data-caption="Clinton & Shannon<br><small>Fort Walton Beach, Florida</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-11sm.jpg" alt="Worms eye view of Bride in the grass"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-12.jpg" data-caption="Rebecca<br><small>Cancer Cure Car - Olympia, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-12sm.jpg" alt="Cancer survivor poses next to her signed car"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-13.jpg" data-caption="Joshua & Katie<br><small>University Place, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-13sm.jpg" alt="Spectacular sunset for bride and groom"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-14.jpg" data-caption="Andrew & Jessica<br><small>JM Cellars - Woodenville, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-14sm.jpg" alt="Bride and Groom kiss in the barrel room of JM Cellars"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-15.jpg" data-caption="Ariana<br><small>Studio - Olympia, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-15sm.jpg" alt="Angel Studio Shoot in Olympia, Washington"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-16.jpg" data-caption="Ian & Macy<br><small>Zeinth Vinyard - Zena, Oregon</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-16sm.jpg" alt="Groom blows cigar smoke and looks cool"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-17.jpg" data-caption="Cody & Kelly<br><small>Apple Tree Lane B&B - Waupaca, Wisconsin</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-17sm.jpg" alt="Bride catches Groom having too much fun"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-18.jpg" data-caption="Jennifer & Mackenzie<br><small>The Hoodoo's - Kamloops, British Columbia</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-18sm.jpg" alt="Two beautiful girls pose dramaticaly in the dying light"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-19.jpg" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Ch&acirc;teau Ferme Profondval, Belgium</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-19sm.jpg" alt="Bride and Groom have their first dance"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-20.jpg" data-caption="Jeremy & Michelle<br><small>Del Rio, Texas</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-20sm.jpg" alt="Wedding couple kisses on the banks of Rio Grande under a blazing sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-21.jpg" data-caption="Joe & Margaret<br><small>Washington Square - New Orleans, Louisiana</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-21sm.jpg" alt="Bride and Groom kiss beneath long flowing veil"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-22.jpg" data-caption="Greg & Sarah<br><small>Oregon City, Oregon</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-22sm.jpg" alt="Bride poses with Oregon City fire fighters"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-23.jpg" data-caption="On The Job<br><small>Snoqualmie Ridge Golf Club - Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-23sm.jpg" alt="About The Day is on the job with photo and video"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/stephen/ses-24.jpg" data-caption="Tristan & Ashley<br><small>Red Rock State Park - Sedona, Arizona</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/stephen/ses-24sm.jpg" alt="Bride and Groom with Red Rock Park in the background"></a>
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