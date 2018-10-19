<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AceiteStoreRequest extends FormRequest
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
            'aceiteOliva'=>'required',
            'aceiteOlivaVirgen'=>'required',
            'aceiteMaiz'=>'required',
            'aceiteGirasol'=>'required',
            'aceiteSoja'=>'required',
            'mezclaAnteriores'=>'required',
            'margarina'=>'required',
            'mantequilla'=>'required',
            'mantecaCerdo'=>'required'
            
        ];

        return $rules;
    }
}
