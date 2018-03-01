<footer class="row clrBgD radiusBot">
  <div class="medium-7 columns show-for-large">
    <ul class="menu sub-nav">
      <li<?php if((isset($_SESSION['EyesOn']['Page']))&&($_SESSION['EyesOn']['Page']=='Home'))echo' class="active"';?>>
        <a href="../index.php">HOME</a>
      </li>
      <li<?php if((isset($_SESSION['EyesOn']['Menu']))&&($_SESSION['EyesOn']['Menu']=='Gallery'))echo' class="active"';?>>
        <a href="../gallery/portfolio1.php">GALLERY</a>
      </li>
      <li<?php if($thisPage=='Calendar')echo' class="active"';?>>
        <a href="../calendar">CALENDAR</a>
      </li>
      <li<?php if((isset($_SESSION['EyesOn']['Menu']))&&($_SESSION['EyesOn']['Menu']=='Prices'))echo' class="active"';?>>
        <a href="../packages/prices.php<?php echo'?Region='.$_SESSION['Region'].'&Format='.$_SESSION['Format'];?>">PRICES</a>
      </li>
      <li<?php if((isset($_SESSION['EyesOn']['Menu']))&&($_SESSION['EyesOn']['Menu']=='Blog'))echo' class="active"';?>>
        <a href="../blog/">BLOG</a>
      </li>
      <li<?php if((isset($_SESSION['EyesOn']['Page']))&&($_SESSION['EyesOn']['Page']=='Contact'))echo' class="active"';?>>
        <a <?php if($_SESSION['Checkpoint']['Status']!='PassAll'){echo' data-open="revealContact"';}else{echo' href="../contact/contact.php"';}?>>CONTACT</a>
      </li>
      <li<?php if($thisPage=='Login')echo' class="active"';?>>
        <a href="../clients/login.php">LOGIN <i class="fa fa-lock"></i></a>
      </li>
    </ul>
  </div>
  <div class="medium-5 columns text-right">
    <ul class="menu social align-right">
      <li>
        <a href="https://abouttheday.com/blog/?feed=rss2" target="_blank"><img src="../_img/footer/rss.gif" alt="RSS" title="RSS"></a>
      </li>
      <li>
        <a href="https://www.linkedin.com/profile/view?id=87922049" target="_blank"><img src="../_img/footer/linkedin.gif" alt="LinkedIn" title="LinkedIn"></a>
      </li>
      <li>
        <a href="https://twitter.com/About_The_Day" target="_blank"><img src="../_img/footer/twitter.gif" alt="Twitter" title="Twitter"></a>
      </li>
      <li>
        <a href="https://www.pinterest.com/ATDphotography" target="_blank"><img src="../_img/footer/pinterest.gif" alt="Pintrest" title="Pintrest"></a>
      </li>
      <li>
        <a href="https://www.instagram.com/about_the_day/" target="_blank"><img src="../_img/footer/instagram.gif" alt="Instagram" title="Instagram"></a>
      </li>
      <li>
        <a href="https://plus.google.com/+AboutTheDay" target="_blank"><img src="../_img/footer/googleplus.gif" alt="Google+" title="Google+"></a>
      </li>
      <li>
        <a href="https://www.facebook.com/AboutTheDay" target="_blank"><img src="../_img/footer/facebook.gif" alt="Facebook" title="Facebook"></a>
      </li>
    </ul>
  </div>
</footer>
<div class="row">
  <div class="small-12 columns text-center">
    <small>
      <a href="https://abouttheday.com/sitemap.php">Sitemap</a> &bull; Copyright &copy;1999-<?php echo date('Y');?> About The Day Photography &bull; All Rights Reserved &bull; Terms &bull; Privacy
    </small>
  </div>
</div>
<div class="reveal" id="revealContact" data-reveal>
  <div class="column row space1em">&nbsp;</div>
  <div class="column row">
    <div class="iLine c_DkOrange">
      <span class="fa-stack ilinePOS c_DkOrange">
        <i class="fa fa-square fa-stack-2x"></i>
        <i class="fa <?php echo $_SESSION['Checkpoint']['i1'];?> fa-stack-1x fa-inverse"></i>
      </span>
      <h4 class="c_333"><?php echo $_SESSION['Checkpoint']['t1'];?></h4>
    </div>
  </div>
  <div class="column row">
    <div class="callout warning">
      <p><?php echo $_SESSION['Checkpoint']['m1'];?></p>
      <div class="column row show-for-large space6px">
      </div>
      <p class="text-center">
        <?php if($_SESSION['Checkpoint']['btn-G']=='Y'){echo'<a class="button success uppercase" title="View our Photography Gallery" href="../gallery/portfolio1.php">Gallery</a>';}?>&nbsp;
        <?php if($_SESSION['Checkpoint']['btn-C']=='Y'){echo'<a class="button success uppercase" title="Check our Event Calendar" href="../calendar/calendar.php">Calendar</a>';}?>&nbsp;
        <?php if($_SESSION['Checkpoint']['btn-P']=='Y'){echo'<a class="button success uppercase" title="See our Prices" href="../prices.php?Format='.$_SESSION['Format'].'&Region='.$_SESSION['Region'].'">Prices</a>';}?>
      </p>
    </div>
  </div>
  <div class="column row space2em">
  </div>
  <div class="column row">
    <div class="iLine c_DkGreen">
      <span class="fa-stack ilinePOS c_DkGreen">
        <i class="fa fa-square fa-stack-2x"></i>
        <i class="fa <?php echo $_SESSION['Checkpoint']['i2'];?> fa-stack-1x fa-inverse"></i>
      </span>
      <h4 class="c_333"><?php echo $_SESSION['Checkpoint']['t2'];?></h4>
    </div>
  </div>
  <div class="column row">
    <div class="callout success">
      <p><?php echo $_SESSION['Checkpoint']['m2'];?></p>
      <div class="column row show-for-large space6px"></div>
      <p class="text-center"><a class="button alert uppercase" title="Skip to Contact Us" href="../contact/contact.php">Contact</a></p>
    </div>
  </div>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>