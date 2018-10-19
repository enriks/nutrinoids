<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LegumbreStoreRequest extends FormRequest
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
            'lentejas'=> 'required',
            'alubias'=> 'required',
            'garbanzos'=> 'required',
            'guisantes'=> 'required',
            'panBlanco'=> 'required',
            'panNegro'=> 'required',
            'cerealesDesayuno'=> 'required',
            'cerealesIntegrales'=> 'required',
            'arrozBlanco'=> 'required',
            'pasta'=> 'required',
            'pizza'=> 'required'
            
        ];

        return $rules;
    }
}
