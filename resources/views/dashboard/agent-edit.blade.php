@extends('dashboard.template')

@section('page-title')
  New Company
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Create new Company</li>
    <!-- Breadcrumb Menu-->

  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-note"></i> Create new Company
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('agents.update', ['agent' => $agent->id]) }}" id="addJournalForm">
            @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="hidden" name="_method" value="PUT">
                <label for="first_name">First Name</label>
              <input type="text" class="form-control" id="first_name" name="first_name" value="{{$agent->user->first_name}}" placeholder="Enter your First Name">
              </div>
              <div class="form-group">
                <label for="company_name">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name" value="{{$agent->company_name}}" placeholder="Enter your Company Name">
              </div>
              <div class="form-group">
                <label for="tel">Cell phone</label>
                <input type="tel" class="form-control" id="tel" name="tel" value="{{$agent->tel}}" placeholder="Enter your Cell Number">
              </div>
              <div class="form-group">
                <label for="tin">Social Security / TIN Number</label>
                <input type="text" class="form-control" id="tin" name="tin"  value="{{$agent->tin}}" placeholder="Enter Social Security / TIN Number ">
              </div>
              <div class="form-group">
                <label for="email">Login Email</label>
                <input type="text" class="form-control" id="email" name="email"  value="{{$agent->user->email}}" placeholder="Enter Username">
              </div>
              <!-- /.col-sm-6-->
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{$agent->user->last_name}}" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label for="address">Mailing Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$agent->address}}" placeholder="Mailing Address">
              </div>
              <div class="form-group">
                <label for="home_no">Home Number</label>
                <input type="tel" class="form-control" id="home_no" name="home_no" value="{{$agent->home_no}}" placeholder="Enter your Home Number">
              </div>
              <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="Date" class="form-control" id="dob" name="dob" value="{{$agent->user->date_of_birth}}">
              </div>
              <div class="form-group">
                <label for="password">Login Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" >
              </div>
              <!-- col-sm-6  -->
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
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /.conainer-fluid -->
</main>
@endsection