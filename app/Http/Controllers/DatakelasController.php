<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class DatakelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('guru.datakelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.datakelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama_kelas' => 'required'
        ]);

        $kelas = new Kelas;
        $kelas->nama_kelas =  $request->nama_kelas;
        $kelas->save();

        return redirect()->route('datakelas.index');
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
        return view('guru.datakelas.edit')->with(['kelas' => Kelas::find($id),]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kelas' => 'required'
            ]);
    
            $kelas = Kelas::find($id);
            $kelas->nama_kelas =  $request->nama_kelas;
            $kelas->save();

            return redirect()->route('datakelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        
        return redirect()->back();
    }
}
