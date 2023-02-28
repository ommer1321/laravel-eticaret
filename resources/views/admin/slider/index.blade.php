@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">

                <h3>Slider
                    <a href="{{route('create.slider')}}" class="btn btn-primary float-end">Add Slider</a>
                </h3>

            </div>


            <div class="card-body">

               <table class="table table-bordered table-striped">

                <thead>
            
                    <tr>
            
                        <td>ID</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Status</td>
                        <td>İmage</td>
                        <td>Action</td>
            
                    </tr>
            
                </thead>
            
            
                <tbody>
            
            
          @foreach($sliders as $slider)
          
                    
                    <tr>
                        <td>{{$slider->id}}</td>
                        <td>{{$slider->title}}</td>
                        <td>{{$slider->description}}</td>
                        <td>{{$slider->status == 1 ? 'Active' : 'Passive'  }}</td>

                        <td>      
                            <img style="width: 100px; height : 100px; " src="{{asset('uploads/sliders/'.$slider->image)}}" class="card-img-top" alt="...">
                         
                      
                        </td>
                     
                        <td>   
                            <a href="{{route('edit.slider',$slider->id)}}" class="btn btn-warning text-white">Edit</a>
                            <a href="{{route('delete.slider',$slider->id)}}"  class="btn btn-danger text-white" >Delete</a> 
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