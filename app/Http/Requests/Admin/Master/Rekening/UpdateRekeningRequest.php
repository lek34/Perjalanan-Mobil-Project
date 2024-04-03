<?php

namespace App\Http\Requests\Admin\Master\Rekening;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRekeningRequest extends FormRequest
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
        $id = $this->route('id');
        return [
            //
            'kode_rekening' => 'required|unique:rekenings,kode_rekening,'. $id .'|max:100',
            'nama_rekening' => 'required|max:100',
        ];
    }
}
