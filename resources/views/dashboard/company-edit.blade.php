@extends('dashboard.template')

@section('page-title')
  Edit {{$company->name}} Company
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Edit Company</li>
    <!-- Breadcrumb Menu-->

  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="icon-note"></i> Edit Company
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('company.update', ['company' => $company->id]) }}" id="addJournalForm">
            @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="hidden" name="_method" value="PUT">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="{{$company->name}}">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="street_address">Street Address</label>
                        <input type="text" id="street address" class="form-control" placeholder="Street address"
                          name="street_address" value="{{$company->address->street_address}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" id="city" class="form-control" placeholder="City" name="city" value="{{$company->address->city}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" id="state" class="form-control" placeholder="State" name="state" value="{{$company->address->state}}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="zip_code">Zip Code</label>
                        <input type="text" id="zip_code" class="form-control" placeholder="Zip Code" name="zip_code" value="{{$company->address->zip_code}}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country" class="form-control" name="country">
                          <option value="{{$company->address->country}}">{{$company->address->country}}</option>
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
                  <label for="phone">Phone</label>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country1" class="form-control" name="country">
                          <option value="{{$company->phone->country}}">{{$company->phone->country}}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="number">Number</label>
                        <input type="text" class="form-control" id="number" placeholder="Number" name="number" value="{{$company->phone->number}}">
                      </div>
                    </div>
                    <div class=" col-sm-4">
                      <div class="form-group">
                        <label for="home">Home</label>
                        <input type="text" class="form-control" id="home" placeholder="Home" name="home" value="{{$company->phone->home}}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tags">Tags</label>
                  <input type="text" class="form-control" id="tags" placeholder="Enter your name" name="tags" value="{{$company->tags}}">
                </div>
              </div>
              <!-- /. row -->
            </div>
            <div class="form-group">
              <label for="website">Website</label>
              <input type="text" class="form-control" id="website" placeholder="Website" name="website" value="{{$company->company_info->website}}">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" cols="10" rows="3"
                name="description">{{$company->company_info->description}}</textarea>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="twitter_handle">Twitter Handle</label>
                  <input type="text" class="form-control" id="twitter_handle" name="twitter_handle" value="{{$company->company_info->twitter_handle}}">
                </div>
                <div class="form-group">
                  <label for="num_of_employee">Num of Employee</label>
                  <input type="text" class="form-control" id="num_of_employee" name="num_of_employee" value="{{$company->company_info->num_of_employee}}">
                </div>
                <div class=" form-group">
                  <label for="average_revenue">Average Revenue</label>
                  <input type="text" class="form-control" id="average_revenue" name="average_revenue" value="{{$company->company_info->average_revenue}}">
                </div>
                <div class=" form-group">
                  <label for="identifier">Identifier</label>
                  <input type="text" class="form-control" id="identifier" name="identifier" value="{{$company->company_info->identifier}}">
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select id="category" name="category" class="form-control">
                    <option @if($company->company_info->category == 'Client') selected @endif>Client</option>
                    <option @if($company->company_info->category == 'Partner') selected @endif>Partner</option>
                    <option @if($company->company_info->category == 'Prospect') selected @endif>Prospect</option>
                  </select>
                </div>
                <!-- /.col-sm-6-->
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="industry">Industry</label>
                  <select id="industry" class="form-control select2-single" name="industry">
                    <option value="{{$company->company_info->industry}}">{{$company->company_info->industry}}</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="stock_symbol">Stock Symbol</label>
                  <input type="text" class="form-control" id="stock_symbol" name="stock_symbol" value="{{$company->company_info->stock_symbol}}">
                </div>
                <fieldset class="form-group">
                  <label>Priority</label>
                  <select id="priority" class="form-control select2-single" name="priority" >
                    <option @if($company->company_info->priority == 'Low') selected @endif>Low</option>
                    <option @if($company->company_info->priority == 'Medium') selected @endif>Medium</option>
                    <option @if($company->company_info->priority == 'High') selected @endif>High</option>
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
<script>
  $(document).ready( function() {
        $.getJSON( "{{asset('industries.json')}}", function( data ) {
        }).done(function(data) {
            // console.log(data.industries);
            $.each(data.industries, function( index, value ) {
            $('#industry').append(`<option value="${value}">${value}</option>`)
            })
            $.each(data.countries, function( index, value ) {
            $('#country1').append(`<option value="${value.name}">${value.name}</option>`)
            $('#country').append(`<option value="${value.name}">${value.name}</option>`)
            })
        })
    })
</script>
@endsection