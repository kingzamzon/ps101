@extends('dashboard.template')

@section('page-title')
  Paychecks
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Paychecks</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="{{ route('paychecks.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
      </div>
    </li>
  </ol>

  <div class="container-fluid">

    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
         <b>Paychecks</b>
          <div style="float:right;" lass="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-primary btn-sm" href="{{ route('paychecks.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Agent Name</th>               
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>52</td>
                <td>John Joshua</td>
                <td>
                  <a class="btn btn-success" href="{{ route('paychecks.show', ['paycheck' => 1]) }}">
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