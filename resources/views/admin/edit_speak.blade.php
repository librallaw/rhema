<!DOCTYPE html>
<html lang="en">


@include("admin.includes.header");

<body class="fix-sidebar">

    @include("admin.includes.nav");

    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Rhema Speaks</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Rhema Speaks</li>
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
                            <h3 class="box-title m-b-0">Rhema Speaks</h3>
                            <p class="text-muted m-b-30 font-13"> Edit Rhema Speak</p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post" action="{{url('/edit/speak/'.$speak->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Title</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-text"></i></div>
                                                <input type="text" class="form-control" id="exampleInputTitle1" value="{{$speak->title}}" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTitle">SubTitle</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-text"></i></div>
                                                <input type="text" class="form-control" id="exampleInputTitle1" value="{{$speak->subtitle}}" name="subtitle">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Body</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-text"></i></div>
                                                <textarea cols="20" rows="4" name="body" class="ckeditor form-control">{{$speak->body}}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputImage">Upload Image</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-image"></i></div>
                                                <div class="white-box">
                                                    <img src="/images/file/{{$speak->image}}" alt="banner" style="height: 100px; width: 100px;"/>
                                                </div>
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

</html>
