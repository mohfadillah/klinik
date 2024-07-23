<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function index()
    {
        $dataObat = Obat::all();
        return view('obat.index', compact('dataObat'));
    }
    public function create()
    {
        return view('obat.create');
    }
    public function store(Request $request)
    {
        Obat::create($request->all());
        return redirect()->to('obat');
    }
    public function edit(string $id)
    {
        $edit = Obat::find($id);
        return view('obat.edit', compact('edit'));
    }
    public function update(Request $request, string $id)
    {
        Obat::where('id', $id)->update([
            'nama_obat' => $request->nama_obat,
            'kode_obat' => $request->kode_obat,
            'harga' => $request->harga
        ]);
        return redirect()->to('obat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Obat::where('id', $id)->delete();
        return redirect()->to('obat');
    }
}
