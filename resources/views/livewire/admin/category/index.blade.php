<div>


    <!-- Modal -->
<div  wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <form wire:submit.prevent = "destroyCategory">

                    <div class="modal-body">
                    
                        Do You Want To Delete This Category?

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button wire:click='destroyCategory'  data-bs-dismiss="modal"  type="button" class="btn btn-primary">Delete</button>
                    </div>

                </form>
                    
      </div>
    </div>
  </div>




    <div class="row">
    <div class="col-md-12">

        <div class="card">

          
            <div class="card-header">
        
        
        <!--Sesion Alert Message-->
                @if (session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
                @endif




                <h3>Category
                    <a href="{{route('create.category')}}" class="btn btn-primary float-end">Add Category</a>
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


        
        @foreach ($categories as $category )
        
        
        <tr>

            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->status == 1 ? 'Active' : 'Hidden' }}</td>
            <td>
                <a href="{{route('edit.category',$category->id)}}" class="btn btn-info">Edit</a>
                <a href="#" wire:click="deleteCategory({{$category->id}})" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Delete</a> 
            </td>

        </tr>

    
    





        @endforeach
     
        
    </tbody>


</table>

<div>  {{$categories->links()}} </div> 

</div>
        </div>
 

    </div>


    


</div>

</div>