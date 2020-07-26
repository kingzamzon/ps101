@extends('dashboard.template')

@section('page-title')
  Agents
@endsection

@section('view-style')
  <link href="{{ asset('vendors/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Agents</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="{{ route('agents.create') }}"><i class="fa fa-edit"></i> &nbsp;New Agent</a>
      </div>
    </li>
  </ol>

  <div class="container-fluid">

    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
         <b>Agents</b>
         <div style="float:right;" lass="btn-group" role="group" aria-label="Button group with nested dropdown">
          <a class="btn btn-primary btn-sm" href="{{ route('agents.create') }}"><i class="fa fa-edit"></i> &nbsp;New Agent</a>
        </div>
        </div>
        <div class="card-body">
          @if($agents->count() > 0)
          <table class="table table-striped table-bordered dt-responsive nowrap datatable">
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Agent Number</th>
                <th>Telephone Number</th>
                {{-- <th>Social Security/TIN number</th> --}}
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
              @foreach($agents as $agent)
              <tr>
                <td>{{$agent->user->firstname}}</td>
                <td>{{$agent->user->lastname}}</td>
                <td>{{$agent->agent_number}}</td>
                <td>{{$agent->tel}}</td>
                {{-- <td>{{$agent->tin}}</td> --}}
                <td>
                  <a class="btn btn-success btn-sm" href="{{ route('agents.show', ['agent' => $agent->id]) }}">
                    <i class="fa fa-search-plus "></i> View
                  </a>
                  <a class="btn btn-info btn-sm text-white" href="{{ route('agents.edit', ['agent' => $agent->id]) }}">
                    <i class="fa fa-edit "></i> Edit
                  </a>
                  <form method="POST"  action="{{ route('agents.destroy', ['agent' => $agent->id]) }}" style="display:inline-block">
                    @csrf 
                    <input type="hidden" name="_method" value="DELETE">
                       <button class="btn btn-danger btn-sm" type="submit">
                          <i class="fa fa-trash-o"></i>
                        </button>
                  </form>
                  <a class="btn btn-secondary btn-sm text-white" target="_blank" href="{{ route('agents.dashboard', ['agent' => $agent->id]) }}">
                    <i class="fa fa-edit "></i> Dashboard
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @else
              <p>No Agent </p>
          @endif
        </div>
      </div>
    </div>

  </div>
  <!-- /.conainer-fluid -->
</main>

@endsection

@section('view-scripts')
  <script src="{{ asset('vendors/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendors/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('js/views/datatables.js') }}"></script>
  <script src="{{ asset('js/views/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('js/views/responsive.bootstrap4.min.js') }}"></script>
@endsection