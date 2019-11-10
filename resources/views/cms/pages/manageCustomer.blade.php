@extends('cms.layouts.common')
@section('content')  
   <!-- Page Heading -->
   
   <h1 class="h3 mb-2 text-gray-800">Manage Product</h1>  

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">
       All customers
       <button onclick="openModal()" style="float:right; margin:0px" class="btn btn-primary">Add </button>
       </h6>
        
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           <thead>
             <tr>
                <th>ID</th>
               <th>Name</th>
               <th>Gender</th>
               <th>Email</th>
               <th>Address</th>
               <th>Phone Number</th>
               <th>note</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody>
            @foreach($customers as $cm)
              <tr>
               <td>{{$cm->id}}</td>
               <td>{{$cm->name}}</td>
               <td>{{$cm->gender}}</td>
               <td>{{$cm->email}}</td>
               <td>{{$cm->address}}</td>
               <td>{{$cm->phone_number}}</td>
               <td>{{$cm->note}}</td>
               <td>
                  <div class="row" style="">
                  <button onclick="editCustomer({{$cm->id}})" class="btn btn-warning btn-circle">
                      <i class="fas fa-edit"></i>
                    </button>
                  <button onclick="deleteCus({{$cm->id}})" class="btn btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
                  </button>
                  </div>
               </td>
            @endforeach
             
             </tbody>
         </table>
         <div id="myModal" class="modal fade" role="dialog">
         <form method="POST" action="{{route('editCustomer')}}">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content" >
              <div class="modal-header">
              <h4 class="modal-title">Khách hàng</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body" style="max-height: 600px; overflow: auto;">
              <div class="form-group">
                <!-- <label>ID</label> -->
                <input class="form-control" name="customerID" id="customerID" readonly/>
                </div>
              <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="customerName" id="customerName"/>
                </div>
              <div class="form-group">
                <label>Gender</label>
                <input class="form-control" name="customerGender" id="customerGender"/>
                </div>
              <div class="form-group">
                <label>Email</label>
                <input name="customerEmail" class="form-control" id="customerEmail"/>
                </div>
              <div class="form-group">
                <label>Address</label>
                <input class="form-control" name="customerAddress" id="customerAddress"/>
                </div>
              <div class="form-group">
                <label>Phone number</label><input class="form-control" name="customerPhone" id="customerPhone"/>
                </div>
              <div style="width:94%; margin-left:2%;" class="form-group">
                <label>Note</label>
                <textarea class="form-control" rows="3" name="customerNote" id="customerNote"></textarea>
                </div>
              
                </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
                <button type="button" style="border: 1px black; background-color: gainsboro;" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </form>
            </div>

          </div>
        </div>
        <script>
          function openModal(){
            document.getElementById('customerID').value = null;
            document.getElementById('customerName').value = null;
            document.getElementById('customerGender').value = '';
            document.getElementById('customerEmail').value = '';
            document.getElementById('customerAddress').value = '';
            document.getElementById('customerPhone').value = '';
            document.getElementById('customerNote').value = '';
            $("#myModal").modal('show');
          }
          function editCustomer(id){
            $.get("getInfoCustomer/" + id,function(data){
            document.getElementById('customerID').value = data.id;
            document.getElementById('customerName').value = data.name;
            document.getElementById('customerGender').value = data.gender;
            document.getElementById('customerEmail').value = data.email;
            document.getElementById('customerAddress').value = data.address;
            document.getElementById('customerPhone').value = data.phone_number;
            document.getElementById('customerNote').value = data.note;
            
            $("#myModal").modal('show');
            });
            //$("#myModal").modal('hide');
          }
          function deleteCus(id){
            $.get("delCustomer/" + id,function(data){
              alert(data);
              if(data=="OK"){
                location.reload();
              }
            });
          }
        </script>
       </div>
     </div>
   </div>
@endsection