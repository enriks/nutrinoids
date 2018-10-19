<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerduraStoreRequest extends FormRequest
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
            'user_id' =>'required',
            'acelgas' =>'required',
            'col' =>'required',
            'lechuga' =>'required',
            'tomateCrudo' =>'required',
            'zanahoria' =>'required',
            'judiasVerdes' =>'required',
            'berenjenas' =>'required',
            'pimientas' =>'required',
            'esparragos' =>'required',
            'gazpacho' =>'required',
            'otrasVerduras' =>'required',
            'cebolla' =>'required',
            'ajo' =>'required',
            'perejil' =>'required',
            'patatasFritasComerciales' =>'required',
            'patatasFritasCaseras' =>'required',
            'patatasFritasAsadas' =>'required',
            'setas'=>'required'
        ];

        return $rules;
    }
}
