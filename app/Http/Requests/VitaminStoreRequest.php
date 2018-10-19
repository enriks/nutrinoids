<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VitaminStoreRequest extends FormRequest
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
            'user_id'=>'required'
            
        ];

        return $rules;
    }
}