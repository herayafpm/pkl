@extends('user/layout/main')
@section('title', 'Selamat Datang')
@section('customcss')
<link rel="stylesheet" href="{{ asset('css/user/index/style.css') }}">
@endsection
@section('container')

<div class="jumbotron jumbotron-fluid">
    <div class="container wc-box">
        <h1 class="display-4"><span>Selamat datang</span> <br> Ayo daftarkan desa anda segera <div style="margin-top: -5px;">
        </h1>
    </div>
</div>

<div class="container">

    <div class="row justify-content-center">
        <div class="info-panel">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center mt-3">Alur Registrasi</h3>
                    <p class="mb-3">Langkah untuk mendaftarkan desa anda cukup mudah dan tidak rumit, anda cukup mengikuti langkah dibawah berikut ini</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md ml-3">
                    <img src=" {{ asset('image/user/index/registrasi.svg') }} " alt="tes" class="mx-auto d-block">
                    <h4>1. Registrasi</h4>
                    <p>Masukan data anda secara lengkap dengan mengisi form yang telah disediakan</p>
                </div>
                <div class="col-md">
                    <img src=" {{ asset('image/user/index/konfirmasi.svg') }} " alt="tes" class="mx-auto d-block">
                    <h4>2. Menunggu Konfirmasi</h4>
                    <p>Data yang telah anda masukan akan diproses dan divalidasi oleh admin</p>
                </div>
                <div class="col-md mr-3">
                    <img src=" {{ asset('image/user/index/hasil.svg') }} " alt="tes" class="mx-auto d-block">
                    <h4>3. Hasil Registrasi</h4>
                    <p>Hasil dari registrasi akan dikirmkan ke email anda</p>
                </div>
            </div>


        </div>
    </div>

    <br>

    <div class="row workingspace">
        <div class="col-lg-6">
            <br>
            <br>
        </div>
        <div class="col-lg-6">
            <br>
            <br>
        </div>
    </div>

</div>

<br>
@endsection