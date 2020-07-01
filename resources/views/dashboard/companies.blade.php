@extends('dashboard.template')

@section('page-title')
  Prospects
@endsection

@section('view-style')
  <link href="{{ asset('vendors/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Prospects</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="{{ route('prospects.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
      </div>
    </li>
  </ol>

  <div class="container-fluid">

    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          Prospects
          <div style="float:right;" lass="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-primary btn-sm" href="{{ route('prospects.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
          </div>
        </div>
        <div class="card-body">
          @if($companies->count() > 0)
          <table class="table table-striped table-bordered dt-responsive nowrap datatable " style="width:100%;border-collapse: collapse !important">
            <thead>
              <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
                @foreach($companies as $prospect)
              <tr>
                <td>{{$prospect->name}}</td>
                <td>{{$prospect->created_at}}</td>
                <td>  
                  <a class="btn btn-success btn-sm" href="{{ route('prospects.show', ['prospect' => $prospect->id]) }}">
                    <i class="fa fa-search-plus "></i>
                  </a>
                  <a class="btn btn-info btn-sm" href="{{ route('prospects.edit', ['prospect' => $prospect->id]) }}">
                    <i class="fa fa-edit "></i>
                  </a>
                  <form method="POST"  action="{{ route('prospects.destroy', ['prospect' => $prospect->id]) }}" style="display:inline-block">
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
            <p> No prospect </p>
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