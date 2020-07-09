@extends('dashboard.template')

@section('page-title')
  Edit {{$note->description}} 
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Edit Blog</li>
    <!-- Breadcrumb Menu-->

  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-note"></i> Edit Blog
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('notes.update', ['note' => $note->id]) }}" id="addJournalForm">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" class="form-control" id="description" cols="30" rows="2">{!! $note->description !!}
              </textarea>
            </div>
            <fieldset class="form-group">
              <label>Access</label>
              <select id="access" class="form-control select2-single" name="access">
                <option @if($note->access == "Public") selected="" @endif>Public</option>
                <option @if($note->access == "Private") selected="" @endif>Private</option>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="user_id">Assigned To</label>
              <select id="select2-1" class="form-control select2-single" name="agent_id">
                <option value=""></option>
                @if($agents->count() > 0)
                  @foreach($agents as $agent)
                    <option @if($note->agent_id == $agent->id) selected="" @endif value="{{ $agent->id }}">
                      {{ $agent->user->name }}
                    </option>
                  @endforeach
                @endif
              </select>
            </fieldset>
            
            <div class="form-actions">
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