<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HucapeStoreRequest extends FormRequest
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
            'huevosGallina' =>'required',
            'aveConPiel' =>'required',
            'aveSinPiel' =>'required',
            'carneTernera' =>'required',
            'carneCerdo' =>'required',
            'carneCordero' =>'required',
            'conejo' =>'required',
            'higado' =>'required',
            'otrasViceras' =>'required',
            'jamonSerrano' =>'required',
            'jamonLoncha' =>'required',
            'carnesProcesadas' =>'required',
            'pates' =>'required',
            'hamburguesa' =>'required',
            'tocino' =>'required',
            'pescadoBlanco' =>'required',
            'pescadoAzul' =>'required',
            'pescadoSalado' =>'required',
            'moluscos' =>'required',
            'moluscosCefalopodos' =>'required',
            'crustaceos' =>'required',
            'mariscosEnlatados' =>'required',
            'mariscosAceite' =>'required'
        ];

        return $rules;
    }
}
