<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderFormRequest;
use App\Models\Slider;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{

    //view yol
    private $dir = 'admin.slider.';


    public function index()
    {

        $sliders = Slider::all();

        return view($this->dir . 'index', compact('sliders'));
    }




    public function create()
    {


        return view($this->dir . 'create');
    }






    public function store(SliderFormRequest $request)
    {



        //    SliderFomRequest required olan image burada ezilerek nullable özelliği veriliyor 

        $request->validate([
            'image' =>'nullable',
           ]);
     
        //--------------------------------------------------- 

        $sliders = Slider::all();



        $validetedData = $request->validated();


        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $ext  = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move('uploads/sliders/', $fileName);
            $validetedData['image'] = $fileName;
        }

        $uploaded_slider = $slider = Slider::create([

            'title' => $validetedData['title'],
            'description' => $validetedData['description'],
            'status' => $request->status ? '1' : '0',
            'image' => $validetedData['image'],
        ]);

        if ($uploaded_slider) {

            return  redirect()->route('index.slider', compact('sliders'))->with('successful', 'Başarılı Bir Şekile Oluşturuldu');
        } else {
            return  redirect()->route('index.slider', compact('sliders'))->with('unsuccessful', 'Bir Aksilik Oluştu');
        }
    }





    public function edit($id)
    {


        $slider = Slider::findOrFail($id);

        return view($this->dir . 'edit', compact('slider'));


        

    }



    public function update(SliderFormRequest $request, $id)
    {

      

        
        
        $sliders = Slider::all();
        $slider =$sliders->where('id',$id)->first();
      
        $validetedData = $request->validated();


        if($request->hasFile('image')){
            
            $file = $request->file('image');
            $ext  = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('uploads/sliders/',$fileName);
            $validetedData['image'] = $fileName;

            $img = 'uploads/sliders/'.$slider->image ;


            $uploaded_slider = $slider->update([
        
                'title' => $validetedData['title'],
                'description' => $validetedData['description'],
                'status' => $request->status ? '1' : '0',
                'image' => $validetedData['image'],
                
                //'image' => $validetedData['image'] ?? $slider->image, resim ekleme başka bir yol 
           
            ]);
            

                if($uploaded_slider){
                    if (File::exists($img)) {

                        $deleted = File::delete($img);

                      }

                }
        
           

        }
        else{


            
            $uploaded_slider = $slider->update([
        
                'title' => $validetedData['title'],
                'description' => $validetedData['description'],
                'status' => $request->status ? '1' : '0',
          

            ]);

        }
      














             
        
        if($uploaded_slider){
        
        return  redirect()->route('index.slider', compact('sliders'))->with('successful','Başarılı Bir Şekile Güncellendi');
        }else{
        return  redirect()->route('index.slider', compact('sliders'))->with('unsuccessful','Bir Aksilik Oluştu');
        
        
        }



    }



    public function destroy($id)
    {

        
     
        
        $sliders = Slider::all();
        $slider =$sliders->where('id',$id)->first();

        $img = public_path('uploads/sliders/' . $slider->image);

        if (File::exists($img)) {

            $deleted = File::delete($img);

            if ($deleted) {

                $slider->delete();
            }

            if ($deleted) {

                return  redirect()->route('index.slider', compact('sliders'))->with('successful', 'Başarılı Bir Şekile Silindi');
            } else {
                return  redirect()->route('index.slider', compact('sliders'))->with('unsuccessful', 'Bir Aksilik Oluştu');
            }
        }
    }
}
