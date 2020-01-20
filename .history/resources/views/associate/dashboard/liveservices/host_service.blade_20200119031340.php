@include('associate.dashboard.includes.header')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('associate.dashboard.includes.topmenu')
    <!-- Header -->
    <!-- Header -->
    @include('associate.dashboard.includes.topBar')
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
                <h3 class="mb-0">Create Service to Host</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form action="/host-service" method="POST">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ csrf_field() }}
                  <!-- Input groups with icon -->
                  
                  <div class="row">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                          <h3 class="mb-0">Requirement</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                          <textarea id="froala-editor" name="content">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>
                        </div>
                      </div>
                  </div>
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Deliverables</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                      <textarea id="froala-editor" name="content">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>
                    </div>
                  </div>
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Select Service</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <select class="form-control" name="subcategory" data-toggle="select">
                          @foreach ($subcategory as $subcategory)
                          <option value="{{$subcategory->subcategoryname}}">{{ucfirst($subcategory->subcategoryname)}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input name="servicename" class="form-control" placeholder="Time Line to Complete Work" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Add Service Page Content</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                      <textarea id="froala-editor" name="content">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('associate.dashboard.includes.footer')
