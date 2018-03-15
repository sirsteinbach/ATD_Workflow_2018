<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="DVDs";
	$thisMenu="Gallery";
	$thisSub="DVD";
	$_SESSION['EyesOn']['Page']=$thisPage;
	$_SESSION['EyesOn']['Menu']=$thisMenu;
	$_SESSION['EyesOn']['Sub']=$thisSub;
	$_SESSION['EyesOn']['Set']="";
	$_SESSION['Viewed'][$thisPage]=$thisPage;
	$visited=implode(",",array_unique($_SESSION['Viewed']));
	setcookie("Visited",$visited,$expire,"/",".abouttheday.com");
	require("../_php/referer.php");
	require("../_php/checkpoints.php");
?> <!DOCTYPE html><html lang="en" xml:lang="en" class="no-js"><head><meta charset="utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="theme-color" content="#22659C"><meta name="author" content="Stephen Steinbach"><meta name="webBuild" content="Foundation6.2.4"> <?php include_once($_SERVER['DOCUMENT_ROOT']."/_php/googleAnalytics.php");?> <link rel="icon" href="../_img/universal/favicon.ico"><link rel="stylesheet" href="../_css/F6/Zurbed.min.css"><link rel="stylesheet" href="../_css/fancyBox/app3.min.css"><title>Silver DVD Design Gallery</title></head><body><div class="column row show-for-large space1em"></div> <?php require("../_php/navMain.php");?> <section class="row BgMain pullup noRadius"><header class="small-12 large-4 columns secHead nav"><div class="iLine c_333"><span class="fa-stack ilinePOS c_333"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-camera fa-stack-1x fa-inverse"></i></span><h1 class="c_CCC">Wedding DVD Design</h1><i class="fa fa-caret-right subheader" aria-hidden="true"></i><h2 class="subheader">Silver</h2></div></header> <?php require("../_php/navDVD.php");?> </section><div class="row small-up-1 medium-up-2 large-up-3 BgMain"><div class="column"><a class="fancybox" data-fancybox="DVDs1" data-caption="DVD Cover" href="../_img/gallery/dvds/s_Archer_c.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/dvds/s_Archer_c.jpg" alt="Silver DVD Cover Artwork"></a></div><div class="column"><a class="fancybox" data-fancybox="DVDs2" data-caption="DVD Cover" href="../_img/gallery/dvds/s_Peebles_c.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/dvds/s_Peebles_c.jpg" alt="Silver DVD Cover Artwork"></a></div><div class="column"><a class="fancybox" data-fancybox="DVDs3" data-caption="DVD Cover" href="../_img/gallery/dvds/s_Giesen_c.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/dvds/s_Giesen_c.jpg" alt="Silver DVD Cover Artwork"></a></div><div class="column"><a class="fancybox" data-fancybox="DVDs4" data-caption="DVD Cover" href="../_img/gallery/dvds/s_Tia_c.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/dvds/s_Tia_c.jpg" alt="Silver DVD Cover Artwork"></a></div><div class="column"><a class="fancybox" data-fancybox="DVDs5" data-caption="DVD Cover" href="../_img/gallery/dvds/s_Webb_c.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/dvds/s_Webb_c.jpg" alt="Silver DVD Cover Artwork"></a></div><div class="column"><a class="fancybox" data-fancybox="DVDs6" data-caption="DVD Cover" href="../_img/gallery/dvds/s_Bobkowski_c.jpg"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/dvds/s_Bobkowski_c.jpg" alt="Silver DVD Cover Artwork"></a></div></div><div class="hidden"><a class="fancybox" href="../_img/gallery/dvds/s_Archer_f.jpg" data-fancybox="DVDs1" data-caption="Disc Face"></a> <a class="fancybox" href="../_img/gallery/dvds/s_Archer_m.jpg" data-fancybox="DVDs1" data-caption="Screen Menu"></a> <a class="fancybox" href="../_img/gallery/dvds/s_Peebles_f.jpg" data-fancybox="DVDs2" data-caption="Disc Face"></a> <a class="fancybox" href="../_img/gallery/dvds/s_Peebles_m.jpg" data-fancybox="DVDs2" data-caption="Screen Menu"></a> <a class="fancybox" href="../_img/gallery/dvds/s_Giesen_f.jpg" data-fancybox="DVDs3" data-caption="Disc Face"></a> <a class="fancybox" href="../_img/gallery/dvds/s_Giesen_m.jpg" data-fancybox="DVDs3" data-caption="Screen Menu"></a> <a class="fancybox" href="../_img/gallery/dvds/s_Tia_f.jpg" data-fancybox="DVDs4" data-caption="Disc Face"></a> <a class="fancybox" href="../_img/gallery/dvds/s_Tia_m.jpg" data-fancybox="DVDs4" data-caption="Screen Menu"></a> <a class="fancybox" href="../_img/gallery/dvds/s_Webb_f.jpg" data-fancybox="DVDs5" data-caption="Disc Face"></a> <a class="fancybox" href="../_img/gallery/dvds/s_Webb_m.jpg" data-fancybox="DVDs5" data-caption="Screen Menu"></a> <a class="fancybox" href="../_img/gallery/dvds/s_Bobkowski_f.jpg" data-fancybox="DVDs6" data-caption="Disc Face"></a> <a class="fancybox" href="../_img/gallery/dvds/s_Bobkowski_m.jpg" data-fancybox="DVDs6" data-caption="Screen Menu"></a></div> <?php require("../_php/footer.php");?> <div class="column row show-for-large space2em"></div><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="../_js/specific/navDVD.min.js"></script><script src="../_js/F6/Zurbed.min.js"></script><script src="../_js/fancyBox/jquery.app3.min.js"></script><script>$(document).foundation();</script></body></html>