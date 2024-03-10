<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggaran_siswa;
use App\Models\User;
use App\Models\kelas;
use App\Models\jenis_pelanggaran;
use Illuminate\Support\Facades\Auth;

class DatapelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggaran = Pelanggaran_siswa::all();
        return view('guru.datapelanggaran.index', compact('pelanggaran'));
    }

    public function dashboard(Request $request)
    {
        $kelas = Kelas::count();
        $jumlahsiswa = User::where('role','siswa')->count();
        return view('guru.dashboard', compact('jumlahsiswa','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = User::all();
        $jenis = Jenis_pelanggaran::all();
        $kelas = Kelas::all();
        return view('guru.datapelanggaran.create', compact('siswa','jenis','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tgl_pelanggaran' => 'required',
            'wali_kelas' => 'required',
            'catatan' => 'required',
            'foto_siswa' => 'required',
            'id_users' => 'required',
            'id_kelas' => 'required',
            'id_jenis_pelanggaran' => 'required',
        ]);

        $gambar = $request->file('foto_siswa');
        $new_gambar = time() . '_' . $gambar->getClientOriginalName();
        $gambar->move('uploads/foto_siswa/', $new_gambar);

        $pelanggaran = new Pelanggaran_siswa;
        $pelanggaran->id_users = $request->id_users;
        $pelanggaran->id_kelas = $request->id_kelas;
        $pelanggaran->id_jenis_pelanggaran = $request->id_jenis_pelanggaran;
        $pelanggaran->tgl_pelanggaran = $request->tgl_pelanggaran;
        $pelanggaran->wali_kelas = $request->wali_kelas;
        $pelanggaran->catatan = $request->catatan;
        $pelanggaran->nama_penginput = Auth::id();
        $pelanggaran->foto_siswa = 'uploads/foto_siswa/' . $new_gambar;
        $pelanggaran->save();

        return redirect()->route('datapelanggaran.index');
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
