<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>About - Rhema for living</title>
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





<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->


        <!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
        @include("v2.header")



        <section id="about" class="ls ms s-py-90 s-py-xl-160 c-gutter-100">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="video-shortcode">
                            <img src="images/front3.jpg" alt="img">
                            <a href="#" class="photoswipe-link "  data-index="1"></a>

                        </div>
                        <br >
                        <br >
                        <a href="{{route('download')}}" class="btn btn-success">Download Now </a>
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
                            Which means, every time you hold a copy of this devotional, God has a specific word, for your specific challenge for that specific day.<br /><br />
                            The four (4) major blessings that you will receive from using this insightful devotional, called “Rhema for Living” are;<br />

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



                        </p>

                      <p>
                          Rhema for Living devotional is an excellent tool of evangelism, for it helps to break communication barriers and brings help the way of people.
                          <br />
                          <br />
                          As a church, fellowship group, outreach campaigns and in personal evangelism, Rhema for Living is an arsenal of spiritual nuggets, a breath of fresh air and your daily guide to an all-round successful living.

                      </p>

                    </div>
                </div>


            </div>
        </section>

        <section id="quotes" class="ds section-testimonials s-py-90 s-py-xl-150">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel owl-nav-bottom" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="1" data-responsive-xs="1" data-nav="true" data-margin="60" data-loop="true" data-autoplay="true">
                            @foreach($testimonials as $testimonial)
                            <div class="vertical-item quote-item">
                                <div class="item-content text-center">
                                    <h4 class="mb-3">
                                        {{$testimonial->name}}
                                    </h4>
                                    <p class="position">{{$testimonial->country}}</p>
                                    <p>
                                        {{$testimonial->testimony}}
                                    </p>
                                </div>
                            </div>
                            @endforeach

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