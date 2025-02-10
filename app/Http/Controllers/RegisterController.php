<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:100',
            'username' => 'required|string|max:30|unique:user',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:admin,kasir,owner',
        ]);

        try {
            // Simpan ke database
            User::create([
                'nama' => $request->nama,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'id_outlet' => 1,
                'role' => $request->role,
            ]);

            return redirect()
                ->route('login')
                ->with('success', 'Registrasi berhasil, silakan login!');
                
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat registrasi. Silakan coba lagi.');
        }
    }
}
