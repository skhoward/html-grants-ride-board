<?php
# connect to the database
define('DB_HOST_M', '127.0.0.1');
define('DB_USER_M', 'zrsmith');
define('DB_PASS_M', 'zrsmith');
define('DB_NAME_M', 'zrsmith');
$local = new mysqli(DB_HOST_M, DB_USER_M, DB_PASS_M, DB_NAME_M);
if($local->connect_errno > 0){
    die('Unable to connect to database [' . $local->connect_error . ']');
} else {
    echo 'we are good!';
}

$page = $_SERVER['REQUEST_URI'];


?>