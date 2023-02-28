
<div>


    <!-- Modal -->
<div  wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

  <!-- loading  -->
  <div wire:loading class="p-3">
    <div class="spinner-border text-primary " role="status">
    </div>
</div>
<!-- loading Modal -->
<div wire:loading.remove>
        <form >

                    <div class="modal-body">
                    
                        Do You Want To Delete This Brand?

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button  wire:click="destroyBrand()"   data-bs-dismiss="modal"  type="button" class="btn btn-primary">Delete</button>
                    </div>

                </form>
            </div>            
      </div>
    </div>
  </div>
   <!-- Modal -->



   
    <!-- addBrand Modal -->
<div  wire:ignore.self class="modal fade" id="addBrand" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addBrandLabel">Add Brand</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

  <!-- loading  -->
        <div wire:loading class="p-3">
            <div class="spinner-border text-primary " role="status">
            </div>
        </div>
  <!-- loading Modal -->
  <div wire:loading.remove>
        <form wire:submit.prevent ='storeBrand' >

                    <div class="modal-body">
                    
                        <label class="mt-3" for="">Brand Name</label>
                        <input wire:model.defer = 'name' class="form-control form-control-sm" type="text"  aria-label=".form-control-sm example">

                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                            <br>
                        @enderror

                            
                                
                        <label class="mt-3" for="">Category Name</label>
                            
                        <select wire:model.defer = 'category_id' class="form-control form-control-sm" id="">
                        @foreach ($categories as $category )
                            
                        <option  value="{{$category->id}}">{{$category->name}}</option>
                        
                        @endforeach
                        </select>    
                        
                        @error('category_id')
                            <small class="text-danger">{{$message}}</small>
                            <br>
                        @enderror



                        <label class="mt-3" for="">Brand Slug</label>
                        <input wire:model.defer = 'slug' class="form-control form-control-sm" type="text"  aria-label=".form-control-sm example">
                    
                        @error('slug')
                            <small class="text-danger">{{$message}}</small>
                            <br>
                        @enderror

                      
                            <input wire:model.defer = 'status' class="form-check-input mt-3" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label mt-3" for="flexCheckDefault">
                              Hidden 
                            </label>
                      

                    </div>

                    
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button wire:click = 'storeBrand'  data-bs-dismiss="modal"  type="button" class="btn btn-primary">Add</button>
                    </div>

                </form>
            </div>             
      </div>
    </div>
  </div>
   <!-- addBrand  Modal -->





   
    <!-- editBrand Modal -->
    <div  wire:ignore.self class="modal fade" id="editBrand" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="editBrandLabel">Edit Brand</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
    
     <!-- loading  -->
     <div wire:loading class="p-3">
        <div class="spinner-border text-primary " role="status">
        </div>
    </div>
<!-- loading Modal -->
{{-- @if ($category->id == ) @endif --}}

    <div wire:loading.remove>
            <form wire:submit.prevent ='updateBrand' >
    
                        <div class="modal-body">
                        
                            
                            <label class="mt-3" for="">Category Name</label>
                            
                            <select wire:model.defer = 'category_id' class="form-control form-control-sm" id="">
                            @foreach ($categories as $category )
                                
                            <option  value="{{$category->id}}">{{$category->name}}</option>
                            
                            @endforeach
                            </select>    
                            
                            @error('category_id')
                                <small class="text-danger">{{$message}}</small>
                                <br>
                            @enderror
    


                            <label class="mt-3" for="">Brand Name</label>
                            <input wire:model.defer = 'name' class="form-control form-control-sm" type="text"  value="" aria-label=".form-control-sm example">
    
                            @error('name')
                                <small class="text-danger">{{$message}}</small>
                                <br>
                            @enderror
    
                            <label class="mt-3" for="">Brand Slug</label>
                            <input wire:model.defer = 'slug' class="form-control form-control-sm" type="text"  aria-label=".form-control-sm example">
                        
                            @error('slug')
                                <small class="text-danger">{{$message}}</small>
                                <br>
                            @enderror
    
                          
                                <input wire:model.defer = 'status' class="form-check-input mt-3" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label mt-3" for="flexCheckDefault">Hidden   </label>
                          
    
                        </div>
    
                        
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button wire:click = 'updateBrand'  data-bs-dismiss="modal"  type="button" class="btn btn-primary">Update</button>
                        </div>
    
                    </form>
                </div>
                        
          </div>
        </div>
      </div>
       <!-- editBrand  Modal -->
    
    













    <div class="row">
    <div class="col-md-12">

        <div class="card">

          
            <div class="card-header">
        
        
        <!--Sesion Alert Message-->
                @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
                @endif
        <!--Sesion Alert Message-->



                <h3>Brand
                    <a href="#" data-bs-toggle="modal" data-bs-target="#addBrand" class="btn btn-primary float-end">Add Brand</a>
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


        @foreach ($brands as $brand )
            
        
      
        
        
        <tr>

            <td>{{$brand->name}}</td>
            <td>{{$brand->slug}}</td>
            <td>{{$brand->status == 1 ? 'Hidden' : 'Active'}}</td>
            <td>
                <a href="#" data-bs-toggle="modal" wire:click = 'editBrand({{$brand->id}})' data-bs-target="#editBrand" class="btn btn-info">Edit</a>
                <a href="#"  wire:click="deleteBrand({{$brand->id}})" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Delete</a> 
            </td>

        </tr>

    
    
    @endforeach






     
  
    </tbody>


</table>
{{$brands->links()}}
<div>  </div> 

</div>
        </div>
 

    </div>


    


</div>

</div>
