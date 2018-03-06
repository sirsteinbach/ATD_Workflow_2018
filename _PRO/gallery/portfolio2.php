<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	date_default_timezone_set("America/Los_Angeles");
	$expire=time()+60*60*24*60;
	$thisPage="WG2";
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
?> <!DOCTYPE html><html lang="en" xml:lang="en" class="no-js"><head><meta charset="utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="theme-color" content="#22659C"><meta name="author" content="Stephen Steinbach"><meta name="webBuild" content="Foundation6.2.4"> <?php include_once($_SERVER['DOCUMENT_ROOT']."/_php/googleAnalytics.php");?> <link rel="icon" href="../_img/universal/favicon.ico"><link rel="stylesheet" href="../_css/F6/Zurbed.min.css"><link rel="stylesheet" href="../_css/fancyBox/app3.min.css"><title>Wedding Photography Gallery | Portfolio 2</title><meta name="description" content="Best of Wedding Photography images from Stephen & Sonia of About The Day Photography, Gallery 2"><meta name="keywords" content="Wedding Photography Gallery, Mixed Wedding Highlight Images, Wedding Gallery 2"></head><body><div class="column row show-for-large space1em"></div> <?php require("../_php/navMain.php");?> <section class="row BgMain pullup noRadius"><header class="small-12 large-4 columns secHead nav"><div class="iLine c_333"><span class="fa-stack ilinePOS c_333"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-camera fa-stack-1x fa-inverse"></i></span><h1 class="c_CCC">Wedding Photography</h1><i class="fa fa-caret-right subheader" aria-hidden="true"></i><h2 class="subheader">Gallery 2</h2></div></header> <?php require("../_php/navPhoto.php");?> </section><div class="row small-up-2 medium-up-3 large-up-6 BgMain"><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-01.jpg" data-caption="Samuel & Candice<br><small>Cafe' Madison - Riverside, New Jersey</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-01sm.jpg" alt="Kissing under a dramatic sky with the clock tower in the background"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-02.jpg" data-caption="Marc & Taya<br><small>Wallowa Lake - Joseph, Oregon</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-02sm.jpg" alt="Bride and Groom pose in the forest"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-03.jpg" data-caption="Garrett & Janelle<br><small>Barn Anew B&B - Mitchell, Nebraska</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-03sm.jpg" alt="Wedding party walking in a line"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-04.jpg" data-caption="Joe & Margaret<br><small>Washington Square - New Orleans, Louisiana</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-04sm.jpg" alt="Bride and Groom kiss in the French Quarter"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-05.jpg" data-caption="Chad & Katrina<br><small>Blue Ribbon Cooking - Seattle, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-05sm.jpg" alt="Bride sneaks a look before the ceremony"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-06.jpg" data-caption="Qi & Xiaohan<br><small>Thornewood Castle - Lakewood, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-06sm.jpg" alt="Bride and Groom exchange rings at Thornewood Castle"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-07.jpg" data-caption="Ian & Macy<br><small>Zeinth Vinyard - Zena, Oregon</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-07sm.jpg" alt="Bride and Groom kiss in the barrel room"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-08.jpg" data-caption="Manuel & Kari<br><small>Countryside, Illinois</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-08sm.jpg" alt="Love spelled with scrabble and a diamond ring"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-09.jpg" data-caption="Aaron & Jamie<br><small>Edmonton, Alberta</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-09sm.jpg" alt="Bride and Groom with the Edmonton skyline in the background"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-10.jpg" data-caption="Trevor & Jarita<br><small>Kamloops, British Columbia</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-10sm.jpg" alt="Bride and Groom beside a rustic GMC truck"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-11.jpg" data-caption="James & Candice<br><small>Dunedin, Florida</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-11sm.jpg" alt="Groom gets ready with father and grandfather"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-12.jpg" data-caption="Ari & Janet<br><small>Princeville, Kauai, Hawaii</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-12sm.jpg" alt="Bride and Groom pose on Hawaii's black rocks"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-13.jpg" data-caption="Alex & Ruthie<br><small>Laconner Flats - Mt.Vernon, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-13sm.jpg" alt="Bride and Groom exit ceremony at Laconner Flats with bubbles"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-14.jpg" data-caption="Rufino & KC<br><small>Pasco, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-14sm.jpg" alt="Bride and Groom stand in a field during sunset"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-15.jpg" data-caption="Cody & Kelly<br><small>Apple Tree Lane B&B - Waupaca, Wisconsin</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-15sm.jpg" alt="Bride signs mariage license with roses in foreground"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-16.jpg" data-caption="Matt & Morgan<br><small>Frazier Farmstead - Milton-Freewater, Oregon</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-16sm.jpg" alt="Country wedding with beautiful Bride and cowboy Groom"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-17.jpg" data-caption="Jeffrey & Kelsey<br><small>Moore Mansion - Pasco, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-17sm.jpg" alt="Beautiful wedding reception decorations in the sunset at Moore Mansion"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-18.jpg" data-caption="Trevor & Jarita<br><small>Kamloops, British Columbia</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-18sm.jpg" alt="Bride and Groom kiss in the sunset"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-19.jpg" data-caption="Hickory & Angie<br><small>Columbus, Ohio</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-19sm.jpg" alt="Groom in full military dress"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-20.jpg" data-caption="Cameron & Sabrina<br><small>Rancho De La Fuente - Lakeport, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-20sm.jpg" alt="Bride and Groom get sunset photo op at Rancho De La Fuente"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-21.jpg" data-caption="Meshan & Alicia<br><small>The Legislative Building - Regina, Saskatchewan</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-21sm.jpg" alt="Eastern Indian wedding couple with darkening sky"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-22.jpg" data-caption="Alex & Kim<br><small>Kirkland, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-22sm.jpg" alt="Wedding rings on the Seattle Times"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-23.jpg" data-caption="Phillip & Lisa<br><small>The Ritz-Carlton - Laguna Niguel, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-23sm.jpg" alt="Bride and Groom look out at the Pacific Ocean"></a></div><div class="column"><a class="fancybox" data-fancybox="group" href="../_img/gallery/portfolio2/wedding_2-24.jpg" data-caption="Ruben & Zuri<br><small>Canterbury United Methodist Church - Birmingham, Alabama</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/portfolio2/wedding_2-24sm.jpg" alt="Ruben Studdard and Zuri exit Canterbury United Methodist Church"></a></div></div> <?php require("../_php/footer.php");?> <div class="column row show-for-large space2em"></div><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="../_js/specific/navPhoto.min.js"></script><script src="../_js/F6/Zurbed.min.js"></script><script src="../_js/fancyBox/jquery.app3.min.js"></script><script>$(document).foundation();</script></body></html>