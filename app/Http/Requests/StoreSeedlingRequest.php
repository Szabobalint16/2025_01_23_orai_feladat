<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSeedlingRequest extends FormRequest
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
            'name' => 'required|string|max:255', // Required, string, max 255 characters
            'type' => 'required|string|max:255', // Required, string, max 255 characters
            'old' => 'required|integer|min:1|max:6', // Required, integer between 1 and 6
            'cotyledonNumber' => 'required|integer|min:1|max:12', // Required, integer between 1 and 12
            'growing' => 'nullable|boolean', // Optional, must be "growing" if provided
            'height' => 'required|numeric|min:1|max:5', // Required, numeric between 1 and 5
            'wateringRequirement' => 'required|integer|min:1|max:5', // Required, integer between 1 and 5
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'A növény neve kötelező!',
            'type.required' => 'A típus megadása kötelező!',
            'old.min' => 'Az éves mező értéke nem lehet kisebb 1-nél!',
            'old.max' => 'Az éves mező értéke nem lehet nagyobb 6-nál!',
            'cotyledonNumber.min' => 'A sziklevelek száma nem lehet kisebb 1-nél!',
            'cotyledonNumber.max' => 'A sziklevelek száma nem lehet nagyobb 12-nél!',
            'growing.in' => 'A termő mező értéke csak "growing" lehet!',
            'height.numeric' => 'A magasság mező csak szám lehet!',
            'wateringRequirement.min' => 'A vízigény mező értéke nem lehet kisebb 1-nél!',
        ];
    }
}
