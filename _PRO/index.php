<?php
session_set_cookie_params(0,"/",".abouttheday.com");
session_start();
date_default_timezone_set("America/Los_Angeles");
$expire=time()+60*60*24*60; //HOLD 60 DAYS
$thisPage="Home";
$_SESSION["EyesOn"]["Page"]=$thisPage;
$_SESSION["EyesOn"]["Menu"]=$thisPage;
$_SESSION["EyesOn"]["Sub"]="";
$_SESSION["EyesOn"]["Set"]="";
$_SESSION["Viewed"][$thisPage]=$thisPage;
$visited=implode(",",array_unique($_SESSION["Viewed"]));
setcookie("Visited",$visited,$expire,"/",".abouttheday.com");
require("_php/referer.php");
require("_php/checkpoints.php");
?> <!DOCTYPE html><html class="no-js" lang="en"><head><meta charset="utf-8"><meta content="notranslate" name="google"><meta content="en" http-equiv="Content-Language"><meta content="ie=edge" http-equiv="x-ua-compatible"><meta content="width=device-width,initial-scale=1" name="viewport"><meta content="#22659C" name="theme-color"><meta content="max-age=604800" http-equiv="cache-control"><meta content="Stephen Steinbach" name="author"><meta content="Foundation6.2.4" name="webBuild"><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> <?php include_once("_php/googleAnalytics.php");?> <meta content="sqLeSDRs1QuC4ILwgdp4NLsPScC5dbypW1zbI8jqpuo" name="google-site-verification"><meta content="2C4092FD3C422E49535325F5C5516CE9" name="msvalidate.01"><link href="_css/F6.2.4/foundation.css" rel="stylesheet"><link href="_css/F6.2.4/atd.css" rel="stylesheet"><title>About The Day Wedding Photography | #1 Rated Husband and Wife Team</title><meta content="The award winning Wedding Photography of Stephen & Sonia, best rated Wedding Photographers nationally by WeddingWire, and TheKnot" name="description"><meta content="Wedding Photographers, Wedding Photography, Destination Wedding Photographers, Seattle, San Diego, Phoenix, Salt Lake City, Portland, Wedding Photography Team, Second Shooter" name="keywords"><link href="_css/specific/home.css" rel="stylesheet"><link href="_img/universal/favicon.ico" rel="icon"></head><body> <?php echo $_SERVER['DOCUMENT_ROOT']; ?> <div class="column row show-for-large space1em"></div><?php include("_php/navMain.php");?> <div class="row collapse responsive-slider Bg333"><div class="large-12 slides columns" data-group="slides"><ul><li><figure class="slide-body" data-group="slide"><img alt="Wedding photo of couple overlooking David Arthur Vineyards in St. Helena, California" data-interchange="[_img/home/01-sm.jpg, small],[_img/home/01-md.jpg, medium],[_img/home/01-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/portfolio1.php">Jason & Chelsie</a></em></span></div><div><span>Location:<br><em>St.Helena, CA</em></span></div><div><span>Photographer:<br><em>Stephen Steinbach</em></span></div><div><span>Shoot Date:<br><em>July 21, 2012</em></span></div></aside><div class="caption s01_p1 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="300" data-length="400">Photography that</div><div class="caption s01_p2 show-for-medium" data-animate="slideAppearRightToLeft" data-delay="400" data-length="500">Makes a Moment</div><div class="caption s01_p3 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="800" data-length="800">last a</div><div class="caption s01_p4 show-for-medium" data-animate="slideAppearRightToLeft" data-delay="900" data-length="800">Lifetime</div></figure></li><li><figure class="slide-body" data-group="slide"><img alt="Wedding photography on the beach in Cancun, Mexico" data-interchange="[_img/home/02-sm.jpg, small],[_img/home/02-md.jpg, medium],[_img/home/02-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/portfolio4.php">Scott & Codi</a></em></span></div><div><span>Location:<br><em>Cancun, Mexico</em></span></div><div><span>Photographer:<br><em>Stephen Steinbach</em></span></div><div><span>Shoot Date:<br><em>April 18, 2015</em></span></div></aside><div class="caption s02_p1 show-for-medium" data-animate="slideAppearUpToDown" data-delay="1200" data-length="500">The reviews are in</div><div class="caption s02_p2 show-for-medium" data-animate="slideAppearUpToDown" data-delay="200" data-length="1000"><img alt="2017 Best of TheKnot" src="_img/awards/lg_tk_2018_hof.png" title="2017 Best of TheKnot"></div><div class="caption s02_p3 show-for-medium" data-animate="slideAppearUpToDown" data-delay="400" data-length="1000"><img alt="2016 National Winner - Highest Reviewed Photographer" src="_img/awards/lg_ww_weddi.png" title="2016 National Winner - Highest Reviewed Photographer"></div><div class="caption s02_p4 show-for-medium" data-animate="slideAppearUpToDown" data-delay="600" data-length="1000"><img alt="2017 WeddingWire Couples Choice" src="_img/awards/lg_ww_2017.png" title="2017 WeddingWire Couples Choice"></div><div class="caption s02_p5 show-for-medium" data-animate="slideAppearDownToUp" data-delay="1200" data-length="500"><p>Why risk your wedding to a photographer with no reputation or credibility. We've been piling up awards so you'll know we're right for you! See our <a href="/blog/wedding-photography-awards/">full list of awards</a>.</p></div></figure></li><li><figure class="slide-body" data-group="slide"><img alt="Beautiful wedding boquet with jewlery and antique dress detail" data-interchange="[_img/home/03-sm.jpg, small],[_img/home/03-md.jpg, medium],[_img/home/03-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/details.php">Chris & Jacy</a></em></span></div><div><span>Location:<br><em>Port Orchard, WA</em></span></div><div><span>Photographer:<br><em>Sonia Steinbach</em></span></div><div><span>Shoot Date:<br><em>October 10, 2013</em></span></div></aside><div class="caption s03_p2 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="300" data-length="500"><div><p class="indent">All those little things are important! We realize you spent a lot of time, money, and effort getting things just perfect and then, the following day, they're gone. We'll make sure you'll always have them! See our <a href="/gallery/details.php">Details Gallery</a>.</p></div></div><div class="caption s03_p1 show-for-medium" data-animate="slideAppearDownToUp" data-delay="500" data-length="400">Details</div></figure></li><li><figure class="slide-body" data-group="slide"><img alt="Wedding couple leans in for a kiss in Buena Vista, Colorado" data-interchange="[_img/home/04-sm.jpg, small],[_img/home/04-md.jpg, medium],[_img/home/04-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/portfolio1.php">Dustin & Miranda</a></em></span></div><div><span>Location:<br><em>Buena Vista, CO</em></span></div><div><span>Photographer:<br><em>Stephen Steinbach</em></span></div><div><span>Shoot Date:<br><em>October 15, 2011</em></span></div></aside><div class="caption s04_p1 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="300" data-length="700">When everything's right<span>...</span></div><div class="caption s04_p2 show-for-medium" data-animate="slideAppearRightToLeft" data-delay="800" data-length="1000"><span>...</span>You just know It<span>.</span></div></figure></li><li><figure class="slide-body" data-group="slide"><img alt="Engagement photo in fields of pink tulips" data-interchange="[_img/home/05-sm.jpg, small],[_img/home/05-md.jpg, medium],[_img/home/05-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/engagements1.php">Brandon & Katie</a></em></span></div><div><span>Location:<br><em>Mt.Vernon, WA</em></span></div><div><span>Photographer:<br><em>Sonia Steinbach</em></span></div><div><span>Shoot Date:<br><em>May 8, 2008</em></span></div></aside><div class="caption loveBox show-for-medium" data-animate="slideAppearUpToDown" data-delay="100" data-length="300"><div class="upBox"><p>We always tell couples who are considering us, to check up on us first! Seriously, we encourage it! Seeing that other couples have used us – and love us – actually helps win these couples over. Initially they might have been a bit skeptical, feeling like we might be too good to be true, or hiding something… but after checking around, they’re excited and happy to have us at their wedding.</p></div></div><div class="caption s05_p1 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="300" data-length="800">FEEL</div><div class="caption s05_p2 show-for-medium" data-animate="slideAppearRightToLeft" data-delay="700" data-length="800">LOVE</div><div class="caption s05_p3 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="400" data-length="800">the</div><div class="caption s05_btns show-for-medium" data-animate="slideAppearUpToDown" data-delay="200" data-length="300"><a class="button btnShow">Show</a><a class="button btnBlog hide" href="/blog/feel-the-love">Continue Reading</a></div></figure></li><li><figure class="slide-body" data-group="slide"><img alt="Wedding photography of couple exchanging rings during vows" data-interchange="[_img/home/06-sm.jpg, small],[_img/home/06-md.jpg, medium],[_img/home/06-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/portfolio1.php">Prince & Kimberly</a></em></span></div><div><span>Location:<br><em>Pensacola, FL</em></span></div><div><span>Photographer:<br><em>Sonia Steinbach</em></span></div><div><span>Shoot Date:<br><em>August 15, 2009</em></span></div></aside><div class="caption s06_p1 show-for-medium" data-animate="slideAppearRightToLeft" data-delay="300" data-length="1000">Keep the perfect moment...</div><div class="caption s06_p2 show-for-medium" data-animate="slideAppearRightToLeft" data-delay="1200" data-length="1000">...frozen in eternity</div></figure></li><li><figure class="slide-body" data-group="slide"><img alt="Bride leans out to sneak a peek at the Groom in Monterey, California" data-interchange="[_img/home/07-sm.jpg, small],[_img/home/07-md.jpg, medium],[_img/home/07-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/portfolio5.php">Matt & Laura</a></em></span></div><div><span>Location:<br><em>Monterey, CA</em></span></div><div><span>Photographer:<br><em>Sonia Steinbach</em></span></div><div><span>Shoot Date:<br><em>August 31, 2013</em></span></div></aside><div class="caption wordBox show-for-medium" data-animate="slideAppearUpToDown" data-delay="100" data-length="300"><div class="upBox"><p>On average, about a quarter of the weddings we photograph every year are referrals from previous couples we’ve had the pleasure of working for. Their kind words about us have more power to promote us then anything we can say or do (or even show), and it certainly lends an extra level of credibility to our services that is priceless. Often couples have seen us working for their friends or relatives and have witnessed us firsthand [...]</p></div></div><div class="caption s07_p1 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="300" data-length="800">Spread</div><div class="caption s07_p2 show-for-medium" data-animate="slideAppearRightToLeft" data-delay="700" data-length="500">Word</div><div class="caption s07_p3 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="400" data-length="500">THE</div><div class="caption s07_btns show-for-medium" data-animate="slideAppearUpToDown" data-delay="100" data-length="300"><a class="button btnShow">Show</a><a class="button btnBlog hide" href="/blog/wedding-photography-referrals">Continue Reading</a></div></figure></li><li><figure class="slide-body" data-group="slide"><img alt="Military wedding in the snow at the Colorado Air Force Academy" data-interchange="[_img/home/08-sm.jpg, small],[_img/home/08-md.jpg, medium],[_img/home/08-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/portfolio3.php">Evan & Sierra</a></em></span></div><div><span>Location:<br><em>Colorado Springs, CO</em></span></div><div><span>Photographer:<br><em>Stephen Steinbach</em></span></div><div><span>Shoot Date:<br><em>April 30,2016</em></span></div></aside><div class="caption s08_p1 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="300" data-length="500"><div><div><h2>Gratitude & Thanks</h2></div><hr><p>It is always our pleasure and honor to return the favor to our dedicated service men and women who sacrifice so much for all of us every day. Not only is a portion of our giving directed at Military services, but we also show our appreciation with <em>10% off</em> everything we offer as well.</p><hr><div><i class="fa fa-star c_Red"></i> <i class="fa fa-star c_White"></i> <i class="fa fa-star c_Blue"></i></div></div></div></figure></li><li><figure class="slide-body" data-group="slide"><img alt="Bride and Groom kiss beneath long flowing veil in Washington Square in New Orleans, Louisiana" data-interchange="[_img/home/09-sm.jpg, small],[_img/home/09-md.jpg, medium],[_img/home/09-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/candids.php">Joe & Margaret</a></em></span></div><div><span>Location:<br><em>New Orleans, LA</em></span></div><div><span>Photographer:<br><em>Sonia Steinbach</em></span></div><div><span>Shoot Date:<br><em>March 27, 2014</em></span></div></aside><div class="caption s09_p1 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="300" data-length="300"><h3>You're Covered</h3><hr><p>From the preparations to reception, from the makeup to the cleanup, anytime, and anywhere... We take pride in preserving your memories in splendid and surreal detail.</p></div></figure></li><li><figure class="slide-body" data-group="slide"><img alt="Wedding couple poses with red rocks of Sedona in the background" data-interchange="[_img/home/10-sm.jpg, small],[_img/home/10-md.jpg, medium],[_img/home/10-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/portfolio1.php">Tristin & Ashley</a></em></span></div><div><span>Location:<br><em>Sedona, AZ</em></span></div><div><span>Photographer:<br><em>Stephen Steinbach</em></span></div><div><span>Shoot Date:<br><em>May 25, 2013</em></span></div></aside><div class="caption s10_p1 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="300" data-length="300">No Regrets</div><div class="caption s10_p2 show-for-medium" data-animate="slideAppearRightToLeft" data-delay="400" data-length="500"><p>The number one regret of couples after the wedding is not investing more money in a photographer</p><cite class="right">Huffington Post</cite></div><div class="caption regretBox show-for-medium" data-animate="slideAppearUpToDown" data-delay="100" data-length="100"><div class="upBox"><p>Couples always say their day was a blur, with so much going on and so much to remember – that afterwards, all their priorities switch from planning their wedding – to having something to actually show for it. No matter how little the photography meant before the wedding, it becomes the '<em>only</em> ' thing that matters afterwards!</p></div></div><div class="caption s10_btns show-for-medium" data-animate="slideAppearUpToDown" data-delay="100" data-length="100"><a class="button btnShow">Show</a><a class="button btnBlog hide" href="/blog/wedding-photography-with-no-regrets/">Continue Reading</a></div></figure></li><li><figure class="slide-body" data-group="slide"><img alt="Wedding photo with couple kissing and Scotts Bluff in the background" data-interchange="[_img/home/11-sm.jpg, small],[_img/home/11-md.jpg, medium],[_img/home/11-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/sunsets2.php">Garrett & Janelle</a></em></span></div><div><span>Location:<br><em>Scotts Bluff, NE</em></span></div><div><span>Photographer:<br><em>Stephen Steinbach</em></span></div><div><span>Shoot Date:<br><em>March 30, 2015</em></span></div></aside><div class="caption s11_p1 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="600" data-length="800"><i aria-hidden="true" class="fa fa-check"></i> Magic Time</div><div class="caption s11_p2 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="1000" data-length="800"><i aria-hidden="true" class="fa fa-check"></i> Golden Hour</div><div class="caption s11_p3 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="1400" data-length="800"><i aria-hidden="true" class="fa fa-check"></i> Stunning Photography</div><div class="caption s11_p4 show-for-medium" data-animate="slideAppearUpToDown" data-delay="1000" data-length="800"><p>Our favorite time of day is sunset, and it's so obvious why we feel that way. Check out our <a href="/gallery/sunsets1.php">Sunset Gallery</a>.</p></div></figure></li><li><figure class="slide-body" data-group="slide"><img alt="Wedding couple kiss in front of Mendenhall Glacier" data-interchange="[_img/home/12-sm.jpg, small],[_img/home/12-md.jpg, medium],[_img/home/12-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/portfolio1.php">Rigor & Joanne</a></em></span></div><div><span>Location:<br><em>Juneau, AK</em></span></div><div><span>Photographer:<br><em>Stephen Steinbach</em></span></div><div><span>Shoot Date:<br><em>June 19, 2010</em></span></div></aside><div class="caption s12_p1 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="600" data-length="800">Highest Rated</div><div class="caption s12_p2 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="800" data-length="800">Destination Wedding</div><div class="caption s12_p3 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="1000" data-length="800">Photographers</div><div class="caption s12_p4 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="1400" data-length="800"><a class="button success" href="/blog/wedding-photography-awards/">Awards List</a></div></figure></li><li><figure class="slide-body" data-group="slide"><img alt="Couple poses for wedding photos on the black rocks of Hawaii" data-interchange="[_img/home/13-sm.jpg, small],[_img/home/13-md.jpg, medium],[_img/home/13-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/portfolio4.php">Ari & Janete</a></em></span></div><div><span>Location:<br><em>Princeville, Hawaii</em></span></div><div><span>Photographer:<br><em>Sonia Steinbach</em></span></div><div><span>Shoot Date:<br><em>December 30, 2012</em></span></div></aside><div class="caption s13_p1 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="1000" data-length="800">Your photos should be</div><div class="caption s13_p2 show-for-medium" data-animate="slideAppearRightToLeft" data-delay="1500" data-length="800">as beautiful as your memories</div></figure></li><li><figure class="slide-body" data-group="slide"><img alt="Bride and Groom pose along the Colorado River during fantastic sunset" data-interchange="[_img/home/14-sm.jpg, small],[_img/home/14-md.jpg, medium],[_img/home/14-lg.jpg, large]"><aside class="infoBox caption show-for-medium"><div><span>Couple:<br><em><a href="/gallery/sunsets1.php">Jeremy & Michelle</a></em></span></div><div><span>Location:<br><em>Del Rio, TX</em></span></div><div><span>Photographer:<br><em>Stephen Steinbach</em></span></div><div><span>Shoot Date:<br><em>March 14, 2015</em></span></div></aside><div class="caption s14_p1 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="500" data-length="600">You'll <span>never</span> know</div><div class="caption s14_p2 show-for-medium" data-animate="slideAppearLeftToRight" data-delay="600" data-length="700">the value of a moment</div><div class="caption s14_p3 show-for-medium" data-animate="slideAppearUpToDown" data-delay="900" data-length="800">Until</div><div class="caption s14_p4 show-for-medium" data-animate="slideAppearUpToDown" data-delay="1000" data-length="800">It's a memory<span>...</span></div><div class="caption s14_p5 show-for-medium" data-animate="slideAppearUpToDown" data-delay="1200" data-length="1000"><cite class="right">Dr.Seuss</cite></div></figure></li></ul></div><a class="slider-control left" data-jump="prev" href="#a" title="Previous"></a><a class="slider-control right" data-jump="next" href="#a" title="Next"></a><div class="pages show-for-medium"><a class="page" data-jump-to="1" href="#"></a> <a class="page" data-jump-to="2" href="#"></a> <a class="page" data-jump-to="3" href="#"></a> <a class="page" data-jump-to="4" href="#"></a> <a class="page" data-jump-to="5" href="#"></a> <a class="page" data-jump-to="6" href="#"></a> <a class="page" data-jump-to="7" href="#"></a> <a class="page" data-jump-to="8" href="#"></a> <a class="page" data-jump-to="9" href="#"></a> <a class="page" data-jump-to="10" href="#"></a> <a class="page" data-jump-to="11" href="#"></a> <a class="page" data-jump-to="12" href="#"></a> <a class="page" data-jump-to="13" href="#"></a> <a class="page" data-jump-to="14" href="#"></a></div><div class="show-for-medium showOnOff"><a class="caption button small btnIcon" id="photoInfo" title="Photo Information"><i class="fa fa-info-circle fa-fw"></i></a><a class="button small btnIcon" id="photoOnly" title="Hide Captions"><i class="fa fa-camera fa-fw"></i></a></div></div><div class="column row BgMain space1em"></div><main class="row BgMain"><div class="large-12 columns"><div class="row" data-equalize-on="large" data-equalizer="" id="home"><div class="large-6 large-push-3 columns" data-equalizer-watch=""><section id="featured"><div class="row"><div class="large-12 columns"><header class="secHead bg_Blue"><div class="iLine c_Blue"><span class="fa-stack ilinePOS c_Blue"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-camera fa-stack-1x fa-inverse"></i></span><h1 class="c_333">The Wedding Photography Team</h1></div></header></div><figure class="small-5 medium-6 medium-push-1 large-12 large-pull-0 columns feature"><a href="/about/about.php" title="Stephen &amp; Sonia - The Photographers"><img alt="Meet Stephen &amp; Sonia - The Wedding Photographers" class="rp-Space feature" data-interchange="[_img/home/about-sm.jpg, small],[_img/home/about-md.jpg, medium],[_img/home/about-lg.jpg, large]" data-pin-nopin="true"></a></figure><aside class="small-7 medium-4 medium-push-1 large-3 large-pull-0 columns x-align"><h6>Mar.2001</h6><br><h6><a href="/gallery/" title="Wedding Gallery">Weddings</a></h6><br><h6><a href="/gallery/engagements1.php" title="Engagement Gallery">Engagement</a></h6><br><h6><a href="/blog/author/sirsteinbach/" title="Stephen's Posts">Stephen's Blogs</a></h6><br><h6><a href="/blog/author/ladysteinbach/" title="Sonia's Posts">Sonia's Blogs</a></h6><br><h6><i class="fa fa-comments fa-fw"></i> 14</h6></aside><article class="small-12 medium-10 medium-offset-1 large-9 large-offset-0 columns end"><h6 class="blog"><a href="/about/about.php">Stephen &amp; Sonia</a></h6><p class="blog">Not all wedding photographers are the same! Right from the begining you'll probably realize that there all too many to choose from, and often people end up frustrated and settling for something less then perfect. You'll probably want to get to know us a little bit better and see what really makes us a really unique <em>husband &amp; wife photography team</em>? It's not just that we love what we do, although that is true, it's also the way we always strive to exceed our couples wildest dreams and keep them happy they chose us. What you learn might surprise you! <a href="/about/about.php">[...]</a></p></article><hr></div></section></div><div class="large-3 large-pull-6 columns" data-equalizer-watch=""><div class="row"><div class="large-12 columns"><section id="photographers"><div class="row"><div class="small-12 columns"><header class="secHead bg_DkOrange"><div class="iLine c_DkOrange"><span class="fa-stack ilinePOS c_DkOrange"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-calendar-check-o fa-stack-1x fa-inverse"></i></span><h2 class="c_333">Event Calendar</h2></div></header></div></div><div class="row"><figure class="small-5 medium-4 large-12 columns"><a href="/calendar/calendar.php" title="Event Calendar"><img alt="Check our wedding photography calendar" class="feature" data-interchange="[_img/home/calendar-sm.jpg, small],[_img/home/calendar-lg.jpg, medium]" data-pin-nopin="true"></a></figure><div class="small-7 medium-6 large-12 columns end"><p>You've picked a date, so now's the time to get things locked in. You can check if we're avaiiable and lock in that date before someone else does.</p><a class="button expanded uppercase" href="/calendar/calendar.php">Calendar</a></div></div></section><section id="awards"><header class="secHead bg_Teal"><div class="iLine c_Teal"><span class="fa-stack ilinePOS c_Teal"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-trophy fa-stack-1x fa-inverse"></i></span><h2 class="c_333">Awards</h2></div></header><p><? echo date("Y",strtotime("-1 year"));?> was a record breaking year for us and were excited to share the news!</p><a class="button expanded uppercase" href="/blog/wedding-photography-awards/">Learn More</a></section></div></div></div><div class="large-3 columns" data-equalizer-watch=""><section id="recent"><div class="row"><div class="small-12 columns"><div class="row"><div class="small-12 columns"><header class="secHead bg_DkOrange"><div class="iLine c_DkOrange"><span class="fa-stack ilinePOS c_DkOrange"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-history fa-stack-1x fa-inverse"></i></span><h2 class="c_333">Recent Blogs</h2></div></header></div></div><div class="row"><figure class="small-5 medium-4 large-12 columns feature"><a href="/blog/wedding-jce/" title="Justin &amp; Cara"><img alt="Justin and Cara's Wedding Gallery" src="_img/home/blog_Eliason.jpg"></a></figure><aside class="small-7 medium-6 large-12 columns end"><h6 class="blog"><a class="nameSm" href="/blog/wedding-jce/" rel="bookmark" title="Justin &amp; Cara">Justin &amp; Cara</a> - Kamloops, BC</h6></aside></div><hr><div class="row"><figure class="small-5 medium-4 large-12 columns feature"><a href="/blog/wedding-keh/" title="Keith &amp; Erica"><img alt="Keith and Erica's Wedding Gallery" src="_img/home/blog_Hester.jpg"></a></figure><aside class="small-7 medium-6 large-12 columns end"><h6 class="blog"><a class="nameSm" href="/blog/wedding-keh/" rel="bookmark" title="Keith &amp; Erica">Keith &amp; Erica</a> - Lake Oconee, GA</h6></aside></div><!--WP LATEST>
              <!==? $cat_id=get_cat_ID('private');$excludes='1,86,90';?>
              <!==? $args=array('post__not_in'=>$do_not_duplicate,'numberposts'=>1,'category__not_in'=>explode(',',$excludes),'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");$postslist=get_posts($args);foreach($postslist as $post):setup_postdata($post);?>
              <!==? $excerpt=get_the_excerpt();?>
              <!==? $shortTitle=get_post_meta($post->ID,'shortTitle',true);?>
              <div class="row">
                <figure class="small-5 medium-4 large-12 columns feature"><a href="<!==? the_permalink();?>" title="<!==? the_title();?>">
                  <!==? if(has_post_thumbnail()){the_post_thumbnail('dw-Recent');}?>
                  </a></figure>
                <aside class="small-7 medium-6 large-12 columns end">
                  <h6 class="blog"><!==? the_date("M.Y");?><a class="nameSm" href="<!==? the_permalink();?>" rel="bookmark" title="<!==? the_title();?>"><!==? the_title();?></a> - Destin, FL</h6>
                </aside>
              </div>
              <hr>
              <!==? endforeach;?>
              <!==END LATEST--><div class="row"><div class="small-12 columns"><a class="button expanded uppercase pushDown" href="/blog/">All Blogs</a></div></div></div></div></section></div></div></div></main><?php require("_php/footer.php"); ?> <div class="column row show-for-large space2em"></div><!-- <script src="_js/F6.2.4/what-input.js"></script>
	<script src="_js/F6.2.4/foundation.js"></script> --><script src="_js/F6/f6.js"></script><script>$(document).foundation();</script><script src="_js/specific/megaOrbit.js"></script><script src="_js/specific/megaOrbit_ini.js"></script></body></html>