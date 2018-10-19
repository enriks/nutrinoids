<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DieteticaStoreRequest extends FormRequest
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
            'masApetito'=> 'required',
            'tardasComer' => 'required',
            'alimentosPreferidos'=>'required',
            'alimentosNoConsumidos'=> 'required',
            'alimentosConsumNoAgradan' => 'required',
            'alimentosIndigestos'=>'required',
            'consumoFrutas'=> 'required',
            'consumoVerduras' => 'required',
            'tecnicas'=>'required',
            'quienCocina'=> 'required',
            'tipoCoccion' => 'required',
            'gustaCocinar'=>'required',
            'gustaComprar'=> 'required',
            'frecuenciaCompra' => 'required',
            'ingesta'=>'required',
            'alergiaAlimentaria'=> 'required',
            'sustanEstimulante' => 'required',
            'horasSueno'=> 'required',
            'hidratacion' => 'required',
            'deposiciones'=>'required',
            'consistenciaDep'=> 'required'
           
            
        ];

        return $rules;
    }
}
