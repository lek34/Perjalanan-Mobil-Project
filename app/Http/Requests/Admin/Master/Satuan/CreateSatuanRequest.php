<?php

namespace App\Http\Requests\Admin\Master\Satuan;

use Illuminate\Foundation\Http\FormRequest;

class CreateSatuanRequest extends FormRequest
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
            //
            'nama' => 'required|unique:satuans,nama|max:100',
            'alias' => 'required|max:100',
        ];
    }
}
