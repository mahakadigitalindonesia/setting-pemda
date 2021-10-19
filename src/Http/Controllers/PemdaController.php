<?php

namespace Mdigi\SettingPemda\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Mdigi\SettingPemda\Http\Requests\UpdatePemdaRequest;
use Mdigi\SettingPemda\Models\Pemda;

class PemdaController extends Controller
{
    public function index()
    {
        return view('settingpemda::setting-pemda.index', ['pemda' => Pemda::first()]);
    }

    public function store(UpdatePemdaRequest $request)
    {
        $form = $request->validated();
        $pemda = Pemda::first();
        if ($request->hasFile('logo')) {
            $uploaded = $request->file('logo')->store('pemda', 'public');
            $form['logo'] = $uploaded;
            Storage::disk('public')->delete($pemda->logo);
        }
        $pemda->update($form);
        return redirect()->route('setting-pemda.index');
    }
}
