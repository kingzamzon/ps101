@extends('dashboard.template')

@section('page-title')
  New Company
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Create new Company</li>
    <!-- Breadcrumb Menu-->

  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-note"></i> Create new Company
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('company.store') }}" id="addJournalForm">
            @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="street_address">Street Address</label>
                        <input type="text" id="street address" class="form-control" placeholder="Street address"
                          name="street_address">
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
                        <select id="Country" class="form-control" name="country">
                          <option value="0">Please select</option>
                          <option value="1">Option #1</option>
                          <option value="2">Option #2</option>
                          <option value="3">Option #3</option>
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
                    <option value="0">Public</option>
                    <option value="1">Private</option>
                  </select>
                </fieldset>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country" class="form-control" name="country">
                          <option value="0">United States</option>
                          <option value="1">Option #1</option>
                          <option value="2">Option #2</option>
                          <option value="3">Option #3</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="number">Number</label>
                        <input type="text" class="form-control" id="number" placeholder="Number" name="number">
                      </div>
                    </div>
                    <div class=" col-sm-4">
                      <div class="form-group">
                        <label for="home">Home</label>
                        <input type="text" class="form-control" id="home" placeholder="Home" name="home">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tags">Tags</label>
                  <input type="text" class="form-control" id="tags" placeholder="Enter your name" name="tags">
                </div>
              </div>
              <!-- /. row -->
            </div>
            <div class="form-group">
              <label for="website">Website</label>
              <input type="text" class="form-control" id="website" placeholder="Website" name="website">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" class="form-control" id="description" cols="10" rows="3"
                name="description"></textarea>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="twitter_handle">Twitter Handle</label>
                  <input type="text" class="form-control" id="twitter_handle" name="twittet_handle">
                </div>
                <div class="form-group">
                  <label for="num_of_employee">Num of Employee</label>
                  <input type="text" class="form-control" id="num_of_employee" name="num_of_employee">
                </div>
                <div class=" form-group">
                  <label for="average_revenue">Average Revenue</label>
                  <input type="text" class="form-control" id="average_revenue" name="average_revenue">
                </div>
                <div class=" form-group">
                  <label for="identifier">Identifier</label>
                  <input type="text" class="form-control" id="identifier" name="identifier">
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select id="category" name="category" class="form-control">
                    <option value="0">Please select</option>
                    <option value="1">Option #1</option>
                    <option value="2">Option #2</option>
                    <option value="3">Option #3</option>
                  </select>
                </div>
                <!-- /.col-sm-6-->
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="industry">Industry</label>
                  <input type="text" class="form-control" id="industry" name="industry">
                </div>
                <div class="form-group">
                  <label for="stock_symbol">Stock Symbol</label>
                  <input type="text" class="form-control" id="stock_symbol" name="stock_symbol">
                </div>
                <fieldset class="form-group">
                  <label>Priority</label>
                  <select id="priority" class="form-control select2-single" name="priority">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                  </select>
                </fieldset>
                <div class="form-group">
                  <label for="vat_number">VAT Number</label>
                  <input type="text" class="form-control" id="vat_number">
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" class="form-control" id="image" name="image">
                </div>
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
@endsection