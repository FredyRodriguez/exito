<?php

namespace App\Container\Sicepla\Src\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
        return [
            'name'=>'required|string|max:30',
            'telefono' =>'required|min:8|max:11',
            'documento' =>'required|string||max:12|unique:TBL_Usuarios',
            'email'=>'required|string|email|max:30|unique:TBL_Usuarios',
        ];
    }
}
