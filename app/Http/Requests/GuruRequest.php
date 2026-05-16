<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Laravel\Jetstream\Jetstream;

class GuruRequest extends FormRequest
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
            "name" => ['required', 'string', 'max:255'],
            "email" => ['required', 'string', 'email:dns', 'max:255', 'unique:users'],
            "password" => ['required', 'string', Password::default(), 'confirmed'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            "no_hp" => ['required'],
            "mata_pelajarans" => ['required', 'array'],
            "mata_pelajarans.*" => ['exists:mata_pelajaran,id'],
            "jk" => ['required', "in:Laki-laki,Perempuan"],
            "alamat" => ['required'],
            "cv" => ['required', 'file', 'mimes:pdf'],
            "lulusan" => ['required']
        ];
    }
}
