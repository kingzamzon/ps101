@extends('dashboard.template')

@section('page-title')
  {{$agent->user->name}}
@endsection

@section('main')
    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-user"></i> {{$agent->user->name}} </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn" href="./"><i class="fa fa-pencil-square-o"></i> &nbsp;New Note</a>
            <a class="btn" href="{{ route('paychecks.create') }}"><i class="fa fa-handshake-o"></i> &nbsp;New Statement</a>
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
                  <strong>{{$agent->user->name}}</strong>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3"> <b>Full Name</b></div>
                    <div class="col-md-9">{{$agent->user->name}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Username</b></div>
                    <div class="col-md-9">{{$agent->user->username}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Date Of Birth</b></div>
                    <div class="col-md-9">{{$agent->user->date_of_birth}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Company</b></div>
                    <div class="col-md-9">{{$agent->company_name}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Cell phone</b></div>
                    <div class="col-md-9">{{$agent->tel}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Social Security / TIN Number</b></div>
                    <div class="col-md-9">{{$agent->tin}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Home Number</b></div>
                    <div class="col-md-9">{{$agent->home_no}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Mailing Address</b></div>
                    <div class="col-md-9">{{$agent->address}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Created At</b></div>
                    <div class="col-md-9">{{$agent->created_at}}</div>
                  </div>
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