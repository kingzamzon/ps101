@extends('dashboard.template')

@section('page-title')
  Chart of Office
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Deals</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="./target.html"><i class="fa fa-eercast"></i> &nbsp;Manage Targets</a>
        <a class="btn" href="./deals-new.html"><i class="fa fa-edit"></i> &nbsp;New</a>

      </div>
    </li>
  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">

      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body p-3 clearfix">
              <i class="fa fa-list bg-primary p-3 font-2xl mr-3 float-left"></i>
              <div class="h5 text-primary mt-2 mb-0">25</div>
              <div class="text-muted text-uppercase font-weight-bold font-xs">List Price</div>
            </div>
          </div>
        </div>
        <!--/.col-->
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body p-3 clearfix">
              <i class="fa fa-cubes bg-info p-3 font-2xl mr-3 float-left"></i>
              <div class="h5 text-primary mt-2 mb-0">50</div>
              <div class="text-muted text-uppercase font-weight-bold font-xs">Wholesale Price</div>
            </div>
          </div>
        </div>
        <!--/.col-->
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body p-3 clearfix">
              <i class="fa fa-dollar bg-warning p-3 font-2xl mr-3 float-left"></i>
              <div class="h5 text-primary mt-2 mb-0">34</div>
              <div class="text-muted text-uppercase font-weight-bold font-xs">Cost</div>
            </div>
          </div>
        </div>
        <!--/.col-->
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body p-3 clearfix">
              <i class="fa fa-line-chart bg-danger p-3 font-2xl mr-3 float-left"></i>
              <div class="h5 text-primary mt-2 mb-0">2</div>
              <div class="text-muted text-uppercase font-weight-bold font-xs">Deals</div>
            </div>
          </div>
        </div>
        <!--/.col-->

      </div>
      <div class="card">
        <div class="card-header">
          <i class="fa fa-handshake-o"></i> Deals
          <div style="float:right;" lass="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-primary btn-sm" href="./deals-new.html"><i class="fa fa-edit"></i> &nbsp;New</a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered datatable">
            <thead>
              <tr>
                <th>Title</th>
                <th>Company</th>
                <th>Close Date</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Stage</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John Joshua</td>
                <td> <a href="./company-view.html">Ghana</a> </td>
                <td>2012/01/01</td>
                <td>2012/01/01</td>
                <td>Active</td>
                <td>Prospect</td>
                <td>
                  <a class="btn btn-success" href="deals-view.html">
                    <i class="fa fa-search-plus "></i>
                  </a>
                  <a class="btn btn-info" href="#">
                    <i class="fa fa-edit "></i>
                  </a>
                  <a class="btn btn-danger" href="#">
                    <i class="fa fa-trash-o "></i>
                  </a>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.conainer-fluid -->
</main>
@endsection