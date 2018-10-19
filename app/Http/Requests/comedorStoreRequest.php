<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComedorStoreRequest extends FormRequest
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
            'pg1'=>'required',
            'pg2'=>'required',
            'pg3'=>'required',
            'pg4'=>'required',
            'pg5'=>'required',
            'pg6'=>'required',
            'pg7'=>'required',
            'pg8'=>'required',
            'pg9'=>'required',
            'pg10'=>'required',
           
            
        ];

        return $rules;
    }
}
