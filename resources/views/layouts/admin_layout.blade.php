
<!DOCTYPE html>
<html lang="en">

@include('common.admin_head')

    <body>
      <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        @include('common.admin_sidebar')
        <div class="main-panel">
            @include('common.admin_header')
            @yield('content')
            @include('common.admin_footer')
        </div>
    </div>
    @include('common.setting')
</body>
<!--   Core JS Files   -->
<script src="{{ url('public/admin/assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ url('public/admin/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ url('public/admin/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ url('public/admin/assets/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Chartist Plugin  -->
<script src="{{ url('public/admin/assets/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ url('public/admin/assets/js/plugins/bootstrap-notify.js') }}"></script>
<!--  Share Plugin -->
<script src="{{ url('public/admin/assets/js/plugins/jquery.sharrre.js') }}"></script>
<!--  jVector Map  -->
<script src="{{ url('public/admin/assets/js/plugins/jquery-jvectormap.js') }}" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ url('public/admin/assets/js/plugins/moment.min.js') }}"></script>
<!--  DatetimePicker   -->
<script src="{{ url('public/admin/assets/js/plugins/bootstrap-datetimepicker.js') }}"></script>
<!--  Sweet Alert  -->
<script src="{{ url('public/admin/assets/js/plugins/sweetalert2.min.js') }}" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="{{ url('public/admin/assets/js/plugins/bootstrap-tagsinput.js') }}" type="text/javascript"></script>
<!--  Sliders  -->
<script src="{{ url('public/admin/assets/js/plugins/nouislider.js') }}" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="{{ url('public/admin/assets/js/plugins/bootstrap-selectpicker.js') }}" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="{{ url('public/admin/assets/js/plugins/jquery.validate.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ url('public/admin/assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
<!--  Bootstrap Table Plugin -->
<script src="{{ url('public/admin/assets/js/plugins/bootstrap-table.js') }}"></script>
<!--  DataTable Plugin -->
<script src="{{ url('public/admin/assets/js/plugins/jquery.dataTables.min.js') }}"></script>
<!--  Full Calendar   -->
<script src="{{ url('public/admin/assets/js/plugins/fullcalendar.min.js') }}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ url('public/admin/assets/js/light-bootstrap-dashboard.js?v=2.0.1') }}" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ url('public/admin/assets/js/demo.js') }}"></script>

@if(Session::has('flash_success'))
    <script type="text/javascript">
        demo.showNotificationCommonSuccess("{{ Session::get('flash_success') }}");
    </script>
@endif

@if(Session::has('flash_error'))
    <script type="text/javascript">
        demo.showNotificationCommonError("{{ Session::get('flash_error') }}");
    </script>
@endif
<!-- Facebook Pixel Code Don't Delete -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    } catch (err) {
        console.log('Facebook Track Error:', err);
    }
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->

@yield('scripts')

</html>
