@extends('dashboard.template')

@section('page-title')
  New Statement
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">New Statement</li>
    <!-- Breadcrumb Menu-->

  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-note"></i> New Statement
        </div>
        <div class="card-body">
 
          <div class="form-group">
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="agent_number">Agent Number </label>
                <input type="text" class="form-control" id="agent_name" placeholder="Eg:1234" name="agent_number">
              </div>
              <div class="form-group col-sm-6">
                <label for="agent_name">Agent Name</label>
                <input type="text" class="form-control" id="agent_name" placeholder="Eg: Billy Smith"
                  name="agent_name">
              </div>
              <div class="form-group col-md-6">
                <label for="full_name">Social Number </label>
                <input type="text" class="form-control" id="fill_name" placeholder="Eg: 12345" name="full_name">
              </div>
              <div class="form-group col-md-6">
                <label for="email">Mailing Address </label>
                <input type="text" class="form-control" id="email" placeholder="Enter your name" name="email">
              </div>
              <div class="form-group col-md-6">
                <label for="full_name">Date Of Paycheck</label>
                <input type="date" class="form-control" id="fill_name" name="full_name">
              </div>
              <div class="form-group col-md-6">
                <label for="email">Direct Deposite Number</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your name" name="email">
              </div>
              <div class="form-group col-md-6">
                <label for="email">Direct Deposit Date</label>
                <input type="date" class="form-control" id="email" placeholder="Enter your name" name="email">
              </div>
            </div>
          </div>
          <div class="form-actions">
            <button type="button" class="btn btn-secondary">
              <i class="fa fa-times"></i>
              Discard
            </button>
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-check"></i>
              Save
            </button>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- /.conainer-fluid -->
</main>
@endsection