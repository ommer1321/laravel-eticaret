@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">

                <h3>Slider
                    <a href="{{route('index.slider')}}" class="btn btn-danger float-end">Back</a>
                </h3>

            </div>

  <form action="{{route('store.slider')}}" method="post" enctype="multipart/form-data">
  @csrf


            <div class="card-body">


              @if ($errors->any())
                   
              @foreach ($errors->all() as $error )
              <div class="alert alert-danger">
              <li>{{$error}}</li>
              </div>
              @endforeach
                
              @endif  
          
                 
                 
                 
                 
                 
                  <div class="tab-content" id="nav-tabContent">
                    
                    <!--1-start-->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        
                        
                        <!---->
                        <label  class="form-label mt-5">Slider Title</label>
                        <div class="input-group mb-3">
                            <input  name="title" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>



                        <!---->                          
                        <label  class="form-label mt-3">Active / Passive</label>
                        <div class="input-group mb-3">
                            <input style="width: 50px; " name="status" value="1" type="checkbox" >
                          </div>

             
                        <!---->
                        
                        <label  class="form-label mt-3"> Description </label>
                        <div class="mb-3">
                            <textarea  name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>

                           <!---->
                          <div class="m-5">
                            <label for="formFileLg" class="form-label">Upload Product Images</label>
                            <input  multiple name="image" class="form-control" type="file" id="formFileMultiple" >
                          </div>
                           <!---->


                          <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                          </div>

                     <!--1-end-->  




          

        
                
                
                
                
                
                </div>

                </div>
                  
            </form>




            </div>

        </div>


    </div>
</div>

@endsection