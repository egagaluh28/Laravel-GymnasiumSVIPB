@extends('layout.main')
@section('container')
    <div class="section background-dark over-hide">

        <div class="hero-center-section">
            <div class="container">
                <div class="row justify-content-center"
                    style="margin: 0;
            padding: 0;
            position: relative;">
                    <div class="col-10 col-sm-8 parallax-fade-top">
                        <div class="background"></div>
                        <div class="content"
                            style="font-family: 'Montserrat', sans-serif;
                        font-weight: 700; /* Bold */
                        font-size: 40px; /* Ukuran font 40 */">
                            <span>Temukan Tempat Olahraga Impianmu di Gymnasium SV IPB</span>
                        </div>
                    </div>
                    <div class="col-12 mt-3 mb-5 parallax-fade-top">
                        <div class="hero-stars">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                    <div class="col-12 mt-3 parallax-fade-top">
                        <div class="booking-hero-wrap">
                            <div class="row justify-content-center">
                                <div class="col-3 no-mob">
                                    <div class="input-daterange input-group" id="flight-datepicker">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- <div class="form-item"> -->
                                                <span class="fontawesome-calendar"></span>
                                                <input class="input-sm" type="text" autocomplete="off" id="start-date-1"
                                                    name="start" placeholder="tanggal" data-date-format="DD, MM d" />

                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 no-mob">
                                    <div class="input-daterange input-group" id="flight-datepicker">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-item">
                                                    <span class="fontawesome-clock"></span>
                                                    <input class="input-sm" type="time" id="check-in-time"
                                                        name="check-in-time" placeholder="Jam Pemesanan Masuk"
                                                        min="09:00" max="18:00" step="1800" />

                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-item">
                                                    <span class="fontawesome-clock"></span>
                                                    <input class="input-sm" type="time" id="check-out-time"
                                                        name="check-out-time" placeholder="Jam Pemesanan Keluar"
                                                        min="09:00" max="18:00" step="1800" />

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-3  col-sm-4 col-lg-2">
                                    <a class="booking-button" href="search.html">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slideshow">
            <div class="slide slide--current parallax-top">
                <figure class="slide__figure">
                    <div class="slide__figure-inner">
                        <div class="slide__figure-img" style="background-image: url(gimg/foto1.jpg)"></div>
                        <div class="slide__figure-reveal"></div>
                    </div>
                </figure>
            </div>
            <div class="slide parallax-top">
                <figure class="slide__figure">
                    <div class="slide__figure-inner">
                        <div class="slide__figure-img" style="background-image: url(img/2.jpg)"></div>
                        <div class="slide__figure-reveal"></div>
                    </div>
                </figure>
            </div>
            <div class="slide parallax-top">
                <figure class="slide__figure">
                    <div class="slide__figure-inner">
                        <div class="slide__figure-img" style="background-image: url(img/3.jpg)"></div>
                        <div class="slide__figure-reveal"></div>
                    </div>
                </figure>
            </div>
            <!-- revealer -->
            <div class="revealer">
                <div class="revealer__item revealer__item--left"></div>
                <div class="revealer__item revealer__item--right"></div>
            </div>
            <nav class="arrow-nav fade-top">
                <button class="arrow-nav__item arrow-nav__item--prev">
                    <svg class="icon icon--nav">
                        <use xlink:href="#icon-nav"></use>
                    </svg>
                </button>
                <button class="arrow-nav__item arrow-nav__item--next">
                    <svg class="icon icon--nav">
                        <use xlink:href="#icon-nav"></use>
                    </svg>
                </button>
            </nav>
            <!-- navigation -->
            <nav class="nav fade-top">
                <button class="nav__button">
                    <span class="nav__button-text"></span>
                </button>
                <h2 class="nav__chapter">Temukan Tempat Olahraga Impianmu</h2>
                <div class="toc">
                    <a class="toc__item" href="#entry-1">
                        <span class="toc__item-title">Temukan Tempat Olahraga Impianmu</span>
                    </a>
                    <a class="toc__item" href="#entry-2">
                        <span class="toc__item-title">Luas, Lengkap, dan Nyaman</span>
                    </a>
                    <a class="toc__item" href="#entry-3">
                        <span class="toc__item-title">Mudah Diakses!</span>
                    </a>
                </div>
            </nav>
            <!-- little sides -->
            <div class="slideshow__indicator"></div>
            <div class="slideshow__indicator"></div>
        </div>
    </div>

    <div class="section padding-top-bottom over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="subtitle text-center mb-4">Gymnasium SV IPB</div>
                            <h2 class="text-center">Pilihan Tempat untuk Hidup Sehat!</h2>
                            <p class="text-center mt-5">Tempat yang ideal untuk mencapai kebugaran dan kesehatan optimal.
                                Dengan fasilitas terbaik dan instruktur ahli, kami siap membantu Anda mencapai tujuan
                                kesehatan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0 align-self-center">
                    <div class="img-wrap">
                        <img src="gimg/inside.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section background-grey over-hide">
        <div class="container-fluid px-0">
            <div class="row mx-0">
                <div class="col-xl-6 px-0">
                    <div class="img-wrap" id="rev-1">
                        <img src="gimg/basket.jpg" alt="">
                        <div class="text-element-over">Basket Ball</div>
                    </div>
                </div>
                <div class="col-xl-6 px-0 mt-4 mt-xl-0 align-self-center">
                    <div class="row justify-content-center">
                        <div class="col-10 col-xl-8 text-center">
                            <h3 class="text-center">Basket Ball</h3>
                            <p class="text-center mt-4">Bergabunglah dengan kami untuk aksi basket yang seru di lapangan
                                kami! Nikmati setiap dribble dan tembakan di Gymnasium SV IPB. Bersiaplah untuk menikmati
                                momen-momen luar biasa di lapangan basket kami yang modern dan nyaman!</p>
                            <a class="mt-5 btn btn-primary" href="search.html">Lihat Ketersediaan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-xl-6 px-0 mt-4 mt-xl-0 pb-5 pb-xl-0 align-self-center">
                    <div class="row justify-content-center">
                        <div class="col-10 col-xl-8 text-center">
                            <h3 class="text-center">Tenis Meja</h3>
                            <p class="text-center mt-4">Sajikan kegembiraan permainan tenis meja dalam acara Anda! Dapatkan
                                pengalaman bermain yang seru dan dinamis di Gymnasium SV IPB. Jadikan acara Anda lebih
                                berkesan dengan adanya meja tenis yang siap menyambut tantangan dan tawa!</p>
                            <a class="mt-5 btn btn-primary" href="search.html">Lihat Ketersediaan</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 px-0 order-first order-xl-last mt-5 mt-xl-0">
                    <div class="img-wrap" id="rev-2">
                        <img src="gimg/tenis.jpg" alt="">
                        <div class="text-element-over">Tenis Meja</div>
                    </div>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-xl-6 px-0">
                    <div class="img-wrap" id="rev-1">
                        <img src="gimg/basket.jpg" alt="">
                        <div class="text-element-over">sewa Gymnasium</div>
                    </div>
                </div>
                <div class="col-xl-6 px-0 mt-4 mt-xl-0 align-self-center">
                    <div class="row justify-content-center">
                        <div class="col-10 col-xl-8 text-center">
                            <h3 class="text-center">Sewa Gymnasium</h3>
                            <p class="text-center mt-4">Rencanakan acara Anda dengan sempurna di gedung gymnasium kami di
                                Gymnasium SV IPB. Dengan fasilitas modern dan ruang yang luas, kami siap menyambut setiap
                                momen istimewa Anda. Temukan fleksibilitas dan kenyamanan yang Anda butuhkan untuk membuat
                                acara Anda menjadi tak terlupakan di Gymnasium SV IPB.</p>
                            <a class="mt-5 btn btn-primary" href="search.html">Lihat Ketersediaan</a>
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

    <div class="section padding-top-bottom over-hide">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 align-self-center">
                    <div class="subtitle with-line text-center mb-4">Selamat datang di Gymnasium Sekolah Vokasi IPB
                        University</div>
                    <h3 class="text-center padding-bottom-small">Kenyamanan Premium</h3>
                </div>
                <div class="section clearfix"></div>
                <div class="col-sm-6 col-lg-4">
                    <div class="services-box text-center">
                        <img src="img/1.svg" alt="">
                        <h5 class="mt-2">Penyewaan Peralatan</h5>
                        <p class="mt-3">Layanan penyewaan peralatan lengkap untuk kebutuhan olahraga Anda. Peralatan
                            terbaik untuk latihan yang efektif dan aman.</p>
                        <a class="mt-1 btn btn-primary" href="services.html">read more</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5 mt-sm-0">
                    <div class="services-box text-center">
                        <img src="img/2.svg" alt="">
                        <h5 class="mt-2">Lingkungan Bersih & Aman</h5>
                        <p class="mt-3">Memastikan lingkungan gymnasium tetap bersih, teratur, dan aman dengan rutin
                            melakukan pembersihan dan perawatan fasilitas.</p>
                        <a class="mt-1 btn btn-primary" href="services.html">read more</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5 mt-lg-0">
                    <div class="services-box text-center">
                        <img src="img/3.svg" alt="">
                        <h5 class="mt-2">Area Parkir</h5>
                        <p class="mt-3">Area parkir yang mudah diakses dan diawasi serta luas dan aman untuk kenyamanan
                            Anda. Keamanan kendaraan Anda adalah prioritas kami.</p>
                        <a class="mt-1 btn btn-primary" href="services.html">read more</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5">
                    <div class="services-box text-center">
                        <img src="img/4.svg" alt="">
                        <h5 class="mt-2">Petugas Keamanan</h5>
                        <p class="mt-3">Petugas keamanan terpercaya untuk menjaga ketertiban dan keamanan pengunjung.
                            Siap membantu Anda dengan aman dan nyaman.</p>
                        <a class="mt-1 btn btn-primary" href="services.html">read more</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5">
                    <div class="services-box text-center">
                        <img src="img/1.svg" alt="">
                        <h5 class="mt-2">Pelayanan Terbaik</h5>
                        <p class="mt-3">Layanan pelanggan yang ramah, responsif, dan profesional untuk menjawab
                            pertanyaan, memberikan bantuan, dan menangani keluhan.</p>
                        <a class="mt-1 btn btn-primary" href="services.html">read more</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-5">
                    <div class="services-box text-center">
                        <img src="img/6.svg">
                        <h5 class="mt-2">Fasilitas Terbaik</h5>
                        <p class="mt-3">Fasilitas terjaga dengan baik untuk memberikan pengalaman yang bersih dan nyaman.
                            Nikmati waktu Anda dengan penuh kenyamanan di sini.</p>
                        <a class="mt-1 btn btn-primary" href="services.html">read more</a>
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
                                                <input class="input-sm" type="text" autocomplete="off"
                                                    id="booking-date" name="booking" placeholder="Tanggal"
                                                    data-date-format="DD, MM d" />

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



    <div class="section padding-top z-bigger">
        <div class="container">
            <div class="row justify-content-center padding-bottom-smaller">
                <div class="col-md-8">
                    <div class="subtitle with-line text-center mb-4">butuh informasi lebih lanjut?</div>
                    <h3 class="text-center padding-bottom-small">Hubungi Kami</h3>
                </div>
                <div class="section clearfix"></div>
                <div class="col-md-6 col-lg-4">
                    <div class="address">
                        <div class="address-in text-left">
                            <p class="color-black">Alamat:</p>
                        </div>
                        <div class="address-in text-right">
                            <p>Jl. Kumbang No. 14</p>
                        </div>
                    </div>
                    <div class="address">
                        <div class="address-in text-left">
                            <p class="color-black">Kota:</p>
                        </div>
                        <div class="address-in text-right">
                            <p>Bogor</p>
                        </div>
                    </div>
                    <div class="address">
                        <div class="address-in text-left">
                            <p class="color-black">Buka pukul:</p>
                        </div>
                        <div class="address-in text-right">
                            <p>15:00 pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="address">
                        <div class="address-in text-left">
                            <p class="color-black">Nomor HP:</p>
                        </div>
                        <div class="address-in text-right">
                            <p>+21 60 374 7537</p>
                        </div>
                    </div>
                    <div class="address">
                        <div class="address-in text-left">
                            <p class="color-black">Email:</p>
                        </div>
                        <div class="address-in text-right">
                            <p>gymnas@ipb.ac.id</p>
                        </div>
                    </div>
                    <div class="address">
                        <div class="address-in text-left">
                            <p class="color-black">Tutup pukul:</p>
                        </div>
                        <div class="address-in text-right">
                            <p>11:00 am</p>
                        </div>
                    </div>
                </div>
                <div class="section clearfix"></div>
                <div class="col-md-8 text-center mt-5" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
                    <p class="mb-0"><em>Tersedia pada senin sampai jum'at</em></p>
                    <h2 class="text-opacity">+21 60 374 7537</h2>
                </div>
            </div>

        </div>
    </div>

    <div class="section">
        <div id="owl-sep-2" class="owl-carousel owl-theme">
            <div class="item">
                <a href="img/gallery/1.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/1-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/2.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/2-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/3.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/3-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/4.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/4-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/5.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/5-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/6.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/6-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/7.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/7-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/8.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/8-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/9.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/9-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/10.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/10-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/1.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/1-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/2.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/2-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/3.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/3-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/4.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/4-s.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/5.jpg" data-fancybox="gallery">
                    <div class="img-wrap gallery-small">
                        <img src="img/gallery/5-s.jpg" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
