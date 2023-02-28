@extends('layouts.admin')

@section('content')


@if ($errors->any())
                   
@foreach ($errors->all() as $error )
<div class="alert alert-danger">
<li>{{$error}}</li>
</div>
@endforeach
  
@endif  
   
    <!-- addcolor Modal -->
    <div   class="modal fade" id="addcolor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="addcolorLabel">Add Color</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
    
     
      <div >
            <form action = "{{route('store.color')}}" method="post" >
                @csrf
                        <div class="modal-body">
                        
                            <label class="mt-3" for="">Color Name</label>
                            <input name="name"  class="form-control form-control-sm" type="text" placeholder="{{ old('name') }}" aria-label=".form-control-sm example">
    
                            @error('name')
                                <small class="text-danger">{{$message}}</small>
                                <br>
                            @enderror
    
                            <label class="mt-3" for="">Color Code</label>
                            <input name="code"  class="form-control form-control-sm" type="text" placeholder="{{ old('code') }}"  aria-label=".form-control-sm example">
                        
                            @error('code')
                                <small class="text-danger">{{$message}}</small>
                                <br>
                            @enderror
    
                          
                                <input @if (old('status') ) checked @endif   class="form-check-input mt-3" type="checkbox" name="status" value="1" id="flexCheckDefault">
                                <label class="form-check-label mt-3" for="flexCheckDefault">
                                  Aktif 
                                </label>
                          
    
                        </div>
    
                        
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button   type="submit" class="btn btn-primary">Add</button>
                        </div>
    
                    </form>
                </div>             
          </div>
        </div>
      </div>
       <!-- addcolor  Modal -->
    






       

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">

                <h3>Color
                   
                    <a href="#" data-bs-toggle="modal" data-bs-target="#addcolor" class="btn btn-primary float-end">Add Color</a>

                </h3>

            </div>


            <div class="card-body">

               <table class="table table-bordered table-striped">

                <thead>
            
                    <tr>
            
                        <td>ID</td>
                        <td>Name</td>
                        <td>Status</td>
                        <td>Action</td>
            
                    </tr>
            
                </thead>
            
            
                <tbody>
            
            
                    
                    @foreach ($colors as $color )
                    
                    
                    <tr>
            
                        <td>{{$color->id}}</td>
                        <td>{{$color->name}}</td>
                        <td>{{$color->status == 1 ? 'Active' : 'Hidden' }}</td>
                        <td>
                         

                            <a href="{{route('edit.color',[$color->id])}}" class="btn btn-info">Edit</a>
                            <a href="{{route('delete.color',[$color->id])}}" class="btn btn-danger" >Delete</a> 
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