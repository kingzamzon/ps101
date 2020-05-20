@extends('dashboard.template')

@section('page-title')
  Deal
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-handshake-o"></i> Deal Title</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="./"><i class="fa fa-pencil-square-o"></i> &nbsp;New Note</a>
        <a class="btn" href="./products-new.html"><i class="fa fa-cart-plus"></i> &nbsp;New Product</a>
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
              <strong>Deal Title</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3"> <b>Title</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Access</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Assigned To</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Company</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Products</b></div>
                <div class="col-md-9">sam@gmail.com</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Contacts</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Close Date</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Tags</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Description</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Probability</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Amount</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Commission</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Stage</b></div>
                <div class="col-md-9">ssds</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Type</b></div>
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
              <i class="fa fa-cart-plus"></i> Products
            </div>
            <div class="card-body">
              present
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