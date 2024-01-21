@extends('layouts.mainlayout')
@section('content')
<div class="container session-section">

    <div class="col-4 my-5 d-flex align-content-center mx-auto" style="width: auto">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('loginError'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('notAuth'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('notAuth') }}
                <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="mx-auto" style="padding: 9rem 0">
            <main class="form-signin w-100 card">
                <form class="card-body p-5" action="/login" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control rounded-bottom-0 @error('email') is-invalid @enderror"
                            name="email" id="email" placeholder="name@example.com" required>
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback" style="text-align: left">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-top-0 @error('password') is-invalid @enderror" name="password" id="password"
                            placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback" style="text-align: left">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-2 my-4" type="submit">Login</button>
                    <small class="mt-5 mb-3 text-body-secondary">Belum Terdaftar? <a href="/register">Daftar Disini</a></small>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection
