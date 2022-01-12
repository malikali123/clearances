<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="نظام التخليص الجمركي">
    <meta name="keywords"
          content="تخليص بضا ئع وسيارات وجميع انواع الواردات">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset( 'storage/app/public/'.\App\Models\Setting::first()->LOGO ?? 'public/img/logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset( 'storage/app/public/'.\App\Models\Setting::first()->LOGO ?? 'public/img/logo.png') }}">
    {{--<link--}}
    {{--href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"--}}
    {{--rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/fonts.css')}}">

    {{--<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"--}}
    {{--rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/line-awesome/css/line-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/plugins/animate/animate.css')}}">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/core/colors/palette-gradient.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/pages/chat-application.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/custom-rtl.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/extensions/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/plugins/extensions/toastr.css')}}">

    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/extensions/datedropper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/extensions/timedropper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/file-uploaders/dropzone.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/plugins/file-uploaders/dropzone.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/style-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END Custom CSS-->
    @yield('style')
    {{--<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">--}}
    <style>
        body {
            font-family: 'Cairo', sans-serif !important;
            padding: 0px !important;
        }

        .header-navbar {
            height: 4rem !important;
        }

        body.vertical-layout.vertical-menu.menu-expanded .main-menu {
            width: 220px;
        }

        body.vertical-layout.vertical-menu.menu-expanded .navbar .navbar-container {
            margin-right: 0px;
        }

        body.vertical-layout.vertical-menu.menu-expanded .navbar .navbar-header {
            float: right;
            width: 215px;
        }

        body.vertical-layout.vertical-menu.menu-expanded .content, body.vertical-layout.vertical-menu.menu-expanded .footer {
            margin-right: 0px;
        }

        .main-menu.menu-light .navigation > li ul li > a {
            padding: 5px 25px 5px 8px !important;
            font-weight: 500;
            color: #4c4a4a;
            margin: 2px;
            background: rgb(246 247 251 / 72%);
            transition: all .5s ease-in-out;
        }

        .main-menu.menu-light .navigation > li.open .hover > a,
        .main-menu.menu-light .navigation > li .active > a{
            -webkit-transform: translateX(3px);
            -moz-transform: translateX(4px);
            -ms-transform: translateX(4px);
            -o-transform: translateX(4px);
            transform: translateX(4px);
            color: #6f3005!important;
            background: #ffffff!important;
            -webkit-transform: translateX(3px);
            border-left: 5px solid #6f3005;
        }
        .table th, .table td {
            padding: 0.2rem;
            white-space: nowrap;
            font-size: 12px;
            text-align: center;
            vertical-align: middle;
            border: 1px dashed #000;
            color: #000;
            padding: 5px;
        }
        .table thead th {
            vertical-align: bottom;
            border: 1px solid #000 !important;
            background: #ffffff;
            color: #000;
            padding: 5px;
        }

        .no-bor thead th {
            border: 1px solid #000 !important;
            border-left: 0px solid #000 !important;
            margin-left: 10px;

        }

        .bg-info{
            background: #6f3005!important;
        }

        .card {
            box-shadow: none;
            margin-bottom: 0px;
        }

        body > div.app-content.content{
            background-color: #ffffff !important
        }
    </style>
</head>
<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->


@yield('content')

<!-- BEGIN VENDOR JS-->
<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
{{-- <script src="{{asset('assets/admin/vendors/js/editors/ckeditor/ckeditor.js')}}" type="text/javascript"></script> --}}
<script src="{{asset('assets/admin/vendors/js/extensions/toastr.min.js')}}" type="text/javascript"></script>

<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/tables/datatable/datatables.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"
        type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/extensions/datedropper.min.j}" ts')}ype="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/extensions/dropzone.min.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('assets/admin/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/core/app.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
{{-- <script src="{{asset('assets/admin/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script> --}}
<script src="{{asset('assets/admin/js/scripts/extensions/toastr.js')}}" type="text/javascript"></script>


<script src="{{asset('assets/admin/js/scripts/tables/datatables/datatable-basic.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/ui/prism.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/pages/email-application.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="{{asset('assets/admin/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
{{-- <script src="{{asset('assets/admin/vendors/js/extensions/jquery.knob.min.js')}}" type="text/javascript"></script> --}}
<script src="{{asset('assets/admin/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
{{-- <script src="{{asset('assets/admin/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script> --}}
<script src="{{asset('assets/admin/vendors/js/charts/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN PAGE LEVEL JS-->
{{-- <script src="{{asset('assets/admin/js/scripts/cards/card-statistics.js')}}" type="text/javascript"></script> --}}
<!-- END PAGE LEVEL JS-->

<script src="{{asset('assets/admin/js/admin.js')}}" type="text/javascript"></script>
@yield('script')
</body>
</html>
