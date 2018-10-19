<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LacteoStoreRequest extends FormRequest
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
            'lecheEnt'=> 'required',
            'lecheSemi' => 'required',
            'lecheDesc'=>'required',
            'lecheCond'=> 'required',
            'nata' => 'required',
            'batidoLeche'=>'required',
            'yogurtEnt'=> 'required',
            'yogurtDesc' => 'required',
            'petit'=>'required',
            'requeson'=> 'required',
            'quesoPorciones' => 'required',
            'otrosQuesos'=>'required',
            'quesoBlanco'=> 'required',
            'natillas' => 'required',
            'helados'=>'required'
           
            
        ];

        return $rules;
    }
}
