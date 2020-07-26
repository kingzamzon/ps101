@extends('dashboard.template')

@section('page-title')
  {{$event->title}}
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">{{$event->title}}</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="{{ route('calendar.index') }}"><i class="fa fa-calendar"></i></a>
        <form method="POST"  action="{{ route('events.destroy', ['event' => $event->id]) }}" style="display:inline-block">
          @csrf 
          <input type="hidden" name="_method" value="DELETE">
             <button class="btn" type="submit" style="background-color: #fff;">
                <i class="fa fa-trash"></i> &nbsp;Delete
              </button>
        </form>
      </div>
    </li>
  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <strong>{{$event->title}}</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3"> <b>Title</b></div>
                <div class="col-md-9">{{$event->title}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Start Date</b></div>
                <div class="col-md-9">{{$event->start_date}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>End Date</b></div>
                <div class="col-md-9">{{$event->end_date}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Category</b></div>
                <div class="col-md-9">{{$event->category}}</div>
              </div>
              {{-- <div class="row">
                <div class="col-md-3"> <b>Participants</b></div>
               
                <div class="col-md-9">
                  @if($event->participants != [])
                    @foreach($event->participants as $participant)
                      <a href="{{ route('contacts.show', ['contact' => $participant->id]) }}"> {{$participant->full_name}} </a>
                    @endforeach
                  @endif
                </div>
              </div> --}}
              <div class="row">
                <div class="col-md-3"> <b>Description</b></div>
                <div class="col-md-9">{{$event->description}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Assigned To</b></div>
                @if($event->user_id == NULL)
                  <div class="col-md-9">{{ "All Agents" }}</div>
                @else 
                  <div class="col-md-9">{{$event->user->name}}</div>
                @endif
              </div>
              {{-- <div class="row">
                <div class="col-md-3"> <b>Company</b></div>
                <div class="col-md-9">
                  @if($event->company_id)
                      {{$event->company->name}}
                  @endif
                </div>
              </div> --}}
              <!-- check d rest later -->
            </div>
          </div>
        </div>


        <div class="col-md-6">
          {{-- <div class="card">
            <div class="card-header">
              <i class="fa fa-file"></i> Documents
            </div>
            <div class="card-body">
              No Present
            </div>
          </div> --}}

        </div>
      </div>
    </div>


  </div>

</div>
<!-- /.conainer-fluid -->
</main>

@endsection