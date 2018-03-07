<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	date_default_timezone_set("America/Los_Angeles");
	$expire=time()+60*60*24*60;
	$thisPage="Familes";
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
		<title>Wedding Photography | Wedding Family Photo Gallery</title>
		<meta name="description" content="Best of Wedding Family Photography images from Stephen & Sonia of About The Day Photography, Wedding family Gallery">
		<meta name="keywords" content="Wedding Family Photography Gallery, Mixed Family Images, Wedding Family, Family photos">
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
					<h2 class="subheader">Families</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="The Akehurst Family<br><small>Estero, Florida</small>" href="../_img/gallery/families/family-01.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-01sm.jpg" alt="The Akeurst family stands along a road at the Koreshan State Historic Site in Estero, Florida"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="The Bride & Groom Families<a href='/blog/wedding-jkk/' target='_blank'>&nbsp;View Blog</a><br><small>University Place, Washington</small>" href="../_img/gallery/families/family-02.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-02sm.jpg" alt="The Bride and Grooms and their parents all pose together"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Max<br><small>Stateline, Nevada</small>" href="../_img/gallery/families/family-03.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-03sm.jpg" alt="Katelin pose beside a tree for senior photos in Lacey, Washington"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="The Sheppard Family<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/families/family-04.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-04sm.jpg" alt="The Sheppard family in their Canadian gear are dressed for the cold"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="The Sheppard Family<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/families/family-05.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-05sm.jpg" alt="The Sheppard family in their Canadian gear are dressed for the cold"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="The Sheppard Family<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/families/family-06.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-06sm.jpg" alt="The Sheppard family kids see and hear no evil"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Mommy & Mylee<br><small>Lacey, Washington</small>" href="../_img/gallery/families/family-07.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-07sm.jpg" alt="Mommy & Mylee walk along a treelined pathway in Lacey, Washington"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Mommy & Mylee<br><small>Lacey, Washington</small>" href="../_img/gallery/families/family-08.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-08sm.jpg" alt="Mylee is imitated by her mother, which is very cutes"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Chase<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/families/family-09.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-09sm.jpg" alt="Chase kneels along a path to the Thompson River"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="The Tuohey Family<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/families/family-10.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-10sm.jpg" alt="The Tuohey family brave the cold for a family photo"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Rory<br><small>Olympia, Washington</small>" href="../_img/gallery/families/family-11.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-11sm.jpg" alt="Rory poses in the woods like a woodland fairy"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="The Funell Family<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/families/family-12.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-12sm.jpg" alt="The Funell family gather at the park in Kamloops, BC"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Shawn<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/families/family-13.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-13sm.jpg" alt="Shawn blends into the leaves at Riverside Park"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="The Tuohey Family<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/families/family-14.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-14sm.jpg" alt="The Tuohey family risk it all for a family photo on the railroad tracks"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="The Loid Family<br><small>Olympia, Washington</small>" href="../_img/gallery/families/family-15.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-15sm.jpg" alt="The Loid family now has a new member"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Mackenzie<br><small>Indian Head, Maryland</small>" href="../_img/gallery/families/family-16.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-16sm.jpg" alt="Mackenzie poses for school photos in Indian Head, MD"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Phyllis, Kyle & Charlie<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/families/family-17.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-17sm.jpg" alt="Phyllis and her two lovey dogs in Kamloops, BC"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Blaine & Alex<br><small>Lacey, Washington</small>" href="../_img/gallery/families/family-18.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-18sm.jpg" alt="Blaine and Alex sit feet forward in the grass"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="The Duke Family<br><small>Edgemont, Arkansas</small>" href="../_img/gallery/families/family-19.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-19sm.jpg" alt="The Duke family poses on an old John Deere tractor"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Sky & Melody<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/families/family-20.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-20sm.jpg" alt="The Harrison girls lay in the grass and smile"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Julie<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/families/family-21.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-21sm.jpg" alt="Julie pouts about the cold, or maybe she's hungry"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="The Pierce Family<br><small>Hamilton, New Jersey</small>" href="../_img/gallery/families/family-22.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-22sm.jpg" alt="The whole family on the front steps of the house"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="The Repar Family<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/families/family-23.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-23sm.jpg" alt="The Repar family sits in a old boxcar on for a Christmas card photo"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Mackenzie & Zed<br><small>Indian Head, Maryland</small>" href="../_img/gallery/families/family-24.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/families/family-24sm.jpg" alt="Mackenzie snuggles up with Zed at Indian Head, MD"></a>
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