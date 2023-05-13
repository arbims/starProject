<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StarRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'nom' => ['required','min:2','regex:/^[a-zA-Z]+$/'],
            'prenom' => ['required','min:2','regex:/^[a-zA-Z]+$/'],
            'image' => ['required','image'],
            'description' => ['required'],
        ];
        if ($this->request->get('_method') == "PATCH") {
            $rules['image'] = ['image'];
        }
        return $rules;
    }
}
