<?php

namespace App\Http\Requests\Admin\Master\Armada;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateArmadaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
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
            'nopol' => 'required|unique:armadas,nopol,'. $id .'|max:100',
            'namapemilik' => 'required|max:100',
            'merk' => 'required|max:150',
            'tipe' => 'required|max:150',
            'nomesin' => 'required|max:150',
            'norangka' => 'required|max:150',
            'tahunproduksi' => 'required|max:150',
            'gol' => 'required|max:150',
            'karoseri' => 'required|max:150',
            'bbm' => 'required|max:150',
            'inv' => 'required|max:150',
            'ops' => 'required|max:150',
            'lastkir' => 'required|max:150',
            'futurekir' => 'required|max:150',
            'laststnk' => 'required|max:150',
            'futurestnk' => 'required|max:150'
        ];
    }
}
