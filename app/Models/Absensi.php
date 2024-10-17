<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
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
