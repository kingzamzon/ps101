@extends('dashboard.template')

@section('page-title')
  Calendar
@endsection

@section('view-style')
<link href="{{ asset('vendors/css/fullcalendar.min.css') }}" rel="stylesheet">
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      Calendar
    </li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="./event-new.html"><i class="fa fa-edit"></i> &nbsp;New</a>
      </div>
    </li>
  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-calendar"></i> Calendar

          <div style="float:right;" class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-primary btn-sm" href="./event-new.html"><i class="fa fa-edit"></i> &nbsp;New</a>
          </div>
        </div>
        <div class="card-body">
          <div id="calendar"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.conainer-fluid -->
</main>

@endsection

@section('view-scripts')
<script src="{{ asset('vendors/js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('vendors/js/gcal.min.js') }}"></script>
<script src="{{ asset('js/views/calendar.js') }}"></script>

@endsection