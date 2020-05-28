@extends('dashboard.template')

@section('page-title')
  Agents
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Agents</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      
    </li>
  </ol>

  <div class="container-fluid">

    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
         <b>Agents</b>
          <div style="float:right;" lass="btn-group" role="group" aria-label="Button group with nested dropdown">
          
          </div>
        </div>
        <div class="card-body">
          @if($agents->count() > 0)
          <table class="table table-striped table-bordered datatable">
            <thead>
              <tr>
                <th>Full Name</th>
                <th>Date Registered</th>
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
                  <a class="btn btn-info btn-sm" href="#">
                    <i class="fa fa-edit "></i>
                  </a>
                  <a class="btn btn-danger btn-sm" href="#">
                    <i class="fa fa-trash-o "></i>
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