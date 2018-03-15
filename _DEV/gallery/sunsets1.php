<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="SS1";
	$thisMenu="Gallery";
	$thisSet="Sunsets";
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
		<title>Sunset Wedding Photography Gallery | Portfolio 1</title>
		<meta name="description" content="Best of Sunset Wedding Photography images from Stephen & Sonia of About The Day Photography, Sunset Wedding Gallery 1">
		<meta name="keywords" content="Sunset Wedding Photography Gallery, Mixed Sunset Wedding Highlight Images, Sunset Wedding Gallery 1">
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
					<h2 class="subheader">Sunsets 1</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section><!-- <a href='/blog/w_tar/' target='_blank'>View Blog</a> -->
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Rufino & KC<br><small>Pasco, Washington</small>" href="../_img/gallery/sunsets1/sunset1-01.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-01sm.jpg" alt="Bride and Groom stand in a field during sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Charlie & Brittany<a href='/blog/e_cbh/' target='_blank'>View Blog</a><br><small>Regusci Vineyards &bull; Napa, California</small>" href="../_img/gallery/sunsets1/sunset1-02.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-02sm.jpg" alt="Couple kisses in the sunset above Regusci Vineyards"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Daniel & Amy<br><small>San Diego Wild Animal Park &bull; California</small>" href="../_img/gallery/sunsets1/sunset1-03.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-03sm.jpg" alt="Bride and Groom kiss beneath an ominous sky"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Joshua & Katie<a href='/blog/wedding-jkk/' target='_blank'>View Blog</a><br><small>Environmental Services &bull; University Place, Washington</small>" href="../_img/gallery/sunsets1/sunset1-04.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-04sm.jpg" alt="Spectacular sunset for bride and groom at the Environmental Services"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Brian & Carey<br><small>Hoboken, New Jersey</small>" href="../_img/gallery/sunsets1/sunset1-05.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-05sm.jpg" alt="Sun flairs around engaged couples heads in Hoboken, New Jersey"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jeremy & Michelle<a href='/blog/wedding-jmm/' target='_blank'>View Blog</a><br><small>Del Rio, Texas</small>" href="../_img/gallery/sunsets1/sunset1-06.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-06sm.jpg" alt="Wedding couple kisses on the banks of Rio Grande under a blazing sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Rob & Amy<br><small>Kittitas, Washington</small>" href="../_img/gallery/sunsets1/sunset1-07.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-07sm.jpg" alt="Newly married couple stands in field at sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Tristan & Ashley<a href='/blog/w_tar/' target='_blank'>View Blog</a><br><small>Red Rock State Park &bull; Sedona, Arizona</small>" href="../_img/gallery/sunsets1/sunset1-08.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-08sm.jpg" alt="Bride and Groom twirl in the sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jason & Chelsie<a href='/blog/e_jct/' target='_blank'>View Blog</a><br><small>Santa Rosa, California</small>" href="../_img/gallery/sunsets1/sunset1-09.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-09sm.jpg" alt="Engaged couple along a roadside with firery sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Justin & Cara<a href='/blog/wedding-jce/' target='_blank'>View Blog</a><br><small>Merritt, British Columbia</small>" href="../_img/gallery/sunsets1/sunset1-10.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-10sm.jpg" alt="Beautiful Bride sits on an old junkyard car"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Joe & Kelsea<a href='/blog/wedding-jke/' target='_blank'>View Blog</a><br><small>Val Vista Lakes &bull; Gilbert, Arizona</small>" href="../_img/gallery/sunsets1/sunset1-11.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-11sm.jpg" alt="Harry Potter theme wedding with Thank you in the sky"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Dustin & Miranda<br><small>Buena Vista, Colorado</small>" href="../_img/gallery/sunsets1/sunset1-12.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-12sm.jpg" alt="Colorful Silouette of Bride and Groom"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jeffrey & Kelsey<a href='/blog/wedding-jkm/' target='_blank'>View Blog</a><br><small>Moore Mansion &bull; Pasco, Washington</small>" href="../_img/gallery/sunsets1/sunset1-13.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-13sm.jpg" alt="Beautiful wedding reception decorations in the sunset at Moore Mansion"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Garrett & Janelle<a href='/blog/wedding-gjc/' target='_blank'>View Blog</a><br><small>Scotts Bluff Monument &bull; Nebraska</small>" href="../_img/gallery/sunsets1/sunset1-14.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-14sm.jpg" alt="Sunset in Scotts Bluff with larger then life Bride and Groom"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jason & Chelsie<a href='/blog/e_jct/' target='_blank'>View Blog</a><br><small>Santa Rosa, California</small>" href="../_img/gallery/sunsets1/sunset1-15.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-15sm.jpg" alt="Engaged couple pose along roadside in sunset near Santa Rosa winery"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Joe & Kelsie<br><small>Phoenix, Arizona</small>" href="../_img/gallery/sunsets1/sunset1-16.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-16sm.jpg" alt="Engaged couple kiss under fierce Phoenix sky"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="John & Heather<a href='/blog/w_jhm/' target='_blank'>View Blog</a><br><small>Peninsula Room &bull; Traverse City, Michigan</small>" href="../_img/gallery/sunsets1/sunset1-17.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-17sm.jpg" alt="Wedding couple silhouette at the Peninsula Room in Traverse City"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Meshan & Alicia<a href='/blog/wedding-mat/' target='_blank'>View Blog</a><br><small>Regina, Saskatchewan</small>" href="../_img/gallery/sunsets1/sunset1-18.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-18sm.jpg" alt="Eastern Indian wedding couple with darkening sky in Regina, Saskatchewan"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="James & Malorie<a href='/blog/wedding-jma/' target='_blank'>View Blog</a><br><small>Mogollon Rim, Arizona</small>" href="../_img/gallery/sunsets1/sunset1-19.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-19sm.jpg" alt="Firery sunset wedding portrait at Mogollon Rim in Arizona"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Daniel & Amy<br><small>San Diego Wild Animal Park &bull; California</small>" href="../_img/gallery/sunsets1/sunset1-20.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-20sm.jpg" alt="The sun shines through a passionate wedding kiss"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Tommy & Felicia<a href='/blog/wedding-tff/' target='_blank'>View Blog</a><br><small>Lake Siskiyou &bull; Mt. Shasta, California</small>" href="../_img/gallery/sunsets1/sunset1-21.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-21sm.jpg" alt="Bride and Groom by the waters edge at sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="On The Job<br><small>Snoqualmie Ridge Golf Club &bull; Washington</small>" href="../_img/gallery/sunsets1/sunset1-22.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-22sm.jpg" alt="About The Day caputures the moment"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jon & Oriana<a href='/blog/wedding-jon/' target='_blank'>View Blog</a><br><small>Hornblower Garden &bull; Plymouth, Massachusetts</small>" href="../_img/gallery/sunsets1/sunset1-23.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-23sm.jpg" alt="Wedding boquet in the golden light of evening"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Samuel & Candice<a href='/blog/wedding-scg/' target='_blank'>View Blog</a><br><small>Cafe' Madison &bull; Riverside, New Jersey</small>" href="../_img/gallery/sunsets1/sunset1-24.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets1/sunset1-24sm.jpg" alt="Kissing under a dramatic sky with the clock tower in the background"></a>
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