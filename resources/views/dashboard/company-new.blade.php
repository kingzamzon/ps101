@extends('dashboard.template')

@section('page-title')
  New Company
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Create new Prospect</li>
    <!-- Breadcrumb Menu-->

  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-note"></i> Create new Prospect
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('prospects.store') }}" id="addJournalForm">
            @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="street_address">Street Address</label>
                        <input type="text" id="street address" class="form-control" placeholder="Street address"
                          name="street_address" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" id="city" class="form-control" placeholder="City" name="city">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" id="state" class="form-control" placeholder="State" name="state">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="zip_code">Zip Code</label>
                        <input type="text" id="zip_code" class="form-control" placeholder="Zip Code" name="zip_code">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country" class="form-control" name="country">
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-sm-6-->
              </div>
              <div class="col-sm-6">
                <fieldset class="form-group">
                  <label for="acess">Access</label>
                  <select id="access" class="form-control" name="access">
                    <option>Public</option>
                    <option>Private</option>
                  </select>
                </fieldset>
                <div class="form-group">
                  <label for="number">Phone Number</label>
                  <input type="text" class="form-control" id="number" placeholder="Number" name="number">
                </div>
                <div class="form-group">
                  <label for="industry">Industry</label>
                  <select id="industry" class="form-control select2-single" name="industry">
                  </select>
                </div>
                <!-- /. col-sm-6-->
              </div> 
              <!-- /. row -->
            </div>
            <div class="form-group">
              <label for="website">Website</label>
              <input type="text" class="form-control" id="website" placeholder="Website" name="website" required>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" class="form-control" id="description" cols="10" rows="3"
                name="description" required></textarea>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="num_of_employee">Num of Employee</label>
                  <input type="text" class="form-control" id="num_of_employee" name="num_of_employee">
                </div>
                <!-- /.col-sm-6-->
              </div>
              <div class="col-sm-6">
                <div class=" form-group">
                  <label for="average_revenue">Average Revenue</label>
                  <input type="text" class="form-control" id="average_revenue" name="average_revenue">
                </div>
                <!-- /.col-sm-6-->
              </div>
              <!-- /. row -->
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
    </div>
  </div>
  <!-- /.conainer-fluid -->
</main>
<script>
  $(document).ready( function() {
        $.getJSON( "{{asset('industries.json')}}", function( data ) {
        }).done(function(data) {
            $.each(data.industries, function( index, value ) {
              $('#industry').append(`<option value="${value}">${value}</option>`)
            })
            $.each(data.countries, function( index, value ) {
            $('#country').append(`<option value="${value.name}">${value.name}</option>`)
            })
        })
    })
  </script>
@endsection
