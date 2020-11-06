<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
{{--<link rel="icon" type="image/png" sizes="16x16" href="admi/plugins/images/favicon.png">--}}

    <title>Rhema for Living</title>
<!-- Bootstrap Core CSS -->
<link href="{{url('/admin/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{url('/admin/css/animate.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{url('/admin/css/style.css')}}" rel="stylesheet">
<!-- color CSS -->
<link href="{{url('/admin/css/colors/default.css')}}" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<section id="wrapper" class="login-register">
    @include('admin.includes.alert');

    <div class="login-box">
    <div class="white-box">
      <form class="form-horizontal form-material" id="loginform" action="{{route('register')}}" method="POST">
        @csrf
        <h3 class="box-title m-b-20">Sign In</h3>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Name" name="name">
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email" name="email">
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="password" required="" placeholder="Password" name="password">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Already have an account? <a href="{{route('viewLogin')}}" class="text-primary m-l-5"><b>Sign In</b></a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="{{url('/admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{url('/admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{url('/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>

<!--slimscroll JavaScript -->
<script src="{{url('/admin/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{url('/admin/js/waves.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{url('/admin/js/custom.min.js')}}"></script>
<!--Style Switcher -->
<script src="{{url('/admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>
