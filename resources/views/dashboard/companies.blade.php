@extends('dashboard.template')

@section('page-title')
  Companies
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Companies</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="./company-new.html"><i class="fa fa-edit"></i> &nbsp;New</a>
      </div>
    </li>
  </ol>

  <div class="container-fluid">

    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          Companies
          <div style="float:right;" lass="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-primary btn-sm" href="./company-new.html"><i class="fa fa-edit"></i> &nbsp;New</a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered datatable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John Joshua</td>
                <td>2012/01/01</td>
                <td>
                  <a class="btn btn-success" href="company-view.html">
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