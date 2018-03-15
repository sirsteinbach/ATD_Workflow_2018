<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conn_Clients = "69.195.123.204";
$database_conn_Clients = "aboutti9_clients";
$username_conn_Clients = "aboutti9_admin";
$password_conn_Clients = "stein7722";
$conn_Clients = mysql_pconnect($hostname_conn_Clients, $username_conn_Clients, $password_conn_Clients) or trigger_error(mysql_error(),E_USER_ERROR);
?>