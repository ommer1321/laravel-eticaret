<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Http\Requests\BrandFormRequest;
use App\Models\Brand;
use App\Models\Catagory;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Index extends Component
{
    public $name , $slug , $status , $brand_id , $brand , $category_id;
 
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function rules(){

            return[
              
                'name' =>['required','string'],
                'slug' =>['required','string'],
                'status' =>['nullable'],
                'category_id' =>['required','integer'],
            ];



    }


    public function resetInput(){


        $this->name  = null ;
        $this->slug  = null ;
        $this->status  = null ;
        $this->category_id  = null ; 
    }

    public function storeBrand(){

   
         $validetedData = $this->validate();

        Brand::create([
            'category_id' => $this->category_id ,
            'name' => $this->name ,
            'slug' => Str::slug($this->slug) ,
            'status' => $this->status == true ? '1 ' : '0' ,
        ]);
  



            session()->flash('message','Successfuly Added Brand');
            
            $this->resetInput();
    }



    public function deleteBrand($brand_id){

        $this->brand_id = $brand_id;
     



    }






    public function destroyBrand(){

   $brand =  Brand::findOrFail($this->brand_id);
        if($brand){
            $brand->delete();   
            session()->flash('message','Brand Successfully Deleted.');
        }else{
            session()->flash('message','Brand Dont Yani .');
        

        }
     
        


    }


    public function editBrand(int $brand_id){
        
        $this->brand_id = $brand_id;
     
        $brand =   Brand::findOrFail($this->brand_id);
        $this->brand= $brand;
        $this->name = $brand->name;
        $this->slug = Str::slug($brand->slug);    
        $this->status = $brand->status;
        $this->category_id = $brand->category_id;
        



    }

    
    public function updateBrand(){

        $validetedData = $this->validate();
        
        $this->brand->category_id = $validetedData['category_id'];
        $this->brand->name = $validetedData['name'];
        $this->brand->slug = $validetedData['slug'];
        $this->brand->status = $validetedData['status'] == true ? '1 ' : '0';
        
        if($this->brand->update()){
            $this->resetInput();
            session()->flash('message','Brand Successfully Updated.');



        }

    }




    public function render()
    {
        $categories = Catagory::all();
        $brands = Brand::orderBy('id','desc')->paginate(10);
        return view('livewire.admin.brand.index',compact('brands','categories'));
    }
}
