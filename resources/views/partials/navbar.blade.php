<nav id="menu-wrap" class="menu-back cbp-af-header">
    <div class="menu-top background-black-2">
        <!-- atas cek -->
        <div class="container">
            <div class="row">
                <div class="col-6 px-0 px-md-3 pl-1 py-3">
                    <span class="call-top">call us:</span> <a href="#" class="call-top">(381) 60 422 4256</a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <a href="index.html">

            <!-- LOGO -->

            <div class="logo">
                <img src="img/logos/logo1.png" alt="">

            </div>
        </a>
        <ul>
            <li>
                <a class="{{ Request::is('/') ? 'curent-page' : '' }}" href="/">Home</a>
            </li>
            <li>
                <a class="{{ Request::is('rooms') || Request::is('rooms-gallery') ? 'curent-page' : '' }}" href="/rooms">Fasilitas</a>
            </li>
            <li>
                <a class="{{ Request::is('search') || Request::is('tandc') || Request::is('services') || Request::is('testimonials') || Request::is('gallery') ? 'curent-page' : '' }}"
                    href="#">Detail</a>
                <ul>
                    <li><a class="{{ Request::is('search') ? 'curent-page' : '' }}"
                            href="{{ route('search') }}">Penelusuran</a></li>
                    <li><a class="{{ Request::is('tandc') ? 'curent-page' : '' }}" href="{{ route('tandc') }}">Syarat
                            &amp; Ketentuan</a></li>
                    <li><a class="{{ Request::is('services') ? 'curent-page' : '' }}"
                            href="{{ route('services') }}">Layanan</a></li>
                    <li><a class="{{ Request::is('testimonials') ? 'curent-page' : '' }}"
                            href="{{ route('testimonials') }}">Testimoni</a></li>
                    <li><a class="{{ Request::is('gallery') ? 'curent-page' : '' }}"
                            href="{{ route('gallery') }}">Galeri</a></li>
                </ul>
            </li>


            <li>
                <a class="{{ Request::is('contact') ? 'curent-page' : '' }}" href="/contact">Kontak</a>
            </li>
            <li>
                <a class="{{ Request::is('search') ? 'curent-page' : '' }}" href="/search"><span>Pesan
                        Sekarang</span></a>
            </li>
        </ul>

    </div>
</nav>
