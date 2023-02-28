<?php

namespace App\Http\Livewire\Admin\Category;
use App\Models\Catagory;
use App\Http\Controllers\Admin\CategoryController;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;

class Index extends Component
{


    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $category_id;



    public function deleteCategory($category_id){

     
        $this->category_id = $category_id;




    }


    
    public function destroyCategory(){

       
        $category = Catagory::find($this->category_id);
  
        $path = 'uploads/category/'.$category->image;

        if(File::exists($path)){
            File::delete($path);
        }
        
        $category->delete();
        session()->flash('message','Brand Successfuly Deleted.');

    }



    public function render()
    {
        $categories = Catagory::orderby('id','Desc')->paginate(10);
        return view('livewire.admin.category.index',compact('categories'));
    }



}
