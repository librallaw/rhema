<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/inverse/index.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Oct 2018 14:57:27 GMT -->
    @include("admin.includes.header");


<body>
    >
    @include("admin.includes.nav");

    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <!-- .col -->
                    <!-- /.col -->
                    <div class="col-md-12 col-sm-6">
                        <div class="row">
                            <!-- .col -->
                            <div class="col-md-3 col-sm-12">
                                <div class="white-box text-center bg-inverse">
                                    <h1 class="text-white counter">{{count($payments)}}</h1>
                                    <p class="text-white">Total Payments</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-3 col-sm-12">
                                <div class="white-box text-center bg-success">
                                    <h1 class="text-white counter">{{count($sPayments)}}</h1>
                                    <p class="text-white">Successful Payments</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-3 col-sm-12">
                                <div class="white-box text-center bg-warning">
                                    <h1 class="counter text-white">{{count($pPayments)}}</h1>
                                    <p class="text-white">Pending Payments</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="white-box text-center bg-danger">
                                    <h1 class="counter text-white">{{count($fPayments)}}</h1>
                                    <p class="text-white">Failed Payments</p>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
                <!--row -->
                <!-- <div class="row">
                    <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box m-b-15">
                            <h3 class="box-title">Tax Deduction</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="text-info">$647</h1>
                                    <p class="text-muted">APRIL 2016</p>
                                    <b>(150 Sales)</b>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sparkline2dash" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box m-b-15">
                            <h3 class="box-title">Shipment</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="text-megna">$347</h1>
                                    <p class="text-muted">APRIL 2016</p>
                                    <b class="">(150 Sales)</b>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sales1" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box m-b-15">
                            <h3 class="box-title">Revenue Generate</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="text-danger">$647</h1>
                                    <p class="text-muted">APRIL 2016</p>
                                    <b>(150 Sales)</b>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sparkline2dash2" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box m-b-15">
                            <h3 class=" box-title">Order Got</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="">$347</h1>
                                    <p class="text-muted">APRIL 2016</p>
                                    <b class="">(150 Sales)</b>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sales12" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
               
                <!--/.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Recent Payments</h3>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Product</th>
                                            <th>Email</th>
                                            <th>Initial Time</th>
                                            <th>Complete Time</th>
                                            <th>Amount</th>
                                            <th>Transaction Date</th>
                                            <th class="text-center">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($rPayments as $payment)
                                        <tr>
                                            <td>{{$payment->name}}</td>
                                            <td>{{$payment->phone}}</td>
                                            <td>{{$payment->product}}</td>
                                            <td>{{$payment->email}}</td>
                                            <td>{{date('d-m-Y', $payment->init_time)}}</td>
                                            <td>{{date('d-m-Y', $payment->complete_time)}}</td>
                                            <td>{{$payment->amount}}</td>
                                            <td>{{$payment->transaction_date}}</td>

                                            <td class="text-center">
                                                @if($payment->status == 'pending')
                                                    <span class="label label-rouded label-warning">Pending</span>
                                                @elseif($payment->status == 'success')
                                                    <span class="label label-rouded label-success">Success</span>
                                                @else
                                                    <span class="label label-rouded label-danger">{{$payment->status}}</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .right-sidebar -->
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
      @include("admin.includes.footer");
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    @include("admin.includes.footer2");

    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function() {--}}
            {{--$.toast({--}}
                {{--heading: 'Welcome to Fresh Fire Chapel Admin.',--}}
                {{--text: 'Customise and edit anything.',--}}
                {{--position: 'top-right',--}}
                {{--loaderBg: '#ff6849',--}}
                {{--icon: 'info',--}}
                {{--hideAfter: 3500,--}}
                {{--stack: 6--}}
            {{--})--}}
        {{--});--}}
    {{--</script>--}}
    <!--Style Switcher -->
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/inverse/index.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Oct 2018 14:59:06 GMT -->
</html>
