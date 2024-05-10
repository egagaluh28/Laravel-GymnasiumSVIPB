@extends('layout.main')
@section('container')

<div class="section big-55-height over-hide z-bigger">

    <div class="parallax parallax-top" style="background-image: url('img/logos/basket.jpg')"></div>
    <div class="dark-over-pages"></div>

    <div class="hero-center-section pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 parallax-fade-top">
                    <div class="hero-text">Sewa Fasilitas Olahraga</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section padding-top-bottom-big over-hide">
    <div class="parallax" style="background-image: url('img/logos/bg.jpg')"></div>
    <div class="section z-bigger">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-center home-translate">
                        <div class="col-xl-8">
                            <div class="row justify-content-center home-shadow">
                                <div class="col-md-3 px-sm-0">
                                    <div class="booking-sep-wrap">
                                        <div class="input-daterange input-group" id="flight-datepicker-1">
                                            <!-- <div class="form-item"> -->
                                            <span class="fontawesome-calendar"></span>
                                            <input class="input-sm" type="text" autocomplete="off" id="booking-date"
                                                name="booking" placeholder="Tanggal" data-date-format="DD, MM d" />
                                            <!-- <span class="date-text date-depart"></span> -->
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 px-sm-0">
                                    <div class="booking-sep-wrap">
                                        <div class="input-daterange input-group" id="flight-datepicker-1">
                                            <div class="form-item">
                                                <span class="fontawesome-clock"></span>
                                                <input class="input-sm" type="time" id="check-in-time"
                                                    name="check-in-time" placeholder="Jam Pemesanan Masuk"
                                                    min="09:00" max="18:00" step="1800" />
                                            </div>
                                            <div class="form-item">
                                                <span class="fontawesome-clock"></span>
                                                <input class="input-sm" type="time" id="check-out-time"
                                                    name="check-out-time" placeholder="Jam Pemesanan Keluar"
                                                    min="09:00" max="18:00" step="1800" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 px-sm-0">
                                    <a class="booking-button-big" href="search.html">Periksa<br>Ketersediaan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section padding-top-bottom over-hide background-grey">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="room-box background-white">
                    <div class="room-name">Lapangan Basktet</div>
                    <div class="room-per">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="img/logos/basket2.jpg" alt="">
                    <div class="room-box-in">
                        <h5 class="">basktet</h5>
                        <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo
                            inventore veritatis et.</p>
                        <a class="mt-1 btn btn-primary" href="/rooms-gallery">book from 130$</a>
                        <div class="room-icons mt-4 pt-4">
                            <img src="img/5.svg" alt="">
                            <img src="img/2.svg" alt="">
                            <img src="img/3.svg" alt="">
                            <img src="img/1.svg" alt="">
                            <a href="/rooms-gallery">full info</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="room-box background-white">
                    <div class="room-name">Arena Tenis Meja</div>
                    <div class="room-per">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="img/logos/tenis.jpg" alt="">
                    <div class="room-box-in">
                        <h5 class="">Tenis Meja</h5>
                        <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo
                            inventore veritatis et.</p>
                        <a class="mt-1 btn btn-primary" href="/rooms-gallery">book from 80$</a>
                        <div class="room-icons mt-4 pt-4">
                            <img src="img/4.svg" alt="">
                            <img src="img/2.svg" alt="">
                            <img src="img/6.svg" alt="">
                            <img src="img/3.svg" alt="">
                            <a href="/rooms-gallery">full info</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
                <div class="room-box background-white">
                    <div class="room-name">Gedung Gymnasium</div>
                    <div class="room-per">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="img/logos/inside.jpg" alt="">
                    <div class="room-box-in">
                        <h5 class="">Sewa Gedung</h5>
                        <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo
                            inventore veritatis et.</p>
                        <a class="mt-1 btn btn-primary" href="/rooms-gallery">book from 110$</a>
                        <div class="room-icons mt-4 pt-4">
                            <img src="img/5.svg" alt="">
                            <img src="img/2.svg" alt="">
                            <img src="img/3.svg" alt="">
                            <img src="img/6.svg" alt="">
                            <a href="/rooms-gallery">full info</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="section background-dark over-hide">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <a href="services.html">
                    <div class="img-wrap services-wrap">
                        <img src="img/logos/toilet.jpg" alt="">
                        <div class="services-text-over">Toilet</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 pt-4 pt-sm-0">
                <a href="services.html">
                    <div class="img-wrap services-wrap">
                        <img src="img/logos/kantin.jpg" alt="">
                        <div class="services-text-over">Kantin</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                <a href="services.html">
                    <div class="img-wrap services-wrap">
                        <img src="img/logos/loker.jpg" alt="">
                        <div class="services-text-over">loker</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                <a href="services.html">
                    <div class="img-wrap services-wrap">
                        <img src="img/logos/mushola.jpg" alt="">
                        <div class="services-text-over">Mushola</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection