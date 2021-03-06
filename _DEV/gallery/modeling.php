<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="Modeling";
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
		<title>Wedding Photography | Modeling Photo Gallery</title>
		<meta name="description" content="Best of Modeling Photography images from Stephen & Sonia of About The Day Photography, Models and Modeling">
		<meta name="keywords" content="Modeling Photography Gallery, Mixed Models and Modeling Highlight Images, Modeling, Models">
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
					<h2 class="subheader">Modeling</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section><!-- <a href='/blog/m_df/' target='_blank'>View Blog</a> -->
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Mackenzie & Jennifer<a href='/blog/m_mj/' target='_blank'>View Blog</a><br><small>The Hoodoo's &bull; Kamloops, British Columbia</small>" href="../_img/gallery/modeling/model-01.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-01sm.jpg" alt="Two beautiful girls pose dramaticaly at the edge of night in the dying light"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ariana<br><small>Studio &bull; Olympia, Washington</small>" href="../_img/gallery/modeling/model-02.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-02sm.jpg" alt="Sexy blue eyed model with blue Ibanez Guitar"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Mackenzie<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/modeling/model-03.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-03sm.jpg" alt="Red haired model in sits in strawgrass in Kamloops, BC"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Engrid<br><small>Manchester Grand Hyatt &bull; San Diego, California</small>" href="../_img/gallery/modeling/model-04.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-04sm.jpg" alt="Beautiful Bride look out from behind her viel at Manchester Grand Hyatt"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Kim<br><small>Pacifica Gardens &bull; Grants Pass, Oregon</small>" href="../_img/gallery/modeling/model-05.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-05sm.jpg" alt="Cute blonde poses in the forest at Pacifica Gardens"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Danielle<a href='/blog/m_df/' target='_blank'>View Blog</a><br><small>Lake Paul, British Columbia</small>" href="../_img/gallery/modeling/model-06.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-06sm.jpg" alt="Mocha skin beauty models with a straw hat in a wheat field"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="LaShelle<br><small>Destin Beach, Florida</small>" href="../_img/gallery/modeling/model-07.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-07sm.jpg" alt="Black hair black bikini model on Destin beach"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Sasha<br><small>Grants Pass, Oregon</small>" href="../_img/gallery/modeling/model-08.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-08sm.jpg" alt="Sasha poses for the camera with perfect makeup and hair"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Cassie<br><small>Albuquerque, New Mexico</small>" href="../_img/gallery/modeling/model-09.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-09sm.jpg" alt="Cassie lays on one rail of the train track in Albuquerque, NM"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ariana<br><small>Olympia, Washington</small>" href="../_img/gallery/modeling/model-10.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-10sm.jpg" alt="Ariana is an white angel with a black background"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Rebecca's Cure Car<br><small>Olympia, Washington</small>" href="../_img/gallery/modeling/model-11.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-11sm.jpg" alt="Susan G Komen Cure Car"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Tasha, Courteny, Tessa<br><small>Salmon Arm, British Columbia</small>" href="../_img/gallery/modeling/model-12.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-12sm.jpg" alt="Tasha, Courteny, Tessa freeze as they model in the snow"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Morgan<a href='/blog/p_me/' target='_blank'>View Blog</a><br><small>Marilyn Monroe Tribute &bull; Olympia, Washington</small>" href="../_img/gallery/modeling/model-13.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-13sm.jpg" alt="Marilyn Monroe Lookalike Shoot in Olympia, Washington"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Alexis<br><small>Oceanside, California</small>" href="../_img/gallery/modeling/model-14.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-14sm.jpg" alt="Alexis looks beutiful in fresh makeup and hairdo"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ariana<br><small>Museum of Glass &bull; Tacoma, Washington</small>" href="../_img/gallery/modeling/model-15.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-15sm.jpg" alt="Beautiful model poses along brick wall at The Museum of Glass"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Holly<br><small>Azalea, Oregon</small>" href="../_img/gallery/modeling/model-16.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-16sm.jpg" alt="Holly poses in the middle of the road"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="LaShelle<br><small>Destin Beach, Florida</small>" href="../_img/gallery/modeling/model-17.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-17sm.jpg" alt="LaShelle models black bikini on tan body on white sand in Destin, FL"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Elizabeth<br><small>Kamloops, British Columbia</small>" href="../_img/gallery/modeling/model-18.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-18sm.jpg" alt="Girl walks in wooden frame along Thompson river"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Tessa<br><small>Salmon Arm, British Columbia</small>" href="../_img/gallery/modeling/model-19.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-19sm.jpg" alt="Beautiful black haired girl poses by a wagon wheel in the snow"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Katrina<a href='/blog/p_ks/' target='_blank'>View Blog</a><br><small>Snow White Theme &bull; Lacey, Washington</small>" href="../_img/gallery/modeling/model-20.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-20sm.jpg" alt="Beautiful girl is Snow White looking at red apple in foreground"></a>
		</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Morgan<a href='/blog/p_me/' target='_blank'>View Blog</a><br><small>Marilyn Monroe Tribute &bull; Olympia, Washington</small>" href="../_img/gallery/modeling/model-21.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-21sm.jpg" alt="Marilyn Monroe Lookalike Shoot in Olympia, Washington"></a>
		</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Haliegh<a href='/blog/p_hg/' target='_blank'>View Blog</a><br><small>Glendale, Oregon</small>" href="../_img/gallery/modeling/model-22.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-22sm.jpg" alt="Modeling shoot with Haliegh in Azalea, Oregon"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Kim<br><small>Pacifica Gardens &bull; Grants Pass, Oregon</small>" href="../_img/gallery/modeling/model-23.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-23sm.jpg" alt="Cute blonde poses in the grass at Pacifica Gardens"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" data-caption="Ariana<br><small>Museum Of Glass &bull; Tacoma, Washington</small>" href="../_img/gallery/modeling/model-24.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/modeling/model-24sm.jpg" alt="Girl in black dress at The Museum of Glass in Tacoma"></a>
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