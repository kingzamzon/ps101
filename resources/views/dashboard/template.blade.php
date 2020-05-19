<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Account Management System">
  <meta name="author" content="StartUpClerk">
  <meta name="keyword" content=",">
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('page-title') | Agent Portal</title>

  <!-- Icons -->
  <link href="{{ asset('vendors/css/flag-icon.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/css/simple-line-icons.min.css') }}" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- Styles required by this views -->
  <link href="{{ asset('vendors/css/daterangepicker.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/css/gauge.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/css/toastr.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/css/select2.min.css') }}" rel="stylesheet">
  @yield('view-style')
  <style>
    @media print {
      .no-print { display:none}
    }
    </style>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  @include('dashboard.header')
  <div class="app-body">  

       <!-- javascript files -->
  @include('dashboard.scripts')
  @yield('view-scripts')
  
      @include('dashboard.sidebar')
    <!-- Main content -->
    @yield('main')

    {{-- @include('dashboard.aside') --}}

    <script>
      var name = "sams";
      $(function(){ 
        toastr.success(name, 'Success' , {
        closeButton: true,
        progressBar: true,
        });
      })
      </script>
  
  <!-- CoreUI Pro main scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

  </div>
  @include('dashboard.footer')

 
</body>
</html>