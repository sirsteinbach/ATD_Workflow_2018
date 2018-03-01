<header id="NavBoundry" class="row collapse">
  <div class="large-12 columns">
    <nav class="title-bar" data-responsive-toggle="MainMenu" data-hide-for="large">
      <a class="title-bar-left" href="/index.php"><img id="MobileLogo" alt="About The Day Mobile Logo" src="../_img/logo/logo.svg"></a>
      <div class="title-bar-right">
        <button class="menu-icon" type="button" data-toggle></button>
      </div>
    </nav>
    <nav class="top-bar radiusTop" id="MainMenu">
      <a href="../index.php" title="Return to Homepage">
        <img class="show-for-large" id="Logo" alt="About The Day Logo" src="../_img/logo/logo.svg" width="168" height="70">
      </a>
      <div class="top-bar-right">
        <ul class="vertical medium-horizontal menu dropdown" data-responsive-menu="drilldown large-dropdown">
          <li<?php if((isset($_SESSION['EyesOn']['Page']))&&($_SESSION['EyesOn']['Page']=='Home'))echo' class="active"';?>>
          <a href="../index.php">HOME
          </a>
          <li class="has-submenu<?php if((isset($_SESSION['EyesOn']['Menu']))&&($_SESSION['EyesOn']['Menu']=='Gallery'))echo' tabActive';?>">
            <a href="#">GALLERY</a>
            <ul class="vertical submenu menu" data-submenu>
              <li<?php if((isset($_SESSION['EyesOn']['Sub']))&&($_SESSION['EyesOn']['Sub']=='Photography'))echo' class="active"';?>>
                <a data-chevron_R href="../gallery/portfolio1.php">Photography</a>
              </li>
              <li<?php if((isset($_SESSION['EyesOn']['Sub']))&&($_SESSION['EyesOn']['Sub']=='Design'))echo' class="active"';?>>
                <a data-chevron_R href="../gallery/albums.php">Album Design</a>
              </li>
              <li<?php if((isset($_SESSION['EyesOn']['Sub']))&&($_SESSION['EyesOn']['Sub']=='VidHi'))echo' class="active"';?>>
                <a data-chevron_R href="../gallery/videos.php">Video Highlights</a>
              </li>
              <li<?php if((isset($_SESSION['EyesOn']['Sub']))&&($_SESSION['EyesOn']['Sub']=='DVD'))echo' class="active"';?>>
                <a data-chevron_R href="../gallery/dvdPlatinum.php">DVD Cover Art</a>
              </li>
            </ul>
          </li>
          <li class="has-submenu<?php if((isset($_SESSION['EyesOn']['Menu']))&&($_SESSION['EyesOn']['Menu']=='Prices'))echo' tabActive';?>">
            <a href="#">PRICING</a>
            <ul class="vertical submenu menu" data-submenu>
              <li<?php if((isset($_SESSION['Format']))&&($_SESSION['Format']=='P')&&($_SESSION['EyesOn']['Page']=='Prices'))echo' class="active"';?>>
                <a data-chevron_R href="../packages/prices.php<?php echo'?Region='.$_SESSION['Region'].'&Format=P';?>">Photography</a>
              </li>
              <li<?php if((isset($_SESSION['Format']))&&($_SESSION['Format']=='V'))echo' class="active"';?>>
                <a data-chevron_R href="../packages/prices.php<?php echo'?Region='.$_SESSION['Region'].'&Format=V';?>">Videography</a>
              </li>
              <li<?php if((isset($_SESSION['Format']))&&($_SESSION['Format']=='B'))echo' class="active"';?>>
                <a data-chevron_R href="../packages/prices.php<?php echo'?Region='.$_SESSION['Region'].'&Format=B';?>">Both Photo &amp; Video</a>
              </li>
              <?php if($_SESSION['Format']=='P'){?>
              <li<?php if((isset($_SESSION['EyesOn']['Page']))&&($_SESSION['EyesOn']['Page']=='Compare'))echo' class="active"';?>>
                <a data-chevron_R href="../packages/compare.php<?php echo'?Region='.$_SESSION['Region']?>&Format=P">Compare Packages</a>
              </li>
              <?php } ?>
            </ul>
          </li>
          <li class="has-submenu<?php if((isset($_SESSION['EyesOn']['Menu']))&&($_SESSION['EyesOn']['Menu']=='About'))echo' tabActive';?>">
            <a href="#">ABOUT</a>
            <ul class="vertical submenu menu" data-submenu>
              <li<?php if((isset($_SESSION['EyesOn']['Page']))&&($_SESSION['EyesOn']['Page']=='About'))echo' class="active"';?>>
                <a data-chevron_R href="../about/about.php">Stephen &amp; Sonia</a>
              </li>
              <li<?php if((isset($_SESSION['EyesOn']['Page']))&&($_SESSION['EyesOn']['Page']=='Calendar'))echo' class="active"';?>>
                <a data-chevron_R href="../calendar/calendar.php">Calendar</a>
              </li>
              <li<?php if((isset($_SESSION['EyesOn']['Page']))&&($_SESSION['EyesOn']['Page']=='wedding-photography-awards'))echo' class="active"';?>>
                <a data-chevron_R href="../blog/wedding-photography-awards/">Award List</a>
              </li>
            </ul>
          </li>
          <li class="has-submenu<?php if((isset($_SESSION['EyesOn']['Menu']))&&($_SESSION['EyesOn']['Menu']=='Products'))echo' tabActive'; ?>">
            <a href="#">PRODUCTS</a>
            <ul class="vertical submenu menu" data-submenu>
              <li<?php if((isset($_SESSION['EyesOn']['Page']))&&($_SESSION['EyesOn']['Page']=='Albums'))echo' class="active"';?>>
                <a data-chevron_R href="../products/albums.php">Books &amp; Albums</a>
              </li>
              <li<?php if((isset($_SESSION['EyesOn']['Page']))&&($_SESSION['EyesOn']['Page']=='Decor'))echo' class="active"';?>>
                <a data-chevron_R href="../products/decor.php">Canvas &amp; Decor</a>
              </li>
              <li<?php if((isset($_SESSION['EyesOn']['Page']))&&($_SESSION['EyesOn']['Page']=='Media'))echo' class="active"';?>>
                <a data-chevron_R href="../products/media.php">Digital &amp; More</a>
              </li>
            </ul>
          </li>
          <li class="has-submenu<?php if((isset($_SESSION['EyesOn']['Menu']))&&($_SESSION['EyesOn']['Menu']=='Blog'))echo' tabActive'; ?>">
            <a href="#">BLOG</a>
            <ul class="vertical submenu menu" data-submenu>
              <li>
                <a data-chevron_R href="../blog/category/blogs/featured-blogs/">Featured</a>
              </li>
              <li>
                <a data-chevron_R href="../blog/category/blogs/wedding-blogs/">Weddings</a>
              </li>
              <li>
                <a data-chevron_R href="../blog/category/blogs/engagement-blogs/">Engagement</a>
              </li>
              <li>
                <a data-chevron_R href="../blog/category/blogs/modeling-blogs/">Modeling</a>
              </li>
              <li>
                <a data-chevron_R href="../blog/category/blogs/thoughts-blogs/">Thoughts</a>
              </li>
              <li>
                <a data-chevron_R href="../blog/">Full List &rarr;</a>
              </li>
            </ul>
          </li>
          <li<?php if((isset($_SESSION['EyesOn']['Page']))&&($_SESSION['EyesOn']['Page']=='Contact'))echo' class="active"';?>>
            <a <?php if($_SESSION['Checkpoint']['Status']!='PassAll'){echo'data-open="revealContact"';}else{echo'href="../contact/contact.php"';}?>>CONTACT</a>
          </li>
          <li class="hide-for-large<?php if($thisPage=='Login')echo' active';?>">
            <a href="../clients/login.php">LOGIN<i class="fa fa-lock"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>