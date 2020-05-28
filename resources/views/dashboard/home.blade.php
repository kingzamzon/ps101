@extends('dashboard.template')

@section('page-title')
  Home
@endsection

@section('main')
<main class="main">
  <div class="jumbotron text-center" style="background-color: #ffff;">
    <h1>WELCOME ONBOARD!!</h1>
  </div>


  <div class="container-fluid">
    <div class="animated fadeIn">
      @if(Auth::user()->account_type == 0)
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <h3 class="card-title clearfix mb-0">Personal Information</h3><br>
              <h6>Fill in Details Correctly</h6>
            </div>
            <!--/.row-->
          </div>
          <hr class="m-0">
          <!-- card body-->
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('agents.store') }}" id="addJournalForm">
            @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your First Name">
              </div>
              <div class="form-group">
                <label for="company_name">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter your Company Name">
              </div>
              <div class="form-group">
                <label for="tel">Cell phone</label>
                <input type="tel" class="form-control" id="tel" name="tel" placeholder="Enter your Cell Number">
              </div>
              <div class="form-group">
                <label for="tin">Social Security / TIN Number</label>
                <input type="text" class="form-control" id="tin" name="tin" placeholder="Enter Social Security / TIN Number ">
              </div>
              <div class="form-group">
                <label for="email">Login Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Username">
              </div>
              <!-- /.col-sm-6-->
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label for="address">Mailing Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label for="home_no">Home Number</label>
                <input type="tel" class="form-control" id="home_no" name="home_no" placeholder="Enter your Home Number">
              </div>
              <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="Date" class="form-control" id="dob" name="dob">
              </div>
              <div class="form-group">
                <label for="password">Login Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password ">
              </div>
              <!-- col-sm-6  -->
            </div>
          </div>
          <div class="form-actions">
            <button type="button" class="btn btn-secondary">
              <i class="fa fa-times"></i>
              Discard
            </button>
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-check"></i>
              Save
            </button>
          </div>
        </form>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <strong> <i class="fa fa-user"></i> Agents Information</strong>
            </div>
            <div class="card-body">
              @if($agents->count() > 0)
              <table class="table table-responsive-sm table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>Date registered</th>
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
                          <form method="POST"  action="{{ route('agents.destroy', ['agent' => $agent->id]) }}" style="display:inline-block">
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
                <p>No Agent </p>
              @endif
              <div>
                {{ $agents->links() }}
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <strong> <i class="fa fa-handshake-o"></i> Deals</strong>
            </div>
            <div class="card-body">
              <table class="table table-responsive-sm table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Close Date</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Carwyn Fachtna</td>
                    <td>2012/01/01</td>
                    <td>
                      <a class="btn btn-success btn-sm" href="deals-view.html">
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
                </tbody>
              </table>
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </div>
          </div>


        </div>
        <!--/.col-->

        <div class="col-md-6">

          <div class="card">
            <div class="card-header">
              <strong>Contacts</strong>
            </div>
            <div class="card-body">
              <table class="table table-responsive-sm table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Agent Name</th>
                    <th>Phone</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Carwyn Fachtna</td>
                    <td>Carwyn Fachtna</td>
                    <td>+22 9083736</td>
                    <td>
                      <a class="btn btn-success btn-sm" href="contacts-view.html">
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

                </tbody>
              </table>
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <strong>Calendar</strong>
            </div>
            <div class="card-body">
              <table class="table table-responsive-sm table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Date registered</th>
                    <th>Role</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Carwyn Fachtna</td>
                    <td>2012/01/01</td>
                    <td>Member</td>
                    <td>
                      <span class="badge badge-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Nehemiah Tatius</td>
                    <td>2012/02/01</td>
                    <td>Staff</td>
                    <td>
                      <span class="badge badge-danger">Banned</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Ebbe Gemariah</td>
                    <td>2012/02/01</td>
                    <td>Admin</td>
                    <td>
                      <span class="badge badge-secondary">Inactive</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Eustorgios Amulius</td>
                    <td>2012/03/01</td>
                    <td>Member</td>
                    <td>
                      <span class="badge badge-warning">Pending</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Leopold Gáspár</td>
                    <td>2012/01/21</td>
                    <td>Staff</td>
                    <td>
                      <span class="badge badge-success">Active</span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </div>
          </div>

        </div>
        <!--/.col-->
      </div>
      <!--/.row-->
      
      @else 
      <div class="card">
        <div class="card-body">
            <h3>Personal Information</h3>
            <hr class="m-0">
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-3"> <b>Full Name</b></div>
            <div class="col-md-9">{{Auth::user()->name}}</div>
          </div>
          <div class="row">
            <div class="col-md-3"> <b>Username</b></div>
            <div class="col-md-9">{{Auth::user()->username}}</div>
          </div>
          <div class="row">
            <div class="col-md-3"> <b>Date Of Birth</b></div>
            <div class="col-md-9">{{Auth::user()->date_of_birth}}</div>
          </div>
          <div class="row">
            <div class="col-md-3"> <b>Company</b></div>
            <div class="col-md-9">{{Auth::user()->agent->company_name}}</div>
          </div>
          <div class="row">
            <div class="col-md-3"> <b>Cell phone</b></div>
            <div class="col-md-9">{{Auth::user()->agent->tel}}</div>
          </div>
          <div class="row">
            <div class="col-md-3"> <b>Social Security / TIN Number</b></div>
            <div class="col-md-9">{{Auth::user()->agent->tin}}</div>
          </div>
          <div class="row">
            <div class="col-md-3"> <b>Home Number</b></div>
            <div class="col-md-9">{{Auth::user()->agent->home_no}}</div>
          </div>
          <div class="row">
            <div class="col-md-3"> <b>Mailing Address</b></div>
            <div class="col-md-9">{{Auth::user()->agent->address}}</div>
          </div>
          <div class="row">
            <div class="col-md-3"> <b>Created At</b></div>
            <div class="col-md-9">{{Auth::user()->created_at}}</div>
          </div>
        </div>
        <!-- card body-->
      </div>
      @endif

</main>

@endsection