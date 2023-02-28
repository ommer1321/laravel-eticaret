@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">

                <h3>Category
                    <a href="{{route('index.category')}}" class="btn btn-primary float-end">Back</a>
                </h3>

            </div>
            <div class="card-body">
                <form action="{{route('store.category')}}" method="post" enctype="multipart/form-data">
                
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
                        <input type="text" name="name" class="form-control">
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>


                     <div class="col-md-6 mt-2">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control">
                        @error('slug')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    </div>


                    <div class="col-md-6 mt-2">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        @error('description')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    
                    <div class="col-md-4 mt-2">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    
                    <div class="col-md-2 mt-2">
                        <br>
                        <label for="">Status</label>
                        <br>
                      <input type="checkbox" name="status" value ='1' id="">
                    </div>
                    
                    <h3 class="mt-5">Seo Tags</h3>
                    
                    
                    <div class="col-md-6 mt-2">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                        @error('meta_title')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    </div>

                    <div class="col-md-6 mt-2">
                        <label for="">Meta Keyword</label>
                        <input type="text" name="meta_keyword" class="form-control">
                        @error('meta_keyword')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    </div>

              
                    <div class="col-md-6 mt-2">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" class="form-control" id="" cols="30" rows="10"></textarea>
                        @error('meta_description')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    </div>

                    <div class="col-md-7 mt-5">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </div>

                </form>
            </div>
        </div>


    </div>
</div>


@endsection