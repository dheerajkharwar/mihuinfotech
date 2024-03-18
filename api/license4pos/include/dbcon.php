<?php

$dbhost = 'localhost';
$dbuser = 'u768844772_licdb4pos';
$dbpass = 'Lic4pos@';
$dbname = 'u768844772_licdb4pos';

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con){
    die("Conection Failed: " . mysqli_connect_error());
}
    
?>
