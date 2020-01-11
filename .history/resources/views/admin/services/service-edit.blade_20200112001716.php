@include('admin.layouts.header')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('admin.layouts.topmenu')
    <!-- Header -->
    <!-- Header -->
    @include('admin.layouts.topBar')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Edit Services</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
              <form action="/update-services/{{$service[0]->id}}" method="POST">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ csrf_field() }}
                  <!-- Input groups with icon -->
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                        <input name="subcategoryname" class="form-control" placeholder="Category Name" value="{{$service[0]->servicename}}" type="text">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <select class="form-control" placeholder="Status" name="status">
                            <option value="{{$service[0]->status}}">{{ucfirst($service[0]->status)}}(Current Status)</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success">Update Service</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('admin.layouts.footer')
