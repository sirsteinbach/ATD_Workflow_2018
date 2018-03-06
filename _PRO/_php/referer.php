<?php //AVOID FULL RE-AQUIRE IF VETTED
if(isset($_COOKIE['Vetted']) && ($_COOKIE['Vetted']=="Yes") || (isset($_SESSION['Vetted']) && ($_SESSION['Vetted']=="Yes"))){
	$_SESSION['TestCase']="1";
	$_SESSION['Vetted']="Yes";
	//CAN BE CHANGED BY SELECTIONS
	if(isset($_GET['Region'])){$_SESSION['Region']=$_GET['Region'];}elseif(isset($_COOKIE['Region'])){$_SESSION['Region']=$_COOKIE['Region'];}else{$_SESSION['Region']=$_SESSION['Region'];}
	if(isset($_GET['Format'])){$_SESSION['Format']=$_GET['Format'];}elseif(isset($_COOKIE['Format'])){$_SESSION['Format']=$_COOKIE['Format'];}else{$_SESSION['Format']=$_SESSION['Format'];}
	//CAN NOT BE CHANGED BY SELECTIONS
	if(isset($_COOKIE['Visited'])){$_SESSION['Visited']=$_COOKIE['Visited'];}else{$_SESSION['Visited']=$_SESSION['Visited'];}
	if(isset($_COOKIE['RefURL'])){$_SESSION['RefURL']=$_COOKIE['RefURL'];}else{$_SESSION['RefURL']=$_SESSION['RefURL'];}
	if(isset($_COOKIE['RefData'])){$_SESSION['RefData']=$_COOKIE['RefData'];}else{$_SESSION['RefData']=$_SESSION['RefData'];}
	if(isset($_COOKIE['State'])){$state=$_COOKIE['State'];}else{$state=$_SESSION['State'];}
	if(isset($_COOKIE['City'])){$city=$_COOKIE['City'];}else{$city=$_SESSION['City'];}
	if(isset($_COOKIE['GeoLocation'])){$geoLocation=$_COOKIE['GeoLocation'];}elseif(!isset($_SESSION['GeoLocation'])){include "clientIP.php";}else{$geoLocation=$_SESSION['GeoLocation'];}
	if(isset($_COOKIE['OS'])){$os=$_COOKIE['OS'];}elseif(!isset($_SESSION['OS'])){include "browserOS.php";}else{$os=$_SESSION['OS'];}
	if(isset($_COOKIE['Browser'])){$browser=$_COOKIE['Browser'];}elseif(!isset($_SESSION['Browser'])){include "browserOS.php";}else{$browser=$_SESSION['Browser'];}
}//END RE-AQUIRE VETTED USER DATA
else{//FULL AQUIRE VISITER INFO
	include "browserOS.php"; //VISITER BROWSER & OS
	include "clientIP.php"; //VISITER IP LOCATION
	if(isset($_SERVER['HTTP_REFERER'])){ //AQUIRE REFERER SERVER DATA
		$referer=$_SERVER['HTTP_REFERER'];
		$_SESSION['RefURL']=parse_url($referer, PHP_URL_HOST);
		$urlPath=parse_url($referer, PHP_URL_PATH);
		//www.Yellowpages.com
		if($_SESSION['RefURL']=="www.yellowpages.com" || $_SESSION['RefURL']=="m.yellowpages.com"){
			if($urlPath=="/search"){
			  parse_str( parse_url($referer, PHP_URL_QUERY ), $querystr_get);
			  if($_SESSION['RefURL']!="m.yellowpages.com"){
				  $YP_location=$querystr_get['geo_location_terms'];
				  $_SESSION['RefData']=$querystr_get['s'];
				}else{
				  $YP_location=$querystr_get['search_location'];
				  $_SESSION['RefData']=$querystr_get['sort'];
				}
				if(ctype_upper(substr($YP_location,-2))){ //CHECK IF STATE IS UPPERCASE
					$state=strtoupper(substr($YP_location,-2));
					$city=ucwords(substr($YP_location,0,(strlen($YP_location)-4)));
				}else{ //SEARCH IS MISSING UPPERCASE STATE AND MESSES UP DATA
					$state=$ipState;
					$city=$ipCity;
					$refError="YPsearch1";
				}
			}
			elseif($urlPath=="/nationwide/mip/about-the-day-photography-225670"){
				$city=$ipCity;
				$state=$ipState;
				$refError="YPsearch2";
			}
			else{//NOT /Search? AND NOT /nationwide
			  $urlDirectory=explode("/",$urlPath);
			  $YP_location=str_replace("-"," ",$urlDirectory[1]);
			  $state=strtoupper(substr($YP_location,-2));
			  $city=ucwords(substr($YP_location,0,(strlen($YP_location)-3)));
			  $format=strtoupper(substr($YP_format[1],0,1));
			}
			$_SESSION['Format']="P";
		}
		//TheKnot
		elseif($_SESSION['RefURL']=="www.theKnot.com"){$state="WA";$_SESSION['Format']="P";$city=$ipCity;}
		//WeddingWire
		elseif($_SESSION['RefURL']=="www.weddingwire.com"){$state="WA";$_SESSION['Format']="P";$city=$ipCity;}
		//Expertise
		elseif($_SESSION['RefURL']=="www.expertise.com"){$state="WA";$_SESSION['Format']="P";$city=$ipCity;}
		//ANYTHING ELSE WITH A VISIBLE REFERRER (Bing / Google / etc...)
		else{
			$_SESSION['TestCase']="4";
			if(isset($_GET['Region'])){$_SESSION['Region']=$_GET['Region'];$_SESSION['OrigRegion']=$_GET['Region'];}
			if(isset($_GET['RefURL'])){$_SESSION['RefURL']=$_GET['RefURL'];}
			if(isset($_GET['RefData'])){$_SESSION['RefData']=$_GET['RefData'];}
			if(isset($_GET['Format'])){$_SESSION['Format']=$_GET['Format'];}else{$_SESSION['Format']="P";}
			if(isset($_GET['State'])){$state=$_GET['State'];}else{$state=$ipState;}
			if(isset($_GET['City'])){$city=$_GET['City'];}else{$city=$ipCity;}
		}
	}
	else {//NOT-VISIBLE REFERRER
		$_SESSION['TestCase']="5";
		if(isset($_GET['Region'])){$_SESSION['Region']=$_GET['Region'];$_SESSION['OrigRegion']=$_GET['Region'];}
		if(isset($_GET['RefURL'])){$_SESSION['RefURL']=$_GET['RefURL'];}else{$_SESSION['RefURL']="Direct Entry";}
		if(isset($_GET['RefData'])){$_SESSION['RefData']=$_GET['RefData'];}
		if(isset($_GET['Format'])){$_SESSION['Format']=$_GET['Format'];}else{$_SESSION['Format']="P";}
		if(isset($_GET['State'])){$state=$_GET['State'];}else{$state=$ipState;}
		if(isset($_GET['City'])){$city=$_GET['City'];}else{$city=$ipCity;}
	}
  //DETERMINE REGION
  if((isset($_SESSION['Region'])!="CA") || (isset($_SESSION['Region'])!="EU") || (isset($_SESSION['Region'])!="AU") || (isset($_SESSION['Region'])!="SA") || (isset($_SESSION['Region'])!="AS") || (isset($_SESSION['Region'])!="AF")){
	  if($state=="WA"||$state=="OR"||$state=="ID"){$_SESSION['Region']="NW";$_SESSION['RegionName']="the Northwest";}
	  if($state=="CA"||$state=="NV"||$state=="AZ"||$state=="UT"){$_SESSION['Region']="SW";$_SESSION['RegionName']="the Southwest";}
	  if($state=="MT"||$state=="WY"||$state=="CO"||$state=="NM"||$state=="ND"||$state=="NE"||$state=="KS"||$state=="OK"||$state=="TX"||$state=="MN"||$state=="IA"||$state=="MO"||$state=="AR"||$state=="WI"||$state=="IL"){$_SESSION['Region']="MW";$_SESSION['RegionName']="the Midwest";}
	  if($state=="MI"||$state=="OH"||$state=="KY"||$state=="ME"||$state=="VT"||$state=="NH"||$state=="MA"||$state=="CT"||$state=="RI"||$state=="NY"||$state=="NJ"||$state=="PA"||$state=="MD"||$state=="DE"||$state=="DC"||$state=="WV"||$state=="VA"||$state=="IN"){$_SESSION['Region']="NE";$_SESSION['RegionName']="the Northweast";}
	  if($state=="MS"||$state=="AL"||$state=="GA"||$state=="FL"||$state=="TN"||$state=="NC"||$state=="SC"||$state=="LA"){$_SESSION['Region']="SE";$_SESSION['RegionName']="the Southeast";}
	  if($state=="HI"){$_SESSION['Region']="HI";$_SESSION['RegionName']="Hawaii";}
	  if($state=="AK"){$_SESSION['Region']="AK";$_SESSION['RegionName']="Alaska";}
	  if($state=="BC"||$state=="AB"||$state=="YT"||$state=="SK"){$_SESSION['Region']="CW";$_SESSION['RegionName']="Western Canada";}
	  if($state=="MB"||$state=="ON"||$state=="QC"||$state=="NL"||$state=="NB"||$state=="NS"){$_SESSION['Region']="CE";$_SESSION['RegionName']="Eastern Canada";}
  }else
	  if($_SESSION['Region']=="CA"){$_SESSION['RegionName']="Central America";}
	  if($_SESSION['Region']=="EU"){$_SESSION['RegionName']="Europe";}
	  if($_SESSION['Region']=="AU"){$_SESSION['RegionName']="Australia";}
	  if($_SESSION['Region']=="SA"){$_SESSION['RegionName']="South America";}
	  if($_SESSION['Region']=="AF"){$_SESSION['RegionName']="Africa";}
	  if($_SESSION['Region']=="AS"){$_SESSION['RegionName']="Asia";}
}//END AQUIRE NEW VISITER DATA
$_SESSION['Vetted']="Yes";
setcookie("Vetted",$_SESSION['Vetted'],$expire,"/",".abouttheday.com");
$_SESSION['State']=$state;
setcookie("State",$_SESSION['State'],$expire,"/",".abouttheday.com");
$_SESSION['City']=$city;
setcookie("City",$_SESSION['City'],$expire,"/",".abouttheday.com");
$_SESSION['GeoLocation']=$geoLocation;
setcookie("GeoLocation",$_SESSION['GeoLocation'],$expire,"/",".abouttheday.com");
$_SESSION['OS']=$os;
setcookie("OS",$_SESSION['OS'],$expire,"/",".abouttheday.com");
$_SESSION['Browser']=$browser;
setcookie("Browser",$_SESSION['Browser'],$expire,"/",".abouttheday.com");
setcookie("Region",$_SESSION['Region'],$expire,"/",".abouttheday.com");
setcookie("RegionName",$_SESSION['RegionName'],$expire,"/",".abouttheday.com");
if(!isset($_SESSION['OrigRegion'])){$_SESSION['OrigRegion']=$_SESSION['Region'];}
if(!isset($_COOKIE['OrigRegion'])){setcookie("OrigRegion",$_SESSION['Region'],$expire,"/",".abouttheday.com");}
if(!isset($_SESSION['OrigRegionName'])){$_SESSION['OrigRegionName']=$_SESSION['RegionName'];}
if(!isset($_COOKIE['OrigRegionName'])){setcookie("OrigRegionName",$_SESSION['RegionName'],$expire,"/",".abouttheday.com");}
setcookie("RefURL",$_SESSION['RefURL'],$expire,"/",".abouttheday.com");
if(!isset($_SESSION['RefData'])){$_SESSION['RefData']="none";}//don't know if this solves RefData, but it stops PHP Errors!
setcookie("RefData",$_SESSION['RefData'],$expire,"/",".abouttheday.com");
setcookie("Format",$_SESSION['Format'],$expire,"/",".abouttheday.com");
setcookie("TestCase",$_SESSION['TestCase'],$expire,"/",".abouttheday.com");
?>