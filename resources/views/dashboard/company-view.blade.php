@extends('dashboard.template')

@section('page-title')
  {{$company->name}}
@endsection

@section('main')
<main class="main">

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-building"></i> {{$company->name}}</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a class="btn" href="#"><i class="fa fa-pencil-square-o"></i> &nbsp;New Note</a>
        <a class="btn" href="{{ route('contacts.create') }}"><i class="fa fa-user"></i> &nbsp;New Contact</a>
        <form method="POST"  action="{{ route('prospects.destroy', ['company' => $company->id]) }}" style="display:inline-block">
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
              <strong>{{$company->name}}</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3"> <b>Name</b></div>
                <div class="col-md-9">{{$company->name}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Access</b></div>
                <div class="col-md-9">{{$company->access}}</div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Address</b></div>
                <div class="col-md-9">
                  {{$company->address->street_address}}
                  {{$company->address->city}}
                  {{$company->address->state}}
                  {{$company->address->country}}
                </div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Phone</b></div>
                <div class="col-md-9">
                  {{$company->phone->number}}
                </div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Description</b></div>
                <div class="col-md-9">
                  {{$company->company_info->description}}
                </div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Website</b></div>
                <div class="col-md-9">
                  {{$company->company_info->website}}
                </div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Industry</b></div>
                <div class="col-md-9">
                  {{$company->company_info->industry}}
                </div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Num of Employee</b></div>
                <div class="col-md-9">
                  {{$company->company_info->num_of_employee}}
                </div>
              </div>
              <div class="row">
                <div class="col-md-3"> <b>Average Revenue</b></div>
                <div class="col-md-9">
                  {{$company->company_info->average_revenue}}
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-user"></i> Contacts
            </div>
            <div class="card-body">
              @if($contacts->count() > 0)
              <table class="table table-responsive-sm table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($contacts as $contact)
                  <tr>
                    <td>{{$contact->full_name}}</td>
                    <td>{{$contact->status}}</td>
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
    </div>


  </div>

</div>
<!-- /.conainer-fluid -->
</main>
@endsection