@extends('dashboard.template')

@section('page-title')
  Document
@endsection

@section('main')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-file-pdf-o"></i> Documents</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
    </li>
  </ol>

  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-file-pdf-o"></i> Document/File Upload
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="name">Access</label>
                <select id="select1" name="select1" class="form-control">
                  <option value="0">Public</option>
                  <option value="1">Private</option>
                </select>
              </div>
              <div class="form-group">
                <label for="name">Tags</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="name">File</label>
                <input type="file" class="form-control" id="file-input" name="file-input">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" cols="30" rows="2"></textarea>
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
        <!--/.col-->
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-list"></i> Files
            </div>
            <div class="card-body">
              jdhfjkdh
            </div>
          </div>
        </div>
        <!--/.col-->
      </div>
    </div>
  </div>
</main>

@endsection