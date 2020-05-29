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
          <form method="POST" action="{{ route('events.store') }}" id="addJournalForm">
            @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter your name" name="title">
                </div>
                <fieldset class="form-group">
                  <label for="start_date">Start Date</label>
                  <div class="input-group">
                    <span class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </span>
                    <input type="text" class="form-control"  name="start_date"/>
                  </div>
                </fieldset>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select id="select1" class="form-control" name="category">
                    <option value="0">Important</option>
                    <option value="1">Opportunity</option>
                    <option value="2">Optional</option>
                    <option value="3">Crital</option>
                    <option value="4">Meeting</option>
                    <option value="5">Social</option>
                    <option value="6">Time Off</option>
                    <option value="7">Private</option>
                  </select>
                </div>
                <!-- /.col-sm-6-->
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="tags">Tags</label>
                  <input type="text" class="form-control" id="tags" placeholder="Enter your name" name="tags">
                </div>
                <div class="form-group">
                  <fieldset class="form-group">
                    <label for="end_date">End Date</label>
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </span>
                    <input type="text" class="form-control"  name="end_date" />
                    </div>
                  </fieldset>
                </div>
                <fieldset class="form-group">
                  <label for="user_id">Assigned To</label>
                  <select id="select2-1" class="form-control select2-single" name="user">
                    @if($users->count() > 0)
                      @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                      @endforeach
                    @endif
                  </select>
                </fieldset>
              </div>
              <!-- /. row -->
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" class="form-control" id="description" cols="10" rows="3" name="description"></textarea>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <fieldset class="form-group">
                  <label>Company</label>
                  <select id="select2-5" class="form-control select2-single" name="company">
                    @if($companys->count() > 0)
                      @foreach($companys as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                      @endforeach
                    @endif
                  </select>
                </fieldset>

                {{-- <fieldset class="form-group">
                  <label>Task</label>
                  <select id="select2-4" class="form-control select2-single" name="task">
                    @if($tasks->count() > 0)
                      @foreach($tasks as $task)
                        <option value="{{ $task->id }}">{{ $task->name }}</option>
                      @endforeach
                    @endif
                  </select>
                </fieldset> --}}
                <!-- /.col-sm-6-->
              </div>
              <div class="col-sm-6">
                {{-- <fieldset class="form-group">
                  <label>Deal</label>
                  <select id="select2-2" class="form-control select2-single" name="deal">
                    @if($deals->count() > 0)
                      @foreach($deals as $deal)
                        <option value="{{ $deal->id }}">{{ $deal->name }}</option>
                      @endforeach
                    @endif
                  </select>
                </fieldset> --}}
                <fieldset class="form-group">
                  <label>Participants (Contacts)</label>
                  <select id="select2-6" class="form-control select2-multiple" multiple="" name="participants[]">
                    @if($contacts->count() > 0)
                      @foreach($contacts as $contact)
                        <option value="{{ $contact->id }}">{{ $contact->full_name }}</option>
                      @endforeach
                    @endif
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