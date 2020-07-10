@extends('dashboard.template')

@section('page-title')
  Contacts
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Contacts</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="{{ route('contacts.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
      </div>
    </li>
  </ol>

  <div class="container-fluid">

    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          Contacts
          <div style="float:right;" lass="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-primary btn-sm" href="{{ route('contacts.create') }}"><i class="fa fa-edit"></i> &nbsp;New</a>
          </div>
        </div>
        <div class="card-body">
          @if($contacts->count() > 0)
          <table class="table table-striped table-bordered datatable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Email</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
              @foreach($contacts as $contact)
              <tr>
                <td>{{$contact->full_name}}</td>
                <td>{{$contact->status}}</td>
                <td>{{$contact->email}}</td>
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
        </div>
      </div>
    </div>

  </div>
  <!-- /.conainer-fluid -->
</main>
@endsection