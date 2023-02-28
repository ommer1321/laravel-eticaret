<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Requests\ColorFormRequest;
class ColorController extends Controller
{
   
   
   
    public function index(){

        $colors = Color::all();

        
        return view('admin.color.index',compact('colors'));
        
    }
   






    public function store(ColorFormRequest $request){
   
   
        $validetedData = $request->validated();
      
        $addedData =    $color = Color::create([
            'name' => $validetedData['name'],
            'code' => $validetedData['code'],
            'status' => $request->status ? '1' : '0',
           
        ]);
      
        if($addedData){


            return redirect()->route('index.color')->with('message','Color Successfully Added');

        }
        else{
            return redirect()->route('index.color')->with('message','Color İs Not Added');
        }
        

    }



 


    public function edit($color_id){

        $color = Color::findOrFail($color_id);

       
    

        return view('admin.color.edit',compact('color'));
        
    }




    public function update(ColorFormRequest $request , $color_id){

         $validetedData = $request->validated();
         $color = Color::findOrFail($color_id);

        if($color){

        $updatedData = $color->update([

            'name' =>  $validetedData['name'],
            'code' =>  $validetedData['code'],
            'status' => $request->status ? '1' : '0',

        ]);

    }
    if($updatedData){


        return redirect()->route('index.color')->with('message','Color Successfully Updateded');

    }
    else{
        return redirect()->route('index.color')->with('message','Color İs Not Updateded');
    }
    

        
        
    }
   




    public function destroy($color_id){

        $color = Color::findOrFail($color_id);

        $DeletedData = $color->delete();
    

       if($DeletedData){


        return redirect()->route('index.color')->with('message','Color Successfully Deleted');

    }
    else{
        return redirect()->route('index.color')->with('message','Color İs Not Deleted');
    }
    
        
    }



}
