<?php session_set_cookie_params(0,"/",".abouttheday.com");
session_start();
date_default_timezone_set("America/Los_Angeles");
$expire=time()+60*60*24*60; //HOLD 60 DAYS
$thisPage="Decor";$thisMenu="Products";
$_SESSION["EyesOn"]["Page"]=$thisPage;
$_SESSION["EyesOn"]["Menu"]=$thisMenu;
$_SESSION["EyesOn"]["Sub"]="";
$_SESSION["EyesOn"]["Set"]="";
$_SESSION["Viewed"][$thisPage]=$thisPage;
$visited=implode(",",array_unique($_SESSION["Viewed"]));
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
    <?php include_once($_SERVER["DOCUMENT_ROOT"]."/_php/googleAnalytics.php");?>
        <link rel="stylesheet" href="/_css/F6.2.4/foundation.css">
        <link rel="stylesheet" href="/_css/F6.2.4/atd.css">
        <title>Wedding Photography Canvas &amp;Decor</title>
        <meta name="description" content="A selection of wedding photography canvas prints, custom framing, and mounting styles we offer with examples">
        <meta name="keywords" content="wedding photography photo canvas, image mounting, custom framing">
        <link rel="stylesheet" href="/_css/specific/prodSlider.css">
        <link rel="stylesheet" href="/_css/specific/products.css">
</head>

