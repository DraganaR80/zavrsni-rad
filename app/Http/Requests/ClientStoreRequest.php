<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name'=>['required','string','max:255'],
            'surname_name'=>['required','string','max:255'],
            'email'=>['required','email','max:255','unique:clients,email'],
             'phone'=>['sting','max:255'],
        ];
    }
}
