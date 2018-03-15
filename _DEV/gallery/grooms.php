groom<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="Grooms";
	$thisMenu="Gallery";$thisSet="Weddings";
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
		<title>Wedding Photography | Wedding Grooms Photo Gallery</title>
		<meta name="description" content="Best of Wedding Grooms Photography images from Stephen & Sonia of About The Day Photography, Wedding Grooms Gallery 1">
		<meta name="keywords" content="Wedding Groom Photography Gallery, Mixed Wedding Groom Highlight Images, Wedding Grooms, Bridal Photography">
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
					<h2 class="subheader">Grooms</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Oriana<a href='/blog/wedding-jon/' target='_blank'>View Blog</a><br><small>Hornblower Garden &bull; Plymouth, Massachusetts</small>" href="../_img/gallery/grooms/groom-01.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-01sm.jpg" alt="30's theme Groom poses at Hornblower Garden"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Cara<a href='/blog/wedding-jce/' target='_blank'>View Blog</a><br><small>Merritt, British Columbia</small>" href="../_img/gallery/grooms/groom-02.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-02sm.jpg" alt="Beautiful Bride sits on old junked car"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ellen<br><small>Aspen Hall Manor &bull; Harrodsburg, Kentucky</small>" href="../_img/gallery/grooms/groom-03.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-03sm.jpg" alt="Bride leans against Aspen Hall Manor in Harrodsburg, Kentucky"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Engrid<br><small>Manchester Grand Hyatt &bull; San Diego, California</small>" href="../_img/gallery/grooms/groom-04.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-04sm.jpg" alt="Beautiful Bride look out from behind her viel at Manchester Grand Hyatt"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Heather<br><small>Avalon, California</small>" href="../_img/gallery/grooms/groom-05.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-05sm.jpg" alt="Bride stands with her back to the camera for a full dress picture in Avalon, California"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Amber<br><small>Thompson River Inn &bull; Kamloops, British Columbia</small>" href="../_img/gallery/grooms/groom-06.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-06sm.jpg" alt="Asian Bride glows in sunset"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Taya<a href='/blog/w_mtm/' target='_blank'>View Blog</a><br><small>Wallowa Lake &bull; Joseph, Oregon</small>" href="../_img/gallery/grooms/groom-07.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-07sm.jpg" alt="Bride walks through tall grass at Wallowa Lake in Joseph, Oregon"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Yuanyi<br><small>Bella Fiore Winery &bull; Ashland, Oregon</small>" href="../_img/gallery/grooms/groom-08.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-08sm.jpg" alt="Bride applies final touches at Bella Fiore Winery in Ashland, Oregon"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Kari<br><small>Vancouver, Washington</small>" href="../_img/gallery/grooms/groom-09.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-09sm.jpg" alt="Bride first look on the stairs in Vancouver, Washington"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Sarah<br><small>AlexEli Vineyard &bull; Molalla, Oregon</small>" href="../_img/gallery/grooms/groom-10.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-10sm.jpg" alt="Bride smiles through her fishnet veil"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Rebecca<br><small>Santa Barbara, California</small>" href="../_img/gallery/grooms/groom-11.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-11sm.jpg" alt="Bride flirts and works the camera in Santa Barbara, California"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ally<br><small>Puyallup, Washington</small>" href="../_img/gallery/grooms/groom-12.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-12sm.jpg" alt="Bride smells her flowers"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Kelly<br><small>Apple Tree Lane B&B &bull; Waupaca, Wisconsin</small>" href="../_img/gallery/grooms/groom-13.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-13sm.jpg" alt="Blonde Bride shows her flowers"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Cara<a href='/blog/wedding-jce/' target='_blank'>View Blog</a><br><small>Merritt, British Columbia</small>" href="../_img/gallery/grooms/groom-14.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-14sm.jpg" alt="Flowergirls kiss the groom"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Amber<br><small>Thompson Inn &bull; Kamloops, British Columbia</small>" href="../_img/gallery/grooms/groom-15.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-15sm.jpg" alt="Asian Bride with flawless skin gets ready at Thompson River Inn"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Rebecca<br><small>Kensington Gardens &bull; Gig Harbor, Washington</small>" href="../_img/gallery/grooms/groom-16.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-16sm.jpg" alt="Beautiful Bride looks back at camera"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Carlie<br><small>Gemeindezentrum Lutherkirche &bull; Frankfurt, Germany</small>" href="../_img/gallery/grooms/groom-17.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-17sm.jpg" alt="Brides eyes though fishnet"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Megan<a href='/blog/wedding-bms/' target='_blank'>View Blog</a><br><small>Grafton Dells River Park &bull; Milwaukee, Wisconsin</small>" href="../_img/gallery/grooms/groom-18.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-18sm.jpg" alt="Angelic Bride in the forest near Milwaukee"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Josie<br><small>Point Pleasant, New Jersey</small>" href="../_img/gallery/grooms/groom-19.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-19sm.jpg" alt="Bride stands on the New Jersey beach"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Denise<br><small>Point Defiance &bull; Tacoma, Washington</small>" href="../_img/gallery/grooms/groom-20.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-20sm.jpg" alt="Beautiful blond Bride raises her eyebrows"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Dorthe&eacute;<br><small>Ch&acirc;teau Ferme Profondval, Belgium</small>" href="../_img/gallery/grooms/groom-21.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-21sm.jpg" alt="Brides finishing touches"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Sierra<a href='/blog/wedding-esr/' target='_blank'>View Blog</a><br><small>Cheyenne Mountain Resort &bull; Colorado Springs</small>" href="../_img/gallery/grooms/groom-22.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-22sm.jpg" alt="Bride looks out her window at Cheyenne Mountain Resort"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Heather<a href='/blog/w_jhm/' target='_blank'>View Blog</a><br><small>Peninsula Room &bull; Traverse City, Michigan</small>" href="../_img/gallery/grooms/groom-23.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-23sm.jpg" alt="Gorgeous Bride looks over her shoulder at the Peninsula Room in Traverse City, Michigan"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Katrina<br><small>Blue Ribbon Cooking &bull; Seattle, Washington</small>" href="../_img/gallery/grooms/groom-24.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/grooms/groom-24sm.jpg" alt="Bride holds her boquet out in front of her"></a>
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