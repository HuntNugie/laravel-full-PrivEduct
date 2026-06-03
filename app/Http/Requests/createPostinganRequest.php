<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class createPostinganRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "foto_cover" => "required|mimes:png,jpg,jpeg|image",
            "caption" => "required|string",
            "tarif" => "required|numeric",
            "metode_belajar" => "required|array",
            "pengalaman" => "required|string"
        ];
    }
}
