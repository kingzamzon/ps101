@extends('dashboard.template')

@section('page-title')
  Home
@endsection

@section('main')
<main class="main">
  <div class="container-fluid">
    <div class="animated fadeIn">

      @if(Auth::user()->account_type == 0)
      <div class="card mt-3">
        <div class="card-header">
          <i class="fa fa-pencil-square-o"></i> Latest Blog
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

                    <div id="#ItemAction" class="mb-3 float-right">
                      <a class="btn btn-info btn-sm" href="{{ route('notes.edit', ['note' => $note->id]) }}">
                        <i class="fa fa-edit "></i> Edit
                      </a>
                      <form method="POST"  action="{{ route('notes.destroy', ['note' => $note->id]) }}" style="display:inline-block">
                        @csrf 
                        <input type="hidden" name="_method" value="DELETE">
                          <button class="btn btn-danger btn-sm" type="submit">
                              <i class="fa fa-trash-o"></i> Delete
                            </button>
                      </form>
                    </div>

                      </div>
                    </div>
                </div>
              @endforeach
            @else 
              <p>No Note.</p>
            @endif
            <br>
            {{ $notes->links() }}
        </div>
      </div>

      <div class="card mt-3">
        <div class="card-header">
          <i class="fa fa-align-justify"></i> New Blog Entry
        </div>
        <div class="card-body">
          
          <form method="POST" action="{{ route('notes.store') }}" id="addJournalForm">
            @csrf
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" class="form-control" id="description" cols="30" rows="2"></textarea>
            </div>
            <fieldset class="form-group">
              <label>Access</label>
              <select id="access" class="form-control select2-single" name="access">
                <option>Public</option>
                <option>Private</option>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="user_id">Assigned To</label>
              <select id="select2-1" class="form-control select2-single" name="agent_id">
                <option value=""></option>
                @if($agents->count() > 0)
                  @foreach($agents as $agent)
                    <option value="{{ $agent->id }}">
                      {{ $agent->user->name }}
                    </option>
                  @endforeach
                @endif
              </select>
            </fieldset>
            <div class="form-actions">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-check"></i>
                Post
              </button>
            </div>
          </form>
        </div>
      </div>
      @endif

      @if(Auth::user()->account_type == 0)
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <h3 class="card-title clearfix mb-0">Personal Information</h3><br>
              <h6>Fill in Details Correctly</h6>
            </div>
            <!--/.row-->
          </div>
          <hr class="m-0">
          <!-- card body-->
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('agents.store') }}" id="addJournalForm">
            @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your First Name" required>
              </div>
              <div class="form-group">
                <label for="company_name">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter your Company Name" required>
              </div>
              <div class="form-group">
                <label for="tel">Cell phone</label>
                <input type="tel" class="form-control" id="tel" name="tel" placeholder="Enter your Cell Number" required>
              </div>
              <div class="form-group">
                <label for="tin">Social Security / TIN Number</label>
                <input type="text" class="form-control" id="tin" name="tin" placeholder="Enter Social Security / TIN Number " required>
              </div>
              <div class="form-group">
                <label for="email">Login Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Username" required>
              </div>
              <!-- /.col-sm-6-->
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
              </div>
              <div class="form-group">
                <label for="address">Mailing Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Mailing Address" required>
              </div>
              <div class="form-group">
                <label for="home_no">Home Number</label>
                <input type="tel" class="form-control" id="home_no" name="home_no" placeholder="Enter your Home Number"required>
              </div>
              <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="Date" class="form-control" id="dob" name="dob" required>
              </div>
              <div class="form-group">
                <label for="password">Login Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
              </div>
              <!-- col-sm-6  -->
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
      
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <strong> <i class="fa fa-user"></i> Agents Information</strong>
            </div>
            <div class="card-body">
              @if($agents->count() > 0)
              <table class="table table-responsive-sm table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>Date registered</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($agents as $agent)
                      <tr>
                        <td>{{$agent->user->name}}</td>
                        <td>{{$agent->created_at}}</td>
                        <td>
                          <a class="btn btn-success btn-sm" href="{{ route('agents.show', ['agent' => $agent->id]) }}">
                            <i class="fa fa-search-plus "></i>
                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('agents.edit', ['agent' => $agent->id]) }}">
                            <i class="fa fa-edit "></i>
                          </a>
                          <form method="POST"  action="{{ route('agents.destroy', ['agent' => $agent->id]) }}" style="display:inline-block">
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
                <p>No Agent </p>
              @endif
              <div>
                {{ $agents->links() }}
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <strong> <i class="fa fa-handshake-o"></i> Paychecks</strong>
            </div>
            <div class="card-body">
              @if($paychecks->count() > 0)
              <table class="table table-responsive-sm table-bordered table-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Agent Name</th>
                    <th>Deposit Date</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($paychecks as $paycheck)
                  <tr>
                    <td>{{$paycheck->id}}</td>
                    <td>{{$paycheck->agent->user->name}}</td>
                    <td>{{$paycheck->deposit_date}}</td>
                    <td>
                      <a class="btn btn-success btn-sm" href="{{ route('paychecks.show', ['paycheck' => $paycheck->id]) }}">
                        <i class="fa fa-search-plus "></i>
                      </a>
                      <form method="POST"  action="{{ route('paychecks.destroy', ['paycheck' => $paycheck->id]) }}" style="display:inline-block">
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
                <p>No Paychecks</p>
              @endif
              {{ $paychecks->links() }}
            </div>
          </div>


        </div>
        <!--/.col-->

        <div class="col-md-6">

          <div class="card">
            <div class="card-header">
              <strong> <i class="fa fa-group"></i> Contacts</strong>
            </div>
            <div class="card-body">
              @if($contacts->count() > 0)
              <table class="table table-responsive-sm table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($contacts as $contact)
                  <tr>
                    <td>{{$contact->full_name}}</td>
                    <td>{{$contact->status}}</td>
                    <td>
                      <a class="btn btn-success btn-sm" href="{{ route('contacts.show', ['contact' => $contact->id]) }}">
                        <i class="fa fa-search-plus "></i>
                      </a>
                      <a class="btn btn-info btn-sm" href="{{ route('contacts.edit', ['contact' => $contact->id]) }}">
                        <i class="fa fa-edit "></i>
                      </a>
                      <form method="POST"  action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}" style="display:inline-block">
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
                <p>No Contact</p>
              @endif
              {{ $contacts->links() }}
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <strong> <i class="icon-calendar"></i> Calendar</strong>
            </div>
            <div class="card-body">
              @if($events->count() > 0)
              <table class="table table-responsive-sm table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Assigned To</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($events as $event)
                  <tr>
                    <td>{{$event->title}}</td>
                    <td>{{$event->start_date}}</td>
                    <td>{{$event->end_date}}</td>
                    <td>{{$event->user->name}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
                @else 
                <p>No Event In Calendar</p>
              @endif
              {{ $events->links() }}
            </div>
          </div>

        </div>
        <!--/.col-->
      </div>
      <!--/.row-->
      
      @else 
      <div class="row mt-3">
        <div class="col-sm-12 col-xl-6">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-align-justify"></i> Agent Information
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3"> <b>Full Name</b></div>
                <div class="col-md-9">{{Auth::user()->name}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Username</b></div>
                <div class="col-md-9">{{Auth::user()->username}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Date Of Birth</b></div>
                <div class="col-md-9">{{Auth::user()->date_of_birth}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Company</b></div>
                <div class="col-md-9">{{Auth::user()->agent->company_name}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Cell phone</b></div>
                <div class="col-md-9">{{Auth::user()->agent->tel}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Social Security / TIN Number</b></div>
                <div class="col-md-9">{{Auth::user()->agent->tin}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Home Number</b></div>
                <div class="col-md-9">{{Auth::user()->agent->home_no}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Mailing Address</b></div>
                <div class="col-md-9">{{Auth::user()->agent->address}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Created At</b></div>
                <div class="col-md-9">{{Auth::user()->created_at}}</div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <i class="fa fa-align-justify"></i> Last Paycheck Information
            </div>
            <div class="card-body">
              @if($paychecks->count() > 0)
              <table class="table table-responsive-sm table-bordered table-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Agent Name</th>
                    <th>Deposit Date</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($paychecks as $paycheck)
                  <tr>
                    <td>{{$paycheck->id}}</td>
                    <td>{{$paycheck->agent->user->name}}</td>
                    <td>{{$paycheck->deposit_date}}</td>
                    <td>
                      <a class="btn btn-success btn-sm" href="{{ route('paychecks.show', ['paycheck' => $paycheck->id]) }}">
                        <i class="fa fa-search-plus "></i>
                      </a>
                      <form method="POST"  action="{{ route('paychecks.destroy', ['paycheck' => $paycheck->id]) }}" style="display:inline-block">
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
                <p>No Paychecks</p>
              @endif
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-xl-6">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-align-justify"></i> Company Bulletin Board (Blog)
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
              {{ $notes->links() }}
            </div>
          </div>
        </div>
      </div>
      @endif

</main>

@endsection