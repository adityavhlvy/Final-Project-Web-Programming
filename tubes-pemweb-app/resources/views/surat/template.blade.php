<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Surat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <header>
            <h3 class="text-center fw-bold my-5">
                SURAT KETERANGAN PENGHASILAN ORANG TUA
            </h3>
        </header>
        <hr class="border-4">
        <main>
            <div>
                <p>Saya yang bertanda tangan di bawah ini:</p>
                <div class="mx-5 debug">
                    <p>Nama : {{ $nama_orangtua }}</p>
                    <p>Umur : {{ $umur }}</p>
                    <p>Pekerjaan : {{ $pekerjaan }}</p>
                    <p>No Telepon: {{ $no_telepon }}</p>
                    <p>Alamat : {{ $alamat }}</p>
                </div>
            </div>
            <div class=" debug">
                <p>Adalah orang tua dari : </p>
                <div class=" mx-5 debug">
                    <p>Nama: {{ $nama_mahasiswa }}</p>
                    <p>Jenis Kelamin: {{ $jenis_kelamin }}</p>
                    <p>Tempat, Tgl Lahir: {{ $tempat_lahir }}, {{ $tanggal_lahir }}</p>
                    <p>Jurusan: {{ $jurusan }}</p>
                    <p>Fakultas: {{ $fakultas }}</p>
                </div>
            </div>

            <p class="mt-3">Menyatakan bahwa saat ini, kami selaku orang tua mempunyai penghasilan keluarga rata-rata
                sebesar Rp {{ $jumlah_penghasilan }} /bulan. Demikian, pernyataan ini kami buat dengan sebenar-benarnya
                dan penuh rasa
                tanggung jawab. Apabila pernyataan ini tidak benar / menyimpang dengan keadaan sebenarnya, kami bersedia
                menerima sanksi sesuai dengan peraturan perundang-undangan.</p>

            <div class="text-center">
                <div class="row align-items-start">
                    {{-- <div class="col" style="width: 40%;">
                        <p class="text-center py-3">
                            Mengetahui Ketua RT
                        </p>
                        <div style="height: 10rem;" class="debug">

                        </div>
                        <p class="text-center">(..........................)</p>
                    </div> --}}
                    <div class="col" style="width: 40%;">
                        <p class="text-center py-1">
                            {{ $tanggal }} <br>
                            Yang membuat pernyataan
                        </p>
                        <div style="height: 10rem;" class="debug">

                        </div>
                        <p class="text-center">({{ $nama_orangtua }})</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script type="text/javascript">
        window.onload = function() {
            window.print();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
