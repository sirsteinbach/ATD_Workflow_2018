<?php
  session_set_cookie_params(0,"/",".abouttheday.com");
  session_start();
  $expire=time()+60*60*24*60;
  $thisPage="About";
  $_SESSION['EyesOn']['Page']=$thisPage;
  $_SESSION['EyesOn']['Menu']=$thisPage;
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
    <link rel="stylesheet" href="../_css/specific/about.css">
	  <title>Wedding Photography | About The Day | Meet the Photographers</title>
    <meta name="description" content="Meet Stephen & Sonia, the Wedding Photography Dynamic Duo. This husband and wife team wants to be your wedding photographers">
    <meta name="keywords" content="Husband and wife photographers, photography team, dynamic duo, second shooter, equally matched">
  </head>

  <body>

    <!--HEADSPACE-->
    <div class="column row show-for-large space1em"></div>

    <!--NAVBAR-->
    <?php require("../_php/navMain.php");?>

    <!--UsPLACK-->
    <div class="row BgMain">
      <div class="medium-12 columns relativePOS">
        <section class="pullup BgMain">
          <header class="secHead"><div class="iLine c_333"><span class="fa-stack ilinePOS c_333"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-camera fa-stack-1x fa-inverse"></i></span><h1 class="c_CCC">The Wedding Photographers</h1></div></header>
        </section>
        <figure><img class="feature" alt="Meet the Wedding Photographers" data-interchange="[../_img/about/about_sm.jpg, small],[../_img/about/about_md.jpg, medium],[../_img/about/about_lg.jpg, large]"></figure>
        <div class="show-for-medium usPlack Sonia">
          <aside>
            <div class="iLine c_Teal"><span class="fa-stack ilinePOS c_Teal"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-quote-left fa-stack-1x fa-inverse"></i></span><h3>SONIA</h3></div>
            <ul>
              <li><span>&bull;</span> Photographer</li>
              <li><span>&bull;</span> Social Media Guru</li>
              <li><span>&bull;</span> Photoshop Artist</li>
              <li><span>&bull;</span> Canadian</li>
              <li><span>&bull;</span> Girl's Perspective</li>
              <li><span>&bull;</span> Her <a href="../gallery/sonia.php">Favorite</a> Photos</li>
            </ul>
          </aside>
        </div>
        <div class="show-for-medium usPlack Stephen">
          <aside>
            <div class="iLine c_Teal"><h3>STEPHEN</h3> <span class="fa-stack iLinePOS-r"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-quote-right fa-stack-1x fa-inverse"></i></span></div>
            <ul>
              <li>Photographer <span>&bull;</span></li>
              <li>Website Developer <span>&bull;</span></li>
              <li>Sexy Phone Voice <span>&bull;</span></li>
              <li>Travel Agent <span>&bull;</span></li>
              <li>Guy's Perspective <span>&bull;</span></li>
              <li>His <a href="../gallery/stephen.php">Favorite</a> Photos <span>&bull;</span></li>
            </ul>
          </aside>
        </div>
      </div>
    </div>

    <!--CONTENT-->
    <main class="row BgMain" data-equalizer data-equalize-on="large" id="AboutUs">
      
      <!-- HISTORY -->
      <div class="large-4 columns">
        <section data-equalizer-watch>
          <header class="secHead bg_Teal"><div class="iLine c_Teal"><span class="fa-stack ilinePOS c_Teal"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-history fa-stack-1x fa-inverse"></i></span><h1 class="c_333">History</h1></div></header>
          <p class="indent">We met online in 1999 and about a year later we were married and founded "About The Day".</p>
          <p class="indent">Before that, our photography background was primarily commercial photography, but after getting married, we decided to take a risk and combine our passions for travel, lifestyles, and artistry into weddings exclusively. "Modeling and studio work is fun, but wedding photography is easily the most challenging and exciting form of photography in the world!"</p>
          <p class="indent">For over <?php echo (date("Y")-date("2000"));?> years now, we've been collaborating on photography projects and weddings all over the world. North America, Mexico, Australia, Asia, and Europe.</p>
          <p class="indent">We photographed American Idol Ruben Studdard's wedding and later won the National WeddiAward&trade; for highest reviewed photographer in 2016. In 2017 we were added to TheKnot's Hall Of Fame, and are the best reviewed photographers on Yellowpages.com 4 years running. (<small>See:</small> <a href="https://abouttheday.com/blog/o_awards/">Awards</a>)</p>
        </section>
      </div>

      <!-- INSPIRATION -->
      <div class="large-4 columns">
        <section data-equalizer-watch>
          <header class="secHead bg_DkOrange"><div class="iLine c_DkOrange"><span class="fa-stack ilinePOS c_DkOrange"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-lightbulb-o fa-stack-1x fa-inverse"></i></span><h2 class="c_333">Inspiration</h2></div></header>
          <p class="indent">It fascinates us that moments of time can be paused forever while life continues unending all around it. So many things that surround us every day vanish instantly, from a eyeopening coffee to a surreal sunset and all the moments in between; these details are monumental to us!</p>
          <p class="indent">We find inspiration in each other too. It comes equally from a healthy dose of competitiveness and a loving amount of respect for each others perspective. We realize that we both help each other to new heights and achievements that we might never have tried or succeeded at by ourselves.</p>
          <p class="indent">The challenge and reward of wedding photography excites us as well. People come together from all places, beliefs, backgrounds, and walks of life to unite in a celebration of single focus and goodwill... How could we not be drawn in by that? We truly find pleasure in taking this most important day and turning those moments into priceless art that is cherished forever.</p>
        </section>
      </div>

      <!-- PHILOSOPHY -->
      <div class="large-4 columns">
        <section data-equalizer-watch>
          <header class="secHead bg_Blue"><div class="iLine c_Blue"><span class="fa-stack ilinePOS c_Blue"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-fire fa-stack-1x fa-inverse"></i></span><h2 class="c_333">Philosophy</h2></div></header>
          <p class="indent">We believe in doing everything to the best of our abilities and with a positive and thankful attitude. It is not only because we believe that you will love the results or because we believe that it's the right way to run a business... It comes from our belief in doing our best to honor Jesus Christ whom we want to represent in all aspects of our lives.</p>
          <p class="indent">Whether or not you share our "personal" belief, you can benefit from our sense of honor, integrity, and fairness, and can trust we will do only our best for you.</p>
          <p class="indent">Oh - and don't worry - we're not preachy nor we don't feel the need to turn every conversation into a philosophic debate either. To us, our belief is "personal" and it ends there.</p>
          <p><span class="c_Blue">&bull;</span> We respect all cultures and beliefs.<br>
          <span class="c_Blue">&bull;</span> We are truly honored to be your guest.<br>
          <span class="c_Blue">&bull;</span> We are thankful to be your choice.<br>
          <span class="c_Blue">&bull;</span> We are considerate of your requirements.</p>
        </section>
      </div>
      
    </main>

    <!--FOOTER-->
    <?php require("../_php/footer.php");?>

    <!--FLOORSPACE-->
    <div class="column row show-for-large space2em"></div>
    
    <!--HOSTED-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!--SELF-->
    <script src="../_js/F6/Zurbed.js"></script>
    <script>$(document).foundation();</script>

  </body>
</html>
