<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Home - Rhema for living</title>
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
    <link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
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
                                <a class="registerRedirect " data-dismiss="modal" data-target="#popupRegistr" data-toggle="modal" href="##">Not a member? Register!</a>
                                <button type="submit" class="btn btn-maincolor mt-30 d-block">Sign In</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade popupRegistr" id="popupRegistr" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ls border-r-def overflow-visible s-overlay s-mobile-overlay">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mb-4">Registration</h4>
                            <form class="form-registration c-mb-40 c-gutter-40" method="post" action="/">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" required placeholder="login" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="password" aria-required="true" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="email" required aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="password" name="confirmPassword" class="form-control" placeholder="password" required aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group checkbox-group">
                                            <input type="checkbox" id="agreed" name="agreed" value="agreed" required aria-required="true"><label for="agreed">I agree to the rules</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-maincolor mt-30 d-block">Registration</button>
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

        <section class="page_slider overflow-visible">
            <div class="flexslider">
                <ul class="slides">
                    <li class="cs cover-image text-center text-md-left">
                        <img src="images/slide01.jpg" alt="img">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="intro_layers_wrapper">
                                        <div class="img-layer animate" data-animation="fadeInLeft">
                                            <img src="images/front4.png" alt="img">
                                        </div>
                                        <div class="intro_layers">

                                            <div class="intro_layer" data-animation="fadeInRight">
                                                <h1>Rhema <br/>for Living</h1>
                                            </div>
                                            <div class="intro_layer intro_feature_word" data-animation="fadeInRight">
                                                <p>Daily Devotional</p>
                                            </div>
                                            <div class="intro_layer" data-animation="fadeInRight">
                                                <!--<p>Your daily guide to an all-round successful living</p>-->
                                                <p>Rhema for Living is a daily devotiona guide, by Apostle (Prof.) Johnson Suleman. The Oracle of God. It's to inspired you, teach you the ways of God and help you grow in your relationship with Him (GOD) so you can effortless enjoy a life of all round success.</p>
                                            </div>
                                            <div class="intro_layer several-buttons" data-animation="fadeInUp">
                                                <a href="#" class="btn btn-maincolor">Rhema for Today</a>
                                                <a href="#" class="btn btn-success fa-download">
                                                    <span>Download your copy</span>
                                                </a>
                                            </div>
                                        </div> <!-- eof .intro_layers -->
                                    </div> <!-- eof .intro_layers_wrapper -->
                                </div> <!-- eof .col-* -->
                            </div><!-- eof .row -->
                        </div><!-- eof .container-fluid -->
                    </li>
                </ul>
            </div> <!-- eof flexslider -->
        </section>


        <section id="author" class="ls s-overlay mobile-overlay s-py-90 s-py-xl-150 section-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="divider-xl-200"></div>
                        <p class="mb-2 color-dark">Meet the Authors</p>
                        <h2 class="special-heading">
                            <span>Apostle (Prof.) Johnson & Dr. Lizzy Suleman</span>
                        </h2>
                        <div class="divider-40"></div>
                        <p class="excerpt">
                            Apostle (Prof.) Johnson Suleman is the President of Omega Fire Ministries, a ministry called to produce a people of fire. He has a mandate to, ”Wipe out tears, restore people to their original destiny through the revelation of the Word, the manifestation of power and the reality of Spirit”
                            <br /> <br />
                            He is also, the CEO of Celebration Television, a Christian satellite station that reaches over two (2) billion people in over a hundred (100) nations daily.
                            He, alongside his lovely wife, Dr. Lizzy Suleman are the senior Pastors of Omega Fire Ministries and jointly oversee its affairs, which is reputed for its exponential growth and formidable presence in over fifty(50) nations of the world. <br /> <br />
                            His ministrations are characterized with accurate prophetic utterances, the special miraculous and a profound depth of God’s Word. <br /> <br />
                            Apostle(Prof.) Johnson Suleman ministers in crusades, all around the world because  he is under a divine mandate to reach five(5) billion souls with the gospel, and Rhema for Living devotional is one of the major tools of his outreach programs.

                        </p>
                        <div class="divider-40"></div>

                        <div class="divider-40"></div>
                        <div class="columns-two">
                            <a href="#" class="btn btn-maincolor">Read More</a>

                        </div>
                        <div class="divider-xl-150"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="ls ms s-py-90 s-py-xl-160 c-gutter-100">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="video-shortcode">
                            <img src="images/front3.jpg" alt="img">
                            <a href="#" class="photoswipe-link "  data-index="1"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="divider-60 divider-lg-0"></div>
                        <h3 class="special-heading">
                            <span>About Rhema for Living Devotional </span>
                        </h3>
                        <div class="divider-40"></div>
                        <p>
                            Rhema for Living is an exceptional daily devotional; filled with words of transformation, upliftment, restoration and prophetic fulfilment. It is God’s daily thoughts of love expressed to you, in a concise and an ever refreshing manner. <br /><br />
                            As we say in Omega Fire Ministries, “Rhema for Living is that specific Word of God, spoken to a specific person, at a specific place in a specific situation, at a specific time, for a specific miracle.
                            Which means, every time you hold a copy of this devotional, God has a specific word, for your specific challenge for that specific day.

                        </p>

                        <a href="#" class="btn btn-maincolor">Read More</a>

                    </div>
                </div>
                <div class="row align-center">
                    <div class="col-12">
                        <div class="divider-80 divider-xl-120"></div>
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="divider-60 divider-lg-0"></div>
                        <h3 class="special-heading">
                            <span>Why people download this Devotional</span>
                        </h3>
                        <div class="divider-40"></div>
                        <ul class="list-styled">
                            <li>
                                Teaching the Word
                            </li>
                            <li>
                                Destiny Changing Prayers
                            </li>
                            <li>
                                Present Hour Manifestations
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="border-r-def overflow-hidden">
                            <img src="images/Apostle-Johnson-Suleman.png" alt="img">
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