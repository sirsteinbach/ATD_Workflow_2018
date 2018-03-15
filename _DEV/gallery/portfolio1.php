<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="WG1";
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
		<title>Wedding Photography Gallery | Portfolio 1</title>
		<meta name="description" content="Best of Wedding Photography images from Stephen & Sonia of About The Day Photography, Gallery 1">
		<meta name="keywords" content="Wedding Photography Gallery, Mixed Wedding Highlight Images, Wedding Gallery 1">
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
					<h2 class="subheader">Gallery 1</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section><!-- <a href='/blog/w_jbe/' target='_blank'>View Blog</a> -->
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-01.jpg" data-caption="Tommy & Felicia<a href='/blog/wedding-tff/' target='_blank'>View Blog</a><br><small>Lake Siskiyou &bull; Mt. Shasta, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-01sm.jpg" alt="Wedding Photography Bride and Groom by the waters edge at sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-02.jpg" data-caption="Derek & Christina<a href='/blog/w_dcc/' target='_blank'>View Blog</a><br><small>Edgewood Golf Resort &bull; Lake Tahoe, Nevada</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-02sm.jpg" alt="Wedding Photography Kissing in the pine trees near Lake Tahoe"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-03.jpg" data-caption="Luis & Beatriz<br><small>Driggs, ID</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-03sm.jpg" alt="Wedding Photography Bride and Groom under a Simpsons sky"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-04.jpg" data-caption="Prince & Kimberley<br><small>Scenic Hills Country Club &bull; Pensacola, Florida</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-04sm.jpg" alt="Wedding Photography Groom places ring on Brides finger"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-05.jpg" data-caption="Daniel & Amy<br><small>San Diego Wild Animal Park &bull; Escondido, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-05sm.jpg" alt="Wedding Photography Bride and Groom kiss beneath an ominous sky"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-06.jpg" data-caption="Dustin & Miranda<br><small>Buena Vista, Colorado</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-06sm.jpg" alt="Wedding Photography Colorful Silouette of Bride and Groom"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-07.jpg" data-caption="Ari & Janet<a href='/blog/w_ajp/' target='_blank'>View Blog</a><br><small>Princeville &bull; Kauai, Hawaii</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-07sm.jpg" alt="Wedding Photography Bride laughs as she walks down the isle with her father"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-08.jpg" data-caption="Justin & Cara<a href='/blog/wedding-jce/' target='_blank'>View Blog</a><br><small>Merritt, British Columbia</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-08sm.jpg" alt="Wedding Photography Beautiful Bride sits on an old junkyard car"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-09.jpg" data-caption="Ian & Macy<br><small>Zeinth Vinyard &bull; Zena, Oregon</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-09sm.jpg" alt="Wedding Photography Brides face in the natural light of the window"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-10.jpg" data-caption="Tristan & Ashley<a href='/blog/w_tar/' target='_blank'>View Blog</a><br><small>Red Rock State Park &bull; Sedona, Arizona</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-10sm.jpg" alt="Wedding Photography Bride and Groom with Red Rock Park in the background"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-11.jpg" data-caption="Jeremy & Michelle<a href='/blog/wedding-jmm/' target='_blank'>View Blog</a><br><small>The Rio Grande River &bull; Del Rio, Texas</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-11sm.jpg" alt="Wedding party strikes a crazy pose"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-12.jpg" data-caption="Jacobus & Jen<br><small>Our Lady of Lourdes &bull; Spokane, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-12sm.jpg" alt="Kissing in front of Cathedral of Our Lady of Lourdes in Spokane, Washington"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-13.jpg" data-caption="Jeffrey & Kelsey<a href='/blog/wedding-jkm/' target='_blank'>View Blog</a><br><small>Moore Mansion &bull; Pasco, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-13sm.jpg" alt="Sunset kiss at Moore Mansion in Pasco"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-14.jpg" data-caption="Jeremy & Shabnam<br><small>Park Hyatt &bull; Dubai, UAE</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-14sm.jpg" alt="Henna hands in Dubai"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-15.jpg" data-caption="Rigor & Joanne<br><small>Mendenhall Glacier &bull; Juneau, Alaska</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-15sm.jpg" alt="Bride and Groom kiss in front of Mendenhall Glacier in Juneau, Alaska"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-16.jpg" data-caption="Daniel & Amy<br><small>San Diego Wild Animal Park &bull; Escondido, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-16sm.jpg" alt="The sun shines through a passionate kiss"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-17.jpg" data-caption="Gary & Shirley<a href='/blog/w_gst/' target='_blank'>View Blog</a><br><small>Riverside, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-17sm.jpg" alt="Groom is admired by his new wife"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-18.jpg" data-caption="Jason & Chelsie<a href='/blog/w_jct/' target='_blank'>View Blog</a><br><small>David Arthur Vineyards &bull; St.Helena, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-18sm.jpg" alt="Bride and Groom kiss overlooking David Arthur Vineyards"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-19.jpg" data-caption="Justin & Cara<a href='/blog/wedding-jce/' target='_blank'>View Blog</a><br><small>Merritt, British Columbia</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-19sm.jpg" alt="Wedding party strikes a crazy pose"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-20.jpg" data-caption="Colin & Rachel<br><small>St. Mary's Cathedral &bull; Lafayette, Indiana</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-20sm.jpg" alt="View of wedding ceremony from St. Marys balcony"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-21.jpg" data-caption="Steve & Meggan<br><small>Old Edwards Inn &bull; Highlands, North Carolina</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-21sm.jpg" alt="Bride cuddles into smiling Groom"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-22.jpg" data-caption="Jason & Chelsie <a href='/blog/w_jct/' target='_blank'>View Blog</a><br><small>Calistoga, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-22sm.jpg" alt="Bride checks her makeup"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-23.jpg" data-caption="Dell & Sarah<br><small>Portland, Maine</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-23sm.jpg" alt="A wedding pug dressed in a tux"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio1/wedding_1-24.jpg" data-caption="Colin & Rachel<br><small>West Lafayette, Indiana</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio1/wedding_1-24sm.jpg" alt="Groom kisses bride in the forest"></a>
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