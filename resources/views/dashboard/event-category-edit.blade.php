@extends('dashboard.template')

@section('page-title')
  New Event Category
@endsection

@section('view-style')
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Create new Event Category</li>
    <!-- Breadcrumb Menu-->

  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-note"></i> Create new Event Category
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
          <form method="POST" action="{{ route('events-catgeories.update',  ['eventcategory' => $eventcategory->id]) }}" id="addJournalForm">
            @csrf
                <div class="form-group">
                  <input type="hidden" name="_method" value="PUT">
                  <label for="title">Event Category name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Event name" name="title" value="{{ $eventcategory->name }}">
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

@endsection