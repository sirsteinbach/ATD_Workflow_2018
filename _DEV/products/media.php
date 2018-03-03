<?php session_set_cookie_params(0,"/",".abouttheday.com");
session_start();
date_default_timezone_set("America/Los_Angeles");
$expire=time()+60*60*24*60;
$thisPage="Media";
$thisMenu="Products";$_SESSION["EyesOn"]["Page"]=$thisPage;
$_SESSION["EyesOn"]["Menu"]=$thisMenu;
$_SESSION["EyesOn"]["Sub"]="";
$_SESSION["EyesOn"]["Set"]="";
$_SESSION["Viewed"][$thisPage]=$thisPage;
$visited=implode(",",array_unique($_SESSION["Viewed"]));
setcookie("Visited",$visited,$expire,"/",".abouttheday.com");
require("../_php/referer.php");
require("../_php/checkpoints.php");?>
<!DOCTYPE html>
<html lang="en" xml:lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#22659C">
    <meta name="author" content="Stephen Steinbach">
    <meta name="webBuild" content="Foundation6.2.4">
    <?php include_once($_SERVER["DOCUMENT_ROOT"]."/_php/googleAnalytics.php");?>
    <link rel="stylesheet" href="/_css/F6.2.4/foundation.css">
    <link rel="stylesheet" href="/_css/F6.2.4/atd.css">
    <title>Wedding Photography Digital Products</title>
    <meta name="description" content="A selection of wedding photography options like, digital downloads of our images, event extensions, and gift cards">
    <meta name="keywords" content="wedding photography, gift cards, gallery extension, digital image download">
    <link rel="stylesheet" href="/_css/specific/products.css">
</head>

