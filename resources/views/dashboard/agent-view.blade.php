@extends('dashboard.template')

@section('page-title')
  {{$agent->user->name}}
@endsection

@section('main')
    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-user"></i> {{$agent->user->name}} </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn" href="{{ route('paychecks.create') }}"><i class="fa fa-handshake-o"></i> &nbsp;New Paycheck</a>
            <form method="POST"  action="{{ route('agents.destroy', ['agent' => $agent->id]) }}" style="display:inline-block">
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
                  <strong>{{$agent->user->name}}</strong>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3"> <b>Full Name</b></div>
                    <div class="col-md-9">{{$agent->user->name}}</div>
                  </div>
                  {{-- <div class="row">
                    <div class="col-md-3"> <b>Username</b></div>
                    <div class="col-md-9">{{$agent->user->username}}</div>
                  </div> --}}
                  <div class="row">
                    <div class="col-md-3"> <b>Date Of Birth</b></div>
                    <div class="col-md-9">{{$agent->user->date_of_birth}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Company</b></div>
                    <div class="col-md-9">{{$agent->company_name}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Cell phone</b></div>
                    <div class="col-md-9">{{$agent->tel}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Social Security / TIN Number</b></div>
                    <div class="col-md-9">{{$agent->tin}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Home Number</b></div>
                    <div class="col-md-9">{{$agent->home_no}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Mailing Address</b></div>
                    <div class="col-md-9">{{$agent->mail_address}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>City</b></div>
                    <div class="col-md-9">{{$agent->address->city}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>State</b></div>
                    <div class="col-md-9">{{$agent->address->state}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Zip Code</b></div>
                    <div class="col-md-9">{{$agent->address->zip_code}}</div>
                  </div>
                  <b>Direct Deposit Information</b>
                  <div class="row">
                    <div class="col-md-3"> <b>Bank Name</b></div>
                    <div class="col-md-9">{{$directDepositInfo->bank_name}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Account Name</b></div>
                    <div class="col-md-9">{{$directDepositInfo->account_name}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Account Number</b></div>
                    <div class="col-md-9">{{$directDepositInfo->account_no}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Routing Number</b></div>
                    <div class="col-md-9">{{ $directDepositInfo->routing_no}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <b>Created At</b></div>
                    <div class="col-md-9">{{$agent->created_at}}</div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-6">
              {{-- <div class="card">
                <div class="card-header">
                  <i class="fa fa-pencil-square-o"></i> Blog
                </div>
                <div class="card-body">
                  @if($notes->count() > 0)
                  @foreach($notes as $note)
                    <div id="exampleAccordion" data-children=".item">
                      <div class="item">
                        <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion{{$note->id}}" aria-expanded="true" aria-controls="exampleAccordion{{$note->id}}">
                          {{$note->created_at}}
                        </a>
                        <div id="exampleAccordion{{$note->id}}" class="collapse show" role="tabpanel">
                          <p class="mb-3">
                            {{$note->description}}
                          </p>
                        </div>
                      </div>
                    </div>
                  @endforeach
                  @else 
                    <p>No Blog.</p>
                  @endif
                </div>
              </div> --}}

              <div class="card">
                <div class="card-header">
                  <i class="fa fa-bandcamp"></i> Calendar
                </div>
                <div class="card-body">
                  @if($events->count() > 0)
                  <table class="table table-responsive-sm table-bordered table-sm">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Options</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($events as $event)
                      <tr>
                        <td>{{$event->title}}</td>
                        <td>{{$event->start_date}}</td>
                        <td>{{$event->end_date}}</td>
                        <td>
                          <a class="btn btn-success btn-sm" href="{{ route('events.show', ['event' => $event->id]) }}">
                            <i class="fa fa-search-plus "></i>
                          </a>
                          <form method="POST"  action="{{ route('events.destroy', ['event' => $event->id]) }}" style="display:inline-block">
                            @csrf 
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-sm" type="submit">
                                <i class="fa fa-trash-o"></i>
                              </button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                    @else 
                    <p>No Event</p>
                  @endif
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