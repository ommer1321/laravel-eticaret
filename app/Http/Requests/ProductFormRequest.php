<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            


"product_name" => ['required','string','max:255'],
"product_slug" => ['required','string','max:255'],
"product_category" => ['required','integer'],
"product_brand" => ['required','integer'],
"product_small_description" => ['required','string','max:500'],
"product_description" => ['required','string'],

"product_meta_title" => ['required','string','max:120'],
"product_meta_description" => ['required','string','max:120'],
"product_meta_keywords" => ['nullable','string'],

"product_orig_price" => ['required','integer'],
"product_sell_price" => ['required','integer'],
"product_quantity" => ['required','integer'],
"quantities"=> ['nullable'],
"colors" => ['nullable'],

"product_trend"  => ['nullable'],
"product_status" => ['nullable'],


        ];
    }





    public function messages()
    {
        return [
            'product_name.required' => 'Başlık alanı zorunludur',
          
        ];
    }







    public function attributes()
    {
        return [
            'product_images' => 'Ürün görseli',
          
        ];
    }
  















}
