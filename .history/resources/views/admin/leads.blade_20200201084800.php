@include('.admin.layouts.header')
   <!-- Main content -->
   <div class="main-content" id="panel">
   <!-- Topnav -->
   @include('admin.layouts.customtopmenu')
   <!-- Header -->
   <!-- Header -->

   @include('admin.layouts.customtopBar')
     <!-- Page content -->
     <div class="container-fluid mt--6">
       <!-- Table -->
       <div class="row">
         <div class="col">
           <div class="card">
             <!-- Card header -->
             <div class="card-header">
               <h3 class="mb-0">Feedbacks List</h3>
               <p class="text-sm mb-0">
                All the Feedbacks Recieved
               </p>
               <br>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
             </div>
             <div class="table-responsive py-4">
               <table class="table table-flush" id="datatable-basic">
                 <thead class="thead-light">
                   <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Category</th>
                    <th>Service</th>
                    <th>Filled on</th>
                </tr>
                 </thead>
                 <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Category</th>
                        <th>Service</th>
                        <th>Filled on</th>
                       </tr>
                 </tfoot>
                 <tbody>
                     @foreach ($leads as $l)
                    <tr>
                        <td> {{ $l->id }} </td> 
                        <td>{{ $l->name }}</td>
                        <td>{{ $l->email }}</td>
                        <td>{{ $l->phone }}</td>
                        <td>{{ $l->state }}</td>
                        <td>{{ $l->city }}</td>
                        <td>{{ $l->category }}</td>
                        <td>{{ $l->service }}</td>
                        <td>{{ $l->created_at }}</td>
                    </tr>
                    @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
       

      @include('admin.layouts.footer')