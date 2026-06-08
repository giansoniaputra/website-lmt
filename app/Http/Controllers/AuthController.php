<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.index');
    }

    public function authenticate(Request $request)
    {
        $credenential = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email tidak boleh kosong!',
            'email.email' => 'Email tidak valid!',
            'password.required' => 'Password tidak boleh kosong!',
        ]);
        if (Auth::attempt($credenential)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/product');
        }

        return redirect()->back()->with('error', 'Email atau Password Salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['success' => 'Berhasil Logout']);
    }
}
