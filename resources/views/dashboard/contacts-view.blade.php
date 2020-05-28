@extends('dashboard.template')

@section('page-title')
  {{$contact->full_name}}
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-user"></i> {{$contact->full_name}}</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="./"><i class="fa fa-pencil-square-o"></i> &nbsp;New Note</a>
        <form method="POST"  action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}" style="display:inline-block">
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
              <strong>{{$contact->full_name}}</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3"> <b>Full Name</b></div>
                <div class="col-md-9">{{$contact->full_name}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Company</b></div>
                <div class="col-md-9">{{$contact->company->name}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Address</b></div>
                <div class="col-md-9">
                  {{$contact->address->street_address}}
                  {{$contact->address->city}}
                  {{$contact->address->state}}
                  {{$contact->address->country}}
                </div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Phone</b></div>
                <div class="col-md-9">
                  {{$contact->phone->number}} | {{$contact->phone->home}}
                </div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Status</b></div>
                <div class="col-md-9">{{$contact->status}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Tags</b></div>
                <div class="col-md-9">{{$contact->tags}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Email</b></div>
                <div class="col-md-9"><a href="#" data-toggle="modal" data-target="#myModal"> {{$contact->email}}</a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Birthday</b></div>
                <div class="col-md-9">{{$contact->birthday}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Description</b></div>
                <div class="col-md-9">{{$contact->description}}</div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-pencil-square-o"></i> Notes
            </div>
            <div class="card-body">
              No Notes
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <i class="fa fa-bandcamp"></i> Events
            </div>
            <div class="card-body">
              No event
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <i class="fa fa-handshake-o"></i> Deals
            </div>
            <div class="card-body">
              present
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <i class="fa fa-list"></i> Task
            </div>
            <div class="card-body">
              Present
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

</div>
<!-- /.conainer-fluid -->
</main>
@endsection