@extends('dashboard.template')

@section('page-title')
  Event View
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Event Title</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="./calendar.html"><i class="fa fa-calendar"></i></a>
        <a class="btn" href="./"><i class="fa fa-pencil-square-o "></i> &nbsp;New Note</a>
        <a class="btn" href="./"><i class="fa fa-file"></i> &nbsp;File</a>
        <a class="btn" href="./"><i class="fa fa-trash"></i> &nbsp;Delete</a>
      </div>
    </li>
  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <strong>Event Title</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3"> <b>Title</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Start Date</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>End Date</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Category</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Tags</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Participants</b></div>
                <div class="col-md-9"><a href="#" data-toggle="modal" data-target="#myModal"> sam@gmail.com</a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Description</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Location</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Assigned To</b></div>
                <div class="col-md-9">Me</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Participant</b></div>
                <div class="col-md-9">Contact selected</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Deal</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Company</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Task</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <!-- check d rest later -->
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-pencil-square-o "></i> Notes
            </div>
            <div class="card-body">
              No notes recoreded
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <i class="fa fa-file"></i> Documents
            </div>
            <div class="card-body">
              No Present
            </div>
          </div>

        </div>
      </div>
    </div>


  </div>

</div>
<!-- /.conainer-fluid -->
</main>

@endsection