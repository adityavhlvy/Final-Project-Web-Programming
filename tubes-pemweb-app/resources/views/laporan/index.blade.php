@extends('layouts.mainlayout')
@section('content')

<main>

    <div class="jumbotron-formaduan p-5">
        <div class="container">
            <h1 class="display-4">
                Ngadu<br /><span>Layanan Aspirasi dan Pengaduan Online
                    Masyarakat</span>
            </h1>
            <p class="lead">
                Laporkan apa yang kamu lihat di sekitarmu!!
            </p>
        </div>
    </div>

    {{-- @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif --}}

    <!-- container -->
    <div class="container">
        <!-- Form Pengaduan -->
        <div class="row justify-content-center">
            <div class="col-lg-10 form-pengaduan">
                <form action="/laporan" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 mb-3">
                        <label for="category" class="form-label">Pilih Kategori Aduan</label>
                        <select class="form-select @error('category') is-invalid @enderror" name="category"
                            id="category" autofocus required>
                            <option value="infrastruktur_fasilitas_umum" selected>Infrastruktur dan Fasilitas Umum
                            </option>
                            <option value="pelayanan_publik">Pelayanan Publik</option>
                            <option value="keamanan_ketertiban">Keamanan dan Ketertiban</option>
                            <option value="lingkungan_kebersihan">Lingkungan dan Kebersihan</option>
                            <option value="kesejahteraan_sosial">Kesejahteraan Sosial</option>
                            <option value="korupsi_penyalahgunaan_kekuasaan">Korupsi dan Penyalahgunaan Kekuasaan
                            </option>
                            <option value="pajak_pungutan">Pajak dan Pungutan</option>
                            <option value="pendidikan_kebudayaan">Pendidikan dan Kebudayaan</option>
                            <option value="pengaduan_lainnya">Pengaduan Lainnya</option>
                        </select>
                        @error('category')
                            <div class="invalid-feedback" style="text-align: left">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-12 mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                            cols="30" rows="5" required>{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback" style="text-align: left">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-12 mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control @error('addres') is-invalid @enderror" name="address"
                            id="address" required value="{{ old('address') }}">
                        @error('address')
                            <div class="invalid-feedback" style="text-align: left">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="col-12 mb-3">
                        <label for="file" class="form-label">Silahkan masukkan dokumen (Maksimal 10MB)</label>
                        <input class="form-control @error('file') is-invalid @enderror" type="file" name="file"
                            id="file" accept="image/*">
                        <small class="text-muted">Hanya file gambar yang diizinkan (JPG, JPEG, PNG, GIF, dll.)</small>
                        @error('file')
                            <div class="invalid-feedback" style="text-align: left">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-primary btn-lg btn-adu" type="submit">Continue to complaint</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</main>
@endsection
