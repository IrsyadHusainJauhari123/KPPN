<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Auth;

class AuthController extends Controller
{

    function showLogin()
    {
        return view('login');
    }
    function loginProcess(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('user')->with('success', 'Selamat Datang Admin KPPN Ketapang');
        } else {
            return back()->with('danger', 'Login Gagal Silahkan Cek email dan Password anda Kembali');
        }
    }
    function logout()
    {
    }
    function registration()
    {
    }
    function forgetPassword()
    {
    }
}
