@extends('layouts.formlayout')
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
    <!-- container -->
    <div class="container">
        <!-- Form Pengaduan -->
        <div class="row justify-content-center">
            <div class="col-lg-10 form-pengaduan">
                <form action="">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="judul-aduan" placeholder="Judul Aduan" />
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="keterangan-aduan" rows="3" placeholder="Keterangan Aduan"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="col-sm-1 col-form-label">Date</label>
                        <div class="col-sm-4">
                            <div class="input-group date" id="datepicker">
                                <input type="text" class="form-control">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <select class="form-select">
                            <option selected>Lokasi Kejadian</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select">
                            <option selected>Instansi Tujuan</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select">
                            <option selected>Jenis Laporan</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-lg btn-adu">Adu!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
