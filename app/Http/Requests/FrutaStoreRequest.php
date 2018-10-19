<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FrutaStoreRequest extends FormRequest
{
    /**
     * Determine if the people is authorized to make this request.
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
       
       
        $rules = [
            'user_id'=>'required',
            'naranja'=>'required',
            'platano'=>'required',
            'manzana'=>'required',
            'fresas'=>'required',
            'cerezas'=>'required',
            'melocoton'=>'required',
            'sandia'=>'required',
            'melon'=>'required',
            'kiwi'=>'required',
            'uvas'=>'required',
            'aceitunas'=>'required',
            'frutasAlmibar'=>'required',
            'datiles'=>'required',
            'almendras'=>'required',
            'nueces'=>'required'
           
            
        ];

        return $rules;
    }
}
