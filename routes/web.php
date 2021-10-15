<?php

use Illuminate\Support\Facades\Route;
use Mdigi\SettingPemda\Http\Controllers\PemdaController;

Route::get('/setting-pemda', [PemdaController::class, 'index'])->name('setting-pemda.index');
Route::put('/setting-pemda', [PemdaController::class, 'store'])->name('setting-pemda.store');