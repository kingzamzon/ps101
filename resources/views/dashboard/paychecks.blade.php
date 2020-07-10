@extends('dashboard.template')

@section('page-title')
  Paychecks
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Paychecks</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      @if(Auth::user()->account_type == 0)
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="{{ route('paychecks.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
      </div>
      @endif
    </li>
  </ol>

  <div class="container-fluid">

    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
         <b>Paychecks</b>
         @if(Auth::user()->account_type == 0)
          <div style="float:right;" lass="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-primary btn-sm" href="{{ route('paychecks.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
          </div>
         @endif
        </div>
        <div class="card-body">
          @if($paychecks->count() > 0)
          <table class="table table-striped table-bordered datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Agent Name</th>               
                <th>Options</th>
                <th>Deposit Date</th>
              </tr>
            </thead>
            <tbody>
              @foreach($paychecks as $paycheck)
              <tr>
                <td>{{$paycheck->id}}</td>
                <td>{{$paycheck->agent->user->name}}</td>
                <td>{{$paycheck->formatted_deposit_date}}</td>
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
            <p>No Paycheck</p>
          @endif
        </div>
      </div>
    </div>

  </div>
  <!-- /.conainer-fluid -->
</main>

@endsection