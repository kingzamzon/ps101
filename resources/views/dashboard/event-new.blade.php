@extends('dashboard.template')

@section('page-title')
  New Event
@endsection

@section('view-style')
<link href="{{ asset('vendors/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/css/daterangepicker.min.css') }}" rel="stylesheet" />
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Create new Event</li>
    <!-- Breadcrumb Menu-->

  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-note"></i> Create new Event
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <fieldset class="form-group">
                <label>Start Date</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                  </span>
                  <input name="daterange" class="form-control" type="text" />
                </div>
              </fieldset>
              <div class="form-group">
                <label for="name">Category</label>
                <select id="select1" name="select1" class="form-control">
                  <option value="0">Please select</option>
                  <option value="1">Option #1</option>
                  <option value="2">Option #2</option>
                  <option value="3">Option #3</option>
                </select>
              </div>
              <!-- /.col-sm-6-->
            </div>
            <div class="col-sm-6">
              <fieldset class="form-group">
                <label>Calendar</label>
                <select id="select2-1" class="form-control select2-single">
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                </select>
              </fieldset>
              <div class="form-group">
                <fieldset class="form-group">
                  <label>End Date</label>
                  <div class="input-group">
                    <span class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </span>
                    <input name="daterange" class="form-control" type="text" />
                  </div>
                </fieldset>
              </div>
              <div class="form-group">
                <label for="name">Tags</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
            </div>
            <!-- /. row -->
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" cols="10" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="location">Location</label>
            <textarea name="location" class="form-control" id="location" cols="10" rows="2"></textarea>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <fieldset class="form-group">
                <label>Deal</label>
                <select id="select2-1" class="form-control select2-single">
                  <option></option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                </select>
              </fieldset>
              <fieldset class="form-group">
                <label>Task</label>
                <select id="select2-1" class="form-control select2-single">
                  <option></option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                </select>
              </fieldset>
              <fieldset class="form-group">
                <label>Assigned To</label>
                <select id="select1" name="select1" class="form-control">
                  <option value="0"></option>
                  <option value="1">Option #1</option>
                  <option value="2">Option #2</option>
                  <option value="3">Option #3</option>
                </select>
              </fieldset>
              <!-- /.col-sm-6-->
            </div>
            <div class="col-sm-6">
              <fieldset class="form-group">
                <label>Company</label>
                <select id="select2-1" class="form-control select2-single">
                  <option></option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                </select>
              </fieldset>
              <fieldset class="form-group">
                <label>Participants</label>
                <select id="select2-2" class="form-control select2-multiple" multiple="">
                  <option>Option 1</option>
                  <option selected="">Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                </select>
              </fieldset>
            </div>
            <!-- /. row -->
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

@section('view-scripts')
<script src="{{ asset('vendors/js/select2.min.js') }}"></script>
<script src="{{ asset('js/views/advanced-forms.js') }}"></script>

@endsection