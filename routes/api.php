<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AbsensiController;

Route::apiResource('siswas', SiswaController::class);
Route::post('absensi', [AbsensiController::class, 'store']);


