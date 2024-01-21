<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nik' => 'required|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'address' => 'required|max:255',
            'password'=> 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }

    public function updateUser(Request $request)
    {
        $userNIK = $request->Auth::user()->nik;
        $address = $request->input('address');
        $email = $request->input('email');

        $userData = User::find($userNIK);
        if ($userData) {
            $userData->address = $address;
            $userData->email = $email;
            $userData->save();
        }

        return view('dashboard.user');
    }

    public function allProfile(Request $request)
    {
        $totalUser = User::all();
        return view('dashboard.user', [
            'totalUser' => $totalUser
        ]);
    }
}
