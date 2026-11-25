<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            'nama_lengkap' => $data['nama_lengkap'],
            'username' => $data['username'],
            'kelas' => $data['kelas'],
            'nomor_induk' => $data['nomor_induk'],
            'role' => 'siswa',
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('register')
        ->with('success', 'Registrasi berhasil!');
    }

    public function viewRegister()
    {
        return view('auth.register');
    }
}
