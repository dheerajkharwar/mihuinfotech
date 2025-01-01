<?php
include('config.php');
if (!isset($_GET['q'])) {
    header('Location: ' . $currentURL . '?q=' . generateRandomString(64));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Shipping & Delivery Policy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta
        content="IT company, Mihu Systems, technology solutions, web development, mobile app development, software solutions, IT consulting, digital transformation, cybersecurity, cloud services, AI, machine learning, data analytics, IT infrastructure, e-commerce solutions, software outsourcing, enterprise solutions, erp, logic, logic erp, erp software, apparel retail software, apparel distribution software, apparel manufacturing software"
        name="keywords" />
    <meta
        content="Mihu Systems is a leading IT company providing innovative solutions for businesses worldwide. We offer a comprehensive range of services, including web development, mobile app development, software solutions, and IT consulting. Our team of skilled professionals is committed to delivering top-notch products and services tailored to meet your specific needs. Partner with Mihu Systems for cutting-edge technology solutions and take your business to new heights."
        name="description" />

    <!-- Favicons -->
    <link href="<?= $base ?>img/favicon.png" rel="icon" />
    <link href="<?= $base ?>img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="<?= $base ?>https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet" />

    <!-- Bootstrap CSS File -->
    <link href="<?= $base ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="<?= $base ?>lib/nivo-slider/css/nivo-slider.css" rel="stylesheet" />
    <link href="<?= $base ?>lib/owlcarousel/owl.carousel.css" rel="stylesheet" />
    <link href="<?= $base ?>lib/owlcarousel/owl.transitions.css" rel="stylesheet" />
    <link href="<?= $base ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= $base ?>lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?= $base ?>lib/venobox/venobox.css" rel="stylesheet" />

    <!-- Nivo Slider Theme -->
    <link href="<?= $base ?>css/nivo-slider-theme.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="<?= $base ?>css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= $base ?>style1.css">

    <!-- Responsive Stylesheet File -->
    <link href="<?= $base ?>css/responsive.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?= $base ?>contactform/contactform.css" />
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
                                <img class="float-l" src="<?= $base ?>img/logo.png" alt="Mihu Systems" title="Mihu Systems" />
                                <a class="navbar-brand page-scroll sticky-logo" href="<?= $base ?>index.php">
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
                                <a class="whatsapp" href="<?= $base ?>https://wa.me/917666529550?text=Hi"><img
                                        src="<?= $base ?>img/whatsapp-logo.png" alt="whatsapp" /></a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                                id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a class="page-scroll" href="<?= $base ?>index.php">Home</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= $base ?>about.php">About</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= $base ?>services.php">Services</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= $base ?>team.php">Team</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= $base ?>portfolio.php">Portfolio</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= $base ?>career.php">Career</a>
                                    </li>
                                    <li class="active">
                                        <a class="page-scroll" href="<?= $base ?>contact.php">Contact</a>
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
    <!-- header end -->

    <!-- Start Bottom Header -->
    <div class="header-bg page-area">
        <div class="home-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                                <h1 class="title1">From Our Door to Yours</h1>
                            </div>
                            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                                <h2 class="title3">Navigating Our Shipping & Delivery Commitment</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <!-- Start contact Area -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Shipping & Delivery Policy
                            </h2>
                            <p style="text-align: justify;">
                                For International buyers, orders are shipped and delivered through registered
                                international
                                courier companies and/or International speed post only. For domestic buyers, orders are
                                shipped through registered domestic courier companies and /or speed post only. Orders
                                are
                                shipped within 8+ days or as per the delivery date agreed at the time of order
                                confirmation
                                and delivering of the shipment subject to Courier Company / post office norms. Mihu
                                Infotech
                                is not liable for any delay in delivery by the courier company / postal authorities and
                                only
                                guarantees to hand over the consignment to the courier company or postal authorities
                                within
                                8+ days from the date of the order and payment or as per the delivery date agreed at the
                                time of order confirmation. Delivery of all orders will be to the address provided by
                                the buyer. Delivery of our services will be confirmed on your mail ID as specified
                                during registration. For any issues in utilizing our services you may contact our
                                helpdesk on or omprakash@mihusystems.in
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-mobile"></i>
                                <p>
                                    Call: +91 7666529550 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91
                                    7972247649<br />
                                    <span>Monday-Friday (09:30 AM - 06:00 PM)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    Email: omprakash@mihusystems.in<br />
                                    <span>Web: www.logicerp.com</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    Location: Max Parlour, 4th, 401, Khopade Empire, S. No. 8/1, Khopade Nagar,
                                    Gujarwadi Road, Katraj, Pune, Pune,<br />
                                    <span> Maharashtra, 411046</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Google Map -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- Start Map -->
                        <br />
                        <br />

                        <iframe
                            src="<?= $base ?>https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.0580958607065!2d73.86789347409753!3d18.435671171764298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ebe2a7e31227%3A0x20e94cf0ac6d1f6f!2sKhopade%20Nagar!5e0!3m2!1sen!2sin!4v1691771472764!5m2!1sen!2sin"
                            width="100%" height="430" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- End Map -->
                    </div>
                    <!-- End Google Map -->

                    <!-- Start  contact -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form contact-form">
                            <h2>Contact Form</h2>
                            <form id="contact-form" action="send_mail.php" method="post">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" required />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" required />
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" name="address" required />
                                </div>
                                <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea id="message" name="message" rows="4" required></textarea>
                                </div>
                                <!-- <input type="hidden" name="_next" value="https://mihuinfotech.com/thanks.php" />
                                <input type="hidden" name="_subject"
                                    value="Mihu Systems - Contact Form - New Submission!" />
                                <input type="hidden" name="_captcha" value="false" />
                                <input type="hidden" name="_cc"
                                    value="ranjan.mihuinfotech@gmail.com,dheeraj.mihuinfotech@gmail.com" /> -->
                                <div class="form-group">
                                    <input type="submit" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>
            </div>
            <div class="text-center">
                <h4 class="third-head" style="margin-top: 20px">
                    We look forward to hearing from you and assisting with your
                    technology needs.
                </h4>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <div class="clearfix"></div>

    <!-- Start Footer bottom Area -->
    <footer>
        <!-- Footer Start -->

        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>About Us</h4>
                        <ul>
                            <li><i class="fa fa-chevron-right"></i> <a href="<?= $base ?>/">Home</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a href="<?= $base ?>about.php">About us</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a href="<?= $base ?>services.php">Our services</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fa fa-chevron-right"></i> <a href="<?= $base ?>t&c.php">Terms & Conditions</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a href="<?= $base ?>privacy-policy.php">Privacy Policies</a>
                            <li><i class="fa fa-chevron-right"></i><a href="<?= $base ?>ship-policy.php">Shipping & Delivery
                                    Policy</a></li>
                            </li>
                            <li><i class="fa fa-chevron-right"></i> <a href="<?= $base ?>r&c.php">Refund & Cancellation</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Max Parlour, 4th, 401, Khopade Empire, S. No. 8/1, Khopade Nagar, Gujarwadi Road, Katraj,
                            Pune, Pune,<br />
                            <span> Maharashtra, 411046</span>
                            <br>
                            <strong>Phone:</strong> +91 7972247649<br>
                            <strong>Email:</strong> omprakash@mihusystems.in<br>
                        </p>

                        <div class="social-links">
                            <div class="footer-icons">
                                <ul>
                                    <li>
                                        <a href="<?= $base ?>https://www.facebook.com/profile.php?id=100094703150978"
                                            target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?= $base ?>https://www.linkedin.com/company/mihu-infotech/" target="_blank"><i
                                                class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?= $base ?>https://www.instagram.com/mihu_infotech/" target="_blank"><i
                                                class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?= $base ?>https://www.youtube.com/@LOGICERP" target="_blank"><i
                                                class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Subscription</h4>
                        <p>Please Subscribe us to get latest news and updates!
                            <!-- <form action="https://formsubmit.co/omprakash.fbt@gmail.com" method="post"> -->
                        <form action="send_mail.php" method="post">
                            <input type="email" name="email_sub" required /><input type="submit" value="Subscribe">
                            <!-- <input type="hidden" name="_subject" value="Mihu Systems - New Subscriber!" />
                            <input type="hidden" name="_captcha" value="false" />
                            <input type="hidden" name="_cc"
                                value="ranjan.mihuinfotech@gmail.com,dheeraj.mihuinfotech@gmail.com" /> -->

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer End -->
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright <strong>Mihu Systems</strong>. All Rights
                                Reserved
                            </p>
                        </div>
                        <div class="credits white">
                            Designed by
                            <a href="<?= $base ?>https://www.mihusystems.in">Mihu <span style="color:white">Systems</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="<?= $base ?>#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="<?= $base ?>lib/jquery/jquery.min.js"></script>
    <script src="<?= $base ?>lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= $base ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= $base ?>lib/venobox/venobox.min.js"></script>
    <script src="<?= $base ?>lib/knob/jquery.knob.js"></script>
    <script src="<?= $base ?>lib/wow/wow.min.js"></script>
    <script src="<?= $base ?>lib/parallax/parallax.js"></script>
    <script src="<?= $base ?>lib/easing/easing.min.js"></script>
    <script src="<?= $base ?>lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="<?= $base ?>lib/appear/jquery.appear.js"></script>
    <script src="<?= $base ?>lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="<?= $base ?>contactform/contactform.js"></script>

    <script src="<?= $base ?>js/main.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="<?= $base ?>https://www.googletagmanager.com/gtag/js?id=G-PGWHHR82DT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-PGWHHR82DT");
    </script>
</body>

</html>