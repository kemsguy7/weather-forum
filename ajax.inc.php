<?php

require('config.inc.php');
require('functions.php');

$info['data_type'] = "";
$info['success'] = false;


if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['data_type'])) {
    $info['data_type'] = $_POST['data_type'];

    if ($_POST['data_type'] == 'signup') {
        $username = addslashes($_POST['username']);
        $email = addslashes($_POST['email']);
        $password = ($_POST['pass']);
        $password_retype = ($_POST['re_pass']);  // passwords wasn't hashed here so that both values could be compared against each other
        $date = date("Y-m-d H:i:s");

        // Check if this email already exists
        $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $rows = query($query);

        if ($rows) {  //checking if a email address existw
            $info['message'] = "That email already exists";
        } else if($password !== $password_retype) {

            $info['message'] = "Passwords don't mactch";
        } else {

            //$rows = $rows[0];
            $password = password_hash($password, PASSWORD_DEFAULT);  //hash the passwords
            $query = "INSERT INTO users (username, email, password, date,image) VALUES ('$username', '$email', '$password', '$date','bg.png')";
            $result = query($query);

            if ($result) {
                $info['success'] = true;
                $info['message'] = "Your profile was created successfully";
                authenticate($result);
            } else {
                $info['message'] = "Failed to create profile";
            }
        }
    } elseif ($_POST['data_type'] == 'login') {
        $email = addslashes($_POST['email']);

        // Check if this account exists
        $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $rows = query($query);

        if (!$rows) {
            $info['message'] = "Wrong email or password";
        } else {
            $row = $rows[0];

            if (password_verify($_POST['pass'], $row['password'])) {
                $info['success'] = true;
                $info['message'] = "Successful login";
                authenticate($row);
            } else {
                $info['message'] = "Wrong email or password";
            }
        }
    } elseif ($_POST['data_type'] == 'logout') {
        logout();
        $info['message'] = "You were successfully logged out";
    }
}

echo json_encode($info);
