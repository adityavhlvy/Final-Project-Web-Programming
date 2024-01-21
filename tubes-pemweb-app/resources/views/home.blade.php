@extends('layouts.mainlayout')
@section('content')
    @if (Session::has('success'))
        <script>
            // Tampilkan pesan alert sebagai popup menggunakan JavaScript
            alert("{{ Session::get('success') }}");
        </script>
    @endif
    <section class="jumbotron d-flex align-items-center">
        <div class="container p-5 d-flex flex-column text-white">
            <h1 class="display-4 mb-5">
                Layanan Aspirasi dan Pengaduan Online Masyarakat <br>
            </h1>
            <div class="button">
                @auth
                    <a href="/laporan" type="button" class="btn btn-warning">Ayo Ngadu</a>
                @else
                    <a href="/login" type="button" class="btn btn-warning">Ayo Ngadu</a>
                @endauth
            </div>
        </div>
    </section>

    <section class="container laporan-section">
        <h1 class="display-4 mt-5">
            Laporan yang kami terima
        </h1>
        <div class="row">
            <section class="col-7">
                @foreach ($complaints as $index => $complaint)
                    @if ($complaint->status === 'approved')
                        <div class="laporan-card card my-5 w-100 rounded"style="border: 1px solid blue">
                            <div class="card-body">
                                <h5><span class="badge text-bg-primary"><strong>Category:</strong>
                                        {{ $complaint->category }}</span></h5>
                                <p class="card-text"><strong>Title:</strong> {{ $complaint->description }}</p>
                                @if ($complaint->file)
                                    <div class="image-wrapper">
                                        <img src="{{ asset('storage/' . $complaint->file) }}" class="card-img-top"
                                            style="max-width: 300px">
                                    </div>
                                @else
                                    <div class="image-wrapper">
                                        <img src="{{ asset('img/dummy.jpeg' . $complaint->file) }}" class="card-img-top"
                                            style="max-width: 300px">
                                    </div>
                                @endif
                                <p class="card-text"><strong>Address:</strong> {{ $complaint->address }}</p>
                                <p class="card-text"><strong>Progress:</strong> <span
                                        class="text-wrap">{{ $complaint->progress }}</span></p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </section>
            <section class="col-5">
                <div class="kategori-populer card w-100 mt-5">
                    <div class="card-body">
                        <h4>Kategori Populer</h4>
                        @foreach ($categories as $category)
                            <h6><span class="badge bg-secondary">{{ $category }}:
                                    {{ $categoryCounts[$category]['count'] }} complaints
                                    ({{ $categoryCounts[$category]['percentage'] }}%)
                                </span></h6>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
