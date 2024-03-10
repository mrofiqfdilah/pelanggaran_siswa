<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DatasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('guru.datasiswa.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.datasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'role' => 'required',
        ]);   

        $user = new User;
        $user->id = $request->id;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->role = $request->role;
        $user->save();

        return redirect()->route('datasiswa.index');
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
        return view('guru.datasiswa.edit')->with(['user' => User::find($id),]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'email' => 'required',
          
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'role' => 'required',
        ]);   

        $user = User::find($id);
        $user->id = $request->id;
        $user->nama = $request->nama;
        $user->email = $request->email;
    
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->role = $request->role;
        $user->save();

        return redirect()->route('datasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }
}
