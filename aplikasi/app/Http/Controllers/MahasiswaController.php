<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function saveForm(Request $request)
    {
        // Collecting form data
        $data = [
            'id' => $request->input('id'),
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'email' => $request->input('email'),
        ];

        // Passing the data to the dashboardAdmin view
        return view('dashboardAdmin', compact('data'));
    }
    // public function submitForm()
    // {
    //     return view('home');
    // }
}
