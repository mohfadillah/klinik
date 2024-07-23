<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tindakan;

class TindakanController extends Controller
{
    public function index()
    {
        $dataTindakan = Tindakan::all();
        return view('tindakan.index', compact('dataTindakan'));
    }
    public function create()
    {
        return view('tindakan.create');
    }
    public function store(Request $request)
    {
        Tindakan::create($request->all());
        return redirect()->to('tindakan');
    }
    public function edit(string $id)
    {
        $edit = Tindakan::find($id);
        return view('tindakan.edit', compact('edit'));
    }
    public function update(Request $request, string $id)
    {
        Tindakan::where('id', $id)->update([
            'nama_tindakan' => $request->nama_tindakan,
            'deskripsi' => $request->deskripsi,
            'instruksi' => $request->instruksi,
            'tarif' => $request->tarif
        ]);
        return redirect()->to('tindakan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tindakan::where('id', $id)->delete();
        return redirect()->to('tindakan');
    }
}
