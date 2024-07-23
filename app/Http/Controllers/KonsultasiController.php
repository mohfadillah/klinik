<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Tindakan;

class KonsultasiController extends Controller
{
    public function index ()
    {
        $tindakan = Tindakan::get();
        $dataPasien = Pasien::all();
        return view('konsultasi.index', compact('dataPasien', 'tindakan'));
    }
    public function show($id)
    {
        $pasien = Pasien::find($id);
        return view('konsultasi.show', compact('pasien'));
    }
    public function detail($id)
    {
        
        $pasien = Pasien::find($id);
        return view('konsultasi.detail', compact('pasien'));
    }
}