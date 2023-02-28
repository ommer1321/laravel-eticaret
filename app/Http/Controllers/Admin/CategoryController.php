<?php

namespace App\Http\Controllers\Admin;

use App\Models\Catagory;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index(){

        return View('admin.category.index');

    }




    public function create(){

        return View('admin.category.create');

    }







    public function store(CategoryFormRequest $request){


        $validetedData = $request->validated();
  
        $category = new Catagory;
        
        $category->name = $validetedData['name'];  
        $category->slug = Str::slug($validetedData['slug']);
        $category->description = $validetedData['description'];
   

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('uploads/category/',$fileName);
            $category->image = $fileName;
        }


        $category->meta_description = $validetedData['meta_description'];
        $category->meta_title = $validetedData['meta_title'];
        $category->meta_keyword = $validetedData['meta_keyword'];
        $category->status = $request->status == true ? '1' : '0' ;
     
        $category->save();

return redirect()->route('index.category')->with('success','Başarılı Bir Şekilde Kategori Oluşturuldu');
    }


    public function edit(Catagory $id){
        $category =  $id;
        return view('admin.category.edit',compact('category'));

    }


    

    public function update(CategoryFormRequest $request ,  $id){

        $oldCategory = Catagory::findOrFail($id);

           $validetedData = $request->validated();
  
 
        

        $path = 'uploads/category/'.$oldCategory->image;
    

        if($request->hasFile('image')){
          
           if(File::exists($path)){
            File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('uploads/category/',$fileName);
            $oldCategory->image = $fileName;
        }

     
        $oldCategory->name = $validetedData['name'];  
        $oldCategory->slug = Str::slug($validetedData['slug']);
        $oldCategory->description = $validetedData['description'];
        $oldCategory->meta_description = $validetedData['meta_description'];
        $oldCategory->meta_title = $validetedData['meta_title'];
        $oldCategory->meta_keyword = $validetedData['meta_keyword'];
        $oldCategory->status = $request->status == true ? '1' : '0' ;
      
           $oldCategory->update();
    
        return redirect()->route('index.category')->with('success','Başarılı Bir  Kategori Güncellendi');
    }


    




}
