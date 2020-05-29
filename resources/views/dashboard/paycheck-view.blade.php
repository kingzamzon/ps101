@extends('dashboard.template')

@section('page-title')
  #{{$paycheck->id}} Paycheck
@endsection

@section('main')
<main class="main">
      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-user"></i> #{{$paycheck->id}} Paycheck Statement </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn" href="{{ route('paychecks.create') }}"><i class="fa fa-handshake-o"></i> &nbsp;New Statement</a>
            <form method="POST"  action="{{ route('paychecks.destroy', ['paycheck' => $paycheck->id]) }}" style="display:inline-block">
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
                  <strong>{{$paycheck->agent->user->name}}</strong>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6"> <b>Agent Name</b></div>
                    <div class="col-md-6">{{$paycheck->agent->user->name}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"> <b>Agent Number</b></div>
                    <div class="col-md-6">{{$paycheck->agent->id}}-{{$paycheck->agent_number}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"> <b>Social Number</b></div>
                    <div class="col-md-6">{{$paycheck->agent->tin}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"> <b>Mailing address</b></div>
                    <div class="col-md-6">{{$paycheck->agent->address}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"> <b>Date Of Paycheck</b></div>
                    <div class="col-md-6">
                      {{$paycheck->paycheck_date}}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"> <b>Direct Deposit Number</b></div>
                    <div class="col-md-6">{{$paycheck->deposit_no}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"> <b>Direct Deposit Date</b></div>
                    <div class="col-md-6">{{$paycheck->deposit_date}}</div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <i class="fa fa-pencil-square-o"></i> Statement Body
                </div>
                <div class="card-body">
                    <div class=""> <b>Company Entry Number</b></div>
                    <div class="">{{$paycheck->agent->id}}-{{$paycheck->agent_number}}-{{$paycheck->id}}</div>
                    {{-- <div class=""> <b> Company Name </b></div>
                    <div class=""> bla bla</div>
                    <div class=""> <b>Total Monthly Credit Card processing </b></div>
                    <div class="">hjfhf </div>
                    <div class=""> <b>Total Money Paid to our Company </b></div>
                    <div class=""> hjbvjhr</div>
                    <div class=""> <b>Total money paid to our agent from this company (Current Month) </b></div>
                    <div class="">hjbdhe </div>
                    <div class=""> <b> Total Commisiion Paid From these Benefit  Enrollment </b></div>
                    <div class=""> uiu</div> --}}
                </div>
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