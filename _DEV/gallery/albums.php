<?php
session_set_cookie_params(0,"/",".abouttheday.com");
session_start();
date_default_timezone_set("America/Los_Angeles");
$expire=time()+60*60*24*60;
$thisPage="Design";
$thisMenu="Gallery";
$_SESSION['EyesOn']['Page']=$thisPage;
$_SESSION['EyesOn']['Menu']=$thisMenu;
$_SESSION['EyesOn']['Sub']=$thisPage;
$_SESSION['EyesOn']['Set']="";
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
		<title>Wedding Photography Album Design Gallery</title>
	</head>
	
	<body>
		
		<!--HEADSPACE-->
		<div class="column row show-for-large space1em"></div>
		
		<!--NAVBAR-->
		<?php require("../_php/navMain.php");?>
		
		<section class="row BgMain pullup noRadius">
			
			<!--HEADING-->
			<header class="small-12 secHead nav">
				<div class="iLine c_333">
					<span class="fa-stack ilinePOS c_333"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-camera fa-stack-1x fa-inverse"></i></span>
					<h1 class="c_CCC">Wedding Photography</h1>
					<i class="fa fa-caret-right subheader" aria-hidden="true"></i>
					<h2 class="subheader">Album Designs</h2>
				</div>
			</header>
			
		</section>
		
		<!--GALLERY-->
		<div class="row small-up-1 medium-up-2 large-up-3 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="DCP" data-caption="Drew & Cherry's Album<br><small>Strömsholm Palace - Eskilstuna, Sweden</small>" href="../_img/gallery/albums/dcp/0000.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/albums/dcp/0000.jpg" alt="Album design for wedding at Strömsholm Palace in Sweden"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="RZS" data-caption="Rubin & Zuri's Album<br><small>Birmingham, Alabama</small>" href="../_img/gallery/albums/rzs/0000.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/albums/rzs/0000.jpg" alt="Album design for wedding in Birmingham, Alabama"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="BJB" data-caption="Brian & Joclyn's Album<br><small>San Diego, California</small>" href="../_img/gallery/albums/bjb/0000.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/albums/bjb/0000.jpg" alt="Album design for wedding in San Diego, California"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;'s Album<br><small>Ch&acirc;teau Ferme Profondval, Belgium</small>" href="../_img/gallery/albums/jdb/0000.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/albums/jdb/0000.jpg" alt="Album design for wedding at Ch&acirc;teau Ferme Profondval, Belgium"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="JCS" data-caption="James & Candice's Album<br><small>Dunedin, Florida</small>" href="../_img/gallery/albums/jcs/0000.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/albums/jcs/0000.jpg" alt="Album design for wedding in Dunedin, Florida"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox-group="CBH" data-caption="Charlie & Brittany's Album<br><small>Charles Krug Winery - St.Helena, California</small>" href="../_img/gallery/albums/cbh/0000.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/albums/cbh/0000.jpg" alt="Album design for wedding at Charles Krug Winery in St.Helena, California"></a>
			</div>
		</div>
		
		<!--HIDDEN-->
		<div class="hidden">
			<a class="fancybox" href="../_img/gallery/albums/dcp/0203.jpg" data-fancybox="DCP" data-caption="Drew & Cherry<br><small>Pages 2-3</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/dcp/0405.jpg" data-fancybox="DCP" data-caption="Drew & Cherry<br><small>Pages 4-5</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/dcp/0607.jpg" data-fancybox="DCP" data-caption="Drew & Cherry<br><small>Pages 6-7</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/dcp/0809.jpg" data-fancybox="DCP" data-caption="Drew & Cherry<br><small>Pages 8-9</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/dcp/1011.jpg" data-fancybox="DCP" data-caption="Drew & Cherry<br><small>Pages 10-11</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/dcp/1213.jpg" data-fancybox="DCP" data-caption="Drew & Cherry<br><small>Pages 12-13</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/dcp/1415.jpg" data-fancybox="DCP" data-caption="Drew & Cherry<br><small>Pages 14-15</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/dcp/1617.jpg" data-fancybox="DCP" data-caption="Drew & Cherry<br><small>Pages 16-17</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/dcp/1819.jpg" data-fancybox="DCP" data-caption="Drew & Cherry<br><small>Pages 18-19</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/dcp/2021.jpg" data-fancybox="DCP" data-caption="Drew & Cherry<br><small>Pages 20-21</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/dcp/2223.jpg" data-fancybox="DCP" data-caption="Drew & Cherry<br><small>Pages 22-23</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/dcp/2425.jpg" data-fancybox="DCP" data-caption="Drew & Cherry<br><small>Pages 24-25</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/rzs/0001.jpg" data-fancybox="RZS" data-caption="Ruben & Zuri<br><small>Pages 0-1</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/rzs/0203.jpg" data-fancybox="RZS" data-caption="Ruben & Zuri<br><small>Pages 2-3</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/rzs/0405.jpg" data-fancybox="RZS" data-caption="Ruben & Zuri<br><small>Pages 4-5</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/rzs/0607.jpg" data-fancybox="RZS" data-caption="Ruben & Zuri<br><small>Pages 6-7</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/rzs/0809.jpg" data-fancybox="RZS" data-caption="Ruben & Zuri<br><small>Pages 8-9</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/rzs/1011.jpg" data-fancybox="RZS" data-caption="Ruben & Zuri<br><small>Pages 10-11</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/rzs/1213.jpg" data-fancybox="RZS" data-caption="Ruben & Zuri<br><small>Pages 12-13</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/rzs/1415.jpg" data-fancybox="RZS" data-caption="Ruben & Zuri<br><small>Pages 14-15</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/rzs/1617.jpg" data-fancybox="RZS" data-caption="Ruben & Zuri<br><small>Pages 16-17</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/rzs/1819.jpg" data-fancybox="RZS" data-caption="Ruben & Zuri<br><small>Pages 18-19</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/bjb/0001.jpg" data-fancybox="BJB" data-caption="Brian & Joycelyn<br><small>Pages 0-1</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/bjb/0203.jpg" data-fancybox="BJB" data-caption="Brian & Joycelyn<br><small>Pages 2-3</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/bjb/0405.jpg" data-fancybox="BJB" data-caption="Brian & Joycelyn<br><small>Pages 4-5</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/bjb/0607.jpg" data-fancybox="BJB" data-caption="Brian & Joycelyn<br><small>Pages 6-7</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/bjb/0809.jpg" data-fancybox="BJB" data-caption="Brian & Joycelyn<br><small>Pages 8-9</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/bjb/1011.jpg" data-fancybox="BJB" data-caption="Brian & Joycelyn<br><small>Pages 10-11</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/bjb/1213.jpg" data-fancybox="BJB" data-caption="Brian & Joycelyn<br><small>Pages 12-13</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/bjb/1415.jpg" data-fancybox="BJB" data-caption="Brian & Joycelyn<br><small>Pages 14-15</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/bjb/1617.jpg" data-fancybox="BJB" data-caption="Brian & Joycelyn<br><small>Pages 16-17</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/bjb/1819.jpg" data-fancybox="BJB" data-caption="Brian & Joycelyn<br><small>Pages 18-19</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/bjb/2021.jpg" data-fancybox="BJB" data-caption="Brian & Joycelyn<br><small>Pages 20-21</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/0001.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 0-1</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/0203.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 2-3</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/0405.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 4-5</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/0607.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 6-7</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/0809.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 8-9</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/1011.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 10-11</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/1213.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 12-13</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/1415.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 14-15</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/1617.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 16-17</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/1819.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 18-19</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/2021.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 20-21</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/2223.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 22-23</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/2425.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 24-25</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/2627.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 26-27</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/2829.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 28-29</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/3031.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 30-31</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/3233.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 32-33</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/3435.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 34-35</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/3637.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 36-37</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/3839.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Pages 38-39</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jdb/4000.jpg" data-fancybox="JDB" data-caption="Jer&ocirc;me & Dorthe&eacute;<br><small>Page 40</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/0001.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 0-1</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/0203.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 2-3</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/0405.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 4-5</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/0607.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 6-7</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/0809.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 8-9</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/1011.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 10-11</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/1213.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 12-13</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/1415.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 14-15</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/1617.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 16-17</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/1819.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 18-19</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/2021.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 20-21</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/2223.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 22-23</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/2425.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 24-25</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/2627.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 26-27</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/2829.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 28-29</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/3031.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 30-31</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/3233.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 32-33</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/3435.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 34-35</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/3637.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 36-37</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/3839.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 38-39</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/4041.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 40-41</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/4243.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 42-43</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/4445.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 44-45</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/4647.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 46-47</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/4849.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 48-49</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/5051.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 50-51</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/5253.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 52-53</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/5455.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 54-55</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/5657.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 56-57</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/5859.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Pages 58-59</small>"></a>
			<a class="fancybox" href="../_img/gallery/albums/jcs/6000.jpg" data-fancybox="JCS" data-caption="James & Candice<br><small>Page 60</small>"></a>
		</div>
		
		<!--FOOTER-->
		<?php require("../_php/footer.php");?>

		<!--FLOORSPACE-->
		<div class="column row show-for-large space2em"></div>

		<!--HOSTED-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!--SELF-->
		<script src="../_js/F6/Zurbed.js"></script>
		<script src="../_js/fancyBox/jquery.app3.js"></script>
		<script>$(document).foundation();</script>

	</body>
</html>