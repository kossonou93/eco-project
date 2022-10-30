@include('sweetalert::alert')
<script src="{{asset('admin/js/core/jquery.3.2.1.min.js')}}"></script>
<script>
    setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
</script>
<script src="{{asset('admin/js/core/popper.min.js')}}"></script>
<script src="{{asset('admin/js/core/bootstrap.min.js')}}"></script>
<!-- jQuery UI -->
<script src="{{asset('admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
<!-- Moment JS -->
<script src="{{asset('admin/js/plugin/moment/moment.min.js')}}"></script><!-- DateTimePicker -->
<script src="{{asset('admin/js/plugin/datepicker/bootstrap-datetimepicker.min.js')}}"></script>
<!-- Bootstrap Toggle -->
<script src="{{asset('admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>
<!-- jQuery Scrollbar -->
<script src="{{asset('admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
<!-- Azzara JS -->
<script src="{{asset('admin/js/ready.min.js')}}"></script>
<!-- Azzara DEMO methods, don't include it in your project! -->
<script src="{{asset('admin/js/setting-demo.js')}}"></script>
<script>
    $('#datepicker').datetimepicker({
        format: 'MM/DD/YYYY',
    });
</script>