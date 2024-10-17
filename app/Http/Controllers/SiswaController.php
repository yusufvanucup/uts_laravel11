<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index()
    {
        $siswas = Siswa::all();
        return response()->json($siswas);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
        ]);
        $siswa = Siswa::create($request->all());
        return response()->json($siswa, 201);
    }
     
}
