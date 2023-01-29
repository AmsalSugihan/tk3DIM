<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ url('/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ url('images/favicon.ico') }}" />
  </head>
  <body>

        <main>
            @yield('content')
        </main>

    <script src="{{ url('/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ url('/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
  </body>
</html>