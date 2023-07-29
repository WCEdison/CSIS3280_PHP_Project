<?php

//Host, user, password, DB
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","Grocery");
define("DB_PORT",3306);

//for log file
define('LOGFILE','error_log.txt');
ini_set("log_errors", TRUE);  
ini_set('error_log', LOGFILE); 

?>