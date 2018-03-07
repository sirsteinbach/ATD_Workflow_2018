<?php
session_set_cookie_params(0,'/','.abouttheday.com');
session_start();
require('../_php/referer.php');
$thisPage='Reviews';
$_SESSION['EyesOn']['Page']=$thisPage;
$_SESSION['EyesOn']['Menu']='About';
$_SESSION['EyesOn']['Sub']='';
$_SESSION['EyesOn']['Set']='';
$_SESSION['Viewed'][$thisPage]=$thisPage;
$visited=implode(',',array_unique($_SESSION['Viewed']));
setcookie('Visited',$visited,$expire,'/',$domain);
require('../_php/checkpoints.php');
include_once('analyticstracking.php');
?>

<!doctype html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='theme-color' content='#22659C'>
    <meta name='author' content='Stephen Steinbach'>
    <meta name='webBuild' content='Foundation6.2.4'>    
    <!--HOSTED-->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
    <!--SELF-->
    <link rel='stylesheet' href='/_css/F6.2.4/foundation.min.css'>
    <link rel='stylesheet' href='/_css/F6.2.4/atd.min.css'>
    <!--PAGE SPECIFIC-->
	<title>Wedding Photography | Review Us</title>
    <meta name='description' content='Good reviews are good, but Great reviews are Great! Please help by giving us a great review'>
    <meta name='keywords' content='Review us, ratings, Wedding Photographer reviews, Best reviews'>
    
	<style type="text/css">
    .relativePOS{position:relative;margin:0.5em auto 1em;}
    @media screen and (min-width: 40em){
		.usPlack{position:absolute;background:rgba(0,0,0,.3);top:16%;width:30%;height:auto;background-color:rgba(0,0,0,.6);border-radius:.4em;padding:1em;}
		.usPlack h3,li span,.usPlack li a:hover{color:orange;}
		.usPlack aside{padding:.5em;font-size:.96em;}
		.usPlack ul{list-style:none;margin:0 -.25em;}
		.usPlack li{color:#BBBBBB;line-height:1.25em;}
		.usPlack a,.usPlack a:visited{color:#2EC6C9;}
		.Sonia{left:5%;}
		.Stephen{right:5%;}
    }  
    @media screen and (min-width: 60em){.usPlack{top:20%;width:22%}}
	.c_Yellow{color:#d1a91b;}.bg_Yellow{background-color:rgba(237, 198, 56,.5);}
	.c_Black{color:#000;}
    </style>
  </head>
  
<body>
    
  <!--HEADSPACE-->
  <div class="column row show-for-large space1em"></div>    

  <!--NAVBAR-->
  <?php require('../_php/navMain.php');?>
  
  <!--UsPLACK-->
  <div class="row BgMain">
    <div class="medium-12 columns relativePOS">
      <section class="pullup BgMain">
        <header class="secHead"><div class="iLine c_333"><span class="fa-stack ilinePOS c_333"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-star fa-stack-1x fa-inverse"></i></span><h1 class="c_CCC">Great Reviews Matter</h1></div></header>
      </section>
      <figure><img class="feature" src="/_img/about/about_1200.jpg" alt="Meet the Wedding Photographers"></figure>
      <div class="show-for-medium usPlack Sonia">
        <aside>
          <div class="iLine c_Teal"><span class="fa-stack ilinePOS c_Teal"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-quote-left fa-stack-1x fa-inverse"></i></span><h3>Google</h3></div>
          <ul>
            <li><span>&bull; </span> How can we ever thank you guys enough for all the amazing pictures you guys took? You are so good at your jobs and worked so well together... </li>
            <li><span>&sim; </span>Beatriz L.</li>
          </ul>
        </aside>
      </div>
      <div class="show-for-medium usPlack Stephen">
        <aside>
          <div class="iLine c_Teal"><span class="fa-stack ilinePOS c_Teal"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-quote-left fa-stack-1x fa-inverse"></i></span>
          <h3>Yellowpages</h3></div>
          <ul>
            <li><span>&bull; </span> A wholehearted mighty thumbs up! Stephen and Sonia were an absolute pleasure to work with and their photography abilities are unrivaled...</li>
            <li><span>&sim; </span>Kathy B.</li>
          </ul>
        </aside>
      </div>   
    </div>
  </div>
  
  <!--MAKE A DIFFERENCE-->
  <main class="row BgMain" data-equalizer data-equalize-on="large" id="AboutUs">      
    <!-- HISTORY -->
    <div class="large-5 columns">
      <section data-equalizer-watch>
        <header class="secHead bg_Teal"><div class="iLine c_Teal"><span class="fa-stack ilinePOS c_Teal"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-line-chart fa-stack-1x fa-inverse"></i></span><h1 class="c_333">Make a Difference</h1>
        </div></header>
        <p class="indent">You may not realize it, but the competition amongst Wedding Photographers is fierce... and as hard as it is to stay ahead of the other 'good' photographers out there competing for the same jobs, it's also a profession where anyone can buy a camera, promise to things they can't do and then break those promises, and then just disappear afterwards. It happens a lot!</p>
      <p class="indent">But, these days it's hard to understand how someone could get taken advantage of - <em>if they read the reviews</em> - when coming to their decision of whom to hire. Reviews are probably the single best way to make people comfortable about spending money for something they haven't received yet.</p>
      <p class="indent">You really do make all the difference when you say nice things about us in our reviews! Your words have kept us in business now for over 15 years, and although it's hardly riches and fame, we certainly feel blessed to be doing what we love, and we owe much of that continuing success to those of you that spread the word and say such nice things!</p>
      </section>
    </div>
    
    <!--BE NICE    
    <div class="large-4 columns">
      <section data-equalizer-watch>
        <header class="secHead bg_DkOrange"><div class="iLine c_DkOrange"><span class="fa-stack ilinePOS c_DkOrange"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-smile-o fa-stack-1x fa-inverse"></i></span><h2 class="c_333">Be nice</h2></div></header>
        <p class="indent">Reviews mean everything to businesses like ours, but as the technology advances and the reviews become more important, there is a potential for fraud and rivalry. We've had several people who we assume are competitors write nasty things about us, and that has the potential to really affect us and our livelihood. That's really cruel because we are ranked by our reviews!</p>
      <p class="indent">On the other hand, being too generous - or should I say, "doing too many reviews that are all exactly the same - from the same email, will probably get blocked! Most of these review sites are set up to filter that kind of over-nice-ness!</p>
      <p><i class="fa fa-exclamation-triangle c_DkOrange" aria-hidden="true"></i> If you copy-paste the same review in all our Google locations, we'll probably get those removed! *Don't get me wrong, we'd love for you to write us several "<em><strong>similar</strong></em>' reviews... but the key is... Make sure they aren't exactly "<em>word for word</em>" duplicates... Please! You just have to change a few words... that's all!</p>
      </section>
    </div>-->
    
    <!--LINKS-->    
    <div class="large-7 columns">
      <section data-equalizer-watch>
        <header class="secHead bg_DkGreen"><div class="iLine c_DkGreen"><span class="fa-stack ilinePOS c_DkGreen"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x fa-inverse"></i></span><h2 class="c_333">Google</h2></div></header>
        <div id="legend" data-equalizer-watch>
          <p>We have several locations on Google, and you can review once per location...<strong> but don't copy-paste without a little editing</strong>! (You'll need to change each review just a little or Google block's them as reoccurring data!) However, we need these terribly, so please do as many as you can!? :)<br><br>
          <small><a href="https://search.google.com/local/writereview?placeid=ChIJdbVRRL0LkVQRTt3ngnr-tLM" target="_blank" title="Olympia,WA">Seattle</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJB0r0ClBwhIARUvLqV29fRwA" target="_blank" title="Napa,CA">Napa</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJI69-51GBQogRhEbF-bI9BuA" target="_blank" title="Lexington,KY">Lexington</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJm_qaYwRvAHwRq6M7_oGMWTY" target="_blank" title="Honolulu,HI">Honolulu</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJO6mRNqPxwogRnHy3mY5LB2Q" target="_blank" title="Tampa,FL">Naples</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJO6mRNqPxwogRnHy3mY5LB2Q" target="_blank" title="Kamloops,BC">Tampa</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJe28r5aVawYkRjxJH6cpa1XI" target="_blank" title="Roebling,NJ">New York</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJjw-o5dUsflMR4JVO67GlDzc" target="_blank" title="Kamloops,BC">Kamloops</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJv4f4_6AkoFMRcHm16J5nmoM" target="_blank" title="Edmonton,AB">Edmonton</a></small></p>
          <br>
          <!--<header class="secHead noRadius bg_Blue"><div class="iLine c_Blue"><span class="fa-stack ilinePOS c_Blue"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-diamond fa-stack-1x fa-inverse"></i></span><h2 class="c_333">Wedding Wire</h2></div></header>
          <p>WeddingWire's reviews are used on other networks like Bing and Yahoo, so it really helps! <small><a href="http://www.eventwire.com/review/AboutTheDay" target="_blank">Click Here</a></small></p>
          <br>-->
          <header class="secHead noRadius bg_Red"><div class="iLine c_Red"><span class="fa-stack ilinePOS c_Red"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-yelp fa-stack-1x fa-inverse"></i></span><h2 class="c_333">Yelp!</h2></div></header>
          <p><strong>IF</strong> you review us on Yelp, it <strong>really</strong> helps if you are already an active 'yelper'... Yelp doesn't seem to publish reviews when the writer is new or only has a couple reviews!<small> <a href="https://www.yelp.com/writeareview/biz/GqWZN9y1ykiRdpgDSv4Iuw?return_url=%2Fbiz%2FGqWZN9y1ykiRdpgDSv4Iuw" target="_blank">Yelp Here</a></small></p>
          <br>
          <!--<header class="secHead noRadius bg_Blue"><div class="iLine c_Blue"><span class="fa-stack ilinePOS c_Blue"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-heart fa-stack-1x fa-inverse"></i></span><h2 class="c_333">The Knot</h2></div></header>
          <p>This one's KNOT too hard to do. There's just a quick survey - and last we checked, you didn't need an account. <small><a href="https://www.theknot.com/review-wedding-vendors/about-the-day-photography-olympia-wa-969927" target="_blank">Click Here</a></small></p>
          <br>-->
          <header class="secHead noRadius bg_Yellow"><div class="iLine c_Yellow"><span class="fa-stack ilinePOS c_Yellow"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-book fa-stack-1x c_Black"></i></span><h2 class="c_333">Yellowpages (YP)</h2></div></header>
          <p>It's quite simple to leave a YP review. You can use your existing Facebook or Google account to login to Yellowpages... It's a breeze!<small> <a href="http://www.yellowpages.com/nationwide/mip/about-the-day-225670?lid=1000149879917" target="_blank">Click Here</a></small></p>
        </div>
      </section>
    </div>
  </main>
  
  <!--FOOTER-->
  <?php require('../_php/footer.php');?>

  <!--FLOORSPACE-->
  <div class="column row show-for-large space2em"></div>
  
  <script src='/_js/F6.2.4/what-input.js'></script>
  <script src='/_js/F6.2.4/foundation.min.js'></script>
  <script>$(document).foundation();</script>

</body>
</html>