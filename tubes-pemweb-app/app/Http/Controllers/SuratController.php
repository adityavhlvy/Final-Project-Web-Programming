<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        return view('surat.form');
    }

    public function generateSurat(Request $request)
    {
        $data = [
            'nama_orangtua' => $request->input('nama_orangtua'),
            'umur' => $request->input('umur'),
            'pekerjaan' => $request->input('pekerjaan'),
            'no_telepon' => $request->input('no_telepon'),
            'alamat' => $request->input('alamat'),

            'nama_mahasiswa' => $request->input('nama_mahasiswa'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jurusan' => $request->input('jurusan'),
            'fakultas' => $request->input('fakultas'),
            'tanggal' => $request->input('tanggal'),
            'jumlah_penghasilan' => $request->input('jumlah_penghasilan'),

        ];

        // Generate PDF
        $pdf = FacadePdf::loadView('surat.template', $data);

        // Save or download the PDF
        return $pdf->download('surat_keterangan_penghasilan.pdf');
    }
}
