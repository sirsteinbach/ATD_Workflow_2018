<?php
session_set_cookie_params(0,"/",".abouttheday.com");
session_start();
date_default_timezone_set("America/Los_Angeles");
$expire=time()+60*60*24*60;
$thisPage="Contact";
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
<?php
//Hierarchy to choose Format
if(isset($_SESSION['Format'])!=""){$format=$_SESSION['Format'];}
if(isset($_COOKIE['Format'])!=""){$format=$_COOKIE['Format'];}
if(isset($_GET['Format'])!=""){$format=$_GET['Format'];}
$qsDate="";
if(isset($_GET['Date'])!=""){$qsDate=$_GET['Date'];}
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
    <?php include_once($_SERVER['DOCUMENT_ROOT']."/_php/googleAnalytics.php");?>
    <!--HOSTED-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!--SELF-->
    <link rel="stylesheet" href="/_css/F6/foundation.css">
    <link rel="stylesheet" href="/_css/F6/atd.css">
    <!--PAGE SPECIFIC-->
	<title>Contact About The Day Photography</title>
    <!-- Event snippet for Contact Form conversion page -->
	<script>
      gtag("event", "conversion", {"send_to": "AW-990426188/Sx7VCIfpgnsQzOii2AM"});
    </script>
	<script type="text/javascript" src="/_js/specific/maskInput.js"></script>
    <script type="text/javascript" src="/_js/specific/contactSelects.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/_css/specific/inputs.css">
	<script type="text/javascript" src="/_js/specific/contact.js"></script>
	<link rel="stylesheet" href="/_css/specific/contact.css">

  </head>

