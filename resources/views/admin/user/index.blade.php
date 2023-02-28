@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">

                <h3>Slider
                    {{-- <a href="{{route('index.slider')}}" class="btn btn-danger float-end">Back</a> --}}
                </h3>

            </div>



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
                     
                    
              

                        <table class="table table-bordered table-striped">
         
                         <thead>
                     
                             <tr>
                     
                                 <td>ID</td>
                                 <td>Title</td>
                                 <td>Description</td>
                                 <td>Role</td>
                      
                             
                             </tr>
                     
                         </thead>
                     
                     
                         <tbody>
                     
                     
                   @foreach($users as $user)
                   
                             
                             <tr>
                            
                                <td>{{$loop->iteration}}</td>
                                 <td>{{$user->name}}</td>
                                 <td>{{$user->email}}</td>
                                
                                 <form action="{{route('update.user')}}" method="post">
                                    @method('Put')
                                    @csrf
                                 <td> 
                                    <button class="btn btn-{{$user->role_as == 1 ? 'info' : 'primary'  }} text-white">{{$user->role_as == 1 ? 'Admin' : 'User'  }}</button>
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                </td>

                                </form>
                                 
                     
                             </tr>
                     
                             @endforeach
                         
                     
                     
                     
                     
                    
                          
                             
                         </tbody>
                     
                     
                     </table>
                           
         
                     
                           

          

        
                
                
                
                
                
                </div>

                </div>
                  





            </div>

        </div>


    </div>
</div>

@endsection