<?php
	if((!isset($_GET['Region'])) || (isset($_GET['Region']) && $_GET['Region']=="") || (isset($_GET['Region']) && $_GET['Region']=="XX")){
		header("Location:../packages/region.php?Format=".$_SESSION['Format']);
		exit;
	}
?>
<?php
	session_set_cookie_params(0,"/",".abouttheday.com");
	session_start();
	$expire=time()+60*60*24*60;	
	$thisPage="Prices";
	$_SESSION['EyesOn']['Page']=$thisPage;$_SESSION['EyesOn']['Menu']=$thisPage;
	$_SESSION['EyesOn']['Sub']="";
	$_SESSION['EyesOn']['Set']="";
	$_SESSION['Viewed'][$thisPage]=$thisPage;
	$visited=implode(",",array_unique($_SESSION['Viewed']));
	setcookie("Visited",$visited,$expire,"/",".abouttheday.com");
	require("../_php/referer.php");
	require("../_php/priceBin.php");
	require("../_php/checkpoints.php");
?>
<?php if(isset($_SESSION['OrigRegion']) && ($_SESSION['OrigRegion']!=$_SESSION['Region'])){
	$bColor="warning";
	}else{
	$bColor="success";
	}
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
		<title>Wedding <?php echo $formatName;?> Packages</title>
		<link rel="stylesheet" href="../_css/specific/prices.css">
	</head>
	
	<body>
		
		<form>
			<div class="row show-for-large">
				<div class="large-12 columns space1em"></div>
			</div>
			
			<!--PHOTONAV-->
			<?php require("../_php/navMain.php");?>
			
			<div class="row large-12 columns hero">
				<div>
					<h2>Find the package that’s right for you</h2>
					<p><?php echo $formatName;?> Prices without the confusion</p>
				</div>
			</div>
			
			<div class="row Bg333">
				<div class="small-11 small-centered columns overlap">
					<div class="row" data-equalizer="package" data-equalize-on="medium">
						<div class="large-3 medium-6 callout small columns package bronze" data-equalizer-watch="package">
							<header class="Bg_Almond">Bronze</header>
							<div class="blurb">
								<p>The entry-level package that doesn't compromise our quality, but trims away the extras to cut the price.</p>
							</div>
							<div><span class="dollar">$</span><span class="price"><?php echo money_format('%.0n', $bPrice);?></span><span class="cents">.00</span></div>
							<a href="#/" class="button uppercase" data-open="Bronze">Details &nbsp;<i class="fa fa-info-circle"></i></a>
							<hr>
							<h3>Features</h3>
							<ul>
								<li>4 Hours of Coverage</li>
								<li>Captured by: Stephen or Sonia</li>
								<?php if($_SESSION['Format']!='V'){?>
								<li>Full-featured Online Gallery</li>
								<li>Photos purchased separately</li>
								<?php }?>
								<?php if($_SESSION['Format']!='P'){?>
								<li>4 Video Camera Coverage</li>
								<?php }?>
							</ul>
						</div>
						<div class="large-3 medium-6 callout small columns package silver" data-equalizer-watch="package">
							<header class="Bg_Almond">Silver</header>
							<div class="blurb">
								<p>A more budget-friendly mix of popular options that adds time options, and still remains affordable.</p>
							</div>
							<div><span class="dollar">$</span><span class="price"><?php echo money_format('%.0n', $sPrice);?></span><span class="cents">.00</span></div>
							<a href="#/" class="button uppercase" data-open="Silver">Details &nbsp;<i class="fa fa-info-circle"></i></a>
							<hr>
							<h3>Features</h3>
							<ul>
								<li>6 Hours of Coverage</li>
								<li>Captured by: Stephen &amp; Sonia</li>
								<?php if($_SESSION['Format']!='V'){?>
								<li>Full-featured Online Gallery</li>
								<li>&frac12; Price Photo Disc</li>
								<li>$150 Purchasing Credit</li>
								<?php }?>
								<?php if($_SESSION['Format']!='P'){?>
								<li>4 Video Camera Coverage</li>
								<li>Silver Packaging</li>
								<?php }?>
							</ul>
						</div>
						<div class="large-3 medium-6 callout small columns package gold" data-equalizer-watch="package">
							<header class="sell Bg_Almond">Gold</header>
							<div class="blurb">
								<p>Our most popular package including the most popular options and enough time to capture more of your day.</p>
							</div>
							<div><span class="dollar">$</span><span class="price"><?php echo money_format('%.0n', $gPrice);?></span><span class="cents">.00</span></div>
							<a href="#/" class="button uppercase" data-open="Gold">Details &nbsp;<i class="fa fa-info-circle"></i></a>
							<hr>
							<h3>Features</h3>
							<ul>
								<li>8 Hours of Coverage</li>
								<li>Captured by: Stephen &amp; Sonia</li>
								<?php if($_SESSION['Format']!='V'){?>
								<li>Full-featured Online Gallery</li>
								<li>Complete Photo Disc Included</li>
								<li>$300 Purchasing Credit</li>
								<?php }?>
								<?php if($_SESSION['Format']!='P'){?>
								<li>4 Video Camera Coverage</li>
								<li>Honeymoon Ending</li>
								<li>Gold Packaging</li>
								<?php }?>
							</ul>
						</div>
						<div class="large-3 medium-6 callout small columns package platinum" data-equalizer-watch="package">
							<header class="Bg_Almond">Platinum</header>
							<div class="blurb">
								<p>Our all-inclusive package featuring the best we offer and time enough for everything to be done perfectly.</p>
							</div>
							<div><span class="dollar">$</span><span class="price"><?php echo money_format('%.0n', $pPrice);?></span><span class="cents">.00</span></div>
							<a href="#/" class="button uppercase" data-open="Platinum">Details &nbsp;<i class="fa fa-info-circle"></i></a>
							<hr>
							<h3>Features</h3>
							<ul>
								<li>Unlimited Hours of Coverage</li>
								<li>Captured by: Stephen &amp; Sonia</li>
								<?php if($_SESSION['Format']!='V'){?>
								<li>Full-featured Online Gallery</li>
								<li>Complete Photo Disc Included</li>
								<li>$600 Purchasing Credit</li>
								<li>Engagement Session</li>
								<?php }?>
								<?php if($_SESSION['Format']!='P'){?>
								<li>4 Video Camera Coverage</li>
								<li>Honeymoon Ending</li>
								<li>Platinum Packaging</li>
								<li>Love Story Session</li>
								<?php }?>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="small-12 columns text-right suckup"><small class="c_333">Wedding not in <?php echo $_SESSION['RegionName'];?></small><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="1" title="You originally found us searching <?php echo $_SESSION['OrigRegionName'];?>, but we serve <?php echo $_SESSION['RegionName'];?> and other locations too.">&nbsp;<i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span> &nbsp;&nbsp;<a href="/packages/region.php?Format=<?php echo $_SESSION['Format'];?>" class="button small <?php echo $bColor;?>" title="Change Region">Change Location &nbsp;<i class="fa fa-map-marker"></i></a></div>
					</div>
				</div>
			</div>
			<div class="row Bg333">
				<div class="small-11 small-centered columns">
					<div class="row BgMain space1em"></div>
					<div class="row BgMain" data-equalizer data-equalize-on="medium" id="Options">
						<div class="medium-6 large-4 columns">
							<section data-equalizer-watch>
								<header class="secHead bg_DkGreen">
									<div class="iLine c_DkGreen">
										<span class="fa-stack ilinePOS c_DkGreen"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-usd fa-stack-1x fa-inverse"></i></span>
										<h2 class="c_333">Custom Options</h2>
									</div>
								</header>
								<p>Customize a package to include additional options (if not already included).</p>
								<?php if($_SESSION['Format']!='V'){ ?>
								<div class="row alternate">
									<div class="small-6 columns text-right">
										<p class="noWrap">Digital Images</p>
									</div>
									<div class="small-2 columns">
										<p><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="<?php echo $DIn ?>"><i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span></p>
									</div>
									<div class="small-4 columns">
										<p><sup>$</sup><?php echo money_format('%i', $DI);?></p>
									</div>
								</div>
								<?php } ?>
								<div class="row alternate">
									<div class="small-6 columns text-right">
										<p>Extra Disc(s)</p>
									</div>
									<div class="small-2 columns">
										<p class="noWrap"><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="3" title="<?php echo $XDn ?>"><i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span></p>
									</div>
									<div class="small-4 columns">
										<p><sup>$</sup><?php echo money_format('%i', $XD);?></p>
									</div>
								</div>
								<?php if($_SESSION['Format']!='V'){ ?>
								<div class="row alternate">
									<div class="small-6 columns text-right">
										<p class="noWrap">Extra Session</p>
									</div>
									<div class="small-2 columns">
										<p><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="<?php echo $ESn ?>"><i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span></p>
									</div>
									<div class="small-4 columns">
										<p><sup>$</sup><?php echo money_format('%i', $ES);?></p>
									</div>
								</div>
								<?php } ?>
								<?php if($_SESSION['Format']!='P'){ ?>
								<div class="row alternate">
									<div class="small-6 columns text-right">
										<p>Montage</p>
									</div>
									<div class="small-2 columns">
										<p class="noWrap"><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="3" title="<?php echo $PMn ?>"><i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span></p>
									</div>
									<div class="small-4 columns">
										<p><sup>$</sup><?php echo money_format('%i',$PM);?></p>
									</div>
								</div>
								<?php } ?>
								<?php if($_SESSION['Format']!='P'){ ?>
								<div class="row alternate">
									<div class="small-6 columns text-right">
										<p>Honeymoon Ending</p>
									</div>
									<div class="small-2 columns">
										<p class="noWrap"><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="3" title="<?php echo $HEn ?>"><i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span></p>
									</div>
									<div class="small-4 columns">
										<p><sup>$</sup><?php echo money_format('%i',$HE);?></p>
									</div>
								</div>
								<?php } ?>
								<?php if($_SESSION['Format']!='P'){ ?>
								<div class="row alternate">
									<div class="small-6 columns text-right">
										<p>Highlight Video</p>
									</div>
									<div class="small-2 columns">
										<p class="noWrap"><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="3" title="<?php echo $HVn ?>"><i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span></p>
									</div>
									<div class="small-4 columns">
										<p><sup>$</sup><?php echo money_format('%i',$HV);?></p>
									</div>
								</div>
								<?php } ?>
								<?php if($_SESSION['Format']!='P'){ ?>
								<div class="row alternate">
									<div class="small-6 columns text-right">
										<p>Love Story</p>
									</div>
									<div class="small-2 columns">
										<p class="noWrap"><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="3" title="<?php echo $LSn ?>"><i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span></p>
									</div>
									<div class="small-4 columns">
										<p><sup>$</sup><?php echo money_format('%i',$LS);?></p>
									</div>
								</div>
								<?php } ?>
								<div class="row alternate">
									<div class="small-6 columns text-right">
										<p class="noWrap">Hourly Rate</p>
									</div>
									<div class="small-2 columns">
										<p><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="<?php echo $formatName;?> <?php echo $HRn ?>"><i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span></p>
									</div>
									<div class="small-4 columns">
										<p><sup>$</sup><?php if($_SESSION['Format']=='B'){echo money_format('%i',($HR)*2);}else{echo money_format('%i',$HR);}?>
										</p>
									</div>
								</div>
								<div class="row alternate">
									<div class="small-6 columns text-right">
										<p class="noWrap">Edit / Artwork</p>
									</div>
									<div class="small-2 columns">
										<p><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="<?php echo $EHn ?>"><i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span></p>
									</div>
									<div class="small-4 columns">
										<p><sup>$</sup><?php echo money_format('%i',$EH);?></p>
									</div>
								</div>
							</section>
						</div>
						<div class="medium-6 large-4 columns">
							<section data-equalizer-watch>
								<header class="secHead bg_Teal">
									<div class="iLine c_Teal">
										<span class="fa-stack ilinePOS c_Teal"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i></span>
										<h2 class="c_333">Add-On Video</h2>
									</div>
								</header>
								<p>Looking for a video that won't split your wedding photography budget in half?</p>
								<p>We still use all our best equipment, and give you multiple angles too, but an "Add-On Video" is a fraction of the price of hiring someone else.</p>
								<div class="row alternate">
									<div class="small-6 columns text-right">
										<p class="noWrap">Ceremony (<small>DIY</small>)</p>
									</div>
									<div class="small-2 columns">
										<p><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="<?php echo $WCdiy ?>"><i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span></p>
									</div>
									<div class="small-4 columns">
										<p><sup>$</sup><?php echo money_format('%i',$adV1);?></p>
									</div>
								</div>
								<div class="row alternate">
									<div class="small-6 columns text-right">
										<p class="noWrap">Ceremony (<small>Edit</small>)</p>
									</div>
									<div class="small-2 columns">
										<p><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="<?php echo $WCedit ?>"><i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span></p>
									</div>
									<div class="small-4 columns">
										<p><sup>$</sup><?php echo money_format('%i',$adV2);?></p>
									</div>
								</div>
								<div class="row alternate">
									<div class="small-6 columns text-right">
										<p class="noWrap">Full Coverage (<small>DIY</small>)</p>
									</div>
									<div class="small-2 columns">
										<p><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="<?php echo $FCdiy ?>"><i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span></p>
									</div>
									<div class="small-4 columns">
										<p><sup>$</sup><?php echo money_format('%i',$adV3);?></p>
									</div>
								</div>
								<div class="row alternate">
									<div class="small-6 columns text-right">
										<p class="noWrap">Full Coverage (<small>Edit</small>)</p>
									</div>
									<div class="small-2 columns">
										<p><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="<?php echo $FCedit ?>"><i class="fa fa-question-circle c_DkGreen" aria-hidden="true"></i></span></p>
									</div>
									<div class="small-4 columns">
										<p><sup>$</sup><?php echo money_format('%i',$adV4);?></p>
									</div>
								</div>
							</section>
						</div>
						<div class="medium-12 large-4 columns">
							<section data-equalizer-watch>
								<header class="secHead bg_Red">
									<div class="iLine c_Red">
										<span class="fa-stack ilinePOS c_Red"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-asterisk fa-stack-1x fa-inverse"></i></span>
										<h2 class="c_333">Terms & Conditions</h2>
									</div>
								</header>
								<p>&sup1;&nbsp;Coverage hours apply to the event date only. Multiple or split days are subject to a per-diem of $<?php echo money_format('%i',$PD);?>.</p>
								<p>&sup2;&nbsp;Engagement sessions are 2-3 hours, and normally range from 200-300 images. Multiple locations and distance are factored in to the session time.</p>
								<p>&sup3;&nbsp;A $<?php echo money_format('%i',$Deposit);?> non-refundable payment secures the date and price. Remaining balance is due no later then the event date.</p>
								<small><span class="c_Blue">&bull;</span> Pricing subject to change without notice.<br>
								<span class="c_Blue">&bull;</span> Our <a href="/blog/wedding-photography-prices-include-travel/">travel is included</a> in the price.<br>
								<span class="c_Blue">&bull;</span> Packages include a Personal User Account.<br>
								<span class="c_Blue">&bull;</span> Credit Cards accepted via Paypal. (<?php echo $TF;?>% fee)</small>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="reveal" id="Bronze" data-reveal>
				<div class="row">
					<div class="small-12 callout small columns package modal">
						<header class="Bg_Almond">Bronze</header>
						<div class="text-left">
							<p><strong>4 Hours of Coverage</strong> :<br>
								From start to finish, 4 hours isn't much time... but if it's all you need, or you are limited by other time constraints. Here's the perfect place to start.
							</p>
							<p><strong>Captured by Stephen or Sonia</strong> :<br>
								We never hire someone else to cover your wedding, which these days is all to common. We personally guarantee you'll actually get one of us, and probably both of us!
							</p>
							<?php if($_SESSION['Format']!='V'){?>
							<p><strong>Online Gallery</strong> : <small>(hosted by: ShootProof)</small>:<br>
								Our online galleries are password protected, yet allow you to view, sort, share, order, and invite others to your gallery with ease.
							</p>
							<p><strong>Optional Digital Photos</strong> :<br>
								All your images, along with a copyright release statement, are available as either DVD, Flash Drive, or download via 'DropBox' for <?php echo $DI ?>.<sup>00</sup>.
							</p>
							<?php } ?>
						</div>
					</div>
				</div>
				<button class="close-button" data-close aria-label="Close modal" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="reveal" id="Silver" data-reveal>
				<div class="row">
					<div class="small-12 callout small columns package modal">
						<header class="Bg_Almond">Silver</header>
						<div class="text-left">
							<p><strong>6 Hours of Coverage</strong> :<br>
								From start to finish, 6 hours allows enough time to cover the basics and still have some flexibility too.
							</p>
							<p><strong>Captured by Stephen or Sonia</strong> :<br>
								We never hire someone else to cover your wedding, which these days is all to common. We personally guarantee you'll actually get one of us, and probably both of us!
							</p>
							<?php if($_SESSION['Format']!='V'){?>
							<p><strong>Online Gallery</strong> : <small>(hosted by: ShootProof)</small>:<br>
								Our online galleries are password protected, yet allow you to view, sort, share, apply credit and order, and invite others to your gallery with ease.
							</p>
							<p><strong>&frac12; Price Digital Photos</strong> :<br>
								All your images, along with a copyright release statement, are available as either DVD, Flash Drive, or download via 'DropBox' for <?php echo $DI/2 ?>.<sup>00</sup>.
							</p>
							<p><strong>$150 Purchasing Credit</strong> :<br>
								It's just like a gift card for our products! While other photographers are including a one size fits all item <em>they pick</em>, we encourage you to choose what you want and help you pay for it!
							</p>
							<?php } ?>
						</div>
					</div>
				</div>
				<button class="close-button" data-close aria-label="Close modal" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="reveal" id="Gold" data-reveal>
				<div class="row">
					<div class="small-12 callout small columns package modal">
						<header class="Bg_Almond">Gold</header>
						<div class="text-left">
							<p><strong>8 Hours of Coverage</strong> :<br>
								From start to finish, 8 hours gives you ample time to capture all the important parts of the day.
							</p>
							<p><strong>Captured by Stephen and Sonia</strong> :<br>
								We never hire someone else to cover your wedding, which these days is all to common. We personally guarantee you'll actually get both of us!
							</p>
							<?php if($_SESSION['Format']!='V'){?>
							<p><strong>Online Gallery</strong> : <small>(hosted by: ShootProof)</small>:<br>
								Our online galleries are password protected, yet allow you to view, sort, share, apply credit and order, and invite others to your gallery with ease.
							</p>
							<p><strong>Included Photo Disc</strong> :<br>
								All your images, along with a copyright release statement, are included as either DVD, Flash Drive, or download via 'DropBox'.
							</p>
							<p><strong>$300 Purchasing Credit</strong> :<br>
								It's just like a gift card for our products! While other photographers are including a '<em>one size fits all</em>' album or item they pick, we encourage you to choose what you want and help you pay for it!
							</p>
							<?php } ?>
						</div>
					</div>
				</div>
				<button class="close-button" data-close aria-label="Close modal" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="reveal" id="Platinum" data-reveal>
				<div class="row">
					<div class="small-12 callout small columns package modal">
						<header class="Bg_Almond">Platinum</header>
						<div class="text-left">
							<p><strong>Unlimited Hours of Coverage</strong> :<br>
								That's right! You'd have us from whenever you start, to whenever you end. Perfect for a big, big day!
							</p>
							<p><strong>Captured by Stephen and Sonia</strong> :<br>
								We never hire someone else to cover your wedding, which these days is all to common. We personally guarantee you'll actually get both of us!
							</p>
							<?php if($_SESSION['Format']!='V'){?>
							<p><strong>Online Gallery</strong> : <small>(hosted by: ShootProof)</small><br>
								Our online galleries are password protected, yet allow you to view, sort, share, apply credit and order, and invite others to your gallery with ease.
							</p>
							<p><strong>Included Photo Disc</strong> :<br>
								All your images, along with a copyright release statement, are included as either DVD, Flash Drive, or download via 'DropBox'.
							</p>
							<p><strong>$600 Purchasing Credit</strong> :<br>
								It's just like a gift card for our products! While other photographers are including a one size fits all album or item <em>they pick</em>, we encourage you to choose what you want and help you pay for it!
							</p>
							<?php } ?>
							<p><strong>
								<?php if($_SESSION['Format']=='B'){echo'Engagement & Love Story';}elseif($_SESSION['Format']=='V'){echo'Love Story';}else{echo'Engagement';}?>
								Session</strong> :
								<?php if($_SESSION['Format']=='P'){?>
								<small>(or: Family / Bridal / or Boudoir)</small>
								<?php }?>
								<br>
								Choose a time and place for a separate session with us.
								<?php if($_SESSION['Format']!='P'){?>
								We'll create your story, detailed by separate interviews with both of you, and incorporated with photos and music. It is shot and edited with the idea of capturing your special relationship and is always a wedding day highlight!
								<?php }?>
								<?php if($_SESSION['Format']=='B'){echo'<br>';}?>
								<?php if($_SESSION['Format']!='V'){?>
								All the photos we take are included in your gallery and disc, and you can choose either a signature frame or guestbook to feature at your wedding.
								<?php }?>
							</p>
						</div>
					</div>
				</div>
				<button class="close-button" data-close aria-label="Close modal" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			
			<!--FOOTER-->
			<?php require('../_php/footer.php');?>
			
			<!--FLOORSPACE-->
			<div class="row show-for-large"><div class="large-12 columns space2em"></div></div>
			
		</form>
		
		<!--HOSTED-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!--SELF-->
    <script src="../_js/F6/Zurbed.js"></script>
    <script>$(document).foundation();</script>
		
	</body>
</html>