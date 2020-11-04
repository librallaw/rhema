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
                    @foreach($banners as $banner)
                    <li class="cs cover-image text-center text-md-left">
                        <img src="images/slide01.jpg" alt="img">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="intro_layers_wrapper">
                                        <div class="img-layer animate" data-animation="fadeInLeft">
                                            <img src="/images/file/{{$banner->image}}" alt="img">
                                        </div>
                                        <div class="intro_layers">

                                            <div class="intro_layer" data-animation="fadeInRight">
                                                <h1>{{$banner->title}}</h1>
                                            </div>
                                            <div class="intro_layer intro_feature_word" data-animation="fadeInRight">
                                                <p>Daily Devotional</p>
                                            </div>
                                            <div class="intro_layer" data-animation="fadeInRight">
                                                <!--<p>Your daily guide to an all-round successful living</p>-->
                                                <p>{{$banner->body}}</p>
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
                        @endforeach
                </ul>
            </div> <!-- eof flexslider -->
        </section>


        <section id="author" class="ls s-overlay mobile-overlay s-py-90 s-py-xl-150 section-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        @foreach($authors as $author)
                        <div class="divider-xl-200"></div>
                        <p class="mb-2 color-dark">Meet the Authors</p>
                        <h2 class="special-heading">
                            <span>{{$author->name}}</span>
                        </h2>
                        <div class="divider-40"></div>
                        <p class="excerpt">
                            {{\Illuminate\Support\Str::limit($author->body, 350, '........')}}

                        </p>
                        <div class="divider-40"></div>

                        <div class="divider-40"></div>
                        <div class="columns-two">
                            <a href="{{route('author')}}" class="btn btn-maincolor">Read More</a>

                        </div>
                        <div class="divider-xl-150"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="ls ms s-py-90 s-py-xl-160 c-gutter-100">
            <div class="container">
                <div class="row align-center">
                    @foreach($rhemas as $rhema)
                    <div class="col-lg-6">
                        <div class="video-shortcode">
                            <img src="images/file/{{$rhema->image}}" alt="img">
                            <a href="#" class="photoswipe-link "  data-index="1"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="divider-60 divider-lg-0"></div>
                        <h3 class="special-heading">
                            <span>{{$rhema->title}} </span>
                        </h3>
                        <div class="divider-40"></div>
                        <p>
                            {{\Illuminate\Support\Str::limit($rhema->body, 300, '........')}}
                        </p>

                        <a href="{{route('about')}}" class="btn btn-maincolor">Read More</a>

                    </div>
                    @endforeach
                </div>
                <div class="row align-center">
                    @foreach($reasons as $reason)
                    <div class="col-12">
                        <div class="divider-80 divider-xl-120"></div>
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="divider-60 divider-lg-0"></div>
                        <h3 class="special-heading">
                            <span>{{$reason->title}}</span>
                        </h3>
                        <div class="divider-40"></div>
                        <ul class="list-styled">
                            <li>
                                {{$reason->reason1}}
                            </li>
                            <li>
                                {{$reason->reason2}}
                            </li>
                            <li>
                                {{$reason->reason3}}
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="border-r-def overflow-hidden">
                            <img src="images/file/{{$reason->image}}" alt="img">
                        </div>
                    </div>
                    @endforeach
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