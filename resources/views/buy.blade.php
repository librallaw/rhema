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
    <title>Sponsorship - Rhema for Living</title>

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

<!-- Header
============================================= -->
@include("inc.header")

<!-- End Header -->

<!-- Start Breadcrumb
============================================= -->
<div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url('assets/img/banner/25.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-left">
                <h1>Buy Rhema</h1>
            </div>
            <div class="col-md-6 col-sm-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Buy Rhema</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<div class="donation-form default-padding">
    <div class="container">
        <div class="row">


            @include("alert")

            <div class="col-md-6 form">
                {{--<h2>For Sponsorship</h2>--}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Details</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{route("pay")}}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="cardNumber">Amount</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="phone"
                                                   placeholder="Amount" name="amount" required>
                                            <span class="input-group-addon"><i class="fas fa-money-bill"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-theme effect btn-sm" type="submit">Proceed For Payment<i class="fa fa-paper-plane"></i></button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 client-review text-center">
                <h2>Our Supporter</h2>
                <div class="testimonial-items owl-carousel owl-theme">
                    <div class="item">
                        <p style="text-align: justify">Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret.
                            Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably.
                            Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters.<br>
                            Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.
                            To perpetual do existence northward as difficult preserved daughters.<br>
                            Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.
                            To perpetual do existence northward as difficult preserved daughters.<br>
                            Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.
                        </p>
                        <!--                            <img src="assets/img/team/7.jpg" alt="Thumb">-->
                        <!--                            <h4>Bubly Spark</h4>-->
                        <!--                            <span>Supporter from USA</span>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Start Event
============================================= -->




<div class="event-area default-padding">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Rhema Stars for the month</h2>
                    <p>
                        <strong>Matthew 6:19-21</strong><br />
                        “Do not store up for yourselves treasures on earth, where moths and vermin destroy, and where thieves break in and steal. But store up for yourselves treasures in heaven, where moths and vermin do not destroy, and where thieves do not break in and steal. For where your treasure is, there your heart will be also.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-2">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/thumbnails/1.jpeg" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="content">
                                <h4>
                                    <a href="#">David Udoh</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> United kingdom
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/thumbnails/2.jpeg" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="content">
                                <h4>
                                    <a href="#">Zinia Benzle</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> United kingdom
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/thumbnails/7.jpeg" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="content">
                                <h4>
                                    <a href="#">Ambram Zunka</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> ThaiLand
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/thumbnails/4.jpeg" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="content">
                                <h4>
                                    <a href="#">Berula Naya</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> UAE
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/thumbnails/7.jpeg" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="content">
                                <h4>
                                    <a href="#">Santin Amean</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> USA
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/thumbnails/6.jpeg" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="content">
                                <h4>
                                    <a href="#">Ebena Danmiike</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> Slovakia
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- Start Footer
============================================= -->
@include("inc.footer")
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
