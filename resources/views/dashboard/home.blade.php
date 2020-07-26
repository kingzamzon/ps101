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
          <i class="fa fa-align-justify"></i> Welcome, Admin
        </div>
      </div>
      @else 
      <div class="card mt-3">
        <div class="card-header">
          <i class="fa fa-align-justify"></i> Welcome, {{Auth::user()->name}}
        </div>
      </div>
      @endif

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
              <p>No Blog.</p>
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
              <select id="access" class="form-control select2-single" name="access" onChange="showAndHideAssignTo()">
                <option>Public</option>
                <option>Private</option>
              </select>
            </fieldset>
            <fieldset class="form-group" id="assigned_to" style="display: none">
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

      @if(Auth::user()->account_type != 0)
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
                <div class="col-md-9">{{Auth::user()->agent->mail_address}}</div>
              </div>
              <b>Direct Deposit Information</b>
              <div class="row">
                <div class="col-md-3"> <b>Bank Name</b></div>
                <div class="col-md-9">{{Auth::user()->directDepositInfo->bank_name}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Account Name</b></div>
                <div class="col-md-9">{{Auth::user()->directDepositInfo->account_name}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Account Number</b></div>
                <div class="col-md-9">{{Auth::user()->directDepositInfo->account_no}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Routing Number</b></div>
                <div class="col-md-9">{{ Auth::user()->directDepositInfo->routing_no}}</div>
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
<script>
  function showAndHideAssignTo() {
    var x = document.getElementById("access").value;
    console.log(x);
    var y = document.getElementById("assigned_to");
    if (x == "Public") {
      y.style.display = "none";
    } else {
      y.style.display = "block";
    }
  }
</script>

@endsection