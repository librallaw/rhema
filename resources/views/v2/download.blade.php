
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Download - Rhema for living</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/themeicon.css">
    <link rel="stylesheet" href="css/main.css" class="color-switcher-link">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
    <script src="js/vendor/html5shiv.min.js"></script>
    <script src="js/vendor/respond.min.js"></script>
    <script src="http://webdesign-finder.com/html/lightbook/js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->

</head>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image pulse"></div>
</div>

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form" action="/">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="btn">Search</button>
        </form>
    </div>
</div>

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls p-normal">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->

    </div>
</div><!-- eof .modal -->

<div class="modal fade popupLogin" id="popupLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ls border-r-def overflow-visible s-overlay s-mobile-overlay">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mb-4">Log in</h4>
                            <form class="form-registration c-mb-40 c-gutter-20" action="/">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" required placeholder="login" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="password" aria-required="true" required>
                                        </div>
                                    </div>
                                </div>
                                <a class="registerRedirect " data-dismiss="modal" data-target="#popupRegistr" data-toggle="modal" href="team-single.html#">Not a member? Register!</a>
                                <button type="submit" class="btn btn-maincolor mt-30 d-block">Sign In</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->


        <!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
        @include("v2.header")

        <section class="page_title ds s-parallax s-py-110">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h1 class="small-title">Downloload Rhema For Living</h1>
                        <ol class="breadcrumb">


                        </ol>
                    </div>

                </div>
            </div>
        </section>

        <section class="ls s-py-90 s-py-xl-160 ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row c-gutter-60">

                            <div class="col-lg-6 col-xl-5">
                                <div class="vertical-item hero-bg text-center team-layout content-padding">
                                    <div class="item-media">
                                        <img src="images/front4.png" alt="img">
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6 offset-xl-1">
                                <div class="divider-lg-70 divider-60"></div>

                                <div class="pricing-plan plan-featured ls">
                                    <div class="plan-name">
                                        <h3>
                                            E-book
                                        </h3>
                                    </div>
                                    <div class="price-wrap">
                                        <span class="plan-sign">$</span>
                                        <span class="plan-price">1</span>
                                        <span class="plan-decimals">.00</span>
                                    </div>
                                    <div class="plan-description">
                                        July - December 2020.
                                    </div>
                                    <div class="plan-features text-center">
                                        <ul class="list-unstyled">
                                            <li>Get e-book for free!</li>
                                        </ul>
                                    </div>
                                    <div class="plan-button">
                                        <a href="contact.html" class="btn btn-maincolor">Download</a>
                                    </div>
                                </div>



                                <div class="divider-40"></div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="quotes" class="ds section-testimonials s-py-90 s-py-xl-150">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel owl-nav-bottom" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="1" data-responsive-xs="1" data-nav="true" data-margin="60" data-loop="true" data-autoplay="true">
                            <div class="vertical-item quote-item">
                                <div class="item-content text-center">
                                    <h4 class="mb-3">
                                        Claudia T. Taylor
                                    </h4>
                                    <p class="position">United States</p>
                                    <p>
                                        After treatment my prognosis was so amazing I didn't need to take any tablets. Although the treatment was very aggressive, not once was I sick except for hair loss. I am healed completely. I have had four tests, and still no trace of cancer. I am not in remission, I am healed by the blood of Jesus Christ, and I am eternally grateful to the Father God. Jesus is and will always be Lord of my life.
                                    </p>
                                </div>
                            </div>
                            <div class="vertical-item quote-item">
                                <div class="item-content text-center">
                                    <h4 class="mb-3">
                                        Maxie R. Broussard
                                    </h4>
                                    <p class="position">Kenya</p>
                                    <p>
                                        The day I gave my life to Christ was March 21, 2004. I wish I could say I never drank again, but I did. The last time I had a drink was June 6, 2004. Since then the Lord has taken away from me the taste for alcohol. I've never been happier. Now I believe the Lord is taking away my nicotine addiction. It has been three days. I want everyone to pray for me because I know God answers prayer.
                                    </p>
                                </div>
                            </div>
                            <div class="vertical-item quote-item">
                                <div class="item-content text-center">
                                    <h4 class="mb-3">
                                        Sarah J. Adams
                                    </h4>
                                    <p class="position">Nigeria</p>
                                    <p>
                                        Now I'm doing a lot better and I'm no longer suicidal. I trust people more and the Lord has changed me so much! Thanks to Jesus, I no longer want to die! If it wasn't for him I do not think I would have made it. That's not all he's done though; He has saved me so I could have everlasting life!
                                        .</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="page_copyright ls s-py-20 s-py-xl-50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 text-center color-dark">
                        <p>&copy; Copyright <span class="copyright_year">2020</span> All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </section>


    </div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->


<script src="js/compressed.js"></script>
<script src="js/main.js"></script>


</body>

</html>