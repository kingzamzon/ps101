@extends('dashboard.template')

@section('page-title')
  Event Category
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Event Category</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="{{ route('events-catgeories.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
      </div>
    </li>
  </ol>

  <div class="container-fluid">

    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          Event Category
          <div style="float:right;" lass="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-primary btn-sm" href="{{ route('events-catgeories.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered datatable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Date Created</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
              @if($eventcategories->count() > 0)
                @foreach($eventcategories as $eventcategory)
                <tr>
                  <td>{{$eventcategory->name}}</td>
                  <td>{{$eventcategory->created_at}}</td>
                  <td>
                    <a class="btn btn-info btn-sm" href="{{ route('events-catgeories.edit', ['eventcategory' => $eventcategory->id]) }}">
                      <i class="fa fa-edit "></i>
                    </a>
                    <form method="POST"  action="{{ route('events-catgeories.destroy', ['eventcategory' => $eventcategory->id]) }}" style="display:inline-block">
                      @csrf 
                      <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-sm" type="submit">
                            <i class="fa fa-trash-o"></i>
                          </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              @else 
              <tr>
                <td colspan="3" class="text-center">No Event Category</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.conainer-fluid -->
</main>
@endsection