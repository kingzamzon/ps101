@extends('dashboard.template')

@section('page-title')
  New Contact
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
        <form method="POST" action="{{ route('contacts.store') }}" id="addJournalForm">
          @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="full_name">Full Name </label>
                  <input type="text" class="form-control" id="full_name" placeholder="Enter full name" name="full_name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <fieldset class="form-group">
                  <label>Status</label>
                  <select id="status" class="form-control select2-single" name="status">
                    <option>Public</option>
                    <option>Private</option>
                  </select>
                </fieldset>
                <div class="form-group">
                  <label for="address">Address</label>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="cvv">Street Address</label>
                        <input type="text" class="form-control" id="street_address" placeholder="Street Address"
                          name="street_address">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="City" name="city">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" placeholder="State" name="state">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="cvv">Zip Code</label>
                        <input type="text" class="form-control" id="zip_code" placeholder="Zip Code" name="zip_code">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country1" name="country" class="form-control" name="country">
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-sm-6-->
              </div>
              <div class="col-sm-6">
                <fieldset class="form-group">
                  <label>Company</label>
                  <select id="company" class="form-control select2-single" name="company">
                    @if($companies->count() > 0)
                      @foreach($companies as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>
                      @endforeach
                    @endif
                  </select>
                </fieldset>
                <div class="form-group">
                  <label for="tags">Tags</label>
                  <input type="text" class="form-control" id="tags" placeholder="Enter your name" name="tags">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country" name="select1" class="form-control" name="country">
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="number">Number</label>
                        <input type="text" class="form-control" id="number" placeholder="Number" name="number">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="home">Home</label>
                        <input type="text" class="form-control" id="home" placeholder="Home" name="home">
                      </div>
                    </div>
                  </div>
                  <fieldset class="form-group">
                    <label>Birthday</label>
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </span>
                      <input name="birthday" class="form-control" type="date" id="birthday">
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