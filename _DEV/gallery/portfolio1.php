<?php session_set_cookie_params(0,"/",".abouttheday.com");
session_start();
date_default_timezone_set("America/Los_Angeles");
$expire=time()+60*60*24*60;
$thisPage="WG1" ;
$thisMenu="Gallery";
$thisSet="Weddings";
$_SESSION["EyesOn"]["Page"]=$thisPage;
$_SESSION["EyesOn"]["Menu"]=$thisMenu;
$_SESSION["EyesOn"]["Sub"]="Photography";
$_SESSION["EyesOn"]["Set"]=$thisSet;
$_SESSION["Viewed"][$thisMenu]=$thisMenu;
$_SESSION["Viewed"][$thisPage]=$thisPage;
$visited=implode(",",array_unique($_SESSION["Viewed"]));
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
	<?php include_once($_SERVER["DOCUMENT_ROOT"]."/_php/googleAnalytics.php");?>
	<link rel="stylesheet" href="../_css/F6.2.4/foundation.css">
	<link rel="stylesheet" href="../_css/F6.2.4/atd.css">
	<title>Wedding Photography Gallery | Portfolio 1</title>
	<meta name="description" content="Best of Wedding Photography images from Stephen & Sonia of About The Day Photography, Gallery 1">
	<meta name="keywords" content="Wedding Photography Gallery, Mixed Wedding Highlight Images, Wedding Gallery 1">
	<link rel="stylesheet" href="../_css/specific/fancybox.css">
</head>

<body>
	<div class="column row show-for-large space1em"></div>
	<?php require("../_php/navMain.php");?>
	<section class="row BgMain pullup noRadius">
		<header class="small-12 large-4 columns secHead nav">
			<div class="iLine c_333"><span class="fa-stack ilinePOS c_333"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-camera fa-stack-1x fa-inverse"></i></span>
				<h1 class="c_CCC">Wedding Photography</h1>
				<i class="fa fa-caret-right subheader" aria-hidden="true"></i>
				<h2 class="subheader">Gallery 1</h2>
			</div>
		</header>
		<?php require("../_php/navPhoto.php");?>
	</section>
	<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-01.jpg" data-title="Tommy & Felicia<br><small>Lake Siskiyou - Mt. Shasta, California</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-01sm.jpg" alt="Wedding Photography Bride and Groom by the waters edge at sunset">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-02.jpg" data-title="Derek & Christina<br><small>Edgewood Golf Resort - Lake Tahoe, Nevada</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-02sm.jpg" alt="Wedding Photography Kissing in the pine trees near Lake Tahoe">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-03.jpg" data-title="Luis & Beatriz<br><small>Driggs, ID</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-03sm.jpg" alt="Wedding Photography Bride and Groom under a Simpsons sky">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-04.jpg" data-title="Prince & Kimberley<br><small>Scenic Hills Country Club - Pensacola, Florida</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-04sm.jpg" alt="Wedding Photography Groom places ring on Brides finger">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-05.jpg" data-title="Daniel & Amy<br><small>San Diego Wild Animal Park - Escondido, California</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-05sm.jpg" alt="Wedding Photography Bride and Groom kiss beneath an ominous sky">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-06.jpg" data-title="Dustin & Miranda<br><small>Buena Vista, Colorado</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-06sm.jpg" alt="Wedding Photography Colorful Silouette of Bride and Groom">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-07.jpg" data-title="Ari & Janet<br><small>Princeville - Kauai, Hawaii</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-07sm.jpg" alt="Wedding Photography Bride laughs as she walks down the isle with her father">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-08.jpg" data-title="Justin & Cara<br><small>Merritt, British Columbia</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-08sm.jpg" alt="Wedding Photography Beautiful Bride sits on an old junkyard car">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-09.jpg" data-title="Ian & Macy<br><small>Zeinth Vinyard - Zena, Oregon</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-09sm.jpg" alt="Wedding Photography Brides face in the natural light of the window">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-10.jpg" data-title="Tristan & Ashley<br><small>Red Rock State Park &bull;Sedona, Arizona</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-10sm.jpg" alt="Wedding Photography Bride and Groom with Red Rock Park in the background">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-11.jpg" data-title="Jeremy & Michelle<br><small>The Rio Grande River - Del Rio, Texas</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-11sm.jpg" alt="Wedding party strikes a crazy pose">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-12.jpg" data-title="Jacobus & Jen<br><small>Our Lady of Lourdes - Spokane, Washington</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-12sm.jpg" alt="Kissing in front of Cathedral of Our Lady of Lourdes in Spokane, Washington">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-13.jpg" data-title="Jeffrey & Kelsey<br><small>Moore Mansion - Pasco, Washington</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-13sm.jpg" alt="Sunset kiss at Moore Mansion in Pasco">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-14.jpg" data-title="Jeremy & Shabnam<br><small>Park Hyatt - Dubai, UAE</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-14sm.jpg" alt="Henna hands in Dubai">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-15.jpg" data-title="Rigor & Joanne<br><small>Mendenhall Glacier - Juneau, Alaska</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-15sm.jpg" alt="Bride and Groom kiss in front of Mendenhall Glacier in Juneau, Alaska">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-16.jpg" data-title="Daniel & Amy<br><small>San Diego Wild Animal Park - Escondido, California</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-16sm.jpg" alt="The sun shines through a passionate kiss">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-17.jpg" data-title="Gary & Shirley<br><small>Riverside, California</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-17sm.jpg" alt="Groom is admired by his new wife">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-18.jpg" data-title="Jason & Chelsie<br><small>David Arthur Vineyards - St.Helena, California</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-18sm.jpg" alt="Bride and Groom kiss overlooking David Arthur Vineyards">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-19.jpg" data-title="Justin & Cara<br><small>Merritt, British Columbia</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-19sm.jpg" alt="Wedding party strikes a crazy pose">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-20.jpg" data-title="Colin & Rachel<br><small>St. Mary's Cathedral - Lafayette, Indiana</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-20sm.jpg" alt="View of wedding ceremony from St. Marys balcony">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-21.jpg" data-title="Steve & Meggan<br><small>Old Edwards Inn - Highlands, North Carolina</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-21sm.jpg" alt="Bride cuddles into smiling Groom">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-22.jpg" data-title="Jason & Chelsie<br><small>Calistoga, California</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-22sm.jpg" alt="Bride checks her makeup">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-23.jpg" data-title="Dell & Sarah<br><small>Portland, Maine</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-23sm.jpg" alt="A wedding pug dressed in a tux">
			</a>
		</div>
		<div class="column">
			<a class="fancybox" data-fancybox-group="WG1" href="/_img/gallery/portfolio1/wedding_1-24.jpg" data-title="Colin & Rachel<br><small>West Lafayette, Indiana</small>">
				<img class="thumbnail" data-pin-nopin="true" src="/_img/gallery/portfolio1/wedding_1-24sm.jpg" alt="Groom kisses bride in the forest">
			</a>
		</div>
	</div>
	<?php require("../_php/footer.php");?>
	<div class="column row show-for-large space2em"></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- <script src="/_js/F6.2.4/what-input.min.js"></script>
	<script src="/_js/F6.2.4/foundation.min.js"></script> -->
  <script src="../_js/F6/f6.js"></script>
	<script>$(document).foundation();</script>
	<script type="text/javascript" src="../_js/specific/jquery.fancybox.js"></script>
	<script src="../_js/specific/navPhoto.js"></script>
</body>
</html>