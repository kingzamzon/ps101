<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI Pro Bootstrap 4 Admin Template">
  <meta name="author" content="Lukasz Holeczek">
  <meta name="keyword" content="">
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Agent Portal') }}</title>

  <!-- Icons -->
  <link href="{{ asset('vendors/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/css/simple-line-icons.min.css') }}" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card-group">
          <div class="card p-4">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap and necessary plugins -->
  <script src="{{ asset('vendors/js/jquery.min.js') }}"></script>
  <script src="{{ asset('vendors/js/popper.min.js') }}"></script>
  <script src="{{ asset('vendors/js/bootstrap.min.js') }}"></script>

</body>
</html>