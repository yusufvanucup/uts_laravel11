<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    //
    public function store(Request $request)
{
    $request->validate([
        'siswa_id' => 'required|exists:siswas,id',
        'tanggal' => 'required|date',
        'status' => 'required|in:Hadir,Sakit,Izin,Alfa',
    ]);
    $absensi = Absensi::create($request->all());
    return response()->json($absensi, 201);
}

}
