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
                                <i class="fas fa-envelope-open"></i> <span>Info@rhemaforliving.org</span>
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
                <a href="{{route("showSponsorship")}}" class="btn btn-theme circle effect standard btn-sm" style="background:#bc0002">Sponsor
                    Now</a>
            </div>
        </div>
    </div>
</div>



<header>

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="assets/img/logo.png" class="logo logo-display" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="#" data-out="#">

                    <li class="active">
                        <a href="{{ route('home') }}">Home</a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}">About us</a>
                    </li>

                    <li>
                        <a href="{{ route('outreaches') }}">Outreaches</a>
                    </li>

                    <li>
                        <a href="{{ route('single') }}">Rhema Speaks</a>
                    </li>

                    <li>
                        <a href="{{route("showSponsorship")}}">Sponsorship</a>
                    </li>

                    <li>
                        <a href="{{route("buy")}}">Buy Rhema</a>
                    </li>




                    <li>
                        <a href="{{ route('contact') }}">contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>

            <div class="widget">
                <h4>About Us</h4>
                <p>
                    OUR VISION
                    God gave a mandate to his servant, Apostle Johnson Suleman: “Wipe out tears and restore men back to their destinies; through the revelation of the Word, the manifestation of Power and the reality of the Holy Spirit.”
                    This divine mandate is the drive behind the invasion of several nations across the globe with the gospel of Jesus Christ. But, with the passion and ever-increasing burden for the lost and the oppressed, the need for media technology became....

                </p>
            </div>
            <div class="widget">
                <h4>Office Location</h4>
                <ul>
                    <li>
                        <i class="fas fa-phone"></i>
                        +123 456 7890
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        Nigeria, Abuja
                    </li>
                    <li>
                        <i class="fas fa-envelope-open"></i>
                        info@rhemaforliving.org
                    </li>
                </ul>
            </div>
            <div class="widget opening-hours">
                <h4>Opening Hours</h4>
                <ul>
                    <li>
                        Mon - Fri <span>9:00 - 21:00</span>
                    </li>
                    <li>
                        Saturday <span>10:00 - 16:00</span>
                    </li>
                </ul>
            </div>
            <div class="widget social">
                <h4>Like Us On</h4>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>
