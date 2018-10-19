<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BolleriaStoreRequest extends FormRequest
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
            'galletasMaria'=>'required',
            'galletasIntegrales'=>'required',
            'galletasChocolate'=>'required',
            'reposteria'=>'required',
            'croissant'=>'required',
            'donuts'=>'required',
            'magdalenas'=>'required',
            'pasteles'=>'required',
            'churros'=>'required',
            'chocolates'=>'required',
            'cacaoPolvo'=>'required',
            'turron'=>'required',
            'matecados'=>'required'
        ];

        return $rules;
    }
}
