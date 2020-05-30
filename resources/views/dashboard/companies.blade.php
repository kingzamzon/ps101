@extends('dashboard.template')

@section('page-title')
  Companies
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Companies</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="{{ route('company.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
      </div>
    </li>
  </ol>

  <div class="container-fluid">

    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          Companies
          <div style="float:right;" lass="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-primary btn-sm" href="{{ route('company.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
          </div>
        </div>
        <div class="card-body">
          @if($companies->count() > 0)
          <table class="table table-striped table-bordered datatable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
              <tr>
                <td>{{$company->name}}</td>
                <td>{{$company->created_at}}</td>
                <td>  
                  <a class="btn btn-success btn-sm" href="{{ route('company.show', ['company' => $company->id]) }}">
                    <i class="fa fa-search-plus "></i>
                  </a>
                  <a class="btn btn-info btn-sm" href="{{ route('company.edit', ['company' => $company->id]) }}">
                    <i class="fa fa-edit "></i>
                  </a>
                  <form method="POST"  action="{{ route('company.destroy', ['company' => $company->id]) }}" style="display:inline-block">
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
            <p> No Company </p>
          @endif
          <div>
            {{ $companies->links() }}
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.conainer-fluid -->
</main>

@endsection