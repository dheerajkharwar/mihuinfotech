<?php
$dbhost = 'localhost';
$dbuser = 'u768844772_dheeraj123';
$dbpass = 'Dizto@lic123';
$dbname = 'u768844772_licdb';

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con){
    die("Conection Failed: " . mysqli_connect_error());
}
    
?>
