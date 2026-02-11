<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $isUpdate = $this->isMethod('PUT') || $this->isMethod('PATCH');
        return [
        'name' => $isUpdate ? 'sometimes|string|max:255' : 'required|string|max:255',
        'description' =>'nullable|string',
        'price' => $isUpdate ? 'sometimes|numeric|min:0' : 'required|numeric|min:0',
        'stock' => $isUpdate ? 'sometimes|integer|min:0' : 'nullable|integer|min:0',
            //
        ];
    }
    public function messages():array{
        return[
        'name.required' => 'El nombre del producto es obligatorio.',
        'name.string' => 'El nombre debe ser un texto válido.',
        'name.max' => 'El nombre no puede tener más de 255 caracteres.',
        'description.string' => 'La descripción debe ser un texto válido.',
        'price.required' => 'El precio es obligatorio.',
        'price.numeric' => 'El precio debe ser un número.',
        'price.min' => 'El precio no puede ser negativo.',
        'stock.integer' => 'El stock debe ser un número entero.',
        'stock.min' => 'El stock no puede ser negativo.',
    ];
}       
}
