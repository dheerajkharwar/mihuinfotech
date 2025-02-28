<?php
include('components/header.php');
if (!isset($_GET['page'])) {
    include('home.php');
} elseif ($_GET['page'] == 'home') {
    include('home.php');
} elseif ($_GET['page'] == 'about') {
    include('about.php');
} elseif ($_GET['page'] == 'career') {
    include('career.php');
} elseif ($_GET['page'] == 'contact') {
    include('contact.php');
} elseif ($_GET['page'] == 'portfolio') {
    include('portfolio.php');
} elseif ($_GET['page'] == 'services') {
    include('services.php');
} elseif ($_GET['page'] == 'ship-policy') {
    include('ship-policy.php');
} elseif ($_GET['page'] == 'privacy-policy') {
    include('privacy-policy.php');
} elseif ($_GET['page'] == 'rc') {
    include('rc.php');
} elseif ($_GET['page'] == 'tc') {
    include('tc.php');
} elseif ($_GET['page'] == 'team') {
    include('team.php');
} else {
    header('Location: 404.php');
}
include("components/footer.php");
