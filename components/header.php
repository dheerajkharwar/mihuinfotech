<?php
include('config');
// if (!isset($_GET['q'])) {
//     header('Location: ' . $currentURL . '?q=' . generateRandomString(64));
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Mihu Systems<?php
                        include('config');
                        // if (!isset($_GET['q'])) {
                        //     header('Location: ' . $currentURL . '?q=' . generateRandomString(64));
                        // }
                        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Mihu Systems<?php
                        include('config');
                        // if (!isset($_GET['q'])) {
                        //     header('Location: ' . $currentURL . '?q=' . generateRandomString(64));
                        // }
                        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8" />
            <title>Mihu Systems<?php
                                include('config');
                                // if (!isset($_GET['q'])) {
                                //     header('Location: ' . $currentURL . '?q=' . generateRandomString(64));
                                // }
                                ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Mihu Systems<?php
                        include('config');
                        // if (!isset($_GET['q'])) {
                        //     header('Location: ' . $currentURL . '?q=' . generateRandomString(64));
                        // }
                        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Mihu Systems<?= isset($_GET['page']) ? " | " . ucfirst($_GET['page']) : "" ?></title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport" />
            <meta
                content="IT company, Mihu Systems, technology solutions, web development, mobile app development, software solutions, IT consulting, digital transformation, cybersecurity, cloud services, AI, machine learning, data analytics, IT infrastructure, e-commerce solutions, software outsourcing, enterprise solutions, erp, logic, logic erp, erp software, apparel retail software, apparel distribution software, apparel manufacturing software"
                name="keywords" />
            <meta
                content="Mihu Systems is a leading IT company providing innovative solutions for businesses worldwide. We offer a comprehensive range of services, including web development, mobile app development, software solutions, and IT consulting. Our team of skilled professionals is committed to delivering top-notch products and services tailored to meet your specific needs. Partner with Mihu Systems for cutting-edge technology solutions and take your business to new heights."
                name="description" />

            <!-- Favicons -->
            <link href="img/favicon.png" rel="icon" />
            <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

            <!-- Google Fonts -->
            <link
                href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
                rel="stylesheet" />

            <!-- Bootstrap CSS File -->
            <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

            <!-- Libraries CSS Files -->
            <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet" />
            <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet" />
            <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet" />
            <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
            <link href="lib/animate/animate.min.css" rel="stylesheet" />
            <link href="lib/venobox/venobox.css" rel="stylesheet" />

            <!-- Nivo Slider Theme -->
            <link href="css/nivo-slider-theme.css" rel="stylesheet" />

            <!-- Main Stylesheet File -->
            <link href="css/style.css" rel="stylesheet" />

            <link rel="stylesheet" href="css/style1.css">

            <!-- Responsive Stylesheet File -->
            <link href="css/responsive.css" rel="stylesheet" />

            <link rel="stylesheet" href="css/team-img.css" />
            <link rel="stylesheet" href="contactform/contactform.css" />
        </head>

<body data-spy="scroll" data-target="#navbar-example">
    <div id="preloader"></div>

    <header>
        <!-- header-area start -->
        <div id="sticker" class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Navigation -->
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <!-- Brand -->
                                <img class="float-l" src="img/logo.png" alt="Mihu Systems" title="Mihu Systems" />
                                <a class="navbar-brand page-scroll sticky-logo" href="/">
                                    <h1 class="brand-name"><span>Mihu </span>Systems</h1>
                                    <p class="tagline"
                                        style="font-size: 11px;color: white;width: fit-content;margin: auto;">
                                        Empowering
                                        The Businesses With IT Solutions
                                    </p>
                                </a>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="whatsapp" href="https://wa.me/917666529550?text=Hi"><img
                                        src="img/whatsapp-logo.png" alt="whatsapp" /></a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                                id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="<?= $_GET['page'] == 'home' ? 'active' : '' ?>">
                                        <a class="page-scroll" href="?page=home">Home</a>
                                    </li>
                                    <li class="<?= $_GET['page'] == 'about' ? 'active' : '' ?>">
                                        <a class="page-scroll" href="?page=about">About</a>
                                    </li>
                                    <li class="<?= $_GET['page'] == 'services' ? 'active' : '' ?>">
                                        <a class="page-scroll" href="?page=services">Services</a>
                                    </li>
                                    <li class="<?= $_GET['page'] == 'team' ? 'active' : '' ?>">
                                        <a class="page-scroll" href="?page=team">Team</a>
                                    </li>
                                    <li class="<?= $_GET['page'] == 'portfolio' ? 'active' : '' ?>">
                                        <a class="page-scroll" href="?page=portfolio">Portfolio</a>
                                    </li>
                                    <li class="<?= $_GET['page'] == 'career' ? 'active' : '' ?>">
                                        <a class="page-scroll" href="?page=career">Career</a>
                                    </li>
                                    <li class="<?= $_GET['page'] == 'contact' ? 'active' : '' ?>">
                                        <a class="page-scroll" href="?page=contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar-collapse -->
                        </nav>
                        <!-- END: Navigation -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->
    </header>