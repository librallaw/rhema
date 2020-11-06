<script src="{{asset('/admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{asset('/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{asset('/admin/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('/admin/js/waves.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('/admin/js/custom.min.js')}}"></script>
<script src="{{asset('/admin/js/jasny-bootstrap.js')}}"></script>
<!--Style Switcher -->
<script src="{{asset('/admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script src="{{asset('/admin/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
<!--Counter js -->
<script src="{{asset('/admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{asset('/admin/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
<!--Morris JavaScript -->
<script src="{{asset('/admin/plugins/bower_components/raphael/raphael-min.js')}}"></script>
<script src="{{asset('/admin/plugins/bower_components/morrisjs/morris.js')}}"></script>
<script src="{{asset('/admin/js/dashboard1.js')}}"></script>
<script src="{{asset('/admin/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('/admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('/admin/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js')}}"></script>
<script src="{{asset('/admin/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
<script src="{{asset('/admin/plugins/bower_components/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('/admin/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js')}}"></script>
<script src="{{asset('/admin/plugins/bower_components/custom-select/custom-select.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
<script src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
<script>
    // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({

        todayHighlight: true
    });

</script>