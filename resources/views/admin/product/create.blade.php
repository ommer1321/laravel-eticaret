@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">

                <h3>Product
                    <a href="{{route('index.product')}}" class="btn btn-danger float-end">Back</a>
                </h3>

            </div>

  <form action="{{route('store.product')}}" method="post" enctype="multipart/form-data">
  @csrf


            <div class="card-body">


              @if ($errors->any())
                   
              @foreach ($errors->all() as $error )
              <div class="alert alert-danger">
              <li>{{$error}}</li>
              </div>
              @endforeach
                
              @endif  
                <nav>

                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">SEO Tags</button>
                      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Details</button>
                      <button class="nav-link" id="nav-color-tab" data-bs-toggle="tab" data-bs-target="#nav-color" type="button" role="tab" aria-controls="nav-color" aria-selected="false">Product Color</button>
                      <button class="nav-link" id="nav-ımage-tab" data-bs-toggle="tab" data-bs-target="#nav-ımage" type="button" role="tab" aria-controls="nav-ımage" aria-selected="false">Product Image</button>

                    </div>

                  </nav>
                 
                 
                 
                 
                 
                  <div class="tab-content" id="nav-tabContent">
                    
                    <!--1-start-->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        
                        
                        <!---->
                        <label  class="form-label mt-5">Product Name</label>
                        <div class="input-group mb-3">
                            <input  name="product_name" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>



                        <!---->                          
                        <label  class="form-label mt-3">Product Slug</label>
                        <div class="input-group mb-3">
                            <input name="product_slug" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>

                        <!---->
                        
                            
                        
                          <label  class="form-label mt-3">Select Category</label>
                          <select name="product_category" class="form-select">
                        
                          
                            @foreach ( $categories as $category )

                            <option  value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                          </select>
                        <!---->

                          <!---->
                                                
                                                    
                                                
                          <label  class="form-label mt-3">Select Brand</label>
                          <select name="product_brand" class="form-select">
                          

                            @foreach ( $brands as $brand )
                            <option  value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach

                          </select>
                        <!---->
                        
                        <label  class="form-label mt-3">Small Description (500 Words)</label>
                        <div class="mb-3">
                            <textarea  name="product_small_description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>


                        <!---->

                                   
                        <label  class="form-label mt-3">Description </label>
                        <div class="mb-3">
                            <textarea name="product_description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                          </div>

                                                                 
                    </div>

                     <!--1-end-->  



                     <!--2-start-->  
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    


                         <!---->                          
                        
                         <label  class="form-label mt-3">Meta Title</label>
                        <div class="input-group mb-3">
                            <input name="product_meta_title"  type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>


                        <!---->
                        <label  class="form-label mt-3">Meta Description</label>
                        <div class="mb-3">
                            <textarea  name="product_meta_description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>


                        <!---->

                                   
                        <label  class="form-label mt-3">Meta Keywords </label>
                        <div class="mb-3">
                            <textarea name="product_meta_keywords" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                          </div>

                                                                 
                    </div>
                     <!--2-end-->





                            
                    
                    
                  <!--3-start-->
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">

                        <div class="row">
                            
                            
                            <!---->  
                            <div class="col-md-4">                  
                            <label  class="form-label mt-5">Original Price</label>
                            <div class="input-group mb-3">
                                <input name="product_orig_price" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>


                            <!---->  
                            <div class="col-md-4">                  
                                <label  class="form-label mt-5">Selling Price</label>
                                <div class="input-group mb-3">
                                    <input name="product_sell_price" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>



                                       <!---->  
                            <div class="col-md-4">                  
                                <label  class="form-label mt-5">Quantity</label>
                                <div class="input-group mb-3">
                                    <input name="product_quantity" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>

                                       <!---->
                                <div class="col-md-6"> 
                                  
                                <label for="">Trending</label>
                                    <input name="product_trend" value="1" class="form-check-input "  type="checkbox"  >
                              
                                </div>

                                       <!---->   
                                <div class="col-md-6"> 
                                  
                                    <label for="">Status</label>
                                        <input name="product_status" value="1" class="form-check-input " type="checkbox"  >
                                  
                                      
                                    </div>
                                       <!---->                                    
                        </div>





                        </div>
                        <!--3-end-->

                        <!--4-start-->
                        <div class="tab-pane fade" id="nav-ımage" role="tabpanel" aria-labelledby="nav-ımage-tab" tabindex="0">

                         

                              <div class="m-5">
                                <label for="formFileLg" class="form-label">Upload Product Images</label>
                                <input  multiple name="product_images[]" class="form-control" type="file" id="formFileMultiple" >
                              </div>



                              <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Add Product</button>
                              </div>
                        </div>
                        <!--4-end-->
                
        
                     <!--5-start-->
                     <div class="tab-pane fade  " id="nav-color" role="tabpanel" aria-labelledby="nav-color-tab" tabindex="0">
                        
                        
                      <div class="row">



                     @foreach ($colors as $color )


                     <div class="col-md-4 border mt-3">

                   <div class="m-3">
                      <label class="" for="">Quantity : </label>
                    <input type="number" class="form-control" name="quantities[{{$color->id}}]"  >
                   
                    <br>
                    <label for="">{{$color->name}} : </label>
                  <input type="checkbox" name="colors[{{$color->id}}]" value ='{{$color->id}}'  >
                </div>
                      </div>



                     @endforeach




                  

                      </div>
                                 
           
                                 
                  </div>

                   <!--5-end-->  


                
                
                
                
                
                
                </div>

                </div>
                  
            </form>




            </div>

        </div>


    </div>
</div>

@endsection