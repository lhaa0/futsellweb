@extends('master')

@section('mainContent')

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-8">
                <h1 class="text-white">
                    Menejemen lapangan futsal mu dengan "Futsell"
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start feature Area -->
<section class="feature-area pb-100" id="service">
    <div class="container">
        <div class="row mockup-container">
            <img class="mx-auto d-block img-fluid" src="{{URL('assets/img/laptop.png')}}" alt="">
        </div>
        <div class="row d-flex justify-content-center">
            <div class="menu-content pt-100 pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Fitur Andalan Futsell</h1>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-feature">
                    <span class="lnr lnr-screen"></span>
                    <h4>
                        Mudah
                    </h4>
                    <p>
                        Dengan adanya Futsell, memesan lapangan futsal akan semakin mudah. Dimanapun dan kapanpun.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature">
                    <span class="lnr lnr-code"></span>
                    <h4>
                        Cepat
                    </h4>
                    <p>
                        Tidak perlu berlama-lama lagi, lihat lapangan futsal di sekitarmu dan segera pesan!
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature">
                    <span class="lnr lnr-clock"></span>
                    <h4>
                        Praktis
                    </h4>
                    <p>
                        Anti ribet dengan Futsell, latihan futsal menjadi semakin praktis. No ruwet - ruwet club!
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End feature Area -->

<!-- Start about Area -->
<section class="about-area section-gap" >
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Tambahkan Lapangan Futsal</h1>
                    <p>Di Futsell, kamu juga dapat mendaftarkan bisnis futsalmu</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 about-left">
                <h6></h6>
                <h1>
                    Kembangkan dan Kenalkan <br>
                    Bisnis Lapangan Futsalmu
                </h1>
                <p>
                    <span>
                        Tidak hanya memesan lapangan, fitur Futsell lainnya adalah menambahkan lapanganmu sendiri.
                    </span>
                </p>
                <p>
                    Segera download aplikasi Futsel dan nikmati fitur - fiturnya!
                </p>
                <a class="primary-btn" href="{{URL('/admin')}}">Get Started now</a>
            </div>
            <div class="col-lg-6 about-right">
                <div class="active-about-carusel">
                    <div class="single-carusel item">
                        <img class="img-fluid" src="{{URL('assets/img/laptop.png')}}" alt="">
                    </div>
                    <div class="single-carusel item">
                        <img class="img-fluid" src="{{URL('assets/img/laptop2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about Area -->

<!-- Start service Area -->
<section class="service-area section-gap" id="feature">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Fitur lain dari Futsell</h1>
                    <p>Hanya kami yang punya</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 secvice-left">
                <div class="single-service d-flex flex-row pb-30">
                    <div class="icon">
                        <h1>01</h1>
                    </div>
                    <div class="desc">
                        <h4>Mendeteksi Lapangan Terdekat</h4>
                        <p>
                            Futsell dapat mendeteksi lapangan futsal terdekatmu, dengan jarak maksimum 5 kilometer.
                        </p>
                    </div>
                </div>
                <div class="single-service d-flex flex-row pb-30">
                    <div class="icon">
                        <h1>03</h1>
                    </div>
                    <div class="desc">
                        <h4>Rating Lapangan Futsal</h4>
                        <p>
                            Kamu juga bisa lihat rating dari lapangan - lapangan yang ada di aplikasi kami. Kamu
                            juga bisa kasih rating ke lapangan yang sudah kamu pesan.
                        </p>
                    </div>
                </div>
                <div class="single-service d-flex flex-row pb-30">
                    <div class="icon">
                        <h1>05</h1>
                    </div>
                    <div class="desc">
                        <h4>Cari Teman Sparing</h4>
                        <p>
                            Pengen Futsal tapi nggak ada lawan? Futsell solusinya. Disini juga bisa cari teman
                            sparing kamu.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 secvice-right">
                <div class="single-service d-flex flex-row pb-30">
                    <div class="icon">
                        <h1>02</h1>
                    </div>
                    <div class="desc">
                        <h4>Pencarian Lapangan Futsal</h4>
                        <p>
                            Anda punya lapangan futsal langganan? Tenang, anda bisa juga mencari lapangan di
                            aplikasi Futsell.
                        </p>
                    </div>
                </div>
                <div class="single-service d-flex flex-row pb-30">
                    <div class="icon">
                        <h1>04</h1>
                    </div>
                    <div class="desc">
                        <h4>Live Chat</h4>
                        <p>
                            Ada kendala dengan pemesanan lapanganmu? Atau ingin bertanya? Nggak usah risau, admin
                            Futsell selalu ada 24 jam. Tinggal chat, semua beres.
                        </p>
                    </div>
                </div>
                <div class="single-service d-flex flex-row pb-30">
                    <div class="icon">
                        <h1>06</h1>
                    </div>
                    <div class="desc">
                        <h4>Arah Lapangan</h4>
                        <p>
                            Kalau kamu bingung dimana letak lapanganmu, di Futsell bisa dilihat dimana letaknya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
