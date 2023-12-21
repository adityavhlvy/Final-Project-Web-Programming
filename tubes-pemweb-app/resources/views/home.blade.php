@extends('layouts.main')
@section('container')
    <section id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('jakarta.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>U-Hub</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam enim, unde quisquam fuga
                        voluptatem alias quae repellendus culpa ratione voluptatibus.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('jakarta.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>U-Hub</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, suscipit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('jakarta.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>U-Hub</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit facilis blanditiis omnis
                        voluptates voluptatibus alias.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>
@endsection


{{--
    <section id="about" class="about-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">

                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </section>
--}}
