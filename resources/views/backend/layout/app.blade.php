<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Blog Admin | Yönetim</title>

    <link rel="stylesheet" href="{{ asset('tema/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('tema/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('tema/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('tema/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('tema/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('tema/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tema/css/vertical-layout-light/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('tema/images/favicon.png') }}" />
    @yield('customcss')
</head>
<body>
  <div class="container-scroller">

    @include('backend.inc.header')

    <div class="container-fluid page-body-wrapper">
    @include('backend.inc.sidebar')

       <div class="content-wrapper">
            @yield('content')
       </div>   
    </div>

    @include('backend.inc.footer')
    
  </div>
  
    <script src="{{ asset('tema/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('tema/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('tema/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('tema/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('tema/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('tema/js/off-canvas.js') }}"></script>
    <script src="{{ asset('tema/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('tema/js/template.js') }}"></script>
    <script src="{{ asset('tema/js/settings.js') }}"></script>
    <script src="{{ asset('tema/js/todolist.js') }}"></script>
    <script src="{{ asset('tema/js/dashboard.js') }}"></script>
    <script src="{{ asset('tema/js/Chart.roundedBarCharts.js') }}"></script>
    @yield('customjs')

</body>

</html>

