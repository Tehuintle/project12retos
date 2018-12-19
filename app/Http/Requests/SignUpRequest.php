<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'last_name.required' => 'Ingresa al menos uno de tus apellidos',
            'email.required'  => 'El correo electrónico es requerido',
            'password.required'  => 'Debes proporcionar una contraseña',
            'email.email' => 'Debes proporcionar una dirección de correo válida',
            'email.unique' => 'Este correo ya se encuentra registrado, intenta con otro',
            'password.confirmed' => 'Debes confirmar la contraseña, deben coincidir',
        ];
    }

}
