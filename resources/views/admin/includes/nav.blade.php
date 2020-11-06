<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part">
                <a class="logo" href="{{url('/')}}">
                    <b>
                  <img src="/images/favicon.png" alt="RHEMA" class="light-logo" />
                    </b>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                <!-- /.dropdown -->
                <li class="hidden-xs"><a href="javascript:void(0)">New</a></li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <!-- input-group -->
                    <!-- /input-group -->
                </li>
                <li><a href="{{url('/viewDashboard')}}" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Dashboard</span></a></li>

                <li>
                <li><a href="{{url('/view/payments')}}" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Payments</span></a></li>

                <li>
                    <a href="#" class="waves-effect"><i data-icon="]" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Home Banner<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('/view/banner') }}">All Banners</a></li>
                        <li><a href="{{ url('/view/UploadBanner') }}">Add Banner</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i data-icon="]" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Testimonial<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('/view/testimonial') }}">All Testimonials</a></li>
                        <li><a href="{{ url('/view/uploadTestimonial') }}">Add Testimonial</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i data-icon="]" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Author<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('/view/author') }}">Author</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="waves-effect"><i data-icon="]" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Rhema<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('/view/rhema') }}">All Rhema</a></li>
                        <li><a href="{{ url('/view/uploadRhema') }}">Add Rhema</a></li>
                    </ul>
                </li>


                <li>
                    <a href="#" class="waves-effect"><i data-icon="]" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Rhema Speaks<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('/view/uploadSpeak') }}">Add Rhema Speaks</a></li>
                        <li><a href="{{ url('/view/speak') }}">All Rhema Speaks</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i data-icon="]" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Reasons<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('/view/uploadReason') }}">Add Reason</a></li>
                        <li><a href="{{ url('/view/reason') }}">All Reasons</a></li>

                    </ul>
                </li>
                <li><a href="{{url('/logout')}}" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="w"></i> <span class="hide-menu">Logout</span></a></li>

            </ul>
        </div>
    </div>
</div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->