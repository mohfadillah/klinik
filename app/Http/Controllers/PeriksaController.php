<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PeriksaController extends Controller
{
    public function index ()
    {
        return view ('periksa-pasien');
    }
    public function forDaftar(Request $request)
    {
        Pasien::create($request->all());
        return redirect()->to('periksa-pasien')->with('success', 'Register Berhasil');
    }
    // public function konsultasi($id)
    // {
    //     $pasien = Pasien::find($id);
    //     return view ('konsultasi', compact('pasien'));
    // }
}
