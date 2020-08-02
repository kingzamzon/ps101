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
        <a class="btn" href="{{ route('events-catgeories.index') }}"><i class="icon-layers"></i> &nbsp;Categories</a>
        <a class="btn" href="{{ route('events.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
      </div>
    </li>
  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-calendar"></i> Calendar

          <div style="float:right;" class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-secondary btn-sm mr-3" href="{{ route('events-catgeories.index') }}"><i class="icon-layers"></i> &nbsp;Catgories</a>
            <a class="btn btn-primary btn-sm" href="{{ route('events.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
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
{{-- <script src="{{ asset('js/views/calendar.js') }}"></script> --}}
<script>
$(document).ready( function() {

  $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          })
  $.ajax({
        url: "{{ route('calendar_data') }}",
        method: "get",
        success: function(data){

          // initiate an empty array
          var calendar_data = [];

          // loop through each data and add it to empty array using an object
          $.each(data.public_event, function(i, v) {
            calendar_data.push(
                              {
                                  id: v.id,
                                  title: v.title,
                                  url: `${data.public_event.url}${v.id}`,
                                  start: v.new_start_date
                              },
                            )
            });
            $.each(data.private_event, function(i, v) {
            calendar_data.push(
                              {
                                  id: v.id,
                                  title: v.title,
                                  url: `${data.public_event.url}${v.id}`,
                                  start: v.new_start_date
                              },
                            )
            });
          $(function () {
            $('#calendar').fullCalendar({
                header: {
                  left: 'prev,next today',
                  center: 'title',
                  right: 'year,month,basicWeek,basicDay'
                },
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: calendar_data
              });
            });
        }
    })


})
</script>
@endsection