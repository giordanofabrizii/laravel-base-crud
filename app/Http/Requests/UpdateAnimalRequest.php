<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnimalRequest extends FormRequest
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
            // insert the rules of validation
                'nome' => 'required',
                'specie' => 'required',
                'razza' => 'required',
                'eta' => 'required',
                'sesso' => 'required',
                'peso' => 'required',
                'altezza' => 'required',
                'url_img' => 'required',
                'info' => 'nullable'
        ];
    }

    public function messages(){

        return [
            'nome' => 'Il campo del nome non puo essere vuoto!',
            'specie' => 'Il campo della specie non puo essere vuoto!',
            'razza' => 'Il campo della razza non puo essere vuoto!',
            'eta' => 'Il campo dell\'eta non puo essere vuoto!',
            'sesso' => 'Il campo del sesso non puo essere vuoto!',
            'peso' => 'Il campo del peso non puo essere vuoto!',
            'url_img' => 'Devi inserire un url valido!',
        ];

    }
}
