<?php
$currentURL = "";
$base = '';
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $currentURL = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $base_url = "https://mihusystems.in/";
} else {
    $currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $base_url = "http://localhost/mihusystems/";
}
function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}
