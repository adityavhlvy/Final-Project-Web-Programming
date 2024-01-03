<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index()
    {
        return view('loginform', [
            "title" => "Login",
        ]);
    }
    // public function authenticate(Request $request){
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);
 
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
 
    //         return redirect()->intended('dashboard');
    //     }
 
    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    // }
    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email wajib diisi',
                'password.required' => 'Password wajib diisi'
            ]
        );
        // autentikasi
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($infologin)){
            return 'sukses';
        } else {
            return 'false';
        };
    }
    // public function showLoginForm(){
    //     return view('loginform', [
    //         "title" => "Login",
    //     ]);
    // }
    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         // Jika login berhasil
    //         return redirect()->intended('/dashboard');
    //     }

    //     // Jika login gagal
    //     return back()->withErrors(['email' => 'Email atau password salah']);
    // }

    // public function logout()
    // {
    //     Auth::logout();

    //     return redirect('/');
    // }
}
