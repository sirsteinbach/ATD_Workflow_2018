<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="EG1";
	$thisMenu="Gallery";
	$thisSet="Engagements";
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
		<title>Wedding Engagement Photography Gallery | Portfolio 1</title>
		<meta name="description" content="Best of Wedding Engagement Photography images from Stephen & Sonia of About The Day Photography, Engagement Gallery 1">
		<meta name="keywords" content="Wedding Engagement Photography Gallery, Mixed Wedding Engagement Highlight Images, Wedding Engagement Gallery 1">
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
					<h2 class="subheader">Engagement 1</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section><!-- <a href='/blog/e_cmp/' target='_blank'>View Blog</a> -->
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Brandon & Katie<br><small>Washington Bulb Company &bull; Mt. Vernon, Washington</small>" href="../_img/gallery/engagements1/eng1-01.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-01sm.jpg" alt="Kissing in endless pink tulips"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Tony & Anh-Thu<br><small>Santorini, Greece</small>" href="../_img/gallery/engagements1/eng1-02.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-02sm.jpg" alt="Taking a selfie with Oia in the background"></a>
			</div>
			<div class="column">
				<a class="fancybox" href="../_img/gallery/engagements1/eng1-03.jpg" data-fancybox="group" data-caption="Charlie & Brittany (and Moose)<a href='/blog/e_cbh/' target='_blank'>View Blog</a><br><small>Regusci Vineyards &bull; Napa, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-03sm.jpg" alt="Engaged couple with dog at Regusci Vineyards"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Evan & Sierra<a href='/blog/eng-esr/' target='_blank'>View Blog</a><br><small>Dallas, Texas</small>" href="../_img/gallery/engagements1/eng1-04.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-04sm.jpg" alt="Engaged couple nessles together in tall grass"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Chris & Michelle<a href='/blog/e_cmp/' target='_blank'>View Blog</a><br><small>Monterey, California</small>" href="../_img/gallery/engagements1/eng1-05.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-05sm.jpg" alt="Engagement Shoot in Monterey, California"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Matt & Laura<a href='/blog/e_mlb/' target='_blank'>View Blog</a><br><small>Pigeon Point, California</small>" href="../_img/gallery/engagements1/eng1-06.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-06sm.jpg" alt="Couple kissing in the sunset near Pigeon Point"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jason & Chelsie<a href='/blog/e_jct/' target='_blank'>View Blog</a><br><small>Santa Rosa, California</small>" href="../_img/gallery/engagements1/eng1-07.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-07sm.jpg" alt="Engagement Shoot in Santa Rosa, California"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Brian & Carey<br><small>Hoboken, New Jersey</small>" href="../_img/gallery/engagements1/eng1-08.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-08sm.jpg" alt="Engaged couples long shadows in Hoboken, New Jersey"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Gary & Shirley<a href='/blog/e_gst/' target='_blank'>View Blog</a><br><small>Newport Beach, California</small>" href="../_img/gallery/engagements1/eng1-09.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-09sm.jpg" alt="Engagement Shoot in Newport Beach, California"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Chad & Fallon<a href='/blog/e_cfo/' target='_blank'>View Blog</a><br><small>San Luis Obispo, California</small>" href="../_img/gallery/engagements1/eng1-10.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-10sm.jpg" alt="Engagement Shoot in San Luis Obispo, California"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="James & Karen<br><small>Santa Cruz, California</small>" href="../_img/gallery/engagements1/eng1-11.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-11sm.jpg" alt="Engagement Shoot in Santa Cruz, California"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jason & Chelsie<a href='/blog/e_jct/' target='_blank'>View Blog</a><br><small>Santa Rosa, California</small>" href="../_img/gallery/engagements1/eng1-12.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-12sm.jpg" alt="Engagement Shoot in Santa Rosa, California"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Noah & Alyson<br><small>Charlotte, North Carolina</small>" href="../_img/gallery/engagements1/eng1-13.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-13sm.jpg" alt="Engagement Shoot in Charlotte, North Carolina"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Trevor & Jarita<a href='/blog/e_tjk/' target='_blank'>View Blog</a><br><small>Kamloops, Britsh Columbia</small>" href="../_img/gallery/engagements1/eng1-14.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-14sm.jpg" alt="Engagement Shoot in Logan, Ohio"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Zac & Kim<br><small>Pacifica Gardens, Oregon</small>" href="../_img/gallery/engagements1/eng1-15.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-15sm.jpg" alt="Engagement Shoot at Pacifica Gardens in Grants Pass, Oregon"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Charlie & Brittany (and Moose)<a href='/blog/e_cbh/' target='_blank'>View Blog</a><br><small>Regusci Vineyards &bull; Napa, California</small>" href="../_img/gallery/engagements1/eng1-16.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-16sm.jpg" alt="Engagement Shoot in Napa, California"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Brian & Carey<br><small>Hoboken, New Jersey</small>" href="../_img/gallery/engagements1/eng1-17.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-17sm.jpg" alt="Sun flairs around engaged couples heads in Hoboken, New Jersey"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="James & Candice<br><small>Dunedin, Florida</small>" href="../_img/gallery/engagements1/eng1-18.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-18sm.jpg" alt="Couple kissing while the fog rolls into Dunedin"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Jeffrey & Angela<a href='/blog/w_jas/' target='_blank'>View Blog</a><br><small>Key Largo, Florida</small>" href="../_img/gallery/engagements1/eng1-19.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-19sm.jpg" alt="Engagement Shoot in Key Largo, Florida"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Markus & Kat<br><small>Halifax, Nova Scotia</small>" href="../_img/gallery/engagements1/eng1-20.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-20sm.jpg" alt="Engagement Shoot in Halifax, Nova Scotia"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Dane & Adrienne<a href='/blog/e_dae/' target='_blank'>View Blog</a><br><small>Mariner Stadium &bull; Seattle, Washington</small>" href="../_img/gallery/engagements1/eng1-21.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-21sm.jpg" alt="Engagement Shoot at Mariner Stadium in Seattle, Washington"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Rejav & Neha<a href='/blog/e_rnc/' target='_blank'>View Blog</a><br><small>Seattle, Washington</small>" href="../_img/gallery/engagements1/eng1-22.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-22sm.jpg" alt="Engagement Shoot in Seattle, Washington"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Gilmer & Ashley<br><small>Destin, Florida</small>" href="../_img/gallery/engagements1/eng1-23.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-23sm.jpg" alt="Engagement Shoot in Destin, Florida"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Danny & Joycelyn<a href='/blog/eng-djz/' target='_blank'>View Blog</a><br><small>Centennial Park &bull; Coronado, California</small>" href="../_img/gallery/engagements1/eng1-24.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/engagements1/eng1-24sm.jpg" alt="Engaged couple stands tall over San Diego skyline from Centennial Park"></a>
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