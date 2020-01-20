@include('admin.layouts.header')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('admin.layouts.customtopmenu')
    <!-- Header -->
    <!-- Header -->

    @include('admin.layouts.customtopBar')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Create Service Page</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form action="/save-services" method="POST">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ csrf_field() }}
                  <!-- Input groups with icon -->
                  
                  
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Upload Image</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <!-- Single -->
                        <!--div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                            <div class="fallback">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="projectCoverUploads">
                                    <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                </div>
                            </div>
                            <div class="dz-preview dz-preview-single">
                                <div class="dz-preview-cover">
                                    <img class="dz-preview-img" src="..." alt="..." data-dz-thumbnail>
                                </div>
                            </div>
                        </div-->
                        <div class="col-md-6">

                          <input type="file" name="input_img" class="form-control">
      
                      </div>
                    </div>
                </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('admin.layouts.footer')
