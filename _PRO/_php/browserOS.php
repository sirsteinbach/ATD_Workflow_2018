<?php $os="unknown";
function get_browser_name($user_agent){
	if(strpos($user_agent,"Opera")||strpos($user_agent,"OPR/"))return"Opera";
	elseif(strpos($user_agent,"Edge"))return"Edge";
	elseif(strpos($user_agent,"Chrome"))return"Chrome";
	elseif(strpos($user_agent,"Safari"))return"Safari";
	elseif(strpos($user_agent,"Firefox"))return"Firefox";
	elseif(strpos($user_agent,"MSIE")||strpos($user_agent,"Trident/7"))return "Internet Explorer";
	return "Other";
	}
	function getUserOS(){
	$osList = array(
	"Windows 10" => "windows nt 10",
	"Windows 8.1" => "windows nt 6.3",
	"Windows 8" => "windows nt 6.2",
	"Windows 7" => "windows nt 6.1",
	"Windows Vista" => "windows nt 6.0",
	"Windows Server 2003" => "windows nt 5.2",
	"Windows XP" => "windows nt 5.1",
	"Windows 2000 sp1" => "windows nt 5.01",
	"Windows 2000" => "windows nt 5.0",
	"Windows NT 4.0" => "windows nt 4.0",
	"Windows Me" => "win 9x 4.9",
	"Windows 98" => "windows 98",
	"Windows 95" => "windows 95",
	"Windows CE" => "windows ce",
	"Windows (version unknown)" => "windows",
	"OpenBSD" => "openbsd",
	"SunOS" => "sunos",
	"Ubuntu" => "ubuntu",
	"Linux" => "(linux)|(x11)",
	"Mac OSX" => "mac os x",
	"Mac OS (classic)" => "(mac_powerpc)|(macintosh)",
	"QNX" => "QNX",
	"BeOS" => "beos",
	"OS2" => "os/2",
	"SearchBot"=>"(nuhk)|(googlebot)|(yammybot)|(openbot)|(slurp)|(msnbot)|(ask jeeves/teoma)|(ia_archiver)"
	);
	$useragent = $_SERVER["HTTP_USER_AGENT"];
	$useragent = strtolower($useragent);
	foreach($osList as $os=>$match) {
		if (preg_match("/" . $match . "/i", $useragent)){
			break;
			}
		}
		return $os;
	}
	$browser=get_browser_name($_SERVER["HTTP_USER_AGENT"]);
	$os=getUserOS($os);
?>