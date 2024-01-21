@extends('layouts.mainlayout')
@section('content')
<div class="container">
    <div class="col-4 my-5 mt-5 d-flex align-content-center mx-auto" style="width: auto">
        <div class="mx-auto" >
            <main class="form-signin w-100 card">
                <form class="card-body p-5" action="/register" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-bottom-0 @error('name') is-invalid @enderror"
                            name="name" id="name" placeholder="Bagus Cahyono">
                        <label for="name">Nama Lengkap</label>
                        @error('name')
                            <div class="invalid-feedback" style="text-align: left">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-0 @error('nik') is-invalid @enderror" name="nik"
                            id="nik" placeholder="XXXXXXXXXXXXXX">
                        <label for="nik">Nomor Induk Keluarga</label>
                        @error('nik')
                            <div class="invalid-feedback" style="text-align: left">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="name@example.com">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback" style="text-align: left">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-0 @error('address') is-invalid @enderror"
                            name="address" id="address" placeholder="Jalan Setiabudi, Gang Berkah, Nomor 5">
                        <label for="address">Alamat</label>
                        @error('address')
                            <div class="invalid-feedback" style="text-align: left">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-top-0 @error('password') is-invalid @enderror"
                            name="password" id="password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback" style="text-align: left">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-2 my-4" type="submit">Register</button>
                    <small class="mt-5 mb-3 text-body-secondary">Sudah Terdaftar? <a href="/login">Masuk Disini</a></small>
                </form>
            </main>
        </div>

    </div>
</div>
@endsection
