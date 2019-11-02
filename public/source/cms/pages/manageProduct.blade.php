@extends('cms.layouts.common')
@section('content')  
   <!-- Page Heading -->
   
   <h1 class="h3 mb-2 text-gray-800">Manage Product</h1>  

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">All Products</h6>
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           <thead>
             <tr>
                <th>ID</th>
               <th>Name</th>
               <th>Price</th>
               <th>Description</th>
               <th>Actions</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>Michael Bruce</td>
               <td>Javascript Developer</td>
               <td>Singapore</td>
               <td>29</td>
               <td>
                  <button class="btn btn-primary btn-circle">
                      <i class="fas fa-eye"></i>
                    </button>
                  <button class="btn btn-warning btn-circle">
                      <i class="fas fa-edit"></i>
                    </button>
                  <button class="btn btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
                  </button>
               </td>
             </tr>
             <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>
                   <button class="btn btn-primary btn-circle">
                       <i class="fas fa-eye"></i>
                     </button>
                   <button class="btn btn-warning btn-circle">
                       <i class="fas fa-edit"></i>
                     </button>
                   <button class="btn btn-danger btn-circle">
                     <i class="fas fa-trash"></i>
                   </button>
                </td>
              </tr>
              <tr>
                  <td>Michael Bruce</td>
                  <td>Javascript Developer</td>
                  <td>Singapore</td>
                  <td>28</td>
                  <td>
                     <button class="btn btn-primary btn-circle">
                         <i class="fas fa-eye"></i>
                       </button>
                     <button class="btn btn-warning btn-circle">
                         <i class="fas fa-edit"></i>
                       </button>
                     <button class="btn btn-danger btn-circle">
                       <i class="fas fa-trash"></i>
                     </button>
                  </td>
                </tr>
                <tr>
                    <td>Michael Bruce</td>
                    <td>Javascript Developer</td>
                    <td>Singapore</td>
                    <td>29</td>
                    <td>
                       <button class="btn btn-primary btn-circle">
                           <i class="fas fa-eye"></i>
                         </button>
                       <button class="btn btn-warning btn-circle">
                           <i class="fas fa-edit"></i>
                         </button>
                       <button class="btn btn-danger btn-circle">
                         <i class="fas fa-trash"></i>
                       </button>
                    </td>
                  </tr>
           </tbody>
         </table>
       </div>
     </div>
   </div>
@endsection