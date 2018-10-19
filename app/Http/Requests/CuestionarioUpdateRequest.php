<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CuestionarioUpdateRequest extends FormRequest
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
            'nombreCuestionario' => 'required',
            'archivo' => 'required',
        ];

        if($this->get('archivo')){
            $rules = array_merge($rules,['archivo' => 'mimes:doc,docx,xls,xlsx,pdf']);
           
        }
        return $rules;
    }
}
