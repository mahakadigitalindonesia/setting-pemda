<?php

namespace Mdigi\SettingPemda\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Mdigi\SettingPemda\Models\Pemda;

class PemdaController extends Controller
{
    public function index(Pemda $pemda)
    {
        return view('settingpemda::setting-pemda.index', ['pemda' => $pemda->get()]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
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
            'logo' => ['required', 'string', 'max:255'],
            'latitude' => ['required', 'string', 'max:255'],
            'longitude' => ['required', 'string', 'max:255'],
        ]);
        $pemda = (new Pemda)->get();
        $pemda->update($validated);
        return redirect(route('setting-pemda.index'));
    }
}
