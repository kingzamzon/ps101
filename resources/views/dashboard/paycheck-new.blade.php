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
                  <label for="agent_number">Agent Number </label>
                  <input type="text" class="form-control" id="agent_name" placeholder="Eg:1234" name="agent_number">
                </div>
                <div class="form-group col-sm-6">
                  <label for="agent_name">Agent Name</label>
                  <select id="select2-1" class="form-control select2-single" name="user">
                    @if($users->count() > 0)
                      @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                      @endforeach
                    @endif
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="full_name">Social Number </label>
                  <input type="text" class="form-control" id="fill_name" placeholder="Eg: 12345" name="full_name">
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Mailing Address </label>
                  <input type="text" class="form-control" id="email" placeholder="Enter your name" name="email">
                </div>
                  <fieldset class="form-group col-md-6">
                    <label for="end_date">Date Of Paycheck</label>
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </span>
                    <input type="text" class="form-control"  name="end_date" />
                    </div>
                  </fieldset>
                <div class="form-group col-md-6">
                  <label for="email">Direct Deposite Number</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter your name" name="email">
                </div>
                  <fieldset class="form-group col-md-6">
                    <label for="end_date">Direct Deposit Date</label>
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </span>
                    <input type="text" class="form-control"  name="end_date" />
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