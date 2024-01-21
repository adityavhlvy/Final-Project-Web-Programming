@extends('layouts.mainlayout')
@section('content')
<div class="container">
    <div class="dropdown mt-5">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Jenis Surat
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#surat-keterangan-penghasilan-orangtua">Surat Penghasilan Orang tua</a></li>
        </ul>
    </div>
    
    <div class="card w-100 mt-5" id="surat-keterangan-penghasilan-orangtua">
        <div class="card-body">
            <h2>Surat Keterangan Penghasilan Orang Tua</h2>
            <form action="{{ route('generate-surat') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                </div>
                <div class="mb-3">
                    <label for="nama_orangtua" class="form-label">Nama Orangtua</label>
                    <input type="text" class="form-control" name="nama_orangtua" id="nama_orangtua" required>
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur Orangtua</label>
                    <input type="text" class="form-control" name="umur" id="umur" required>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required>
                </div>
                <div class="mb-3">
                    <label for="jumlah_penghasilan" class="form-label">Penghasilan</label>
                    <input type="text" class="form-control" name="jumlah_penghasilan" id="jumlah_penghasilan" required>
                </div>
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" name="no_telepon" id="no_telepon" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" required>
                </div>
                
                <div class="mb-3">
                    <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="tempat_lahir">Tempat Lahir:</label>
                    <input class="form-control" type="text" name="tempat_lahir" required><br>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="tanggal_lahir">Tanggal Lahir:</label>
                    <input class="form-control" type="date" name="tanggal_lahir" required><br>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" id="jurusan" required>
                </div>
                <div class="mb-3">
                    <label for="fakultas" class="form-label">Fakultas</label>
                    <input type="text" class="form-control" name="fakultas" id="fakultas" required>
                </div>
                <button type="submit" class="btn btn-primary">Download Surat</button>
            </form>
        </div>
    </div>
</div>
@endsection
