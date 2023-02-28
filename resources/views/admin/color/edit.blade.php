@extends('layouts.admin')

@section('content')



   



       

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">

                <h3>Edit Color
                   
                    <a href="#" data-bs-toggle="modal" data-bs-target="#addcolor" class="btn btn-primary float-end">Edit Color</a>

                </h3>

            </div>


            <div class="card-body">
                <form action="{{route('update.color',$color->id)}}" method="POST" >
                    @method('PUT')
                   @csrf 
               
   
                   <div class="row">
   
               
                       @if ($errors->any())
                      
                       @foreach ($errors->all() as $error )
                       <div class="alert alert-danger">
                       <li>{{$error}}</li>
                       </div>
                       @endforeach
                         
                       @endif    
   
                       <div class="col-md-6 mt-2">
                           <label for="">Name</label>
                           <input type="text" name="name" value="{{$color->name}}" class="form-control">
                           @error('name')
                               <small class="text-danger">{{$message}}</small>
                           @enderror
                       </div>
   
   
                        <div class="col-md-4 mt-2">
                           <label for="">Slug</label>
                           <input type="text" name="code" value="{{$color->code}}"class="form-control">
                           @error('code')
                           <small class="text-danger">{{$message}}</small>
                       @enderror
                       </div>
   
   
                 
                      
                       <div class="col-md-2 mt-2">
                           <br>
                           <label for="">Status</label>
                           <br>
                         <input type="checkbox" name="status" @if ($color->status == 1) checked    @endif value ='1' id="">
                       </div>
                       
                     
                       
   
   
                       <div class="col-md-4 mt-5">
                           <button type="submit" class="btn btn-primary">Save</button>
                       </div>
   
                   </div>
   
                </form>

                </div>
                  





            </div>

        </div>


    </div>


@endsection