<body>

  <!--HEADSPACE-->
  <div class="column row show-for-large space1em"></div>
  <!--NAVBAR-->
  <?php require("../_php/navMain.php");?>
  <!--DIVIDER-->
  <div class="row BgMain">
    <div class="large-12 columns space1em">&nbsp;</div>
  </div>
  <!--CONTENT-->
  <main class="row BgMain">
    <!--Container-->
    <div class="column medium-10 medium-centered">
      <!--REQUIRED-->
      <div class="large-8 columns">
        <section>
        <?php
        if(isset($_POST['cf_email'])<>""){
          if(isset($_POST['cf_nameX'])<>""){$hiName=$_POST['cf_nameX'];}else{$hiName=$_POST['cf_name1'];}
          if($_POST['cf_who']=="BR"){$who="the Bride";$who1="My";$who2="Groom's";}
		  if($_POST['cf_who']=="GR"){$who="the Groom";$who1="Bride's";$who2="My";}
		  if($_POST['cf_who']=="XX"){$who="a Gay partner";$who1="My";$who2="Partner's";}
		  if($_POST['cf_who']=="BP"){$who="the Bride's Parent";$who1="Bride's";$who2="Groom's";}
		  if($_POST['cf_who']=="GP"){$who="the Groom's Parent";$who1="Bride's";$who2="Groom's";}
		  if($_POST['cf_who']=="CO"){$who="the Coordinator";$who1="Bride's";$who2="Groom's";}
		  if($_POST['cf_who']=="FR"){$who="a Friend";$who1="Bride's";$who2="Groom's";}
		  if($_POST['cf_who']=="OT"){$who="none of the above";$who1="Bride's";$who2="Groom's";}
          $to ="abouttheday@gmail.com";
          //$to.=",3604027663@tmomail.net,3604020831@tmomail.net";
          $subject="Contact Request Form";
          $headers="From: ".$hiName."<".$_POST['cf_email'].">\r\n";
          $headers.="Reply-To: ".$_POST['cf_email']."\r\n";
          $headers.="X-Mailer: PHP/".phpversion();
          $message="I'm ".$who."\r\n";
          if($_POST['cf_nameX']<>""){$message.="My Name is: ".$_POST['cf_nameX']."\n";}
          $message.=$who1." Name: ".$_POST['cf_name1']."\r\n".$who2." Name: ".$_POST['cf_name2']."\r\n";
          $message.="Email: ".$_POST['cf_email']."\r\n";
		  $message.="Phone: ".$_POST['cf_phone']."\r\n";
		  $message.="Address: ".$_POST['cf_address'].", ".$_POST['cf_city'].", ".$_POST['cf_state']." ".$_POST['cf_zip']."\r\n";
		  $message.="Date: ".$_POST['cf_date']."\r\n";
		  $message.="Location: ".$_POST['cf_location']."\r\n";
		  $message.="Interest: ".$_POST['cf_interest']."\r\n";
		  $message.="Referral: ".$_POST['cf_referred']."\r\n";
		  $message.="Searched: ".$searched."\r\n";
		  $message.="Respond by:".$_POST['cf_respond']."\r\n";
		  $message.="Visited: ".$_POST['cf_visited']."\r\n";
		  $message.="Comment: ".stripslashes($_POST['cf_message'])."\r\n";
		  $message.="Location Region: ".$_POST['cf_region']."\r\n";
		  $message.="Browser: ".$browser." on ".$os."\r\n";
		  $message.="Geo: ".$geoLocation."";
          mail($to, $subject, $message, $headers) or die ("Failure");
      ?>
          <header class="secHead bg_DkGreen">
          	<div class="iLine c_DkGreen">
            	<span class="fa-stack ilinePOS c_DkGreen">
                	<i class="fa fa-square fa-stack-2x"></i><i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
                </span>
                <h3 class="c_333">Contact Us</h3>
            </div>
          </header>
          <div>
            <p>Thank you for contacting us about your upcoming event. We will be contacting you shortly using the information you provided below.</p>
            <p>In the meantime, please feel free to call or email us anytime about anything. We look forward to working with you soon.</p>
            <br>
          </div>
          <div class="callout">
            <div class="iLine c_DkOrange">
            	<span class="fa-stack ilinePOS c_DkOrange">
                	<i class="fa fa-square fa-stack-2x"></i><i class="fa fa-info-circle fa-stack-1x fa-inverse"></i>
                </span>
                <h3 class="c_333">Your Information</h3>
            </div>
            <p><?php if($_POST['cf_nameX']<>""){echo"My Name: <strong>".$_POST['cf_nameX']."</strong><br>";}?><?php echo $who1;?> Name: <strong><?php echo $_POST['cf_name1'];?></strong><br>
            <?php echo $who2;?> Name: <strong><?php echo $_POST['cf_name2'];?></strong></p>
            <p>Address: <strong><?php echo $_POST['cf_address'].", ".$_POST['cf_city']." ".$_POST['cf_state'].", ".$_POST['cf_zip'];?></strong><br>
            Phone: <strong><?php echo $_POST['cf_phone'];?></strong><br>
            Email: <strong><?php echo $_POST['cf_email'];?></strong></p>
            <p>Event Date: <strong><?php echo $_POST['cf_date'];?></strong><br>
            Location: <strong><?php echo $_POST['cf_location'];?></strong></p>
            <p>Contact: <strong><?php echo $_POST['cf_respond'];?></strong><br>
            Referred by: <strong><?php echo $_POST['cf_referred'];?></strong><br>
            Comment: <strong><?php echo stripslashes($_POST['cf_message']);?></strong><br>
            &nbsp;</p>
          </div>
        <?php }else{ ?>
          <header class="secHead bg_DkOrange">
          	<div class="iLine c_DkOrange">
            	<span class="fa-stack ilinePOS c_DkOrange">
                	<i class="fa fa-square fa-stack-2x"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                </span>
                <h3 class="c_333">Contact Us</h3>
             </div>
          </header>
          <div>
            <p>Please tell us as much as possible to help us better respond to your inquiry. Don"t worry, this information is only sent to us!</p>
          </div>
          <form id="contact" method="POST" action="contact.php" data-abide novalidate>
            <div data-abide-error class="alert callout small" style="display:none;padding-left:1em;">
              <span class="fa-stack ilinePOS c_Red"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-exclamation-circle fa-stack-1x fa-inverse"></i></span><span>There are errors in your entry</span>
            </div>
            <!--WHO--><!--?who=Bride&Name1=Susie%20Tester&Name2=Johnny%20Sample&Address=1234%20Main%20st.%20SE&City=Amazing&State=CA&Zip=98516&Phone=1234567890&Email=just@test.com&Date=12/25/2018&Location=Somewhere%20over%20the%20rainbow&Comment=This%20is%20only%20a%20test.%20Thank%20you%20for%20helping!-->
            <?php $who=!empty($_GET['who']) ? $_GET['who']:"";?>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-question-circle fa-fw"></i></span>
                <select name="cf_who" id="Who" class="classic">
                  <option value="BR"<?php echo $who=="Bride"?" selected":"";?>>I'm the Bride</option>
                  <option value="GR"<?php echo $who=="Groom"?" selected":"";?>>I'm the Groom</option>
                  <option value="BP">I'm the Bride's Parent</option>
                  <option value="GP">I'm the Groom's Parent</option>
                  <option value="CO">I'm the Coordinator</option>
                  <option value="XX">I'm a Gay Partner</option>
                  <option value="FR">I'm a Friend</option>
                  <option value="OT">Other</option>
                </select>
              </div>
              <!--EXTRA NAME-->
              <div id="ExtraName">
                <div class="input-group">
                  <span class="input-group-addon"><i id="iNameX" class="fa fa-user-plus fa-fw"></i></span>
                  <input class="input-group-field" type="text" id="NameX" name="cf_nameX" value="<?php echo((isset($_GET['NameX']))?htmlspecialchars($_GET['NameX']):"");?>" pattern="[a-zA-Z\s.']+.{3,}">
                  <span class="input-group-error">
                    <span class="input-group-cell"></span>
                    <span class="input-group-cell">
                      <small class="form-error">First and Last name is required</small>
                    </span>
                  </span>
                </div>
              </div>
              <!--NAME 1-->
              <div class="input-group">
                <span class="input-group-addon"><i id="iName1" class="fa fa-female fa-fw"></i></span>
                <input class="input-group-field" type="text" id="Name1" name="cf_name1" value="<?php echo((isset($_GET['Name1']))?htmlspecialchars($_GET['Name1']):"");?>" placeholder="Bride's First & Last Name" required pattern="[a-zA-Z\s.']+.{3,}">
                <span class="input-group-error">
                  <span class="input-group-cell"></span>
                  <span class="input-group-cell">
                    <small class="form-error">First and Last name is required</small>
                  </span>
                </span>
              </div>
              <!--NAME 2-->
              <div class="input-group">
                <span class="input-group-addon"><i id="iName2" class="fa fa-male fa-fw"></i></span>
                <input class="input-group-field" type="text" id="Name2" name="cf_name2" value="<?php echo((isset($_GET['Name2']))?htmlspecialchars($_GET['Name2']):"");?>" placeholder="Groom's First & Last Name" required pattern="[a-zA-Z\s.']+.{3,}">
                <span class="input-group-error">
                  <span class="input-group-cell"></span>
                  <span class="input-group-cell">
                    <small class="form-error">First and Last name is required</small>
                  </span>
                </span>
              </div>
              <!--ADDRESS-->
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
                <input type="text" id="Address" name="cf_address" value="<?php echo((isset($_GET['Address']))?htmlspecialchars($_GET['Address']):"")?>" placeholder="Address" required pattern="^.{8,}$">
                <span class="input-group-error">
                  <span class="input-group-cell"></span>
                  <span class="input-group-cell">
                    <small class="form-error">First and Last name is required</small>
                  </span>
                </span>
              </div>
              <!--CITY / STATE / ZIP-->
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building fa-fw"></i></span>
                <input type="text" id="City" name="cf_city" value="<?php echo((isset($_GET['City']))?htmlspecialchars($_GET['City']):"");?>" placeholder="City" style="width:50%;float:left;" required pattern="^.{4,}$"><input type="text" id="State" name="cf_state" value="<?php echo((isset($_GET['State']))?htmlspecialchars($_GET['State']):"");?>" placeholder="State" style="width:20%;float:left;" maxlength="2" required pattern="^.{2,}$"><input type="text" id="Zip" name="cf_zip" value="<?php echo((isset($_GET['Zip']))?htmlspecialchars($_GET['Zip']):"");?>" placeholder="Zipcode" style="width:30%;float:left;" required pattern="^.{5,}$">
                <span class="input-group-error">
                  <span class="input-group-cell"></span>
                  <span class="input-group-cell">
                    <small class="form-error">A valid address is required</small>
                  </span>
                </span>
              </div>
              <!--PHONE-->
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                <input type="tel" id="Phone-number" name="cf_phone" value="<?php echo((isset($_GET['Phone']))?htmlspecialchars($_GET['Phone']):"");?>" placeholder="Phone" required pattern="^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}$">
                <span class="input-group-error">
                  <span class="input-group-cell"></span>
                  <span class="input-group-cell">
                    <small class="form-error">Please add a phone number</small>
                  </span>
                </span>
              </div>
              <!--EMAIL-->
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                <input type="email" id="Email" name="cf_email" value="<?php echo((isset($_GET['Email']))?htmlspecialchars($_GET['Email']):"");?>" placeholder="Email" required pattern=".+\@.+\..+">
                <span class="input-group-error">
                  <span class="input-group-cell"></span>
                  <span class="input-group-cell">
                    <small class="form-error">Please add a valid email</small>
                  </span>
                </span>
              </div>
              <!--DATE-->
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                <input type="text" class="datepicker" name="cf_date" placeholder="Event Date" value="<?php echo $qsDate; ?>" id="datepicker" readonly required />
                <div class="input-group-addon" style="white-space:nowrap;padding:0 1em;"><input type="checkbox" name="cf_notset" value="notset" id="notset"><label for="notset">Not Sure</label></div>
                <span class="input-group-error">
                  <span class="input-group-cell"></span>
                  <span class="input-group-cell">
                    <small class="form-error">Choose a date or click "Not Sure"</small>
                  </span>
                </span>
              </div>
              <!--LOCATION-->
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                <input type="text" id="fm_Location" name="cf_location" value="<?php echo((isset($_GET['Location']))?htmlspecialchars($_GET['Location']):"");?>" placeholder="Event Location">
              </div>
              <!--INTEREST-->
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info-circle fa-fw"></i></span>
                <select id="Interest" name="cf_interest" class="classic">
                  <option class="select-dd"<?php if($format=="P"){echo" selected";}?> value="Photography">Interested in: Photography</option>
                  <option class="select-dd"<?php if($format=="V"){echo" selected";}?> value="Videography">Interested in: Videography</option>
                  <option class="select-dd"<?php if($format=="B"){echo" selected";}?> value="Both Photo &quot; Video">Interested in: Both</option>
                </select>
              </div>
              <!--RESPOND-->
              <div class="input-group">
                <span class="input-group-addon"><i id="iRespond" class="fa fa-cog fa-fw"></i></span>
                <select name="cf_respond" id="Respond" class="classic">
                  <option value="call">Please Call Me</option>
                  <option value="email">Please Email Me</option>
                  <option value="skype">Let"s Chat on Skype</option>
                  <option value="google">Talk via Google Hangout</option>
                  <option value="DNC" data-reveal-id="myModal">Do Not Call - Email Only</option>
                </select>
              </div>
              <!--REFERER-->
              <?php if(!isset($_COOKIE['RefURL'])){ ?>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search fa-fw"></i></span>
                <input type="text" name="cf_referred" placeholder="How did you find us?">
              </div>
              <?php }else{ ?>
              <input type="hidden" name="cf_referred" value="<?php echo $_SESSION['RefURL'];?>">
              <?php } ?>
              <!--REGION-->
              <input type="hidden" name="cf_region" value="<?php echo $_SESSION['Region'];?>">
              <!--COMMENT-->
              <div class="input-group">
                <span class="input-group-addon" style="vertical-align:top;padding-top:.5em;"><i class="fa fa-comment fa-fw"></i></span>
                <textarea id="Comment" name="cf_message" style="height:100px;padding:.5em 1em;margin-bottom:0;" placeholder="Question... Comment... Anything else?"><?php echo((isset($_GET['Comment']))?htmlspecialchars($_GET['Comment']):"");?></textarea>
              </div>
              <!--VISITED-->
              <input type="hidden" name="cf_visited" value="<?php echo $visited;?>">
              <input type="hidden" name="cf_geo" value="<?php echo $geoLocation;?>">
              <input type="hidden" name="dataDate" value="">
              <!--SUBMIT-->
              <div class="text-right">
                <button type="Submit" class="small success button" name="Submit" id="Submit" value="Submit">Submit <i class="fa fa-share-square fa-fw"></i></button> <button type="reset" class="small secondary button" id="reset" name="reset" value="reset">Reset <i class="fa fa-refresh fa-fw"></i></button>
              </div>
          </form>
        <?php } ?>
        </section>
      </div>
      <!--FEEDBACK-->
      <div class="large-4 columns">
        <section id="Feedback">
          <header class="secHead bg_Teal"><div class="iLine c_Teal"><span class="fa-stack ilinePOS c_Teal"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-commenting fa-stack-1x fa-inverse"></i></span><h3 class="c_333">Website FeedBack</h3></div></header>
          <p>To contact us regarding our website with comments, feedback, or questions, please use the following form.</p>
          <div class="row">
            <div class="small-12 columns">
              <?php if(isset($_POST['fb_email'])<>""){
                  $to="abouttheday@gmail.com";
                  $subject="Website Feedback";
                  $headers="from: info@abouttheday.com\r\n";
                  $headers.="reply-to: ".$_POST['fb_email']."\r\n";
                  $headers.="X-Mailer: PHP/".phpversion();
                  $message="Name: ".$_POST['fb_name']."\r\nEmail: ".$_POST['fb_email']."\r\nComment: ".stripslashes($_POST['fb_comment'])."\r\nLocation Region: ".$_SESSION['Region']."\r\nBrowser: ".$browser." on ".$os."\r\nGeo: ".$geoLocation."";
                  mail($to, $subject, $message, $headers) or die ("Failure");
              ?>
              <div class="callout secondary small">
                <p>Feeback sent. Thank you!</p>
              </div>
              <?php }else{ ?>
              <ul class="accordion" data-accordion data-allow-all-closed="true">
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title">Let Us Know?</a>
                  <div class="accordion-content" data-tab-content>
                  <div data-abide-error class="alert callout small" style="display:none;padding-left:1em;">
                    <span class="fa-stack ilinePOS c_Red"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-exclamation-circle fa-stack-1x fa-inverse"></i></span><span>There are errors in your entry</span>
                  </div>
                    <form id="feedback" method="POST" action="contact.php" data-abide novalidate>
                      <fieldset class="fieldset">
                        <label>Name:
                          <input type="text" name="fb_name" value="" placeholder="Name" required pattern="[a-zA-Z\s.']+.{3,}">
                        </label>
                        <label>Email:
                          <input type="email" name="fb_email" placeholder="Email" value="" required></label>
                        <label>Feedback / Comments?
                          <textarea name="fb_comment" maxlength="250" minlength="5" placeholder="Maximum Length is 250 characters" required></textarea>
                        </label>
                        <button class="button expanded small" type="submit" value="Submit">Submit</button>
                      </fieldset>
                    </form>
                  </div>
                </li>
              </ul>
              <?php } ?>
            </div>
          </div>
        </section>
        <section>
          <header class="secHead bg_Blue">
          	<div class="iLine c_Blue">
            	<span class="fa-stack ilinePOS c_Blue"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-info-circle fa-stack-1x fa-inverse"></i></span>
                <h3 class="c_333">Helpful Info</h3>
             </div>
          </header>
          <p>We hope you don"t mind us gathering a bit of info to help us respond back with better information? This is only public informaiton we gathered from your browser.<br>
          <br>
          <small>
		  <?php
		  if(isset($_SESSION['RefURL'])){echo "Referal: ".$_SESSION['RefURL']."<br>";}
		  if((isset($_SESSION['City'])) && (isset($_SESSION['State']))){
			  $cityState=ucfirst($_SESSION['City']).", ".($_SESSION['State']);
			  echo "Searched Location: ".$cityState."<br>";
			  }
		  if(isset($_SESSION['OrigRegion']) && ($_SESSION['OrigRegion']!=$_SESSION['Region'])){
			  $origRegion=ucfirst($_SESSION['OrigRegionName']);
			  $region=ucfirst($_SESSION['RegionName']);
			  echo "First Searched Region: ".$origRegion."<br>";echo "Last Searched Region: ".$region."<br>";
			  }else{
			  echo "Searched Region: ".ucfirst($_SESSION['RegionName'])."<br>";
			  }
		  if(isset($_SESSION['GeoLocation'])){echo "Your IP Location: ".$_SESSION['GeoLocation']."<br>";}
		  if(isset($_SESSION['Browser'])){echo "Browser: ".$_SESSION['Browser']."<br>";}
		  if(isset($_SESSION['OS'])){echo "OS: ".$_SESSION['OS']."<br>";}
		  ?>
          </small>
        </section>
      </div>
    </div>
  </main>
  <!--FOOTER-->
  <?php require("../_php/footer.php");?>
  <!--FLOORSPACE-->
  <div class="column row show-for-large space2em"></div>
  <!--SKYPE MODAL-->
  <div class="reveal" id="mod-Skype" data-reveal>
  <div class="column row space1em">&nbsp;</div>
  <div class="column row">
    <div class="iLine c_DkGreen"><span class="fa-stack ilinePOS c_DkGreen"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-calendar-check-o fa-stack-1x fa-inverse"></i></span><h3 class="c_333">Let"s Set a Time?</h3></div>
  </div>
  <div class="column row">
    <div class="callout success">
      <p>We don"t leave our Skype open to everyone, but we"d be happy to schedule a chat whenever you"d like!</p>
      <p>Our Skype Name is "<strong>AboutTheDay</strong>", and you are welcome to <strong>try</strong> connecting anytime you like... although, we"d prefer a little advance notice so we can brush our teeth, comb our hair, and look presentable.</p>
    </div>
  </div>
  <div class="column row space1em"></div>
  <div class="column row">
    <div class="iLine c_Blue"><span class="fa-stack ilinePOS c_Blue"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-skype fa-stack-1x fa-inverse"></i></span><h3 class="c_333">Want Us to Skype You?</h3></div>
  </div>
  <div class="column row">
    <div class="callout secondary">
      <p>No problem. Just tell us when, and make sure we have your <strong>Skype Name</strong>, and we"ll do our best to contact you when you ask.</p>
    </div>
  </div>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
  <!--HANGOUT MODAL-->
  <div class="reveal" id="mod-Hangout" data-reveal>
  <div class="column row space1em">&nbsp;</div>
  <div class="column row">
    <div class="iLine c_DkGreen"><span class="fa-stack ilinePOS c_DkGreen"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-calendar-check-o fa-stack-1x fa-inverse"></i></span><h3 class="c_333">Let"s Set a Time?</h3></div>
  </div>
  <div class="column row">
    <div class="callout success">
      <p>We don"t usually leave our Hangout open to everyone anymore, but we"d be happy to schedule a chat whenever you"d like!</p>
      <p>Our Hangout Name is "<strong>AboutTheDay</strong>", and you are welcome to <strong>try</strong> connecting anytime you like... although, we"d prefer a little advance notice so we can brush our teeth, comb our hair, and look presentable.</p>
    </div>
  </div>
  <div class="column row space1em"></div>
  <div class="column row">
    <div class="iLine c_Blue"><span class="fa-stack ilinePOS c_Blue"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-google-plus-square fa-stack-1x fa-inverse"></i></span><h3 class="c_333">Want Us to Hangout You?</h3></div>
  </div>
  <div class="column row">
    <div class="callout secondary">
      <p>No problem. Just tell us when, and make sure we have given us your <strong>Hangout Name</strong>, and we"ll do our best to contact you when you ask.</p>
    </div>
  </div>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
  <!--DO NOT CALL MODAL-->
  <div class="reveal small" id="mod-DNC" data-reveal>
  <div class="column row space1em">&nbsp;</div>
  <div class="column row">
    <div class="iLine c_Red"><span class="fa-stack ilinePOS c_Red"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-exclamation-triangle fa-stack-1x fa-inverse"></i></span><h3 class="c_333">Are You Sure?</h3></div>
  </div>
  <div class="column row">
    <div class="callout alert">
      <p>This often poses a real problem for us because email doesn"t always get through! ** If you don"t recognize our email - or worse - it is sent to your junk mail, you"ll think we never responded.</p>
    </div>
  </div>
  <div class="column row space1em"></div>
  <div class="column row">
    <div class="iLine c_DkOrange"><span class="fa-stack ilinePOS c_DkOrange"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-bell-slash fa-stack-1x fa-inverse"></i></span><h3 class="c_333">Okay. . .</h3></div>
  </div>
  <div class="column row">
    <div class="callout warning">
      <p>We will respect your choice... but please tell us <strong>why</strong>... Or give us a specific time that <strong>would</strong> work for you? (You can tell us that in the comment section of the form.)</p>
    </div>
  </div>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
  <!-- <script src="../_js/F6/what-input.js"></script> -->
  <!-- <script src="../_js/F6/foundation.js"></script> -->
	<script src="../_js/F6/f6.js"></script>
  <script>$(document).foundation();</script>
</body>
</html>