<body>
    <div class="column row show-for-large space1em"></div>
    <?php require('../_php/navMain.php');?>
    <div class="column row space1em BgMain"></div>
    <main class="row BgMain">
        <div class="small-12 columns">
            <section>
                <header class="secHead bg_Canvas">
                    <div class="iLine c_Canvas"><span class="fa-stack ilinePOS c_Canvas"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-picture-o fa-stack-1x fa-inverse"></i></span>
                        <h1 class="c_333">Canvas Prints</h1>
                    </div>
                </header>
                <div class="row">
                    <div class="large-6 large-push-6 medium-7 medium-push-5 columns">
                        <div class="callout player">
                            <article class="Canvas_block">
                                <ul id="Canvas">
                                    <li><a href="#slide1"><img src="/_img/products/Canvas-01.jpg" alt="Visualize differnt canvas sizes"></a></li>
                                    <li><a href="#slide2"><img src="/_img/products/Canvas-02.jpg" alt="Corner on a wrap-around canvas"></a></li>
                                    <li><a href="#slide3"><img src="/_img/products/Canvas-03.jpg" alt="Our canvas can light up a room"></a></li>
                                    <li><a href="#slide4"><img src="/_img/products/Canvas-04.jpg" alt="Feature your favorite photo"></a></li>
                                </ul>
                            </article>
                        </div>
                    </div>
                    <div class="large-6 large-pull-6 medium-5 medium-pull-7 columns">
                        <p>Wildly popular and with good reason. It's hard to miss the striking beauty and dimension that a gorgeous canvas can add to a space. Your home suddenly because an Art Gallery!</p>
                        <p>Every canvas is hand stretched on a custom built frame to ensure perfection, printed with ink rated to last 100 years, and spray sealed with a UV inhibitor coat that not only protects the color, but helps resist future fading and
                            strengthens it against damage.</p>
                        <div class="callout coStyle bg_Canvas hide-for-medium-only">
                            <h3><i class="fa fa-bars"></i> Features</h3>
                            <ul>
                                <li>Available directly through your online gallery</li>
                                <li>Real canvas with a real wooden frame</li>
                                <li>Multiple Border Options (Solid, Natural, Stretch)</li>
                                <li>Color corrected to ensure perfection</li>
                                <li>Two Distinct Floating Frame Styles</li>
                                <li>Choose from a huge selection of sizes</li>
                                <li>Sizes: Available in 4x5" to 11x14"</li>
                                <li>Affordable: Starts at $49.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="hide-for-small-only">
                        <div class="callout coStyle bg_Canvas show-for-medium-only medium-12 columns">
                            <h3><i class="fa fa-bars"></i> Features</h3>
                            <ul>
                                <li>Available directly through your online gallery</li>
                                <li>Real canvas with a real wooden frame</li>
                                <li>Multiple Border Options (Solid, Natural, Stretch)</li>
                                <li>Color corrected to ensure perfection</li>
                                <li>Two Distinct Floating Frame Styles</li>
                                <li>Choose from a huge selection of sizes</li>
                                <li>Sizes: Available in 4x5" to 11x14"</li>
                                <li>Affordable: Starts at $49.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="small-12 columns">
            <section>
                <header class="secHead bg_Mount">
                    <div class="iLine c_Mount"><span class="fa-stack ilinePOS c_Mount"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-thumb-tack fa-stack-1x fa-inverse"></i></span>
                        <h1 class="c_333">Image Mounting</h1>
                    </div>
                </header>
                <div class="row">
                    <div class="large-6 large-push-6 medium-7 medium-push-5 columns">
                        <div class="callout player">
                            <article class="Monuting_block">
                                <ul id="Mounting">
                                    <li><a href="#slide1"><img src="/_img/products/Mounting-01.jpg" alt="Mounted images are stunning"></a></li>
                                    <li><a href="#slide2"><img src="/_img/products/Mounting-02.jpg" alt="Choose your style of mounting"></a></li>
                                    <li><a href="#slide3"><img src="/_img/products/Mounting-03.jpg" alt="Both stylish and timeless"></a></li>
                                    <li><a href="#slide4"><img src="/_img/products/Mounting-04.jpg" alt="Mounting is magnificent"></a></li>
                                </ul>
                            </article>
                        </div>
                    </div>
                    <div class="large-6 large-pull-6 medium-5 medium-pull-7 columns">
                        <p>Transform your prints into something sophisticated and classy. Mounting a photograph has the same eye-popping beauty as our canvas options, but frees you from the distinctive look and feel of canvas. Clarity and Vibrancy go hand
                            in hand!</p>
                        <p>With our wide array of professional mounting options, you have huge selection of options, and can know that every print is mounted on the highest-quality substrate with Drytac's® industry-leading Jetmount technology, ensuring our
                            best-in-class promise is behind every print.</p>
                        <div class="callout coStyle bg_Mount hide-for-medium-only">
                            <h3><i class="fa fa-bars"></i> Features</h3>
                            <ul>
                                <li>Multiple options for finishes like: Luster, gloss, and flat</li>
                                <li>Several choices of materials and depths</li>
                                <li>Color corrected to ensure perfection</li>
                                <li>Available directly through your online gallery</li>
                                <li>Affordable: Starts at $49.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="hide-for-small-only">
                        <div class="callout coStyle bg_Mount show-for-medium-only medium-12 columns">
                            <h3><i class="fa fa-bars"></i> Features</h3>
                            <ul>
                                <li>Multiple options for finishes like: Luster, gloss, and flat</li>
                                <li>Several choices of materials and depths</li>
                                <li>Color corrected to ensure perfection</li>
                                <li>Available directly through your online gallery</li>
                                <li>Affordable: Starts at $49.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="small-12 columns">
            <section>
                <header class="secHead bg_Frame">
                    <div class="iLine c_Frame"><span class="fa-stack ilinePOS c_Frame"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-cube fa-stack-1x fa-inverse"></i></span>
                        <h1 class="c_333">Custom Framing</h1>
                    </div>
                </header>
                <div class="row">
                    <div class="large-6 large-push-6 medium-7 medium-push-5 columns">
                        <div class="callout player">
                            <article class="Frames_block">
                                <ul id="Frames">
                                    <li><a href="#slide1"><img src="/_img/products/Frame-01.jpg" alt="Your love is a work of art"></a></li>
                                    <li><a href="#slide2"><img src="/_img/products/Frame-02.jpg" alt="A frame makes everything better"></a></li>
                                    <li><a href="#slide3"><img src="/_img/products/Frame-03.jpg" alt="Sturdy construction to last"></a></li>
                                    <li><a href="#slide4"><img src="/_img/products/Frame-04.jpg" alt="Options and colors galore"></a></li>
                                </ul>
                            </article>
                        </div>
                    </div>
                    <div class="large-6 large-pull-6 medium-5 medium-pull-7 columns">
                        <p>Add a finishing touch to take your photo to the next level!</p>
                        <p>Frames are solid wood with a contemporary, angular profile measuring 1.25" wide x 0.75" deep. A protective coating gives the frame rich color and a smooth finish. Shatterproof, scratch-resistant acrylic protects your print, while
                            a solid backing provides a custom finish.</p>
                        <p>Includes wall hanging hardware for large sizes, and hinged stand for smaller sizes.</p>
                        <div class="callout coStyle bg_Frame hide-for-medium-only">
                            <h3><i class="fa fa-bars"></i> Features</h3>
                            <ul>
                                <li>Optional matting available</li>
                                <li>Matting material is 2-ply and completely archival</li>
                                <li>Matte will only cover a tiny fraction of the prints edge</li>
                                <li>4x6 and 5x7 prints will be mounted on a matte board</li>
                                <li>All other print sizes will be mounted on masonite</li>
                                <li>Prices start below $30.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="hide-for-small-only">
                        <div class="callout coStyle bg_Frame show-for-medium-only medium-12 columns">
                            <h3><i class="fa fa-bars"></i> Features</h3>
                            <ul>
                                <li>Optional matting available</li>
                                <li>Matting material is 2-ply and completely archival</li>
                                <li>Matte will only cover a tiny fraction of the prints edge</li>
                                <li>4x6 and 5x7 prints will be mounted on a matte board</li>
                                <li>All other print sizes will be mounted on masonite</li>
                                <li>Prices start below $30.00</li>
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
    <script src='/_js/specific/prodSlider.js'></script>
    <script src='/_js/specific/prodSliderD_ini.js'></script>
</body>

</html>