<?php

$debug = false;
$dbhost = 'localhost';
$dbuser = 'u768844772_licdb4pos';
$dbpass = 'Lic4pos@';
$dbname = 'u768844772_licdb4pos';
date_default_timezone_set('Asia/Kolkata');
if (!$debug) {
    error_reporting(0);
    ini_set('display_errors', '0');
}

    //Connect
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if (mysqli_connect_errno()) {
        if ($debug) {
            printf('MySQLi connection failed: ', mysqli_connect_error());
            exit();
        } else {
            echo 'The connection to the database failed';
            exit();
        }
    }

    // Change character set to utf8
    if (!$mysqli->set_charset('utf8')) {
        if ($debug) {
            printf('Error loading character set utf8: %s\n', $mysqli->error);
        } else {
            echo 'The connection to the database failed';
            exit();
        }
    }
