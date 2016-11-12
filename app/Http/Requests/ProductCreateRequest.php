<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'image'=>'image|mimes:jpeg,bmp,png',
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'category'=>'not_in:Select'
        ];
    }
    
    public function messages()
    {
        return [
            'image.image' => 'The file must be an image',
            'image.mimes' => 'Image must be JPEG, PNG or BMP',
            'name.required' => 'A name is required',
            'description.required' => 'A description is required',
            'price.required' => 'Price is required',
            'category.not_in' => 'Must select a valid category'
        ];
    }
}
