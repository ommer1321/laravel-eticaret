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

  <form action="{{route('update.product',$product->id)}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
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
                            <input  value="{{$product->name}}" name="product_name" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>



                        <!---->                          
                        <label  class="form-label mt-3">Product Slug</label>
                        <div class="input-group mb-3">
                            <input value="{{$product->slug}}" name="product_slug" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>

                        <!---->
                        
                            
                        
                          <label  class="form-label mt-3">Select Category</label>
                          <select name="product_category" class="form-select">
                        
                          
                            @foreach ( $categories as $category )
                            
                            <option @if($product->category->id == $category->id) selected @endif  value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                          </select>
                        <!---->

                          <!---->
                                                
                                                    
                                                
                          <label  class="form-label mt-3">Select Brand</label>
                          <select  name="product_brand" class="form-select">
                          

                            @foreach ( $brands as $brand )
                            <option @if($product->brand == $brand->id) selected @endif  value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach

                          </select>
                        <!---->
                        
                        <label  class="form-label mt-3">Small Description (500 Words)</label>
                        <div class="mb-3">
                            <textarea   name="product_small_description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$product->small_description}}</textarea>
                          </div>


                        <!---->

                                   
                        <label  class="form-label mt-3">Description </label>
                        <div class="mb-3">
                            <textarea name="product_description" class="form-control" id="exampleFormControlTextarea1" rows="5">{{$product->description}}</textarea>                          </div>

                                                                 
                    </div>

                     <!--1-end-->  



                     <!--2-start-->  
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    


                         <!---->                          
                        
                         <label  class="form-label mt-3">Meta Title</label>
                        <div class="input-group mb-3">
                            <input  value="{{$product->meta_title}}"  name="product_meta_title"  type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>


                        <!---->
                        <label  class="form-label mt-3">Meta Description</label>
                        <div class="mb-3">
                            <textarea  name="product_meta_description" class="form-control" id="exampleFormControlTextarea1" rows="3">
                              {{$product->meta_description}}
                            </textarea>
                          </div>


                        <!---->

                                   
                        <label  class="form-label mt-3">Meta Keywords </label>
                        <div class="mb-3">
                            <textarea name="product_meta_keywords" class="form-control" id="exampleFormControlTextarea1" rows="5">
                              {{$product->meta_keywords}}
                            </textarea>
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
                                <input  value="{{$product->original_price}}"  name="product_orig_price" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>


                            <!---->  
                            <div class="col-md-4">                  
                                <label  class="form-label mt-5">Selling Price</label>
                                <div class="input-group mb-3">
                                    <input value="{{$product->selling_price}}" name="product_sell_price" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>

                                

                                       <!---->  
                            <div class="col-md-4">                  
                                <label  class="form-label mt-5">Quantity</label>
                                <div class="input-group mb-3">
                                    <input  value="{{$product->quantity}}"  name="product_quantity" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>

                             
                                       


                                       <!---->
                                       <div class="col-md-6"> 
                                  
                                        <label for="">Trending</label>
                                            <input  @if($product->trend == 1)checked @endif name="product_trend" value="1" class="form-check-input "  type="checkbox"  >
                                      
                                        </div>
        
                                               <!---->   
                                        <div class="col-md-6"> 
                                          
                                            <label for="">Status</label>
                                                <input  @if($product->status == 1)checked @endif name="product_status" value="1" class="form-check-input " type="checkbox"  >
                                          
                                              
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
                  
                       
                       @if ($product->productImages)
                       <div class="row">
                        @foreach ($product->productImages as $image )
                  
                        <div class="col-md-3">
                          <div class="card" style="width: 18rem;">
                            <img src="{{asset($image->image)}}" class="card-img-top" alt="">
                            <div class="card-body">
                           <a href="{{route('delete.productImage',[$image->id])}}"    class="btn btn-sm btn-danger" >X</a>
                  
                            </div>
                          </div>
                        </div>
                  
                        @endforeach
                  
                      </div>
                       
                      
                      @else
                  
                      <small class="text-danger"> No İmage</small>
                  
                       @endif
                          
                  
                          <button type="submit" class="btn  btn-success mt-3">Update Product</button>
                  
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

<table class=" table table-responsive mt-5  table-striped">

  <div class="table table-sm table-bordered table-group-divider">

    <thead class=" m-3">
      <tr>

        <td><h4>Color Name</h4></td>
        <td><h4>Quantity</h4></td>
        <td><h4>Delete</h4></td>

      </tr>
    </thead>

  

    <tbody>
     
      @foreach ( $product->productColor as $prodColor )

<tr class="prod-color-tr">
<td>
  
  @if ($prodColor->color)
  
   <h5 > {{$prodColor->color->name}}</h5>

  @else

  <div class="text-danger">No Color Found</div>
  
  @endif

</td>
  <td>
<div class="input-group mb-3 " style="width: 250px">
  <input type="number"  class=" productColorQuantity form-control form-control-sm" value="{{$prodColor->quantity}}">
  <button type="button" value="{{$prodColor->id}}" class="updateProductColorBtn btn btn-primary btn-sm text-white"> Update</button>
</div>
  </td>


<td>
  <button type="button" value="{{$prodColor->id}}" class=" deleteProductColorBtn btn btn-danger btn-sm text-white"> Delete</button>
</td>


</tr>

@endforeach

    </tbody>


  </div>

</table>

                

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

{{-- Güncelleme  --}}

@section('scripts')

<script>













$(document).on('click','.updateProductColorBtn', function (e) {

  var product_id = "{{$product->id}}";
  var prod_color_id = $(this).val();
  var qty = $(this).closest('.prod-color-tr').find('.productColorQuantity').val();
  
if(qty <= 0){

alert('Quantity is Requaired.');
return false;

}

var data = {

  'product_id' : product_id ,
  'prod_color_id' : prod_color_id ,
  'qty' : qty ,

}
console.log(data);

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$.ajax({
  type: "POST",
  url: "{{route('update.color.product')}}",
  data: data,
  dataType: "json",
  success: function (response) {
    console.log([response.message]);
    alert(response.message)
  }
});

});

</script>


{{-- Güncelleme  --}}











{{-- Silme --}}
<script>

$(document).on('click','.deleteProductColorBtn', function (e) {
  var product_id = "{{$product->id}}";
  var delete_id = $(this).val();


  data = {
    'product_id' : product_id,

    'delete_id' : delete_id,
  }



  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


  $.ajax({
    type: "post",
    url: "{{route('delete.color.product')}}",
    data: data,
    dataType: "json",
    success: function (response) {
      alert(response.message);

      // sayfa yenıden yukleme 
      window.location.reload(true);

      
    }
  });


});


</script>

{{-- Silme --}}







{{-- listeleme --}}


{{-- GEri Dönüp Düzenlenecek  --}}
  
  {{-- listeleme --}}
  
@endsection