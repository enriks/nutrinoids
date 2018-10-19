<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BebidaStoreRequest extends FormRequest
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
            'bebidasCabonatadasAzucar'=>'required',
            'bebidasCarbonatadasBajasCalorias'=>'required',
            'zumoNaranja'=>'required',
            'zumoOtrasFrutas'=>'required',
            'cafeDesc'=>'required',
            'cafe'=>'required',
            'te'=>'required',
            'mosto'=>'required',
            'vinoRosado'=>'required',
            'vinoMoscatel'=>'required',
            'vinoTintoJoven'=>'required',
            'vinoTintoAñejo'=>'required',
            'vinoBlanco'=>'required',
            'cerveza'=>'required',
            'licores'=>'required',
            'destilados'=>'required'
           
            
        ];

        return $rules;
    }
}
