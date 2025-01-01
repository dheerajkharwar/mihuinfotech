<?php
include('config.php');
// if (!isset($_GET['q'])) {
//   header('Location: ' . $currentURL . '?q=' . generateRandomString(64));
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Portfolio</title>
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

  <link rel="stylesheet" href="<?= $base ?>css/style1.css" />

  <!-- Responsive Stylesheet File -->
  <link href="<?= $base ?>css/responsive.css" rel="stylesheet" />
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
                  <p class="tagline" style="font-size: 11px;color: white;width: fit-content;margin: auto;">
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
                <a class="whatsapp" href="<?= $base ?>https://wa.me/917666529550?text=Hi"><img src="<?= $base ?>img/whatsapp-logo.png"
                    alt="whatsapp" /></a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
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
                  <li class="active">
                    <a class="page-scroll" href="<?= $base ?>portfolio.php">Portfolio</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?= $base ?>career.php">Career</a>
                  </li>
                  <li>
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
                <h1 class="title1">A Glimpse into Our World of</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Technology and Achievement</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix mpb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2 class="mpb-0">Our Portfolio</h2>
          </div>
        </div>
      </div>
    </div>
    <hr class="mpt-0" />
    <div class="container">
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu">
              <ul class="project-menu">
                <li>
                  <a href="<?= $base ?>#" class="active" data-filter="*">All</a>
                </li>
                <li>
                  <a href="<?= $base ?>#" data-filter=".development">Software Development</a>
                </li>
                <li>
                  <a href="<?= $base ?>#" data-filter=".design">Web Development</a>
                </li>
                <li>
                  <a href="<?= $base ?>#" data-filter=".Logic-ERP">Logic ERP</a>
                </li>

                <li>
                  <a href="<?= $base ?>#" data-filter=".training">Training</a>
                </li>
                <li>
                  <a href="<?= $base ?>#" data-filter=".photo">Photo</a>
                </li>
                <li>
                  <a href="<?= $base ?>#" data-filter=".video">Video</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP video">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <iframe src="<?= $base ?>https://www.youtube.com/embed/KNBvnjH6_8Y?autoplay=1&mute=1"
                  title="Welcome to LOGIC ERP | The Best ERP Solution for YOU!" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP video">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <iframe src="<?= $base ?>https://www.youtube.com/embed/MkCArTvxO9w"
                  title="Digitalize your Apparel &amp; Garment Retail Business with LOGIC ERP cloud-based Solutions"
                  frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; web-share"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP video">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <iframe src="<?= $base ?>https://www.youtube.com/embed/H78tIL2qKPw"
                  title="Cloud-based LOGIC ERP solutions to transform your Grocery / Kirana Store business"
                  frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; web-share"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP video">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <iframe src="<?= $base ?>https://www.youtube.com/embed/IQgfSiY72GU"
                  title="Upscale Your Pharma Business With LOGIC Cloud-based ERP Solutions" frameborder="0"
                  allow="accelerometer; clipboard-write; encrypted-media; gyroscope; web-share"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP video">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <iframe src="<?= $base ?>https://www.youtube.com/embed/CJjzx3w7QZU" title="PayTM Dynamic QR" frameborder="0"
                  allow="accelerometer; clipboard-write; encrypted-media; gyroscope; web-share"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->

          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/1.1.jpg" alt="Apparel & Footwear Solution - Logic ERP" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/1.1.jpg">
                      <h4>Apparel & Footwear Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/1.2.jpg"
                    alt="Apparel & Footwear - Complete ERP Solution - Logic ERP" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/1.2.jpg">
                      <h4>Apparel & Footwear - Complete ERP Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/2.1.jpg" alt="Electronics Solution - Logic ERP" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/2.1.jpg">
                      <h4>Electronics Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/2.2.jpg" alt="Electronics - Logic ERP" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/2.2.jpg">
                      <h4>Electronics - Complete ERP Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/3.1.jpg" alt="Distribution Solution - Logic ERP" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/3.1.jpg">
                      <h4>Distribution Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/3.2.jpg"
                    alt="Distribution Solution - Features - Logic ERP" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/3.2.jpg">
                      <h4>Features - Distribution Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP video">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <iframe src="<?= $base ?>https://www.youtube.com/embed/sQ4G1YoZlbw" title="Logic ERP Business Insights"
                  frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; web-share"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP video">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <iframe src="<?= $base ?>https://www.youtube.com/embed/aCPDs0LL1-k" title="LOGIC ERP" frameborder="0"
                  allow="accelerometer; clipboard-write; encrypted-media; gyroscope; web-share"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP video">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <iframe src="<?= $base ?>https://www.youtube.com/embed/CJjzx3w7QZU" title="PayTM Dynamic QR" frameborder="0"
                  allow="accelerometer; clipboard-write; encrypted-media; gyroscope; web-share"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/4.1.jpg" alt="Food And Beverages Solution - Logic ERP" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/4.1.jpg">
                      <h4>Food & Beverages Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/4.2.jpg"
                    alt="Food And Beverages Solution - Features - Logic Erp" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/4.2.jpg">
                      <h4>Features - Food & Beverages Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/5.1.jpg" alt="Logic ERP" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/5.1.jpg">
                      <h4>Next Generation ERP</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/5.2.jpg" alt="Logic ERP - Features" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/5.2.jpg">
                      <h4>Features - Next Generation ERP</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/6.1.jpg" alt="Farma Retail Solution - Logic ERP" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/6.1.jpg">
                      <h4>Farma Retail Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/6.2.jpg"
                    alt="Farma Retail Solution - Features - Logic ERP" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/6.2.jpg">
                      <h4>Features - Farma Retail Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/7.1.jpg" alt="Farma Wholesale Solution - Logic ERP" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/7.1.jpg">
                      <h4>Farma Wholesale Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/7.2.jpg"
                    alt="Farma Wholesale Solution - Features - Logic ERP" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/7.2.jpg">
                      <h4>Features - Farma Wholesale Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/8.1.jpg" alt="Retail Solution - Logic ERP" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/8.1.jpg">
                      <h4>Retail Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="<?= $base ?>#"><img src="<?= $base ?>img/portfolio/logic/8.2.jpg" alt="Retail Solution - Features - Logic ERP" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $base ?>img/portfolio/logic/8.2.jpg">
                      <h4>Features - Retail Solution</h4>
                      <span>Logic ERP</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->

        </div>
      </div>
    </div>
  </div>
  <hr />
  <!--End portfolio area -->

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
              <li><i class="fa fa-chevron-right"></i> <a href="<?= $base ?>privacy-policy.php">Privacy Policies</a></li>
              <li><i class="fa fa-chevron-right"></i><a href="<?= $base ?>ship-policy.php">Shipping & Delivery
                  Policy</a></li>
              </li>
              <li><i class="fa fa-chevron-right"></i> <a href="<?= $base ?>r&c.php">Refund & Cancellation</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Max Parlour, 4th, 401, Khopade Empire, S. No. 8/1, Khopade Nagar, Gujarwadi Road, Katraj, Pune,
              Pune,<br />
              <span> Maharashtra, 411046</span>
              <br>
              <strong>Phone:</strong> +91 7972247649<br>
              <strong>Email:</strong> omprakash@mihusystems.in<br>
            </p>

            <div class="social-links">
              <div class="footer-icons">
                <ul>
                  <li>
                    <a href="<?= $base ?>https://www.facebook.com/profile.php?id=100094703150978" target="_blank"><i
                        class="fa fa-facebook"></i></a>
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
                    <a href="<?= $base ?>https://www.youtube.com/@LOGICERP" target="_blank"><i class="fa fa-youtube"></i></a>
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
              <input type="hidden" name="_cc" value="ranjan.mihuinfotech@gmail.com,dheeraj.mihuinfotech@gmail.com" /> -->

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

  <div id="festival-img">
    <span id="close-festiv-img">x</span>
    <img src="<?= $base ?>img/Black and Gold Happy New Year Greeting Instagram Post (1).png" alt="Happy New Year">
  </div>
  <a href="<?= $base ?>#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?= $base ?>lib/jquery/jquery.min.js"></script>
  <script>
    $('#close-festiv-img').on('click', function() {
      $('#festival-img').hide();
    })
  </script>
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