<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class DashboardController extends Controller
{
    public function index()
    {
        $dataPasien = Pasien::all();
        return view ('dashboard.index', compact('dataPasien'));
    }
}
