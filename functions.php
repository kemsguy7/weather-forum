<?php 
session_start(); //this starts the session, it's the very first code that should be written at the beginning of a php script

defined('APP') or die('direct script access denied');

function check_login() { // This function checks if a user is logged in and restricts unauthorized access to some pages

	if(!logged_in()){
		echo "<script> window.location('index.php') </script>";
		//header("Location: index.php");
		die; 
	}
}
//check_login();

function authenticate($row)
{   
	$_SESSION['USER'] = $row;
}

function query($query)
{
    global $con;

    $result = mysqli_query($con, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $data = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            return $data;
        } else {
            // No rows returned
            return [];
        }
    } else {
        // Query execution failed
        echo "Query failed: " . mysqli_error($con);
        return false;
    }
}



function logged_in() {

    if(!empty($_SESSION['USER']))
    	return true;

    return false;
 
}

function logout(){
	if(!empty($_SESSION['USER'])){
		unset($_SESSION['USER']);
	}
}

function get_image($path)
{
	if(!empty($path) && file_exists($path))
		return $path;

	return './assets/images/user.jpg'; 
}
/*
echo "<pre>";
print_r($_SESSION['USER']);
*/




