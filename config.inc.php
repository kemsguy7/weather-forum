<?php 

define('APP', 'quick_forum');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'forum_db');

//connect to the database
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$con) {
	
	echo "Could not connect to the database".mysqli_error($con);
}

