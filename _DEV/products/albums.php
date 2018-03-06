<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	date_default_timezone_set("America/Los_Angeles");
	$expire=time()+60*60*24*60;
	$thisPage="Albums";
	$thisMenu="Products";
	$_SESSION['EyesOn']['Page']=$thisPage;
	$_SESSION['EyesOn']['Menu']=$thisMenu;
	$_SESSION['EyesOn']['Sub']="";
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
		<title>Books &amp; Albums :: About The Day Wedding Photography</title>
		<meta name="description" content="Wedding Photography Albums we offer, including Premium, Modern, and Coffee Table Books">
		<meta name="keywords" content="wedding photography photo canvas, image mounting, custom framing">
		<link rel="stylesheet" href="../_css/specific/prodSlider.css">
		<link rel="stylesheet" href="../_css/specific/products.css">
	</head>
	
	<body>
		
		<!--HEADSPACE-->
		<div class="column row show-for-large space1em"></div>
		
		<!--NAVBAR-->
		<?php require("../_php/navMain.php");?>
		
		<!--PADDING-->
		<div class="column row space1em BgMain"></div>
		
		<!--CONTENT-->
		<main class="row BgMain">
			<div class="small-12 columns">
				
				<!--PREMIUM ALBUMS-->
				<section>
					<header class="secHead bg_Premium">
						<div class="iLine c_Premium">
							<span class="fa-stack ilinePOS c_Premium"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-book fa-stack-1x fa-inverse"></i></span>
							<h1 class="c_333">Premium Albums</h1>
						</div>
					</header>
					<div class="row">
						<div class="large-6 large-push-6 medium-7 medium-push-5 columns">
							<div class="callout player">
								<article class="Aspen_block">
									<ul id="Aspen">
										<li>
											<a href="#slide1"><img alt="2016 Aspen Lineup" src="../_img/products/Aspen-01.jpg"></a>
										</li>
										<li>
											<a href="#slide2"><img alt="Full print cover" src="../_img/products/Aspen-02.jpg"></a>
										</li>
										<li>
											<a href="#slide3"><img alt="Lay-flat pages" src="../_img/products/Aspen-03.jpg"></a>
										</li>
										<li>
											<a href="#slide4"><img alt="Faux or real leather" src="../_img/products/Aspen-04.jpg"></a>
										</li>
										<li>
											<a href="#slide1"><img alt="Binding lays flat" src="../_img/products/Aspen-05.jpg"></a>
										</li>
										<li>
											<a href="#slide2"><img alt="Hand bound edges" src="../_img/products/Aspen-06.jpg"></a>
										</li>
										<li>
											<a href="#slide3"><img alt="Mint Linen Cover" src="../_img/products/Aspen-07.jpg"></a>
										</li>
										<li>
											<a href="#slide4"><img alt="Albums opens flat" src="../_img/products/Aspen-08.jpg"></a>
										</li>
										<li>
											<a href="#slide1"><img alt="Unlimited layouts" src="../_img/products/Aspen-09.jpg"></a>
										</li>
										<li>
											<a href="#slide2"><img alt="Seamless lay-flat" src="../_img/products/Aspen-10.jpg"></a>
										</li>
										<li>
											<a href="#slide3"><img alt="Linen colors" src="../_img/products/Aspen-11.jpg"></a>
										</li>
										<li>
											<a href="#slide4"><img alt="Smaller Albums" src="../_img/products/Aspen-12.jpg"></a>
										</li>
									</ul>
								</article>
							</div>
						</div>
						<div class="large-6 large-pull-6 medium-5 medium-pull-7 columns">
							<p>We offer an ever-growing luxury album collection for discerning clients, easily matching the quality and workmanship of the top brands in the industry - and made right here in the United States as well.</p>
							<p>In addition to giving you complete customizability and tons of options, our albums are built to last - using only the finest materials available, from Acrylic Substrates to Masonite cover backings. These albums are guaranteed not to warp or lose their shape, even under the most extreme conditions.</p>
							<div class="callout coStyle bg_Premium hide-for-medium-only">
								<h3><i class="fa fa-bars"></i> Features</h3>
								<ul>
									<li>Hundreds of ways to style your album</li>
									<li>Leather, Metal, Silk, Linen and Photo Acrylic covers</li>
									<li>Square corners and ultra-smooth spine</li>
									<li>Acrylic substrate protects pages from tearing or warping</li>
									<li>Narrow-bind seam &amp; true lay-flat pages</li>
									<li>Available in Lustre and Metallic Paper</li>
									<li>Sizes: Available in 4x5 to 11x14</li>
									<li>Free Design &amp; Online Proofing</li>
									<li>Albums start under $300.00</li>
								</ul>
							</div>
						</div>
						<div class="hide-for-small-only">
							<div class="callout coStyle bg_Premium show-for-medium-only medium-12 columns">
								<h3><i class="fa fa-bars"></i> Features</h3>
								<ul>
									<li>Hundreds of ways to style your album</li>
									<li>Leather, Metal, Silk, Linen and Photo Acrylic covers</li>
									<li>Square corners and ultra-smooth spine</li>
									<li>Acrylic substrate protects pages from tearing or warping</li>
									<li>Narrow-bind seam &amp; true lay-flat pages</li>
									<li>Available in Lustre and Metallic Paper</li>
									<li>Sizes: Available in 4x5 to 11x14</li>
									<li>Free Design &amp; Online Proofing</li>
									<li>Albums start under $300.00</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				
			</div>
			<div class="small-12 columns">
				
				<!--MODERN ALBUMS-->
				<section>
					<header class="secHead bg_Modern">
						<div class="iLine c_Modern">
							<span class="fa-stack ilinePOS c_Modern"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-book fa-stack-1x fa-inverse"></i></span>
							<h1 class="c_333">Modern Albums</h1>
						</div>
					</header>
					<div class="row">
						<div class="large-6 large-push-6 medium-7 medium-push-5 columns">
							<div class="callout player">
								<article class="Modern_block">
									<ul id="Modern">
										<li>
											<a href="#slide1"><img alt="Gorgeous portrait album covers" src="../_img/products/Modern-01.jpg"></a>
										</li>
										<li>
											<a href="#slide2"><img alt="Beautiful, tough, and senceable" src="../_img/products/Modern-02.jpg"></a>
										</li>
										<li>
											<a href="#slide3"><img alt="Narrow bindings and crisp edges" src="../_img/products/Modern-03.jpg"></a>
										</li>
										<li>
											<a href="#slide4"><img alt="Create unlimited digtal layouts" src="../_img/products/Modern-04.jpg"></a>
										</li>
									</ul>
								</article>
							</div>
						</div>
						<div class="large-6 large-pull-6 medium-5 medium-pull-7 columns">
							<p>The Modern Album features a clean, contemporary look and feel that&rsquo;s beautiful to see and exciting to open.</p>
							<p>Our photos are printed on high-quality paper and bound with lay-flat pages, and the album cover can be customized with a photo of your choice. Even better... Chose your favorite photos directly from your gallery, and we will create beautiful page layouts that incorporate your feedback and special instructions at no extra charge.</p>
							<div class="callout coStyle bg_Modern hide-for-medium-only">
								<h3><i class="fa fa-bars"></i> Features</h3>
								<ul>
									<li>Lay-Flat Design: Pages lay flat and have no seam</li>
									<li>Thick, Secure Pages: Viewing that stands the test of time</li>
									<li>Color corrected to ensure perfection</li>
									<li>Create, Organize, and Order from your gallery</li>
									<li>Narrow-bind seam &amp; true lay-flat pages</li>
									<li>Available in Lustre and Metallic Paper</li>
									<li>Sizes: Available in 5x5 or 7x7</li>
									<li>Affordable: Starting under $100.</li>
								</ul>
							</div>
						</div>
						<div class="hide-for-small-only">
							<div class="callout coStyle bg_Modern show-for-medium-only medium-12 columns">
								<h3><i class="fa fa-bars"></i> Features</h3>
								<ul>
									<li>Lay-Flat Design: Pages lay flat and have no seam</li>
									<li>Thick, Secure Pages: Viewing that stands the test of time</li>
									<li>Color corrected to ensure perfection</li>
									<li>Create, Organize, and Order from your gallery</li>
									<li>Narrow-bind seam &amp; true lay-flat pages</li>
									<li>Available in Lustre and Metallic Paper</li>
									<li>Sizes: Available in 5x5 or 7x7</li>
									<li>Affordable: Starting under $100.</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				
			</div>
			<div class="small-12 columns">
				
				<!--COFFEE TABLE BOOKS-->
				<section>
					<header class="secHead bg_Coffee">
						<div class="iLine c_Coffee">
							<span class="fa-stack ilinePOS c_Coffee"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-coffee fa-stack-1x fa-inverse"></i></span>
							<h1 class="c_333">Coffee Table Books</h1>
						</div>
					</header>
					<div class="row">
						<div class="large-6 large-push-6 medium-7 medium-push-5 columns">
							<div class="callout player">
								<article class="Coffee_block">
									<ul id="Coffee">
										<li>
											<a href="#slide1"><img alt="Excellence is affordable" src="../_img/products/CoffeeBook-01.jpg"></a>
										</li>
										<li>
											<a href="#slide2"><img alt="Bindings are strong and beautiful" src="../_img/products/CoffeeBook-02.jpg"></a>
										</li>
										<li>
											<a href="#slide3"><img alt="Layflat spine for larger images" src="../_img/products/CoffeeBook-03.jpg"></a>
										</li>
										<li>
											<a href="#slide4"><img alt="A wide selection of colors to choose from" src="../_img/products/CoffeeBook-04.jpg"></a>
										</li>
									</ul>
								</article>
							</div>
						</div>
						<div class="large-6 large-pull-6 medium-5 medium-pull-7 columns">
							<p>Keeping it simple doesn&rsquo;t mean you have to sacrifice class or quality. With a classic layout of one image on each page against a white background, the images really stand out, plus these albums feature customizable hard covers with colors to match almost any style or occasion... And at these prices, they make great keepsakes or thank you gifts as well.</p>
							<div class="callout coStyle bg_Coffee hide-for-medium-only">
								<h3><i class="fa fa-bars"></i> Features</h3>
								<ul>
									<li>Lay-Flat Design: Pages lay flat</li>
									<li>Viewing that stands the test of time</li>
									<li>Classic Style: Features a one image per page layout</li>
									<li>Color corrected to ensure perfection</li>
									<li>Create, organize, and order from your gallery</li>
									<li>Prices start around $50.00</li>
								</ul>
							</div>
						</div>
						<div class="hide-for-small-only">
							<div class="callout coStyle bg_Coffee show-for-medium-only medium-12 columns">
								<h3><i class="fa fa-bars"></i> Features</h3>
								<ul>
									<li>Lay-Flat Design: Pages lay flat</li>
									<li>Viewing that stands the test of time</li>
									<li>Classic Style: Features a one image per page layout</li>
									<li>Color corrected to ensure perfection</li>
									<li>Create, organize, and order from your gallery</li>
									<li>Prices start around $50.00</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				
			</div>
		</main>
		
		<!--FOOTER-->
		<?php require("../_php/footer.php");?>
		
		<!--FLOORSPACE-->
		<div class="column row show-for-large space2em"></div>
		
		<!--HOSTED-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<!--PAGE SPECIFIC-->
		<script src="../_js/specific/prodSlider.js"></script>
		<script>
			$(function () {
			  $("#Aspen,#Modern,#Coffee").slippry({
			      transition: "horizontal", //accepts:'fade','horizontal','vertical','kenburns', false
            // useCSS: true,
        		// speed: 1000,
        		// pause: 3000,
			      auto: !1,
			      preload: "visible" //accepts:'visible','all'
            // autoHover: false
			  })
			});
		</script>
		
		<!--SELF-->
		<script src="../_js/F6/Zurbed.js"></script>
		<script>$(document).foundation();</script>
		
	</body>
</html>