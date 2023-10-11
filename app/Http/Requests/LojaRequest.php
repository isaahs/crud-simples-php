<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class LojaRequest extends FormRequest
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
        return [
            'nomeLoja' => 'required|min:3|max:50',
            'areaTotal' => 'required|numeric',
            'dataInauguracao' => 'required|date',
        ];
        
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'nomeLoja.required' => 'O campo nome é obrigatório',
            'nomeLoja.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'nomeLoja.max' => 'O campo nome deve ter no máximo 50 caracteres',
            'areaTotal.required' => 'O campo área total é obrigatório',
            'areaTotal.numeric' => 'O campo área total deve ser numérico',
            'dataInauguracao.required' => 'O campo data de inauguração é obrigatório',
            'dataInauguracao.date' => 'O campo data de inauguração deve ser uma data válida',
        ];
    }
}
