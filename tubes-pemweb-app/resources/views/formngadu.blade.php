<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('style/style.css') }}" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>

<body>
    <header>
        @include('partials.navbar')
    </header>
    <main>
        <!-- jumbotron -->
        <div class="jumbotron p-5">
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
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
