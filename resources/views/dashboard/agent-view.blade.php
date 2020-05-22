@extends('dashboard.template')

@section('page-title')
 {{$agent->full_name}}
@endsection

@section('main')
    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-user"></i> {{$agent->full_name}} </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn" href="./"><i class="fa fa-pencil-square-o"></i> &nbsp;New Note</a>
            <a class="btn" href="./"><i class="fa fa-handshake-o"></i> &nbsp;Task</a>
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
                  <strong>{{$agent->full_name}}</strong>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3"> <b>Middle Name</b></div>
                    <div class="col-md-9">{{$agent->full_name}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Company</b></div>
                    <div class="col-md-9">ssds</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Access</b></div>
                    <div class="col-md-9">ssds</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Tags</b></div>
                    <div class="col-md-9">ssds</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Emails</b></div>
                    <div class="col-md-9"><a href="#" data-toggle="modal" data-target="#myModal"> sam@gmail.com</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>phone</b></div>
                    <div class="col-md-9">ssds</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>position</b></div>
                    <div class="col-md-9">ssds</div>
                  </div>
                  <!-- check d rest later -->
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <i class="fa fa-pencil-square-o"></i> Notes
                </div>
                <div class="card-body">
                  No Notes
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <i class="fa fa-bandcamp"></i> Events
                </div>
                <div class="card-body">
                  No event
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <i class="fa fa-handshake-o"></i> Deals
                </div>
                <div class="card-body">
                  present
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <i class="fa fa-list"></i> Task
                </div>
                <div class="card-body">
                  Present
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