@extends('layouts.mainlayout')
@section('content')
<section class="jumbotron d-flex align-items-center">
    <div class="container p-5 d-flex flex-column text-white">
        <h1 class="display-4">
            Layanan Aspirasi dan Pengaduan Online Masyarakat <br>
        </h1>
        <div class="button">
            <a href="/login.html" type="button" class="btn btn-warning">Ayo Ngadu</a>
        </div>
    </div>
</section>
<section class="carousel-section" >
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
                <div class="card" style="width: 18rem;">
                    <div class="image-wrapper">
                        <img src="{{ asset('img/4.jpg') }}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="image-wrapper">
                        <img src="{{ asset('img/4.jpg') }}" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="image-wrapper">
                        <img src="{{ asset('img/4.jpg') }}" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
                <div class="card" style="width: 18rem;">
                    <div class="image-wrapper">
                        <img src="{{ asset('img/4.jpg') }}" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="image-wrapper">
                        <img src="{{ asset('img/4.jpg') }}" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="image-wrapper">
                        <img src="{{ asset('img/4.jpg') }}" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
@endsection
