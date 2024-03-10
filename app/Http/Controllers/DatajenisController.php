<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenis_pelanggaran;

class DatajenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = Jenis_pelanggaran::all();
        return view('guru.datajenis.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.datajenis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama_pelanggaran' => 'required',
        'skor' => 'required'
        ]);

        $jenis = new Jenis_pelanggaran;
        $jenis->nama_pelanggaran = $request->nama_pelanggaran;
        $jenis->skor = $request->skor;
        $jenis->save();

        return redirect()->route('datajenis.index');
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
        return view('guru.datajenis.edit')->with(['jenis_pelanggaran' => Jenis_pelanggaran::find($id),]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pelanggaran' => 'required',
            'skor' => 'required'
            ]);
    
            $jenis = Jenis_pelanggaran::find($id);
            $jenis->nama_pelanggaran = $request->nama_pelanggaran;
            $jenis->skor = $request->skor;
            $jenis->save();
    
            return redirect()->route('datajenis.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenis = Jenis_pelanggaran::find($id);
        $jenis->delete();

        return redirect()->back();
    }
}
