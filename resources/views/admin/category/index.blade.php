@extends('admin.layouts.app')

@section('content')
    <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Manage Categories</a>
          </li>
          <li class="breadcrumb-item active">Category List</li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header"><i class="fas fa-chart-area"></i>Category List</div>
          <div class="card-body">
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger" role="alert">{{ $error }}</div>
            @endforeach
            @if(Session::has('message'))
              <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
              <div class="container">
                <div class="row">                             
                  <table width="100%" class="table table-striped table-bordered table-hover dataTables">
                    <thead>
                        <tr>
                          <th>Category Name</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>  
                        @foreach($data['all_records'] as $row)    
                       <tr>            
                          <td> 
                           @if($row->level == 0) <b>  @endif 
                           @if($row->level == 1) &nbsp; - @endif   
                           @if($row->level == 2) &nbsp; &nbsp; - - @endif     
                           @if($row->level == 3) &nbsp; &nbsp; &nbsp; - - - @endif       
                           @if($row->level == 4) &nbsp; &nbsp; &nbsp; &nbsp; - - - - @endif       
                           @if($row->level == 5) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  - - - - - @endif       
                           @if($row->level > 5)  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - - - @endif
                           
                           {{ $row->category_name }} 
                           @if($row->level == 0) </b>  @endif 
                           </td> 
                          
                          <td>
                            <button onclick="window.location='{{ url('/')}}/admin/category/edit/{{$row->category_row_id}}'" class="btn btn-warning">Edit</button>
                            
                            <button deleteID="{{$row->category_row_id}}"  class="btn btn-danger deleteLink">Delete</button>

                          </td>                        
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>
@endsection
