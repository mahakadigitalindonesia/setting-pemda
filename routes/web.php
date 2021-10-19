<?php

use Illuminate\Support\Facades\Route;
use Mdigi\SettingPemda\Http\Controllers\PemdaController;

Route::get('/setting-pemda', [PemdaController::class, 'index'])->name('setting-pemda.index');
Route::post('/setting-pemda', [PemdaController::class, 'store'])->name('setting-pemda.store');
Route::get('/setting-pemda/logo', [PemdaController::class, 'logo'])->name('setting-pemda.logo');