<?php

namespace App\Http\Requests\Admin\Transaksi;

use Illuminate\Foundation\Http\FormRequest;

class CreatePemakaianSparepartRequest extends FormRequest
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
            'tanggal' => 'required',
            'norek' => 'required',
            'nobon' => 'required',
            'armada_id' => 'required',
            'namamekanik' => 'required',
            'status' => 'required',
            'keterangan' => 'required',
            'tableData' => 'required',
            'tableData.*'  => 'required|string|min:5',
        ];
    }
}
