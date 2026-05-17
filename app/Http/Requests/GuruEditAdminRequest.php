<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class GuruEditAdminRequest extends FormRequest
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
            "no_hp" => ['required'],
            "mata_pelajarans" => ['required', 'array'],
            "mata_pelajarans.*" => ['exists:mata_pelajarans,id'],
            "jk" => ['required', "in:Laki-laki,Perempuan"],
            "alamat" => ['required'],
            "lulusan" => ['required']
        ];
    }
}
