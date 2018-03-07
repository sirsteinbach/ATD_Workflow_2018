<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	date_default_timezone_set("America/Los_Angeles");
	$expire=time()+60*60*24*60;
	$thisPage="VidHi";
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
?> <!DOCTYPE html><html lang="en" xml:lang="en" class="no-js"><head><meta charset="utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="theme-color" content="#22659C"><meta name="author" content="Stephen Steinbach"><meta name="webBuild" content="Foundation6.2.4"> <?php include_once($_SERVER['DOCUMENT_ROOT']."/_php/googleAnalytics.php");?> <link rel="icon" href="../_img/universal/favicon.ico"><link rel="stylesheet" href="../_css/F6/Zurbed.min.css"><link rel="stylesheet" href="../_css/fancyBox/app3.min.css"><title>Wedding Video Highlight Gallery</title><style>.fancybox-slide--video .fancybox-content {
      width: 854px;
      height: 480px;
      max-width: 90%;
      margin: 0;
    }</style></head><body><div class="column row show-for-large space1em"></div> <?php require("../_php/navMain.php");?> <section class="row BgMain pullup noRadius"><header class="small-12 large-4 columns secHead nav"><div class="iLine c_333"><span class="fa-stack ilinePOS c_333"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-camera fa-stack-1x fa-inverse"></i></span><h1 class="c_CCC">Wedding Videography</h1><i class="fa fa-caret-right subheader" aria-hidden="true"></i><h2 class="subheader">Video Highlights</h2></div></header></section><div class="row small-up-1 medium-up-2 large-up-3 BgMain"><div class="column"><a data-fancybox class="fancybox" href="//player.vimeo.com/video/154017953?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/video/video-01sm.jpg" alt="Wedding at Mammoth Mountain, California"></a></div><div class="column"><a data-fancybox class="fancybox" href="//player.vimeo.com/video/100943469?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/video/video-02sm.jpg" alt="Wedding in Naples, Florida"></a></div><div class="column"><a data-fancybox class="fancybox" href="//player.vimeo.com/video/100950417?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/video/video-03sm.jpg" alt="Wedding in Sun Valley, Idaho"></a></div><div class="column"><a data-fancybox class="fancybox" href="//player.vimeo.com/video/101027655?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/video/video-04sm.jpg" alt="Wedding in Sacramento, California"></a></div><div class="column"><a data-fancybox class="fancybox" href="//player.vimeo.com/video/100960549?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/video/video-05sm.jpg" alt="Wedding in Palos Verdes, California"></a></div><div class="column"><a data-fancybox class="fancybox" href="//player.vimeo.com/video/101019774?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/video/video-06sm.jpg" alt="Bill Carter music video &bull; What A Life"></a></div></div> <?php require("../_php/footer.php");?> <div class="column row show-for-large space2em"></div><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="../_js/specific/navPhoto.min.js"></script><script src="../_js/F6/Zurbed.min.js"></script><script src="../_js/fancyBox/jquery.app3.min.js"></script><script>$(document).foundation();</script></body></html>