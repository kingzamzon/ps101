@extends('dashboard.template')

@section('page-title')
  Chart of Office
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Create new Deal</li>
    <!-- Breadcrumb Menu-->

  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-note"></i> Create new Deal
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="name">Assigned To</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <fieldset class="form-group">
                <label>Products</label>
                <select id="select2-1" class="form-control select2-single">
                  <option>Public</option>
                  <option>Private</option>
                </select>
              </fieldset>
              <fieldset class="form-group">
                <label>Close Date</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                  </span>
                  <input name="daterange" class="form-control" type="text">
                </div>
              </fieldset>
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
              <fieldset class="form-group">
                <label>Contacts</label>
                <select id="select2-1" class="form-control select2-single">
                  <option>Public</option>
                  <option>Private</option>
                </select>
              </fieldset>
              <div class="form-group">
                <label for="name">Tags</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
            </div>
            <!-- /. row -->
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" cols="10" rows="3"></textarea>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="name">Probability</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <fieldset class="form-group">
                <label>Commission</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-dollar"></i></span>
                  </div>
                  <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                </div>
              </fieldset>
              <fieldset class="form-group">
                <label>Type</label>
                <select id="select2-1" class="form-control select2-single">
                  <option>New</option>
                  <option>Old</option>
                  <option>Opportunity</option>
                  <option>Priority</option>
                </select>
              </fieldset>
              <!-- /.col-sm-6-->
            </div>
            <div class="col-sm-6">
              <fieldset class="form-group">
                <label>Amount</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-dollar"></i></span>
                  </div>
                  <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                </div>
              </fieldset>
              <fieldset class="form-group">
                <label>Stage</label>
                <select id="select2-1" class="form-control select2-single">
                  <option>Prospect</option>
                  <option>Qualify</option>
                  <option>Research</option>
                  <option>Quote</option>
                  <option>Negotiate</option>
                  <option>Won</option>
                  <option>Lost</option>
                </select>
              </fieldset>
              <fieldset class="form-group">
                <label>Status</label>
                <select id="select2-1" class="form-control select2-single">
                  <option>New</option>
                  <option>Active</option>
                  <option>Inactive</option>
                  <option>On Hold</option>
                  <option>Terminated</option>
                  <option>Hot</option>
                </select>
              </fieldset>

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
        </div>
      </div>
    </div>
  </div>
  <!-- /.conainer-fluid -->
</main>
@endsection