<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
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
            'email'=>['required','email','max:255','unique:clients,email'],//da se ne duplira postojeci email tj proverava se u tabeli clients u polju email
             'phone'=>['sting','max:255'],

             'menu_ids'=>['nullable','array'],
             'menu_ids.*'=>['required','integer', Rule::exists(table:'menu',column:'id'),]
        ];
    }
}
