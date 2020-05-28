@extends('dashboard.template')

@section('page-title')
  New Statement
@endsection

@section('view-style')
<link href="{{ asset('vendors/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/css/daterangepicker.min.css') }}" rel="stylesheet" />
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

@section('view-scripts')
<script src="{{ asset('vendors/js/select2.min.js') }}"></script>
<script src="{{ asset('js/views/advanced-forms.js') }}"></script>

@endsection