<body>
    <div class="column row show-for-large space1em"></div>
    <?php require('../_php/navMain.php');?>
    <div class="column row space1em BgMain"></div>
    <main class="row BgMain">
        <div class="small-12 columns">
            <section>
                <header class="secHead bg_Down">
                    <div class="iLine c_Down"><span class="fa-stack ilinePOS c_Down"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-cloud-download fa-stack-1x fa-inverse"></i></span>
                        <h1 class="c_333">Digital Download</h1>
                    </div>
                </header>
                <div class="row">
                    <div class="large-6 large-push-6 medium-7 medium-push-5 columns"><img class="feature" src="/_img/products/Media-01.jpg" alt="Download your wedding photos"></div>
                    <div class="large-6 large-pull-6 medium-5 medium-pull-7 columns">
                        <p>Put the power of complete control and limitless options in your hands when you download a high resolution digital image from your gallery.</p>
                        <p>Whether it's creating a poster, designing a hundred 'Thank You' cards, or just trying your hand at Photoshop, downloading the actual source file (photo) gives you the <em>full picture</em>.</p>
                        <div class="callout coStyle bg_Down hide-for-medium-only">
                            <h3><i class="fa fa-bars"></i> Features</h3>
                            <ul>
                                <li>Available directly through your online gallery</li>
                                <li>High Resolution images for any application</li>
                                <li>Color corrected to ensure perfection</li>
                                <li>Green (No waste) option <i class="fa fa-leaf green"></i></li>
                                <li>Free for Gold & Platinum clients&sup1;</li>
                                <li>Affordable: $20.00 (per image)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="hide-for-small-only">
                        <div class="callout coStyle bg_Down show-for-medium-only medium-12 columns">
                            <h3><i class="fa fa-bars"></i> Features</h3>
                            <ul>
                                <li>Available directly through your online gallery</li>
                                <li>High Resolution images for any application</li>
                                <li>Color corrected to ensure perfection</li>
                                <li>Green (No waste) option <i class="fa fa-leaf"></i>¨</li>
                                <li>Free for Gold & Platinum clients&sup1;</li>
                                <li>Affordable: $20.00 (per image)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="small-12 columns">
            <section>
                <header class="secHead bg_Coffee">
                    <div class="iLine c_Coffee"><span class="fa-stack ilinePOS c_Coffee"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-calendar fa-stack-1x fa-inverse"></i></span>
                        <h1 class="c_333">Event Extension</h1>
                    </div>
                </header>
                <div class="row">
                    <div class="large-6 large-push-6 medium-7 medium-push-5 columns"><img class="feature" src="/_img/products/Media-02.jpg" alt="Extend the wedding photography gallery time"></div>
                    <div class="large-6 large-pull-6 medium-5 medium-pull-7 columns">
                        <p>Sometimes - no matter how long you've had to view your gallery - you just need more time to view your pictures again! It's understandable... and although we already allow a generous 6 free months after your wedding, time sneaks
                            up on you and time can run out.</p>
                        <p>Now you can purchase and add as much time as you need to view, share, create, and edit your online gallery without the fear of the gallery expiring before you're ready.</p>
                        <div class="callout coStyle bg_Coffee hide-for-medium-only">
                            <h3><i class="fa fa-bars"></i> Features</h3>
                            <ul>
                                <li>Available directly through your online gallery</li>
                                <li>Bonus time for 50 or more viewers</li>
                                <li>Free time for purchase of multiple months</li>
                                <li>Prices start below $10</li>
                            </ul>
                        </div>
                    </div>
                    <div class="hide-for-small-only">
                        <div class="callout coStyle bg_Coffee show-for-medium-only medium-12 columns">
                            <h3><i class="fa fa-bars"></i> Features</h3>
                            <ul>
                                <li>Available directly through your online gallery</li>
                                <li>Bonus time for 50 or more viewers</li>
                                <li>Free time for purchase of multiple months</li>
                                <li>Prices start below $10</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="small-12 columns">
            <section>
                <header class="secHead bg_Gift">
                    <div class="iLine c_Gift"><span class="fa-stack ilinePOS c_Gift"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-gift fa-stack-1x fa-inverse"></i></span>
                        <h1 class="c_333">Gift Cards</h1>
                    </div>
                </header>
                <div class="row">
                    <div class="large-6 large-push-6 medium-7 medium-push-5 columns"><img class="feature" src="/_img/products/Media-03.jpg" alt="Share your purchasing credit with others"></div>
                    <div class="large-6 large-pull-6 medium-5 medium-pull-7 columns">
                        <p>There's more then one way to say 'Thank You', and when you send our Gift Cards, you'll be thanked in return.</p>
                        <p>From the Award winning mounting options we offer, to our wide varitey of canvas and print products that are available, you now have the ability to gift those special items to friends and family members and give them something they'll
                            cherish forever, and have the luxury of choosing as well.</p>
                        <div class="callout coStyle bg_Gift hide-for-medium-only">
                            <h3><i class="fa fa-bars"></i> Features</h3>
                            <ul>
                                <li>Gift Credits can be redemed directly through your gallery</li>
                                <li>Gift Credits can be applied to anything we offer</li>
                                <li>Gift Credits can be given to anyone</li>
                                <li>Purchase any amount from $25.00 and up</li>
                            </ul>
                        </div>
                    </div>
                    <div class="hide-for-small-only">
                        <div class="callout coStyle bg_Gift show-for-medium-only medium-12 columns">
                            <h3><i class="fa fa-bars"></i> Features</h3>
                            <ul>
                                <li>Gift Credits can be redemed directly through your gallery</li>
                                <li>Gift Credits can be applied to anything we offer</li>
                                <li>Gift Credits can be given to anyone</li>
                                <li>Purchase any amount from $25.00 and up</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require('../_php/footer.php');?>
    <div class="column row show-for-large space2em"></div>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
    <!-- <script src='/_js/F6.2.4/what-input.min.js'></script>
    <script src='/_js/F6.2.4/foundation.min.js'></script> -->
    <script src="../_js/F6/f6.js"></script>
    <script>$(document).foundation();</script>
</body>

</html>