<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderFormRequest extends FormRequest
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
            
            'title' =>['required','string','max:254'],
            'description' =>['nullable','string','max:800'],
            'status' =>['nullable'],
            'image' =>['nullable', 'image','mimes:png,jpg,png','max:1000'],


        ];
    }
}
