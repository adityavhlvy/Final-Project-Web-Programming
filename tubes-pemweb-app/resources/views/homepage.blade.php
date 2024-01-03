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
                <img src="{{ asset('img/jakarta.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>U-Hub</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam enim, unde quisquam fuga
                        voluptatem alias quae repellendus culpa ratione voluptatibus.</p>
                    <a href="#" class="btn btn-warning mt3">Learn More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/jakarta.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>U-Hub</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, suscipit.</p>
                    <a href="#" class="btn btn-warning mt3">Learn More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/jakarta.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>U-Hub</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit facilis blanditiis omnis
                        voluptates voluptatibus alias.</p>
                    <a href="#" class="btn btn-warning mt3">Learn More</a>
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

    <section id="about" class="about section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img ">
                        <img src="{{ asset('img/4.jpg') }}" alt=" " class="img-fluid img-thumbnail">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text text-dark">
                        <h2>U-HUB<br> About Us </h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Quam ullam enim itaque voluptates ipsum error necessitatibus
                            qui, ducimus fugiat ut, debitis placeat quod eaque? Ab tempora
                            ex tenetur maiores sit.</p>
                        <a href="#" class="btn btn-warning">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5 text-light">
                        <h2>Our Services</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Architecto, illum quidem!
                            Sed sapiente, quo quod ex voluptatum
                            consequuntur error, placeat, dolore accusamus
                            sequi voluptatem incidunt eum? Enim velit quia
                            laboriosam!</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-back"></i>
                            <h3 class="card-title">Layanan 1</h3>
                            <p class="lead"> Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Esse atque repudiandae quia provident
                                numquam a quis eius accusantium, voluptatem excepturi
                                blanditiis, consectetur dolores earum quidem,
                                commodi facere architecto quasi obcaecati.</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-back"></i>
                            <h3 class="card-title">Layanan 2</h3>
                            <p class="lead"> Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Esse atque repudiandae quia provident
                                numquam a quis eius accusantium, voluptatem excepturi
                                blanditiis, consectetur dolores earum quidem,
                                commodi facere architecto quasi obcaecati.</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-back"></i>
                            <h3 class="card-title">Layanan 3</h3>
                            <p class="lead"> Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Esse atque repudiandae quia provident
                                numquam a quis eius accusantium, voluptatem excepturi
                                blanditiis, consectetur dolores earum quidem,
                                commodi facere architecto quasi obcaecati.</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection