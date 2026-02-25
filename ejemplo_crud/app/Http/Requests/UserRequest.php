<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

<<<<<<< Updated upstream
class AuthRequest extends FormRequest
=======
<<<<<<< HEAD
class UserRequest extends FormRequest
=======
class AuthRequest extends FormRequest
>>>>>>> e363dc4 (tu)
>>>>>>> Stashed changes
{
    public function authorize(): bool
    {
        return true;
    }

<<<<<<< Updated upstream

=======
<<<<<<< HEAD
>>>>>>> Stashed changes
    public function rules(): array
    {
        return [
<<<<<<< Updated upstream
=======
            'nombre_usuario' => $isUpdate
                ? 'sometimes|bail|string|max:255|unique:usuarios,nombre_usuario'
                : 'required|bail|string|max:255|unique:usuarios,nombre_usuario',

            'nombre_completo' => $isUpdate
                ? 'sometimes|bail|string|max:255'
                : 'required|bail|string|max:255',

            'email' => $isUpdate
                ? 'sometimes|bail|string|email:rfc,dns|max:255|unique:usuarios,email'
                : 'required|bail|string|email:rfc,dns|max:255|unique:usuarios,email',

            'password' => $isUpdate
                ? 'sometimes|bail|string|min:8|max:64'
                : 'required|bail|string|min:8|max:64',

            'cod_rol' => $isUpdate
                ? 'sometimes|bail|exists:roles,cod_rol'
                : 'required|bail|exists:roles,cod_rol',
=======

    public function rules(): array
    {
        return [
>>>>>>> Stashed changes
            'email' => [
                'bail',
                'required',
                'string',
                'email:rfc,dns',
                'max:255',
            ],
            'password' => [
                'bail',
                'required',
                'string',
                'min:8',
                'max:64',
            ],
<<<<<<< Updated upstream
=======
>>>>>>> e363dc4 (tu)
>>>>>>> Stashed changes
        ];
    }

    public function messages(): array
    {
        return [
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
            // nombre_usuario
            'nombre_usuario.required' => 'El nombre de usuario es obligatorio.',
            'nombre_usuario.string' => 'El nombre de usuario debe ser una cadena de texto.',
            'nombre_usuario.max' => 'El nombre de usuario no puede superar los 255 caracteres.',
            'nombre_usuario.unique' => 'El nombre de usuario ya existe.',

            // nombre_completo
            'nombre_completo.required' => 'El nombre completo es obligatorio.',
            'nombre_completo.string' => 'El nombre completo debe ser una cadena de texto.',
            'nombre_completo.max' => 'El nombre completo no puede superar los 255 caracteres.',

            // email
>>>>>>> Stashed changes
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email'    => 'El correo electrónico no es válido.',
            'email.max'      => 'El correo electrónico es demasiado largo.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min'      => 'La contraseña es incorrecta.',
            'password.max'      => 'La contraseña es incorrecta.',
        ];
    }
<<<<<<< Updated upstream
}
=======
}
=======
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email'    => 'El correo electrónico no es válido.',
            'email.max'      => 'El correo electrónico es demasiado largo.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min'      => 'La contraseña es incorrecta.',
            'password.max'      => 'La contraseña es incorrecta.',
        ];
    }
}
>>>>>>> e363dc4 (tu)
>>>>>>> Stashed changes
