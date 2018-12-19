<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required'  => 'El correo electrónico es requerido',
            'password.required'  => 'Debes proporcionar una contraseña',
            'email.email' => 'Debes proporcionar una dirección de correo válida',
            'email.exists' => 'Este correo no se encuentra registrado',
        ];
    }
}
