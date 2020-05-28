@extends('dashboard.template')

@section('page-title')
  Paycheck
@endsection

@section('main')
<main class="main">


      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-user"></i> Paycheck Statments </li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn" href="./"><i class="fa fa-pencil-square-o"></i> &nbsp;New Satments</a>
            <a class="btn" href="./"><i class="fa fa-pencil-square-o"></i> &nbsp;New Note</a>
            <a class="btn" href="./"><i class="fa fa-handshake-o"></i> &nbsp;Task</a>
            <a class="btn" href="./"><i class="fa fa-trash"></i> &nbsp;Delete</a>
          </div>
        </li>
      </ol>

      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <strong>John JOshua</strong>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6"> <b>Agent Name</b></div>
                    <div class="col-md-6">ssds</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"> <b>Agent Number</b></div>
                    <div class="col-md-6">ssds</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"> <b>Social Number</b></div>
                    <div class="col-md-6">ssds</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"> <b>Mailing address</b></div>
                    <div class="col-md-6">ssds</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"> <b>Date Of Paycheck</b></div>
                    <div class="col-md-6"><a href="#" data-toggle="modal" data-target="#myModal"> sam@gmail.com</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"> <b>Direct Deposit Number</b></div>
                    <div class="col-md-6">ssds</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"> <b>Direct Deposit Date</b></div>
                    <div class="col-md-6">ssds</div>
                  </div>
                  <!-- check d rest later -->
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <i class="fa fa-pencil-square-o"></i> Notes
                </div>
                <div class="card-body">
                    <div class=""> <b>Company Entry Number</b></div>
                    <div class="">1234-052520-0001</div>
                    <div class=""> <b> Company Name </b></div>
                    <div class=""> bla bla</div>
                    <div class=""> <b>Total Monthly Credit Card processing </b></div>
                    <div class="">hjfhf </div>
                    <div class=""> <b>Total Money Paid to our Company </b></div>
                    <div class=""> hjbvjhr</div>
                    <div class=""> <b>Total money paid to our agent from this company (Current Month) </b></div>
                    <div class="">hjbdhe </div>
                    <div class=""> <b> Total Commisiion Paid From these Benefit  Enrollment </b></div>
                    <div class=""> uiu</div>
                    <hr>
                    <div class=""> <b> Agent Number</b></div>
                    <div class=""> Eg: 1234</div>
                    <div class=""> <b> The date </b></div>
                    <div class=""> Eg: 072520</div>
                    <div class=""> <b> The Company Number</b></div>
                    <div class=""> Eg: 0001</div>
                    <div class=""> <b> Total Credit card Processing (Previous Month) </b></div>
                    <div class=""> uiu</div>
                    <div class=""> <b> Total funds Paid to Our Company From Our Processor </b></div>
                    <div class=""> uiu</div>
                    <div class=""> <b> The Amount the agent it being paid this month from the company </b></div>
                    <div class=""> uiu</div>
                    <div class=""> <b> the number of employees that are enrolled in the benefits plan </b></div>
                    <div class=""> uiu</div>
                    <div class=""> <b> The total commissions being paid from the enrollment </b></div>
                    <div class=""> uiu</div>

                </div>
              </div>

              <div class="card">
                
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