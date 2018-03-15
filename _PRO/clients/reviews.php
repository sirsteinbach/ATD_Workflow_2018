<?php
  session_start();
  $expire=time()+60*60*24*60;
  $thisPage="Reviews";
  $_SESSION['EyesOn']['Page']=$thisPage;
  $_SESSION['EyesOn']['Menu']="About";
  $_SESSION['EyesOn']['Sub']="";
  $_SESSION['EyesOn']['Set']="";
  $_SESSION['Viewed'][$thisPage]=$thisPage;
  $visited=implode(",",array_unique($_SESSION['Viewed']));
  setcookie("Visited",$visited,$expire,"/",$domain);
  require("../_php/referer.php");
  require("../_php/checkpoints.php");
?> <!DOCTYPE html><html lang="en" xml:lang="en" class="no-js"><head><meta charset="utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="theme-color" content="#22659C"><meta name="author" content="Stephen Steinbach"><meta name="webBuild" content="Foundation6.2.4"> <?php include_once($_SERVER['DOCUMENT_ROOT']."/_php/googleAnalytics.php");?> <link rel="icon" href="../_img/universal/favicon.ico"><link rel="stylesheet" href="../_css/F6/Zurbed.min.css"><title>Wedding Photography | Review Us</title><meta name="description" content="Good reviews are good, but Great reviews are Great! Please help by giving us a great review"><meta name="keywords" content="Review us, ratings, Wedding Photographer reviews, Best reviews"><link rel="stylesheet" href="../_css/specific/about.min.css"></head><body><div class="column row show-for-large space1em"></div> <?php require("../_php/navMain.php");?> <div class="row BgMain"><div class="medium-12 columns relativePOS"><section class="pullup BgMain"><header class="secHead"><div class="iLine c_333"><span class="fa-stack ilinePOS c_333"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-camera fa-stack-1x fa-inverse"></i></span><h1 class="c_CCC">The Wedding Photographers</h1></div></header></section><figure><img class="feature" alt="Meet the Wedding Photographers" data-interchange="[../_img/about/about_sm.jpg, small],[../_img/about/about_md.jpg, medium],[../_img/about/about_lg.jpg, large]"></figure><div class="show-for-medium usPlack Sonia"><aside><div class="iLine c_Teal"><span class="fa-stack ilinePOS c_Teal"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-quote-left fa-stack-1x fa-inverse"></i></span><h3>Google</h3></div><ul><li>How can we ever thank you guys enough for all the amazing pictures you guys took? You are so good at your jobs and worked so well together...</li><li><span>&sim; </span>Beatriz L.</li></ul></aside></div><div class="show-for-medium usPlack Stephen"><aside><div class="iLine c_Teal"><h3>Yellowpages</h3></div><ul><li>A wholehearted mighty thumbs up! Stephen and Sonia were an absolute pleasure to work with and their photography abilities are unrivaled...</li><li><span>&sim; </span>Kathy B.</li></ul></aside></div></div></div><main class="row BgMain" data-equalizer data-equalize-on="large" id="AboutUs"><div class="large-5 columns"><section data-equalizer-watch><header class="secHead bg_Teal"><div class="iLine c_Teal"><span class="fa-stack ilinePOS c_Teal"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-line-chart fa-stack-1x fa-inverse"></i></span><h1 class="c_333">Make a Difference</h1></div></header><p class="indent">You may not realize it, but the competition amongst Wedding Photographers is fierce... and as hard as it is to stay ahead of the other 'good' photographers out there competing for the same jobs, it's also a profession where anyone can buy a camera, promise to things they can't do and then break those promises, and then just disappear afterwards. It happens a lot!</p><p class="indent">But, these days it's hard to understand how someone could get taken advantage of - <em>if they read the reviews</em> - when coming to their decision of whom to hire. Reviews are probably the single best way to make people comfortable about spending money for something they haven't received yet.</p><p class="indent">You really do make all the difference when you say nice things about us in our reviews! Your words have kept us in business now for over 15 years, and although it's hardly riches and fame, we certainly feel blessed to be doing what we love, and we owe much of that continuing success to those of you that spread the word and say such nice things!</p></section></div><div class="large-7 columns"><section data-equalizer-watch><header class="secHead bg_DkGreen"><div class="iLine c_DkGreen"><span class="fa-stack ilinePOS c_DkGreen"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x fa-inverse"></i></span><h2 class="c_333">Google</h2></div></header><div id="legend" data-equalizer-watch><p>We have several locations on Google, and you can review once per location...<strong> but don't copy-paste without a little editing</strong>! (You'll need to change each review just a little or Google block's them as reoccurring data!) However, we need these terribly, so please do as many as you can!? :)<br><br><small><a href="https://search.google.com/local/writereview?placeid=ChIJdbVRRL0LkVQRTt3ngnr-tLM" target="_blank" title="Olympia,WA">Seattle</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJB0r0ClBwhIARUvLqV29fRwA" target="_blank" title="Napa,CA">Napa</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJI69-51GBQogRhEbF-bI9BuA" target="_blank" title="Lexington,KY">Lexington</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJm_qaYwRvAHwRq6M7_oGMWTY" target="_blank" title="Honolulu,HI">Honolulu</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJO6mRNqPxwogRnHy3mY5LB2Q" target="_blank" title="Tampa,FL">Naples</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJO6mRNqPxwogRnHy3mY5LB2Q" target="_blank" title="Kamloops,BC">Tampa</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJe28r5aVawYkRjxJH6cpa1XI" target="_blank" title="Roebling,NJ">New York</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJjw-o5dUsflMR4JVO67GlDzc" target="_blank" title="Kamloops,BC">Kamloops</a> | <a href="https://search.google.com/local/writereview?placeid=ChIJv4f4_6AkoFMRcHm16J5nmoM" target="_blank" title="Edmonton,AB">Edmonton</a></small></p><br><header class="secHead noRadius bg_Red"><div class="iLine c_Red"><span class="fa-stack ilinePOS c_Red"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-yelp fa-stack-1x fa-inverse"></i></span><h2 class="c_333">Yelp!</h2></div></header><p><strong>IF</strong> you review us on Yelp, it <strong>really</strong> helps if you are already an active 'yelper'... Yelp doesn't seem to publish reviews when the writer is new or only has a couple reviews!<small> <a href="https://www.yelp.com/writeareview/biz/GqWZN9y1ykiRdpgDSv4Iuw?return_url=%2Fbiz%2FGqWZN9y1ykiRdpgDSv4Iuw" target="_blank">Yelp Here</a></small></p><br><header class="secHead noRadius bg_Yellow"><div class="iLine c_Yellow"><span class="fa-stack ilinePOS c_Yellow"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-book fa-stack-1x c_Black"></i></span><h2 class="c_333">Yellowpages (YP)</h2></div></header><p>It's quite simple to leave a YP review. You can use your existing Facebook or Google account to login to Yellowpages... It's a breeze!<small> <a href="http://www.yellowpages.com/nationwide/mip/about-the-day-225670?lid=1000149879917" target="_blank">Click Here</a></small></p></div></section></div></main> <?php require("../_php/footer.php");?> <div class="column row show-for-large space2em"></div><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="../_js/F6/Zurbed.min.js"></script><script>$(document).foundation();</script></body></html>