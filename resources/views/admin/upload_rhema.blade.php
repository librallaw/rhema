<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/inverse/upload.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Oct 2018 15:01:03 GMT -->
@include("admin.includes.header");

<body class="fix-sidebar">
    <!-- Preloader -->

    @include("admin.includes.nav");

    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">About Rhema</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">About Rhema</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!--.row-->
                <div class="row">
                    @include('admin.includes.alert');
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">About Rhema</h3>
                            <p class="text-muted m-b-30 font-13"> Upload About Rhema</p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post" action="{{ route('uploadRhema') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Title</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-text"></i></div>
                                                <input type="text" class="form-control" id="exampleInputTitle1" placeholder="Title" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Body</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-text"></i></div>
                                                <textarea cols="20" rows="4" placeholder="Body" name="body" class="ckeditor form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputImage">Upload Image</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-image"></i></div>
                                                <input type="file" class="form-control" id="exampleInputImage" name="image">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-rounded btn-outline btn-block">
                                            <i class="ti-upload"></i>  <span>Submit</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
            </div>
            <!-- /.container-fluid -->
        @include("admin.includes.footer");
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    @include("admin.includes.footer2");

</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/inverse/upload.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Oct 2018 15:01:03 GMT -->
</html>
