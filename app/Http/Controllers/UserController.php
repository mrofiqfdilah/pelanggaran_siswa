<?php

namespace App\Http\Controllers;

use App\Models\jenis_pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\pelanggaran_siswa;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function home()
    {
        $auth = Auth::id();
        $pelanggaran = Pelanggaran_siswa::where('id_users', $auth)->get();
        $total = Pelanggaran_siswa::where('id_users', $auth)
                    ->join('jenis_pelanggaran', 'pelanggaran_siswa.id_jenis_pelanggaran', '=', 'jenis_pelanggaran.id')
                    ->sum('jenis_pelanggaran.skor');
        return view('siswa.home', compact('pelanggaran','total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
