<?php
session_start();
define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'hotel');

$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DB_NAME);

?>