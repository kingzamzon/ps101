@extends('dashboard.template')

@section('page-title')
  New Company
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Create new Contact</li>
    <!-- Breadcrumb Menu-->

  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-note"></i> Create new Contact
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="name">Full Name </label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <fieldset class="form-group">
                <label>Status</label>
                <select id="select2-1" class="form-control select2-single">
                  <option>Public</option>
                  <option>Private</option>
                </select>
              </fieldset>
              <div class="form-group">
                <label for="">Address</label>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="cvv">Street Address</label>
                      <input type="text" class="form-control" id="cvv" placeholder="Street Address">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="cvv">City</label>
                      <input type="text" class="form-control" id="cvv" placeholder="City">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="cvv">State</label>
                      <input type="text" class="form-control" id="cvv" placeholder="State">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="cvv">Zip Code</label>
                      <input type="text" class="form-control" id="cvv" placeholder="Zip Code">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="cvv">Country</label>
                      <select id="select1" name="select1" class="form-control">
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
                <label>Access</label>
                <select id="select1" name="select1" class="form-control">
                  <option value="0">Public</option>
                  <option value="1">Private</option>
                </select>
              </fieldset>
              <fieldset class="form-group">
                <label>Company</label>
                <select id="select2-1" class="form-control select2-single">
                  <option>Public</option>
                  <option>Private</option>
                </select>
              </fieldset>
              <div class="form-group">
                <label for="name">Tags</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="">Phone</label>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="cvv">Country</label>
                      <select id="select1" name="select1" class="form-control">
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
                      <input type="text" class="form-control" id="number" placeholder="Number">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="home">Home</label>
                      <input type="text" class="form-control" id="home" placeholder="Home">
                    </div>
                  </div>
                </div>
                <fieldset class="form-group">
                  <label>Birthday</label>
                  <div class="input-group">
                    <span class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </span>
                    <input name="daterange" class="form-control" type="text">
                  </div>
                </fieldset>
                <!-- form group phone -->
              </div>
            </div>
            <!-- /. row -->
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" cols="10" rows="3"></textarea>
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
    </div>
  </div>
  <!-- /.conainer-fluid -->
</main>
@endsection