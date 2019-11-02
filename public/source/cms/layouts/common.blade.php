@extends('cms.layouts.master')
@section('page-content')  

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    @include('cms.components.sidebar')
      
  
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
  
        <!-- Main Content -->
        <div id="content">
  
          <!-- Topbar -->
          @include('cms.components.topbar')
  
          <!-- Begin Page Content -->
          <div class="container-fluid">  
        
            @yield('content')
            
          </div>
          <!-- /.container-fluid -->
  
        </div>
        <!-- End of Main Content -->
  
      </div>
      <!-- End of Content Wrapper -->
  
    </div>
    <!-- End of Page Wrapper --> 
    @include('cms.components.logoutModal')
@endsection