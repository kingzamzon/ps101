@extends('dashboard.template')

@section('page-title')
  Chart of Office
@endsection

@section('main')
<main class="main">
  <div class="jumbotron text-center" style="background-color: #ffff;">
    <h1>WELCOME ONBOARD!!</h1>
  </div>


  <div class="container-fluid">
    <div class="animated fadeIn">
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
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your First Name">
              </div>
              <div class="form-group">
                <label for="name">Company Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your Company Name">
              </div>
              <div class="form-group">
                <label for="name">Cell phone</label>
                <input type="tel" class="form-control" id="name" placeholder="Enter your Cell Number">
              </div>
              <div class="form-group">
                <label for="name">Social Security / TIN Number</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Social Security / TIN Number ">
              </div>
              <div class="form-group">
                <label for="name">Login Username</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Username">
              </div>
              <!-- /.col-sm-6-->
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label for="name">Mailing Address</label>
                <input type="email" class="form-control" id="name" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label for="name">Home Number</label>
                <input type="tel" class="form-control" id="name" placeholder="Enter your Home Number">
              </div>
              <div class="form-group">
                <label for="Date">Date Of Birth</label>
                <input type="Date" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="name">Login Password</label>
                <input type="password" class="form-control" id="name" placeholder="Enter Password ">
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
        </div>
      </div>
      <div class="row">

        <div class="col-md-6">

          <div class="card">
            <div class="card-header">
              <strong> <i class="fa fa-user"></i> Agents Information</strong>
            </div>
            <div class="card-body">
              <table class="table table-responsive-sm table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>Date registered</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Carwyn Fachtna</td>
                    <td>2012/01/01</td>
                    <td>
                      <a class="btn btn-success btn-sm" href="agents-view.html">
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
</main>

@endsection