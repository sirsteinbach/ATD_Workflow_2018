<?php //VISITER IP LOCATION
$ipCountry="US"; //Default
$ipStateName="Washington"; //Default
$ipCity="Olympia"; //Default
function getClientIP(){
  if(!empty($_SERVER['HTTP_CLIENT_IP'])){$ip=$_SERVER['HTTP_CLIENT_IP'];}
  elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];}
  else{$ip=$_SERVER['REMOTE_ADDR'];}
  return $ip;
}
function ip_details($ip){
  $json=file_get_contents("http://ipinfo.io/".$ip."/geo");
  $ipDetails=json_decode($json, true);
  return $ipDetails;
}
$ipAddress=isset($ipAddress) ? $ipAddress:getClientIP();
$ipDetails=isset($ipDetails) ? $ipDetails:ip_details($ipAddress);
$ipCountry=isset($ipCountry) ? $ipCountry:($ipDetails['country']);
$ipStateName=isset($ipStateName) ? $ipStateName:($ipDetails['region']);
$ipCity=isset($ipCity) ? $ipCity:($ipDetails['city']);
$regionName=isset($regionName) ? $regionName:"";
$ipState=isset($ipState) ? $ipState:"";
if (isset($ipAddress)){
	if(($ipCountry)=="US"){ // UNITED STATES
		if(($ipStateName)=="Alabama"){$ipState="AL";}
		if(($ipStateName)=="Alaska"){$ipState="AK";}
		if(($ipStateName)=="Arizona"){$ipState="AZ";}
		if(($ipStateName)=="Arkansas"){$ipState="AR";}
		if(($ipStateName)=="California"){$ipState="CA";}
		if(($ipStateName)=="Colorado"){$ipState="CO";}
		if(($ipStateName)=="Connecticut"){$ipState="CT";}
		if(($ipStateName)=="Delaware"){$ipState="DE";}
		if(($ipStateName)=="District Of Columbia"){$ipState="DC";}
		if(($ipStateName)=="Florida"){$ipState="FL";}
		if(($ipStateName)=="Georgia"){$ipState="GA";}
		if(($ipStateName)=="Hawaii"){$ipState="HI";}
		if(($ipStateName)=="Idaho"){$ipState="ID";}
		if(($ipStateName)=="Illinois"){$ipState="IL";}
		if(($ipStateName)=="Indiana"){$ipState="IN";}
		if(($ipStateName)=="Iowa"){$ipState="IA";}
		if(($ipStateName)=="Kansas"){$ipState="KS";}
		if(($ipStateName)=="Kentucky"){$ipState="KY";}
		if(($ipStateName)=="Louisiana"){$ipState="LA";}
		if(($ipStateName)=="Maine"){$ipState="ME";}
		if(($ipStateName)=="Maryland"){$ipState="MD";}
		if(($ipStateName)=="Massachusetts"){$ipState="MA";}
		if(($ipStateName)=="Michigan"){$ipState="MI";}
		if(($ipStateName)=="Minnesota"){$ipState="MN";}
		if(($ipStateName)=="Mississippi"){$ipState="MS";}
		if(($ipStateName)=="Missouri"){$ipState="MO";}
		if(($ipStateName)=="Montana"){$ipState="MT";}
		if(($ipStateName)=="Nebraska"){$ipState="ME";}
		if(($ipStateName)=="Nevada"){$ipState="NV";}
		if(($ipStateName)=="New Hampshire"){$ipState="NH";}
		if(($ipStateName)=="New Jersey"){$ipState="NJ";}
		if(($ipStateName)=="New Mexico"){$ipState="NM";}
		if(($ipStateName)=="New York"){$ipState="NY";}
		if(($ipStateName)=="North Carolina"){$ipState="NC";}
		if(($ipStateName)=="North Dakota"){$ipState="ND";}
		if(($ipStateName)=="Ohio"){$ipState="OH";}
		if(($ipStateName)=="Oklahoma"){$ipState="OK";}
		if(($ipStateName)=="Oregon"){$ipState="OR";}
		if(($ipStateName)=="Pennsylvania"){$ipState="PA";}
		if(($ipStateName)=="Rhode Island"){$ipState="RI";}
		if(($ipStateName)=="South Carolina"){$ipState="SC";}
		if(($ipStateName)=="South Dakota"){$ipState="SD";}
		if(($ipStateName)=="Tennessee"){$ipState="TN";}
		if(($ipStateName)=="Texas"){$ipState="TX";}
		if(($ipStateName)=="Utah"){$ipState="UT";}
		if(($ipStateName)=="Vermont"){$ipState="VT";}
		if(($ipStateName)=="Virginia"){$ipState="VA";}
		if(($ipStateName)=="Washington"){$ipState="WA";}
		if(($ipStateName)=="West Virginia"){$ipState="WV";}
		if(($ipStateName)=="Wisconsin"){$ipState="WI";}
		if(($ipStateName)=="Wyoming"){$ipState="WY";}
	}
	elseif(($ipCountry)=="CA"){ // CANADA
		if(($ipStateName)=="Alberta"){$ipState="AB";}
		if(($ipStateName)=="British Columbia"){$ipState="BC";}
		if(($ipStateName)=="Manitoba"){$ipState="MB";}
		if(($ipStateName)=="New Brunswick"){$ipState="NB";}
		if(($ipStateName)=="Newfoundland"){$ipState="NL";}
		if(($ipStateName)=="Northwest Territories"){$ipState="NT";}
		if(($ipStateName)=="Nova Scotia"){$ipState="NS";}
		if(($ipStateName)=="Ontario"){$ipState="ON";}
		if(($ipStateName)=="Prince Edward Island"){$ipState="PE";}
		if(($ipStateName)=="Quebec"){$ipState="QC";}
		if(($ipStateName)=="Saskatchewan"){$ipState="SK";}
		if(($ipStateName)=="Yukon"){$ipState="YT";}
	}
	else $_SESSION['Region']="XX";
	}
$geoLocation=$ipCity.", ".$ipState;//.",".$ipCountry
?>