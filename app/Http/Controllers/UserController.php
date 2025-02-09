<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataUser = DB::table('users')
        ->join('levels', 'users.id_level', '=', 'levels.id')
        ->select('users.*', 'levels.nama_level')
        ->get()->where('deleted_at', NULL);

        return view ('user.index', compact('dataUser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataLevel = Level::all();
        return view('user.create', compact('dataLevel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'nama_lengkap' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'id_level' => 'required',
            ]);
            $userData = $request->all();
            $userData['password'] = bcrypt($request->password);
            User::create($userData);
            return redirect()->to('user')->with('success', 'Berhasil');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
