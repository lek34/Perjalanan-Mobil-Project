<?php

namespace App\Http\Requests\Admin\Master\Spareparts;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateSparepartRequest extends FormRequest
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
        return [
            //
            'nama' => 'required|unique:spareparts,nama|max:100',
            'partnumber' => 'required|max:255',
            'alias' => 'required|max:255',
            'qty' => 'required|integer|max:255',
            'uom' => 'required|max:255',

        ];
    }
}
