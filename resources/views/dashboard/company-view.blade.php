@extends('dashboard.template')

@section('page-title')
  Chart of Office
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-building"></i> Company Name</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="./"><i class="fa fa-pencil-square-o"></i> &nbsp;New Note</a>
        <a class="btn" href="./"><i class="fa fa-user"></i> &nbsp;New User</a>
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
              <strong>Company Name</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3"> <b>Name</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Access</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Address</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Phone</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Tags</b></div>
                <div class="col-md-9">sam@gmail.com</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Description</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Website</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Twitter Handle</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Industry</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Num of Employee</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Stock Symbol</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Average Revenue</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Priority</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Identifier</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>VAT Number</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Category</b></div>
                <div class="col-md-9">ssds</div>
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
              No notes recoreded.
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <i class="fa fa-user"></i> Contacts
            </div>
            <div class="card-body">
              No Present
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