@extends('dashboard.template')

@section('page-title')
  Agent Dashboard
@endsection

@section('main')
<main class="main">
  <div class="container-fluid">
    <div class="animated fadeIn">

      <div class="card mt-3">
        <div class="card-header">
          <i class="fa fa-align-justify"></i> Agent Dashboard For Admin
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-sm-12 col-xl-6">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-align-justify"></i> Agent Information
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3"> <b>Full Name</b></div>
                <div class="col-md-9">{{$agent->user->name}}</div>
              </div>
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
      

</main>
@endsection