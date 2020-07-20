@extends('dashboard.template')

@section('page-title')
  New Agent
@endsection

@section('view-style')
<link href="{{ asset('vendors/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/css/daterangepicker.min.css') }}" rel="stylesheet" />
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Create new Agent</li>
    <!-- Breadcrumb Menu-->

  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-note"></i> Create new Agent
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('agents.store') }}" id="addJournalForm">
            @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your First Name" required>
              </div>
              <div class="form-group">
                <label for="company_name">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter your Company Name" required>
              </div>
              <div class="form-group">
                <label for="tel">Cell phone</label>
                <input type="tel" class="form-control" id="tel" name="tel" placeholder="Enter your Cell Number" required>
              </div>
              <div class="form-group">
                <label for="tin">Social Security / TIN Number</label>
                <input type="text" class="form-control" id="tin" name="tin" placeholder="Enter Social Security / TIN Number " required>
              </div>
              <div class="form-group">
                <label for="email">Login Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Username" required>
              </div>
              <div class="form-group">
                <label for="agent_no">Agent Number</label>
                <input type="text" class="form-control" id="agent_no" name="agent_no" placeholder="Agent NO" required value="55000" disabled>
              </div>
              <!-- /.col-sm-6-->
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
              </div>
              <div class="form-group">
                <label for="address">Mailing Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Mailing Address" required>
              </div>
              <div class="form-group">
                <label for="home_no">Home Number</label>
                <input type="tel" class="form-control" id="home_no" name="home_no" placeholder="Enter your Home Number"required>
              </div>
              <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="Date" class="form-control" id="dob" name="dob" required>
              </div>
              <div class="form-group">
                <label for="password">Login Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
              </div>
              <!-- col-sm-6  -->
            </div>
          </div>
          <p>Direct Deposit Information</p>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="bank_name">Bank Name</label>
                <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Bank Name" required>
              </div>
              <div class="form-group">
                <label for="account_name">Account Name</label>
                <input type="text" class="form-control" id="account_name" name="account_name" placeholder="Account Name" required>
              </div>
              <!-- /.col-sm-6-->
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="account_no">Account Number</label>
                <input type="text" class="form-control" id="account_no" name="account_no" placeholder="Account Number" required>
              </div>
              <div class="form-group">
                <label for="routing_no">Routing Number</label>
                <input type="text" class="form-control" id="routing_no" name="routing_no" placeholder="Routing Number" required>
              </div>
              <!-- col-sm-6  -->
            </div>
          </div>
          <div class="form-actions">
            <button type="button" class="btn btn-secondary" onclick="goBack()">
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
<script>
  function goBack(){
    window.history.back();
  }
  $(document).ready( function() {

  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
  $.ajax({
        url: "{{ route('getLastAgentNumber') }}",
        method: "get",
        success: function(data){
          console.log(data);
          $( "#agent_no" ).val(` ${data + 10} `);
        }
    });
    
  });
</script>
@endsection

@section('view-scripts')
<script src="{{ asset('vendors/js/select2.min.js') }}"></script>
<script src="{{ asset('js/views/advanced-forms.js') }}"></script>

@endsection