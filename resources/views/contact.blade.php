<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:description" id="metdesc111" content="
	Experience God's Wisdom each day as you are lead by the Holy Spirit. Walk effortlessly into success and happiness and understand the Father's love for you
" />
    <meta property="og:title" id="mettitle111" content="Welcome - Rhema For Life Daily Deveotional
    Video" />
    <meta property="og:image" id="metimage111" content="/assets/img/back.jpeg" />

    <!-- ========== Page Title ========== -->
    <title>Contact - Rhema for Living</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-charity-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area one-line bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="info box">
                        <ul>
                            <li>
                                <p>
                                    <i class="fas fa-map-marker-alt"></i> <span>Abuja, Nigeria</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fas fa-envelope-open"></i> <span>rhemaforliving.org</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fas fa-mobile-alt"></i> <span>+123 456 7890</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="topbar-button text-right col-md-3">
                    <a href="#" class="btn btn-theme circle effect standard btn-sm" style="background:#bc0002">Sponsor
                        Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
   @include("inc.header")

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url('assets/img/banner/13.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left">
                    <h1>Contact Us</h1>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="index.php#">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact 
    ============================================= -->
    <div class="contact-form-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Contact Form -->
                @include("alert")
                <div class="col-md-7 contact-form">
                    <div class="content">
                        <div class="heading">
                            <h3>Give us Feedbacks</h3>
                        </div>
                        <form action="{{route("addContact")}}" method="POST" class="contact-form">

                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" required type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" required type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="message"  required placeholder="Tell Us About Your Experience *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Contact Form -->
                <div class="col-md-5 address-info text-center">
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>
                                Our Location
                                <span>Alexima, NT 456678</span>
                            </p>
                        </li>
                        <li>
                            <i class="fas fa-envelope-open"></i>
                            <p>
                                Send Us Mail
                                <span>rhemaforliving.org</span>
                            </p>
                        </li>
                        <li>
                            <i class="fas fa-mobile-alt"></i>
                            <p>
                                Call Us
                                <span>+234 80 5465 8976</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- End Contact -->

    <!-- Start Maps Area 
    ============================================= -->
    <!--<div class="maps-area-items">-->
        <!--<div class="maps-box oh">-->
            <!--<div class="google-maps">-->
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39127.228590750965!2d0.0849678234612977!3d52.198836917081096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d85d89f32a012d:0x63a320e1a35e3d21!2sCambridge,+UK!5e0!3m2!1sen!2sbd!4v1535547888494" ></iframe>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
    <!-- End Maps Area -->

    <!-- Start Footer 
    ============================================= -->
    @include ("inc.footer")
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->

    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
