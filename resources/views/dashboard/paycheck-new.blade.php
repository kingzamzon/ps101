@extends('dashboard.template')

@section('page-title')
  New Paycheck
@endsection

@section('view-style')
<link href="{{ asset('vendors/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/css/daterangepicker.min.css') }}" rel="stylesheet" />
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">New Paycheck</li>
    <!-- Breadcrumb Menu-->

  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-note"></i> New Paycheck
        </div>
        <div class="card-body">
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          <form method="POST" action="{{ route('paychecks.store') }}" id="addJournalForm">
            @csrf
            <div class="form-group">
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="agent_id">Agent Name</label>
                  <select id="select2-1" class="form-control select2-single" name="agent_id">
                    @if($agents->count() > 0)
                      @foreach($agents as $agent)
                        <option value="{{ $agent->id }}">{{ $agent->user->name }}</option>
                      @endforeach
                    @endif
                  </select>
                </div>
                <div class="form-group col-sm-6">
                  <label for="company_id">Propspect Name</label>
                  <select id="select2-5" class="form-control select2-single" name="company_id">
                    @if($companys->count() > 0)
                      @foreach($companys as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                      @endforeach
                    @endif
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="total_card_process">Total card Process</label>
                  <input type="text" class="form-control" id="total_card_process" placeholder="Total card Process" name="total_card_process">
                </div>
                <div class="form-group col-md-6">
                  <label for="amount_commission">Amount Commission</label>
                  <input type="text" class="form-control" id="amount_commission" placeholder="Amount Commission" name="amount_commission">
                </div>
                <div class="form-group col-md-6">
                  <label for="total_employee">Total Number of Employee</label>
                  <input type="text" class="form-control" id="total_employee" placeholder="Total Number of Employee" name="total_employee">
                </div>
                <div class="form-group col-md-6">
                  <label for="total_benefit_plan">Total Number of Benefit Plans</label>
                  <input type="text" class="form-control" id="total_benefit_plan" placeholder="Total Number of Benefit Plans" name="total_benefit_plan">
                </div>
                <div class="form-group col-md-6">
                  <label for="commision_benefit_card">Commission From Benefit card</label>
                  <input type="text" class="form-control" id="commision_benefit_card" placeholder="Commission From Benefit card" name="commision_benefit_card">
                </div>
                  <fieldset class="form-group col-md-6">
                    <label for="paycheck_date">Date Of Paycheck</label>
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </span>
                    <input type="text" class="form-control"  name="paycheck_date" />
                    </div>
                  </fieldset>
                <div class="form-group col-md-6">
                  <label for="deposit_no">Direct Deposite Number</label>
                  <input type="text" class="form-control" id="deposit_no" placeholder="Direct Deposite Number" name="deposit_no">
                </div>
                  <fieldset class="form-group col-md-6">
                    <label for="deposit_date">Direct Deposit Date</label>
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </span>
                    <input type="text" class="form-control"  name="deposit_date" />
                    </div>
                  </fieldset>
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

@section('view-scripts')
<script src="{{ asset('vendors/js/select2.min.js') }}"></script>
<script src="{{ asset('js/views/advanced-forms.js') }}"></script>

@endsection