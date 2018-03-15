<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;
	$thisPage="Groups";
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
		<title>Wedding Photography | Wedding Family and Party Photo Gallery</title>
		<meta name="description" content="Best of Wedding Groups Photography images from Stephen & Sonia of About The Day Photography, Wedding family and party Gallery">
		<meta name="keywords" content="Wedding Party Photography Gallery, Mixed Wedding Party Highlight Images, Wedding Party, Wedding Family">
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
					<h2 class="subheader">Groups</h2>
				</div>
			</header>
			
			<!--PHOTONAV-->
			<?php require("../_php/navPhoto.php");?>
			
		</section><!-- <a href='/blog/wedding-jkc/' target='_blank'>View Blog</a> -->
		
		<!--GALLERY-->
		<div class="row small-up-2 medium-up-3 large-up-6 BgMain">
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-01.jpg" data-caption="Joshua & Katie<a href='/blog/wedding-jkk/' target='_blank'>View Blog</a><br><small>Envornment Services Building &bull; University Place, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-01sm.jpg" alt="The Wedding party looks great posing in the trees"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-02.jpg" data-caption="Josh & Breanna<a href='/blog/w_jbe/' target='_blank'>View Blog</a><br><small>Victory Memorial Church &bull; Guymon, Oklahoma</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-02sm.jpg" alt="Wedding at Victory Memorial Church &bull; Guymon, Oklahoma"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-03.jpg" data-caption="Ari & Janet<a href='/blog/w_ajp/' target='_blank'>View Blog</a><br><small>Princeville &bull; Kauai, Hawaii</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-03sm.jpg" alt="Wedding family all jumps up in Princeville, Hawaii"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-04.jpg" data-caption="Tupac & Ayiana<br><small>Indian Wells Country Club &bull; Palm Desert, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-04sm.jpg" alt="Wedding party poses between the boulders in Palm Desert"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-05.jpg" data-caption="Tyler & Kaelynn<a href='/blog/w_tkc/' target='_blank'>View Blog</a><br><small>Chateau Rive &bull; Spokane, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-05sm.jpg" alt="Groom and groomsmen shine for a photo at Chateau Rive"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-06.jpg" data-caption="Michael & Kristin<br><small>Promise Garden &bull; Pasco, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-06sm.jpg" alt="Wedding party in a relaxed pose at Promise Gardens"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-07.jpg" data-caption="Chris & Yoriko<br><small>The Harbor Club &bull; Bellveue, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-07sm.jpg" alt="Bride and her lovely maids in yellow at the Harbor Club"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-08.jpg" data-caption="Brad & Amber<a href='/blog/wedding-bal/' target='_blank'>View Blog</a><br><small>The Dunes &bull; Kamloops, British Columbia</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-08sm.jpg" alt="Wedding party with blue umbrellas in the rain"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-09.jpg" data-caption="Justin & Kim<a href='/blog/wedding-jkc/' target='_blank'>View Blog</a><br><small>Railroad Crossing &bull; Minturn, Colorado</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-09sm.jpg" alt="Justin and his groomsmen stand on the railroad tracks at Minturn, CO"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-10.jpg" data-caption="Garrett & Janelle<a href='/blog/wedding-gjc/' target='_blank'>View Blog</a><br><small>Barn Anew B&B &bull; Mitchell, Nebraska</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-10sm.jpg" alt="Wedding party walking in a line at Barn Anew B&B"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-11.jpg" data-caption="Derek & Christina<a href='/blog/w_dcc/' target='_blank'>View Blog</a><br><small>Edgewood Golf Resort &bull; Stateline, Nevada</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-11sm.jpg" alt="Wedding guys stand by Lake Tahoe"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-12.jpg" data-caption="Brian & Jocelyn<br><small>Balboa Park &bull; San Diego, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-12sm.jpg" alt="Wedding party at Balboa Park"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-13.jpg" data-caption="Josh & Breanna<a href='/blog/w_jbe/' target='_blank'>View Blog</a><br><small>Guymon, Oklahoma</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-13sm.jpg" alt="Bride and her Bridesmaids all dressed in yellow"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-14.jpg" data-caption="Nathan & Emily<br><small>Gas Works Park &bull; Seattle, Washington</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-14sm.jpg" alt="Wedding party jumps very high at Gas Works Park"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-15.jpg" data-caption="Derek & Christina<a href='/blog/w_dcc/' target='_blank'>View Blog</a><br><small>Edgewood Golf Resort &bull; Stateline, Nevada</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-15sm.jpg" alt="Wedding party poses by Lake Tahoe"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-16.jpg" data-caption="Macy & Cassie<br><small>Quartz Mountain Resort &bull; Lone Wolf, Oklahoma</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-16sm.jpg" alt="Bridal dress, flowers, and jewlery"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-17.jpg" data-caption="Mike & Casey<br><small>Rancho Palos Verdes, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-17sm.jpg" alt="Large wedding party photo at Point Vicente"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-18.jpg" data-caption="Gilmer & Ashley<br><small>Page, Arizona</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-18sm.jpg" alt="Marine Groom and Marine Groomsmen"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-19.jpg" data-caption="Dustin & Miranda<br><small>Buena Vista, Colorado</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-19sm.jpg" alt="Wedding party poses at sunset in Buena Vista, Colorado"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-20.jpg" data-caption="Cameron & Sabrina<br><small>Rancho De La Fuente &bull; Lakeport, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-20sm.jpg" alt="Bride with red boots and the boys"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-21.jpg" data-caption="Chris & Michelle<a href='/blog/w_cmp/' target='_blank'>View Blog</a><br><small>Bok Tower &bull; Lake Wales, Florida</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-21sm.jpg" alt="Wedding party poses at Bok Tower"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-22.jpg" data-caption="Jason & Chelsie<a href='/blog/wedding-jce/' target='_blank'>View Blog</a><br><small>David Arthur Vineyards &bull; St. Helena, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-22sm.jpg" alt="Hot Bride with all the Groomsmen and cigars"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-23.jpg" data-caption="Micheal & Meredith<br><small>Shelter Island &bull; San Diego, California</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-23sm.jpg" alt="Bride and her girls get a quick pose before ceremony"></a>
			</div>
			<div class="column">
				<a class="fancybox" data-fancybox="group" href="../_img/gallery/groups/groups-24.jpg" data-caption="Mike & Sara<a href='/blog/w_msr/' target='_blank'>View Blog</a><br><small>7N Ranch &bull; Ririe, Idaho</small>"><img class="thumbnail" data-pin-nopin="true" src="../_img/gallery/groups/groups-24sm.jpg" alt="Wedding party looks at the Bride and Groom kissing at 7N Ranch"></a>
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