<?php

namespace Mdigi\SettingPemda\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePemdaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kode_provinsi' => ['required', 'string', 'max:2'],
            'nama_provinsi' => ['required', 'string', 'max:50'],
            'kode_dati2' => ['required', 'string', 'max:3'],
            'nama_dati2' => ['required', 'string', 'max:50'],
            'nama_ibu_kota' => ['required', 'string', 'max:50'],
            'nama' => ['required', 'string', 'max:100'],
            'nama_singkat' => ['required', 'string', 'max:30'],
            'alamat' => ['required', 'string', 'max:255'],
            'no_telp' => ['required', 'string', 'max:50'],
            'fax' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:100'],
            'website' => ['required', 'string', 'max:100'],
            'kode_pos' => ['required', 'string', 'max:5'],
            'logo' => ['sometimes', 'image', 'max:5120'],
            'latitude' => ['sometimes', 'required', 'string', 'max:255'],
            'longitude' => ['sometimes', 'required', 'string', 'max:255'],
        ];
    }
}
