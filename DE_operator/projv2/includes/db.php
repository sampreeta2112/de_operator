<?php

define('SITE_ADDRESS','http://goitway.com/staging-projects/ii');
define('DOCROOT','/home/gitw18/public_html/staging-projects/ii');
define('DB_HOST','localhost');
define('DB_USERNAME','gitw18_fleet');
define('DB_PASSWORD','Q27Me@,Z*!xY');
define('DB_NAME','gitw18_inet_fms5.0'); 
// 

$link = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_NAME)or die('Could not connect');

?>