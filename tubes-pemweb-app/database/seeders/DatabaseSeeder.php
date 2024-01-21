<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Complaint;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'ADITYA VAHLEVY NUGRAHA',
            'nik' => '105221032',
            'email' => 'adityavahlevy1003@gmail.com',
            'address' => 'Gang Simprug VI No. 23, RT.1/RW.9, Grogol Selatan, Kebayoran Lama',
            'password' => 'kuraninja33',
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'ADEEFA SHAFIRA FARZANAH',
            'nik' => '11111111',
            'email' => 'adeefa@example.com',
            'address' => 'Jalan Sudirman, Gang Wahidin',
            'password' => 'adeefacantik',
            'role' => 'user'
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'infrastruktur_fasilitas_umum',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'approved',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pelayanan_publik',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'approved',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'keamanan_ketertiban',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'approved',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'lingkungan_kebersihan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'approved',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'lingkungan_kebersihan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'approved',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'kesejahteraan_sosial',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'approved',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pelayanan_publik',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'approved',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'infrastruktur_fasilitas_umum',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'approved',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'korupsi_penyalahgunaan_kekuasaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'approved',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pajak_pungutan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'approved',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'approved',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'infrastruktur_fasilitas_umum',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'approved',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pengaduan_lainnya',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'approved',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'rejected',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'rejected',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'rejected',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'pending',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'pending',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'pending',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'pending',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'pending',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'pending',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'pending',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'pending',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'pending',
        ]);
        Complaint::create([
            'nik' => '105221032',
            'category' => 'pendidikan_kebudayaan',
            'description' => 'Lampu jalan rusak di dekat taman kota memerlukan perhatian segera.',
            'address' => 'Jalan Taman 456, Kota Urban',
            'status' => 'pending',
        ]);
    }
}
