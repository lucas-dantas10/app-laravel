<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
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
        $id = $this->segment(2);

        return [
            'name' => "required|min:3|max:255|unique:products,name,{$id},id",
            'description' => 'required|min:3|max:10000',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'photo' => 'nullable|image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo de nome é obrigatório',
            'name.unique' => 'Nome já está em uso',
            'name.min'  => 'Nome precisa de mais de 3 caracteres',
            'description.required' => 'O campo de descrição é obrigatório',
            'description.min' => 'Descrição precisa de mais de 3 caracteres',
            'price.required' => 'O campo de preço é obrigatório',
            'price.regex' => 'Número inválido',
            'photo.required' => 'Arquivo é obrigatório'
        ];
    }
}
