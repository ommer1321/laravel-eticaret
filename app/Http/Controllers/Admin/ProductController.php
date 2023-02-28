<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Arr; 
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Catagory;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class ProductController extends Controller
{











    public function create(){

        $categories = Catagory::all();
        $brands = Brand::all();
        $colors = Color::where('status','1')->get();

        return view('admin.product.create',compact(['categories','brands','colors']));

    }




    public function index(){

        $products = Product::all();

        return view('admin.product.index',compact('products'));


    }


















      public function store(ProductFormRequest $request){
        
        $validetedData =  $request->validated();

        $category = Catagory::findOrFail($validetedData['product_category']);
  
        $product =  $category->products()->create([
            
            'category_id' => $validetedData['product_category'],
            'name' => $validetedData['product_name'],
            'slug' => Str::slug($validetedData['product_slug']),
            'brand' => $validetedData['product_brand'],
            'small_description' => $validetedData['product_small_description'],
            'description' => $validetedData['product_description'],
            'meta_title' => $validetedData['product_meta_title'],
            'meta_description' => $validetedData['product_meta_description'],
            'meta_keywords' => $validetedData['product_meta_keywords'],
            'original_price' => $validetedData['product_orig_price'],
            'selling_price' => $validetedData['product_sell_price'],
            'quantity' => $validetedData['product_quantity'],
            
            'trend'  => $request->product_status ? '1' : '0',
            'status' => $request->product_trend ? '1' : '0',


        ]);

   



         if($request->hasFile('product_images')){

            $uploadPath = 'uploads/products/';
            $i = 0;

            foreach($request->file('product_images') as $imageFile){
                $i++;
                $ext = $imageFile->getClientOriginalExtension();
                $fileName = time().$i.'.'.$ext;
                $imageFile->move($uploadPath,$fileName);
                $finalImagePathName = $uploadPath.$fileName;
                $product->productImages()->create([
        
                    'image' => $finalImagePathName,
                    'product_id' => $product->id,
        
                ]);
            }

        }


        

        if($request->colors){

            foreach($request->colors as $key => $color){
            
            
                $product->productColor()->create([

                    'product_id' => $product->id,
                    'color_id' => $color,
                    'quantity' => $request->quantities[$key] ?? 0,



                ]);
            
            }
                  
                    }

      
       return redirect()->route('index.product')->with('message','Product Added Succesfully.');
        

    }










    public function edit(int $product_id){

        $categories = Catagory::all();
        $brands = Brand::all();
       // $colors = Color::all();
        $product = Product::findOrFail($product_id);
      $product_colors =  $product->productColor->pluck('color_id')->toArray();
        
     $colors = Color::whereNotIn('id',$product_colors)->get();
        return view('admin.product.edit',compact('product','brands','categories','colors','product_colors'));
    }










    public function update(ProductFormRequest $request , int $product_id){

// //urun_id  ve miktarını vt ekleyecegı
//  $product = Product::findOrFail($product_id);

 
            //Daha once validetedData uzerınden guncellemeye calısıyorduk fakat mantık hatası alınıyordu (solved)
             $oldProduct  = Product::findOrFail($product_id);
   
                $validetedData =  $request->validated(); 
            
           $product = Catagory::findOrFail($oldProduct->category_id)->products()->where('id',$product_id)->first();
    
    
    if($product){




         $product->update([

            'category_id' => $validetedData['product_category'],
            'name' => $validetedData['product_name'],
            'slug' =>  Str::slug($validetedData['product_slug']),
            'brand' => $validetedData['product_brand'],
            'small_description' => $validetedData['product_small_description'],
            'description' => $validetedData['product_description'],
            'meta_title' => $validetedData['product_meta_title'],
            'meta_description' => $validetedData['product_meta_description'],
            'meta_keywords' => $validetedData['product_meta_keywords'],
            'original_price' => $validetedData['product_orig_price'],
            'selling_price' => $validetedData['product_sell_price'],
            'quantity' => $validetedData['product_quantity'],
            
            'trend' => $request->product_trend == null ? '0' : '1',
            'status' =>  $request->product_status == null ? '0' : '1',

            


       ]);
        



       if($request->hasfile('product_images')){
        $uploadPath = 'uploads/products/';
     
    
      $i = 0;

      foreach($request->file('product_images') as $imageFile){

        $i++;

        $ext = $imageFile->getClientOriginalExtension();
        $fileName = time().$i.'.'.$ext;
        $imageFile->move($uploadPath,$fileName);
        $finalImagePathName = $uploadPath.$fileName;

   
         $product->productImages()->create([

            'image' => $finalImagePathName,
            'product_id' => $product->id,

        ]);

        
    }
    }


   //----


   if($request->colors){
    foreach($request->colors as $key => $color){


$product->productColor()->create([

            'product_id' =>$product_id,
            'color_id' =>$color,
            'quantity' =>$request->quantities[$key] ?? 0,

        ]);

    }
  
 

}


     
return redirect()->route('index.product')->with('message','Product Updated Succesfully.');

}


    }



















public function delete($category_id,$product_id){
    

      $product = Catagory::findOrFail($category_id)->products()->where('id',$product_id)->with('productImages')->first();
  

     if($product){
    

    
        if( $product->delete()){

            if( $product->productImages){
    
                foreach($product->productImages as $key  => $value){
             
                 if($product->productImages[$key]->image){
             
                  
                     if(File::exists( $product->productImages[$key]->image)){ 
               
                         //dbde gorsel var ve  klasörde de var 
                         $product->productImages[$key]->delete();
                        File::delete($product->productImages[$key]->image);
                     }
                     else{
             
                        //dbde gorsel var  ama klasorde yok
             
                         $product->productImages[$key]->delete();
                     }
             
             
             }
             
             
             
                }
              
             
               }
 

       }

       return redirect()->Route('index.product')->with('message','Product Deleted Succesfully ');

    }

}






public function deleteImage(int $product_image_id){
        
    $productImage  = ProductImage::findOrFail($product_image_id);
 
       if($productImage){

       if($productImage->delete()){

           if(File::exists($productImage->image)){
               File::delete($productImage->image);

               
           }
           



       }
       
       return redirect()->back()->with('message','Photo Deleted Successfully ');

       }else{

           return redirect()->back()->with('message','Photo Not Found');


       }

}



 public function updateProdColor(Request $request){
 
     $color =  Product::findOrFail($request->product_id)->productColor()->where('id',$request->prod_color_id)->first();


    
    $rez = $color->update([
     
        'quantity' =>$request->qty,
       

    ]);

if($rez){

  


        return response()->json([
            'message'=>'Başarılı Güncellendi',
            'status'=>200,
        ]);
    }else{

        return response()->json(['message'=>'Güncellenme Başarısız.']);

    }


  


 }



 public function deleteProdColor(Request $request){
 


    $color = Product::findOrFail($request->product_id)->productColor()->where('id',$request->delete_id)->first();


    $deletedColor = $color->delete();
    if($deletedColor){

        return response()->json([

            'message' => 'Başarılı Bir Şekilde Silindi',
            
             ]);
             

    }else{



        return response()->json([

            'message' => 'Silme İşlemi Başarısız.',
            
             ]);
             



    }

    
    
    

}



public function test(){
    return $alpay =  Product::findOrFail(24)->productColor()->where('color_id',4)->first();



}


















}
