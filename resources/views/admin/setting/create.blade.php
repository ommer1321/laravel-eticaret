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

  <form action="{{route('store.setting')}}" method="post">
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
                        
                      <div class="row">
                        
                          <!---->
                    <div class="col-md-6">    
                          <label  class="form-label mt-5">Website Name*</label>
                          <div class="input-group mb-3">
                              <input value=""  name="website_name" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <!---->
                          
                    <!---->
                    <div class="col-md-6">    
                          <label  class="form-label mt-5">Website URL*</label>
                          <div class="input-group mb-3">
                              <input  value="" name="website_url" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <!---->
                          

                                 <!---->
                    <div class="col-md-6">    
                        <label  class="form-label mt-5">Phone-1*</label>
                        <div class="input-group mb-3">
                            <input value=""  name="phone1" type="phone" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>
                      </div>
                      <!---->

                               <!---->
                    <div class="col-md-6">    
                        <label  class="form-label mt-5">Phone-2*</label>
                        <div class="input-group mb-3">
                            <input value=""  name="phone2" type="phone" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>
                      </div>
                      <!---->

                               <!---->
                    <div class="col-md-6">    
                        <label  class="form-label mt-5">email-1*</label>
                        <div class="input-group mb-3">
                            <input value=""  name="email1" type="email" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>
                      </div>
                      <!---->

                               <!---->
                    <div class="col-md-6">    
                        <label  class="form-label mt-5">email2*</label>
                        <div class="input-group mb-3">
                            <input value=""  name="email2" type="email" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>
                      </div>
                      <!---->



                        <div class="col-md-12">    
                           <!---->
                          <label  class="form-label mt-5">Page Title*</label>
                          <div class="input-group mb-3">
                              <input  value="" name="page_title" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <!---->
                        </div>

                        <div class="col-md-6">    
                        <label  class="form-label mt-3">  Meta Description* </label>
                        <div class="mb-3">
                            <textarea  name="meta_description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        </div>


                        <div class="col-md-6">    
                            <label  class="form-label mt-3"> Meta Keywords* </label>
                            <div class="mb-3">
                                <textarea  name="meta_keyword" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                            </div>
 
                            <div class="col-md-12">    
                                <label  class="form-label mt-3">  Address* </label>
                                <div class="mb-3">
                                    <textarea  name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                </div>

                    <hr>
                    {{--  --}}
                    <div class="col-md-6">    
                        <label  class="form-label mt-5">Facebook</label>
                        <div class="input-group mb-3">
                            <input  value="" name="facebook" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>
                      </div>
                    {{--  --}}


                    {{--  --}}
                    <div class="col-md-6">    
                        <label  class="form-label mt-5">İnstagram</label>
                        <div class="input-group mb-3">
                            <input  value="" name="instagram" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>
                      </div>
                    {{--  --}}


                      {{--  --}}
                      <div class="col-md-6">    
                        <label  class="form-label mt-5">Twitter</label>
                        <div class="input-group mb-3">
                            <input  value="" name="twitter" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>
                      </div>
                    {{--  --}}


                    {{--  --}}
                    <div class="col-md-6">    
                        <label  class="form-label mt-5">Youtube</label>
                        <div class="input-group mb-3">
                            <input  value="" name="youtube" type="text" id="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>
                      </div>
                    {{--  --}}
                    
                </div> 
                          <div class="mt-3">
                            <button type="submit" class="btn btn-info text-white">Ok</button>
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