<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="SJF";
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
		<title>Wedding Photography | Sonia's Favorite Photo Gallery</title>
		<meta name="description" content="Sonias choice of her favorite photography from About The Day Photography">
		<meta name="keywords" content="Sonia Pic, Sonia Favorites, Sonia Best of">
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
					<h2 class="subheader">Sonia's Favories</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section><!-- <a href='/blog/wedding-scl/' target='_blank'>View Blog</a> -->
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Evan & Sierra<a href='/blog/wedding-esr/' target='_blank'>View Blog</a><br><small>Air Force Academy &bull; Colorado Springs</small>" href="../_img/gallery/sonia/sjs-01.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-01sm.jpg" alt="Air Force Wedding Couple Kiss in Snow Near Colorado Springs"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jason & Chelsie<a href='/blog/wedding-jce/' target='_blank'>View Blog</a><br><small>Calistoga, California</small>" href="../_img/gallery/sonia/sjs-02.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-02sm.jpg" alt="Wedding in Calistoga, California"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Meshan & Alicia<a href='/blog/wedding-mat/' target='_blank'>View Blog</a><br><small>The Legislative Building &bull; Regina, Saskatchewan</small>" href="../_img/gallery/sonia/sjs-03.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-03sm.jpg" alt="Bride smiles on the steps of the Legislative Building in Regina"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Justin & Cara<a href='/blog/wedding-jce/' target='_blank'>View Blog</a><br><small>Merritt, British Columbia</small>" href="../_img/gallery/sonia/sjs-04.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-04sm.jpg" alt="Flowergirls kiss the bride"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Trevor & Jarita<a href='/blog/w_tjk/' target='_blank'>View Blog</a><br><small>Kamloops, British Columbia</small>" href="../_img/gallery/sonia/sjs-05.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-05sm.jpg" alt="Bride and Groom beside a rustic GMC truck"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jeff & Kristina<br><small>Blessed Sacrament &bull; Seattle, Washington</small>" href="../_img/gallery/sonia/sjs-06.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-06sm.jpg" alt="Wedding in Seattle, Washington"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ari & Janet<a href='/blog/w_ajp/' target='_blank'>View Blog</a><br><small>Princeville, Kauai, Hawaii</small>" href="../_img/gallery/sonia/sjs-07.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-07sm.jpg" alt="Bride and Groom pose barefoot on black rocks of Hawaii"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Chris & Jacy<br><small>Trophy Lake &bull; Port Orchard, Washington</small>" href="../_img/gallery/sonia/sjs-08.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-08sm.jpg" alt="Brides lovely boquet held in front of her"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Joshua & Katie<a href='/blog/wedding-jkk/' target='_blank'>View Blog</a><br><small>The Envornment Services Building &bull; University Place, Washington</small>" href="../_img/gallery/sonia/sjs-09.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-09sm.jpg" alt="The Wedding party looks great posing in the trees"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Alex & Ruthie<br><small>Laconner Flats &bull; La Conner, Washington</small>" href="../_img/gallery/sonia/sjs-10.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-10sm.jpg" alt="Bride and Groom kiss in a wheat field under blue skies"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Holly<br><small>Azalea, Oregon</small>" href="../_img/gallery/sonia/sjs-11.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-11sm.jpg" alt="bride and Groom on the lawn at Trophy Lake"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Charlie & Brittany<a href='/blog/e_cbh/' target='_blank'>View Blog</a><br><small>Regusci Vineyards &bull; Napa, California</small>" href="../_img/gallery/sonia/sjs-12.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-12sm.jpg" alt="Couple kisses in the sunset above Regusci Vineyards"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ariana<br><small>Ibanez Modeling Shoot &bull; Olympia, Washington</small>" href="../_img/gallery/sonia/sjs-13.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-13sm.jpg" alt="Sexy blue eyes with blue Ibanez Guitar"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Tulo & Carissa<br><small>Kailua Kona, Big Island, Hawaii</small>" href="../_img/gallery/sonia/sjs-14.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-14sm.jpg" alt="Bride shows Yoga pose on Kailua Kona beach"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Matt & Morgan<a href='/blog/wedding-mmk/' target='_blank'>View Blog</a><br><small>Frazier Farmstead &bull; Milton-Freewater, Oregon</small>" href="../_img/gallery/sonia/sjs-15.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-15sm.jpg" alt="Country wedding with beautiful Bride and cowboy Groom"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Scott & Codi<a href='/blog/wedding-scl/' target='_blank'>View Blog</a><br><small>Grand Princess &bull; Playa del Carmen, Mexico</small>" href="../_img/gallery/sonia/sjs-16.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-16sm.jpg" alt="Bride pulls Groom in for a kiss by his suspenders in Playa del Carmen"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jason & Chelsie<a href='/blog/e_jct/' target='_blank'>View Blog</a><br><small>Enriquez Estates Winery &bull; Santa Rosa, California</small>" href="../_img/gallery/sonia/sjs-17.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-17sm.jpg" alt="Engaged couple pose in the Enriquez Estates Winery vineyard"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Dustin & Miranda<br><small>Buena Vista, Colorado</small>" href="../_img/gallery/sonia/sjs-18.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-18sm.jpg" alt="Colorful Silouette of Bride and Groom"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Danielle<a href='/blog/m_df/' target='_blank'>View Blog</a><br><small>Lake Paul, British Columbia</small>" href="../_img/gallery/sonia/sjs-19.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-19sm.jpg" alt="Mocha skin beauty models with a straw hat in a wheat field"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Gary & Shirley<a href='/blog/w_gst/' target='_blank'>View Blog</a><br><small>Riverside, California</small>" href="../_img/gallery/sonia/sjs-20.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-20sm.jpg" alt="Groom is admired by his new wife"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Daniel & Amy<br><small>San Diego Wild Animal Park &bull; Escondido, California</small>" href="../_img/gallery/sonia/sjs-21.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-21sm.jpg" alt="The sun shines through a passionate wedding kiss"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="James & Malorie<a href='/blog/wedding-jma/' target='_blank'>View Blog</a><br><small>Mogollon Rim, Arizona</small>" href="../_img/gallery/sonia/sjs-22.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-22sm.jpg" alt="Sunset wedding portrait at Mogollon Rim"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ben & Keri<br><small>Aspen Meadow Church &bull; Colton, Oregon</small>" href="../_img/gallery/sonia/sjs-23.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-23sm.jpg" alt="Bridal dress, orange and yellow flowers, and jewlery"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Chad & Katrina<br><small>Blue Ribbon Cooking &bull; Seattle, Washington</small>" href="../_img/gallery/sonia/sjs-24.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/sonia/sjs-24sm.jpg" alt="Lovely Bride poses as she gets ready"></a>
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