<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ClientRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'cpf' => 'required|string|unique:people,cpf',
            'birth_date' => 'required|date',
            'phone' => 'required|string|max:20',
            'sex' => 'required|string|size:1',
            'person_id' => 'required|exists:people,id',
            'city_id' => 'required|exists:cities,id',
            'address' => 'required|string|max:255',
        ];
    }

    protected function failedValidation(Validator $validator): void 
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'errors' => $validator->errors(),
        ], 422));
    }

}
