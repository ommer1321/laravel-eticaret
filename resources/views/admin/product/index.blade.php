@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">

                <h3>Product
                    <a href="{{route('create.product')}}" class="btn btn-primary float-end">Add Product</a>
                </h3>

            </div>


            <div class="card-body">

               <table class="table table-bordered table-striped">

                <thead>
            
                    <tr>
            
                        <td>ID</td>
                        <td>Name</td>
                        <td>Status</td>
                        <td>Trending</td>
                        <td>Action</td>
            
                    </tr>
            
                </thead>
            
            
                <tbody>
            
            
                    
                    @foreach ($products as $product )
                    
                    
                    <tr>
            
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->status == 1 ? 'Active' : 'Hidden' }}</td>
                        <td>{{$product->trend== 1 ? 'Active' : 'Hidden' }}</td>
                        <td>
                            <a href="{{route('edit.product',[$product->id])}}" class="btn btn-info">Edit</a>
                            <a href="{{route('delete.product',[$product->category_id,$product->id])}}"  class="btn btn-danger" >Delete</a> 
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