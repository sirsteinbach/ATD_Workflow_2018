<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="WG3";
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
		<title>Wedding Photography Gallery | Portfolio 3</title>
		<meta name="description" content="Best of Wedding Photography images from Stephen & Sonia of About The Day Photography, Gallery 3">
		<meta name="keywords" content="Wedding Photography Gallery, Mixed Wedding Highlight Images, Wedding Gallery 3">
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
					<h2 class="subheader">Gallery 3</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-01.jpg" data-caption="Evan & Sierra<a href='/blog/wedding-esr/' target='_blank'>View Blog</a><br><small>The Air Force Academy &bull; Colorado Springs</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-01sm.jpg" alt="Air Force Wedding Couple Kiss in Snow Near Colorado Springs"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-02.jpg" data-caption="Cameron & Sabrina<br><small>Rancho De La Fuente &bull; Lakeport, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-02sm.jpg" alt="Bride with her new Marine husband"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-03.jpg" data-caption="Ranga & Ketki<br><small>Malai Mandir Temple &bull; New Delhi, India</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-03sm.jpg" alt="Indian Groom arrives on decorated horse"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-04.jpg" data-caption="Greg & Sarah<br><small>AlexEli Vineyard &bull; Molalla, Oregon</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-04sm.jpg" alt="Smiling Bride looks though veil"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-05.jpg" data-caption="Chris & Yoriko<br><small>The Harbor Club &bull; Bellveue, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-05sm.jpg" alt="Groom looks at his beautiful Bride"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-06.jpg" data-caption="Jon & Oriana<a href='/blog/wedding-jon/' target='_blank'>View Blog</a><br><small>Hornblower Garden &bull; Plymouth, Massachusetts</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-06sm.jpg" alt="Wedding boquet in the golden light of evening"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-07.jpg" data-caption="Michael & Kristin<br><small>Promise Garden &bull; Pasco, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-07sm.jpg" alt="Wedding party group at Promise Gardens"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-08.jpg" data-caption="Jesse & Brooke<a href='/blog/w_jbo/' target='_blank'>View Blog</a><br><small>Red Mountain Ranch &bull; Creede, Colorado</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-08sm.jpg" alt="Groom gets choked up when he sees the Bride enter"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-09.jpg" data-caption="Chad & Katrina<br><small>Blue Ribbon Cooking &bull; Seattle, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-09sm.jpg" alt="Bride poses as she gets ready"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-10.jpg" data-caption="Macy & Cassie<br><small>Quartz Mountain Resort &bull; Lone Wolf, Oklahoma</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-10sm.jpg" alt="Cowboy Groom looks at his bride"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-11.jpg" data-caption="Ruben & Zuri<br><small>Birmingham, Alabama</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-11sm.jpg" alt="Rubin and Zuri get out on the dance floor"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-12.jpg" data-caption="Joe & Margaret<br><small>Washington Square &bull; New Orleans, Louisiana</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-12sm.jpg" alt="Bride and Groom kiss beneath long flowing veil"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-13.jpg" data-caption="Garrett & Janelle<a href='/blog/wedding-gjc/' target='_blank'>View Blog</a><br><small>Scotts Bluff Monument &bull; Nebraska</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-13sm.jpg" alt="Sunset in Scotts Bluff with larger then life Bride and Groom "></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-14.jpg" data-caption="Andrew & Jessica<br><small>JM Cellars &bull; Woodenville, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-14sm.jpg" alt="Bride and Groom sneak a kiss in the barrel room of JM Cellars"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-15.jpg" data-caption="Jacky & Amber<br><small>Thompson River Inn &bull; Kamloops, British Columbia</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-15sm.jpg" alt="Groom makes the Bride laugh"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-16.jpg" data-caption="Tommy & Felicia<a href='/blog/wedding-tff/' target='_blank'>View Blog</a><br><small>Lake Siskiyou &bull; Mt. Shasta, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-16sm.jpg" alt="Bride and Groom snuggle in for photos in the forest"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-17.jpg" data-caption="James & Candice<br><small>Dunedin, Florida</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-17sm.jpg" alt="Bride and Groom nussel in front of Florida house"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-18.jpg" data-caption="Jeffrey & Kelsey<a href='/blog/wedding-jkm/' target='_blank'>View Blog</a><br><small>Moore Mansion &bull; Pasco Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-18sm.jpg" alt="Wedding in the background of a happy sign at Moore Mansion"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-19.jpg" data-caption="Jeremy & Shabnam<br><small>Park Hyatt &bull; Dubai, UAE</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-19sm.jpg" alt="Indian Brides beautifl face in red cover at the Park Hyatt in Dubai"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-20.jpg" data-caption="Sean & Brandi<a href='/blog/wedding-sbt/' target='_blank'>View Blog</a><br><small>Peterson Creek Park &bull; Kamloops, British Columbia</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-20sm.jpg" alt="Bride and Groom pose in Peterson Creek Park"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-21.jpg" data-caption="Matt & Laura<a href='/blog/w_mlb/' target='_blank'>View Blog</a><br><small>The Old Whaling Station &bull; Monterey, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-21sm.jpg" alt="Bride and Groom look into each others eyes"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-22.jpg" data-caption="Stefan & Virginia<a href='/blog/w_svh/' target='_blank'>View Blog</a><br><small>Blueberry Hill Inn &bull; Goshen, Vermont</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-22sm.jpg" alt="Wedding tent lights up at the Blueberry Hill Inn"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-23.jpg" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Ch&acirc;teau Ferme Profondval, Belgium</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-23sm.jpg" alt="Bride and Groom have their first dance"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio3/wedding_3-24.jpg" data-caption="Qi & Xiaohan<a href='/blog/wedding-qxz/' target='_blank'>View Blog</a><br><small>Thornewood Castle &bull; Lakewood, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio3/wedding_3-24sm.jpg" alt="Georgous sunset wedding couple at Thornewood Castle"></a>
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