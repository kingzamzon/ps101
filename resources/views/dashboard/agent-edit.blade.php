@extends('dashboard.template')

@section('page-title')
  Edit {{$agent->user->first_name}} Agent
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Edit Agent</li>
    <!-- Breadcrumb Menu-->

  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-note"></i> Edit Agent
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('agents.update', ['agent' => $agent->id]) }}" id="addJournalForm">
            @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="hidden" name="_method" value="PUT">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your First Name" value="{{ $agent->user->first_name }}" required>
              </div>
              <div class="form-group">
                <label for="company_name">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter your Company Name" value="{{ $agent->company_name }}" required>
              </div>
              <div class="form-group">
                <label for="tel">Cell phone</label>
                <input type="tel" class="form-control" id="tel" name="tel" placeholder="Enter your Cell Number" value="{{ $agent->tel }}" required>
              </div>
              <div class="form-group">
                <label for="tin">Social Security / TIN Number</label>
                <input type="text" class="form-control" id="tin" name="tin" placeholder="Enter Social Security / TIN Number " value="{{ $agent->tin }}" required>
              </div>
              <div class="form-group">
                <label for="email">Login Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Username" value="{{ $agent->user->email }}" required>
              </div>
              <div class="form-group">
                <label for="agent_no">Agent Number</label>
              <input type="text" class="form-control" id="agent_no" name="agent_no" placeholder="Agent NO" required value="{{ $agent->agent_no}}" disabled>
              </div>
              <!-- /.col-sm-6-->
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{$agent->user->last_name}}" placeholder="Enter Last Name">
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" class="form-control" placeholder="City" name="city" value="{{ $agent->address->city }}">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" id="state" class="form-control" placeholder="State" name="state" value="{{ $agent->address->state }}">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="zip_code">Zip Code</label>
                    <input type="text" id="zip_code" class="form-control" placeholder="Zip Code" name="zip_code" value="{{ $agent->address->zip_code }}">
                  </div>
                </div>
              </div> 
              <div class="form-group">
                <label for="address">Mailing Address</label>
                <input type="text" class="form-control" id="mail_address" name="mail_address" placeholder="Mailing Address" value="{{ $agent->mail_address }}" required>
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
          <p>Direct Deposit Information</p>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="bank_name">Bank Name</label>
                <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Bank Name" value="{{ $directDepositInfo->bank_name }}" required>
              </div>
              <div class="form-group">
                <label for="account_name">Account Name</label>
                <input type="text" class="form-control" id="account_name" name="account_name" placeholder="Account Name" value="{{ $directDepositInfo->account_name }}" required>
              </div>
              <!-- /.col-sm-6-->
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="account_no">Account Number</label>
                <input type="text" class="form-control" id="account_no" name="account_no" placeholder="Account Number" value="{{ $directDepositInfo->account_no }}" required>
              </div>
              <div class="form-group">
                <label for="routing_no">Routing Number</label>
                <input type="text" class="form-control" id="routing_no" name="routing_no" placeholder="Routing Number" value="{{ $directDepositInfo->routing_no }}" required>
              </div>
              <!-- col-sm-6  -->
            </div>
          </div>
          <div class="form-actions">
            <button type="button" class="btn btn-secondary" onclick="window.history.back()">
              <i class="fa fa-times"></i>
              Cancel
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