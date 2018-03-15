<?php
session_set_cookie_params(0,'/','.abouttheday.com');
session_start();
?> <html><head><title>Reports | Sessions</title></head> <? $ipAddress=$_SERVER['REMOTE_ADDR']; //VISITER IP LOCATION ?> <? //All CURRENT SESSIONS	
  $line1a='Sessions:';
  $line1b='<br>';
  $line2a='<pre>';
  $line2b=print_r($_SESSION, TRUE);
  $line2c='</pre>';
  $line3a='Cookies:';
  $line3b='<br>';
  $line4a='<pre>';
  $line4b=print_r($_COOKIE, TRUE);
  $line4c='</pre>';
?> <body><a href="#" onClick="window.print();return false;">Print Report</a> | <a href="mailto:webmaster@abouttheday.com?subject=Session Report&body=<? echo $line1a;?>%0D%0A<? echo $line2b;?>%0D%0A%0D%0A<? echo $line3a;?>%0D%0A<? echo $line4b;?>" target="_blank">Email Report</a> | <a href="destroySessions.php">Clear All</a> | ip Address: <? echo $ipAddress;?> <br><br><hr><br> <? //View all current sessions
      echo $line1a;
	  echo $line1b;
      echo $line2a;
	  echo $line2b;
	  echo $line2c;
	  //View all current sessions
      echo $line3a;
	  echo $line3b;
      echo $line4a;
	  echo $line4b;
	  echo $line4c;
  ?> </body></html>