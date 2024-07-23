<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPegawai = Pegawai::all();
        return view('pegawai.index', compact('dataPegawai'));
    }
    public function create()
    {
        return view('pegawai.create');
    }
    public function store(Request $request)
    {
        Pegawai::create($request->all());
        return redirect()->to('pegawai');
    }
    public function edit()
    {
        $edit = Pegawai::find($id);
        return view('pegawai.edit', compact('edit'));
    }
    public function update(Request $request, string $id)
    {
        Pegawai::where('id', $id)->update([
            // 'nama_pegawai' => $request->nama_pegawai,
            'jabatan' => $request->jabatan,
            // 'tanggal_lahir' => $request->tanggal_lahir,
            // 'no_hp' => $request->no_hp,
            // 'gender' => $request->gender,
            // 'email' => $request->email
        ]);
        return redirect()->to('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pegawai::where('id', $id)->delete();
        return redirect()->to('pegawai');
    }
}
