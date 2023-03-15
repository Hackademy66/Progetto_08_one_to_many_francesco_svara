<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TradeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:1|max:50',
            'price' => 'required',
            'cover' => 'required|image',
            'description' => 'required|min:5|max:2000',
        ];
    }

    public function messages(): array 
    {
        return [
        ];
    }
}
