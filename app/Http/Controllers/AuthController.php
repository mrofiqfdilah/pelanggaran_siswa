<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function halaman_masuk()
    {
        return view('auth.halaman_masuk');
    }

    public function halaman_daftar()
    {
        return view('auth.halaman_daftar');
    }

    public function register(Request $request)
    {
        $request->validate([
        'nama' => 'required',
        'email' => 'required',
        'password' => 'required',
        'jenis_kelamin' => 'required',
        'tgl_lahir' => 'required',
        ]);

        $user = new User;
        $user->id = $request->id;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->role = 'siswa';
        $user->save();

        return redirect()->back();
    }

    public function login(Request $request)
    {
        $hanya = $request->only('email','password');
    
        if (Auth::attempt($hanya)) {
            $user = Auth::user();
            if ($user->role == 'siswa') {
                // Redirect user to specific page
                return redirect()->route('home');
            } 
            else if ($user->role == 'guru'){
                return redirect()->route('datasiswa.index');
            }
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('halaman_masuk');
    }
    
}
