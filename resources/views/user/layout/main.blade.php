<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    @yield('customcss')
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-frist">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/user/index/icon-nav.svg')}}" width="30" height="30" class="d-inline-block align-top navbar-frist-image" alt="" loading="lazy">
                Daftarkan Desa Anda
            </a>
        </div>
    </nav>



    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light navbar-two">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>&nbsp;Menu&nbsp;
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                    <a class="nav-link" href="{{url('cek_nik')}}">Cek NIK</a>
                    <a class="nav-link" href="{{url('registrasi')}}">Registrasi</a>
                    <a class="nav-link" href="{{url('tentang')}}">Tentang</a>
                </div>
            </div>
        </div>
    </nav>


    @yield('container')

    <footer class="page-footer">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href=""> Meow</a>
        </div>
    </footer>

    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>