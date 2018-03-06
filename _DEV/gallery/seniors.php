<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	date_default_timezone_set("America/Los_Angeles");
	$expire=time()+60*60*24*60;
	$thisPage="Seniors";
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
		<title>Wedding Photography | High School Seniors Photo Gallery</title>
		<meta name="description" content="Best of High School Senior Photography images from Stephen & Sonia of About The Day Photography, Senior photos">
		<meta name="keywords" content="Senior Photos, High School Senior Photography, Senior Album">
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
					<h2 class="subheader">Seniors</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Haliegh<br><small>Glendale, Oregon</small>" href="../_img/gallery/seniors/senior-01.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-01sm.jpg" alt="Haliegh poses in her softball outfit"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Marco<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/seniors/senior-02.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-02sm.jpg" alt="Mark poses for senior photos with grafiti wall"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Katelin<br><small>Lacey, Washington</small>" href="../_img/gallery/seniors/senior-03.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-03sm.jpg" alt="Katelin pose beside a tree for senior photos in Lacey, Washington"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ainslie<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/seniors/senior-04.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-04sm.jpg" alt="Ainslie poses for senior photo in red sweater" ></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Holly<br><small>Azalea, Oregon</small>" href="../_img/gallery/seniors/senior-05.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-05sm.jpg" alt="Closeup of Holly with stunning makeup"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Chris<br><small>Lacey, Washington</small>" href="../_img/gallery/seniors/senior-06.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-06sm.jpg" alt="Chris leans up against a chain link fence"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Rebekah<br><small>Lacey, Washington</small>" href="../_img/gallery/seniors/senior-07.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-07sm.jpg" alt="Rebekah poses for senior photos in white on the concrete steps"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ronnie<br><small>Olympia, Washington</small>" href="../_img/gallery/seniors/senior-08.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-08sm.jpg" alt="Ronnie poses for senior photo in St.Martins woods"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Tasha<br><small>Salmon Arm, British Columbia</small>" href="../_img/gallery/seniors/senior-09.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-09sm.jpg" alt="Tasha poses for her photo in the snow"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Chris<br><small>Lacey, Washington</small>" href="../_img/gallery/seniors/senior-10.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-10sm.jpg" alt="Chris sits on the concrete steps for senior photos"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Holly<br><small>Azalea, Oregon</small>" href="../_img/gallery/seniors/senior-11.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-11sm.jpg" alt="Holly poses in the middle of the road"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Katelin<br><small>Lacey, Washington</small>" href="../_img/gallery/seniors/senior-12.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-12sm.jpg" alt="Katelin lays on the grass for senior photos in Lacey, Washington"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ainslie<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/seniors/senior-13.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-13sm.jpg" alt="Ainslie poses for senior photo in green jacket"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Marco<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/seniors/senior-14.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-14sm.jpg" alt="Mark poses for senior photos with grafiti wall"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ariana<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/seniors/senior-15.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-15sm.jpg" alt="Closeup of Ainslie for senior photos"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Rebekah<br><small>Lacey, Washington</small>" href="../_img/gallery/seniors/senior-16.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-16sm.jpg" alt="Rebekah poses for senior photos in the fall leaves"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Codi<br><small>Grants Pass, Oregon</small>" href="../_img/gallery/seniors/senior-17.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-17sm.jpg" alt="Codi poses on the lawn with fall colored leaves in Grants Pass"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Holly<br><small>Azalea, Oregon</small>" href="../_img/gallery/seniors/senior-18.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-18sm.jpg" alt="Holly poses with white fence"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Sasha<br><small>Grants Pass, Oregon</small>" href="../_img/gallery/seniors/senior-19.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-19sm.jpg" alt="Closeup of Sasha's pefect makeover"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Cassidy<br><small>Olympia, Washington</small>" href="../_img/gallery/seniors/senior-20.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-20sm.jpg" alt="Closeup of Cassidy for senior photos"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Chris<br><small>Lacey, Washington</small>" href="../_img/gallery/seniors/senior-21.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-21sm.jpg" alt="Chris in his football uniform for senior photos"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ainslie<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/seniors/senior-22.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-22sm.jpg" alt="Ainslie poses for senior photo in red sweater"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Cassidy<br><small>Olympia, Washington</small>" href="../_img/gallery/seniors/senior-23.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-23sm.jpg" alt="Cassidy leans on a schoolyard fence at sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Marco<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/seniors/senior-24.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/seniors/senior-24sm.jpg" alt="Mark poses for senior photos with grafiti wall"></a>
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