@extends('cms.layouts.common')
@section('content')  
   <!-- Page Heading -->
   
   <h1 class="h3 mb-2 text-gray-800">Manage Product</h1>  

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">
       All Products {{substr('This string is really really long.', 0,20)}}
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
               <th>Type</th>
               <th>Description</th>
               <th>Price</th>
               <th>P. Price</th>
               <th>IMG</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody>
            @foreach($products as $pr)
              <tr>
               <td>{{$pr->id}}</td>
               <td>{{$pr->name}}</td>
               <td>{{$pr->id_type}}</td>
               <td>{{ substr($pr->description,0,99).'...'}}</td>
               <td>{{$pr->unit_price}}</td>
               <td>{{$pr->promotion_price}}</td>
               <td>{{$pr->image}}</td>
               <td>
                  <div class="row" style="">
                  <button onclick="editProduct({{$pr->id}})" class="btn btn-warning btn-circle">
                      <i class="fas fa-edit"></i>
                    </button>
                  <button onclick="deletePro({{$pr->id}})" class="btn btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
                  </button>
                  </div>
               </td>
            @endforeach
             
             </tbody>
         </table>
         <div id="myModal" class="modal fade" role="dialog">
         <form method="POST" action="{{route('editProduct')}}">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title">Sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body" style="max-height: 600px; overflow: auto;">
              <div class="form-group">
                <label>ID</label><input class="form-control" name="productsID" id="productsID" readonly/>
                </div>
              <div class="form-group">
                <label>Name</label><input class="form-control" name="productsName" id="productsName"/>
                </div>
              <div class="form-group">
                <label>Type</label><input class="form-control" name="productsType" id="productsType"/>
                </div>
              <div class="form-group">
                <label>Description</label><textarea class="form-control" name="productsDescription" rows="5" id="productsDescription"></textarea>
                </div>
              <div class="form-group">
                <label>Price</label><input class="form-control" name="productsPrice" id="productsPrice"/>
                </div>
              <div class="form-group">
                <label>Img</label><input class="form-control" name="productsImg" id="productsImg"/>
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
            document.getElementById('productsID').value = null;
            document.getElementById('productsName').value = null;
            document.getElementById('productsType').value = '';
            document.getElementById('productsDescription').value = '';
            document.getElementById('productsPrice').value = '';
            document.getElementById('productsImg').value = '';
            //document.getElementById('productsID').value = '';
            $("#myModal").modal('show');
          }
          function editProduct(id){
            $.get("getInfoProduct/" + id,function(data){
            document.getElementById('productsID').value = data.id;
            document.getElementById('productsName').value = data.name;
            document.getElementById('productsType').value = data.id_type;
            document.getElementById('productsDescription').value = data.description;
            document.getElementById('productsPrice').value = data.unit_price;
            document.getElementById('productsImg').value = data.image;
            
            $("#myModal").modal('show');
            });
            //$("#myModal").modal('hide');
          }
          function deletePro(id){
            $.get("delProduct/" + id,function(data){
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