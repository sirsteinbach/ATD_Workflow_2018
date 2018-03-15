<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="SS2";
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
?> <!DOCTYPE html><html lang="en" xml:lang="en" class="no-js"><head><meta charset="utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="theme-color" content="#22659C"><meta name="author" content="Stephen Steinbach"><meta name="webBuild" content="Foundation6.2.4"> <?php include_once($_SERVER['DOCUMENT_ROOT']."/_php/googleAnalytics.php");?> <link rel="icon" href="../_img/universal/favicon.ico"><link rel="stylesheet" href="../_css/F6/Zurbed.min.css"><link rel="stylesheet" href="../_css/fancyBox/app3.min.css"><title>Sunset Wedding Photography Gallery | Portfolio 2</title><meta name="description" content="Best of Sunset Wedding Photography images from Stephen & Sonia of About The Day Photography, Sunset Wedding Gallery 2"><meta name="keywords" content="Sunset Wedding Photography Gallery, Mixed Sunset Wedding Highlight Images, Sunset Wedding Gallery 2"></head><body><div class="column row show-for-large space1em"></div> <?php require("../_php/navMain.php");?> <section class="row BgMain pullup noRadius"><header class="small-12 large-4 columns secHead nav"><div class="iLine c_333"><span class="fa-stack ilinePOS c_333"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-camera fa-stack-1x fa-inverse"></i></span><h1 class="c_CCC">Wedding Photography</h1><i class="fa fa-caret-right subheader" aria-hidden="true"></i><h2 class="subheader">Sunsets 2</h2></div></header> <?php require("../_php/navPhoto.php");?> </section><div class="row small-up-2 medium-up-3 large-up-6 BgMain"><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Jeffrey & Kelsey<a href='/blog/wedding-jkm/' target='_blank'>View Blog</a><br><small>Moore Mansion &bull; Pasco, Washington</small>" href="../_img/gallery/sunsets2/sunset2-01.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-01sm.jpg" alt="Sunset kiss at Moore Mansion in Pasco"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Stefan & Virginia<a href='/blog/w_svh/' target='_blank'>View Blog</a><br><small>Blueberry Hill Inn &bull; Goshen, Vermont</small>" href="../_img/gallery/sunsets2/sunset2-02.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-02sm.jpg" alt="Bride and Groom in the last light of the day at Blueberry Hill Inn"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="James & Malorie<a href='/blog/wedding-jma/' target='_blank'>View Blog</a><br><small>Mogollon Rim, Arizona</small>" href="../_img/gallery/sunsets2/sunset2-03.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-03sm.jpg" alt="Sunset wedding portrait at Mogollon Rim"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Jacky & Amber<br><small>Thompson River Inn &bull; Kamloops, British Columbia</small>" href="../_img/gallery/sunsets2/sunset2-04.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-04sm.jpg" alt="Asian Bride glows in sunset"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Stefan & Virginia<a href='/blog/w_svh/' target='_blank'>View Blog</a><br><small>Blueberry Hill Inn &bull; Goshen, Vermont</small>" href="../_img/gallery/sunsets2/sunset2-05.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-05sm.jpg" alt="Wedding tent lights up at the Blueberry Hill Inn"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Trevor & Jarita<a href='/blog/w_tjk/' target='_blank'>View Blog</a><br><small>Thompson River University &bull; Kamloops, British Columbia</small>" href="../_img/gallery/sunsets2/sunset2-06.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-06sm.jpg" alt="Bride and Groom kiss in the sunset at Thompson River University"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Trevor & Jarita<a href='/blog/e_tjk/' target='_blank'>View Blog</a><br><small>Kamloops, British Columbia</small>" href="../_img/gallery/sunsets2/sunset2-07.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-07sm.jpg" alt="Engagement picnic kiss under fierce Kamloops sky"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Tulo & Carissa<br><small>Kailua Kona, Hawaii</small>" href="../_img/gallery/sunsets2/sunset2-08.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-08sm.jpg" alt="Bride shows Yoga pose on Kailua Kona beach"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Trevor & Jarita<a href='/blog/w_tjk/' target='_blank'>View Blog</a><br><small>Kamloops, British Columbia</small>" href="../_img/gallery/sunsets2/sunset2-09.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-09sm.jpg" alt="Bride and Groom beside a rustic GMC truck"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Brandon & Megan<a href='/blog/wedding-bms/' target='_blank'>View Blog</a><br><small>Grafton Dells River Park &bull; Milwaukee, Wisconsin</small>" href="../_img/gallery/sunsets2/sunset2-10.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-10sm.jpg" alt="Bride and Groom pose back to back at sunset"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Charlie & Brittany<a href='/blog/e_cbh/' target='_blank'>View Blog</a><br><small>Regusci Vineyards &bull; Napa, California</small>" href="../_img/gallery/sunsets2/sunset2-11.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-11sm.jpg" alt="Engagement session with dog at Regusci Vineyards"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Jeffrey & Kelsey<a href='/blog/wedding-jkm/' target='_blank'>View Blog</a><br><small>Moore Mansion &bull; Pasco, Washington</small>" href="../_img/gallery/sunsets2/sunset2-12.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-12sm.jpg" alt="Big sky over wedding couple at Moore Mansion"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Rob & Amy<br><small>Kittitas, Washington</small>" href="../_img/gallery/sunsets2/sunset2-13.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-13sm.jpg" alt="Radient sunset behind bride and cowboy groom"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Brian & Carey<br><small>Hoboken, New Jersey</small>" href="../_img/gallery/sunsets2/sunset2-14.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-14sm.jpg" alt="Engaged couples long shadows in Hoboken, New Jersey"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Justin & Cara<a href='/blog/wedding-jce/' target='_blank'>View Blog</a><br><small>Merritt, British Columbia</small>" href="../_img/gallery/sunsets2/sunset2-15.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-15sm.jpg" alt="Wedding party strikes a crazy pose as the sun goes down"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Gilmer & Ashley<br><small>Destin, Florida</small>" href="../_img/gallery/sunsets2/sunset2-16.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-16sm.jpg" alt="Engaged couple embrases as the sun sets in Destin, Florida"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Garrett & Janelle<a href='/blog/wedding-gjc/' target='_blank'>View Blog</a><br><small>Scotts Bluff Monument &bull; Nebraska</small>" href="../_img/gallery/sunsets2/sunset2-17.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-17sm.jpg" alt="Wedding couple kisses with Scotts Bluff Monument in background"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Jeffrey & Angela<a href='/blog/w_jas/' target='_blank'>View Blog</a><br><small>Islamorada, Florida</small>" href="../_img/gallery/sunsets2/sunset2-18.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-18sm.jpg" alt="Couple snuggles beside an old boat and a palm tree"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Qi & Xiaohan<a href='/blog/wedding-qxz/' target='_blank'>View Blog</a><br><small>Thornewood Castle &bull; Lakewood, Washington</small>" href="../_img/gallery/sunsets2/sunset2-19.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-19sm.jpg" alt="Georgous sunset wedding couple at Thornewood Castle"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Mike & Sara<a href='/blog/w_msr/' target='_blank'>View Blog</a><br><small>7N Ranch &bull; Ririe, Idaho</small>" href="../_img/gallery/sunsets2/sunset2-20.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-20sm.jpg" alt="Bride and Groom embrase under a tree at 7N Ranch at sundown"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Cameron & Sabrina<br><small>Rancho De La Fuente &bull; Lakeport, California</small>" href="../_img/gallery/sunsets2/sunset2-21.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-21sm.jpg" alt="Bride with red boots and the boys at Rancho De La Fuente"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Charlie & Brittany<a href='/blog/e_cbh/' target='_blank'>View Blog</a><br><small>Regusci Vineyards &bull; Napa, California</small>" href="../_img/gallery/sunsets2/sunset2-22.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-22sm.jpg" alt="Enaged couple kiss in the Regusci Vineyards near Napa, California"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Rob & Amy<br><small>Kittitas, Washington</small>" href="../_img/gallery/sunsets2/sunset2-23.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-23sm.jpg" alt="Radient sunset silhouettes bride and cowboy groom"></a></div><div class="column"><a class="fancybox" data-fancybox="group" data-caption="Evan & Sierra<a href='/blog/eng-esr/' target='_blank'>View Blog</a><br><small>Frisco, Texas</small>" href="../_img/gallery/sunsets2/sunset2-24.jpg"><img class="thumbnail" nopin="nopin" src="../_img/gallery/sunsets2/sunset2-24sm.jpg" alt="Engaged couple poses under Texas sunset"></a></div></div> <?php require("../_php/footer.php");?> <div class="column row show-for-large space2em"></div><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="../_js/specific/navPhoto.min.js"></script><script src="../_js/F6/Zurbed.min.js"></script><script src="../_js/fancyBox/jquery.app3.min.js"></script><script>$(document).foundation();</script></body></html>