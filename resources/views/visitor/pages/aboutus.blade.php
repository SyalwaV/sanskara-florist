@extends('visitor.layout.main')

@section('content-main')


<header id="home" class="welcome-hero">

    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!--/.carousel-indicator -->
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span>
            </li>
            <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
            <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
        </ol><!-- /ol-->
        <!--/.carousel-indicator -->
<br>
<br>
<br>
<br>
<br>
    <!--new-arrivals start -->
    <section id="new-arrivals" class="new-arrivals">
        <div class="container">
            <div class="section-header">
                <h2>Tentang Kami</h2>
            </div><!--/.section-header-->
            <br>
            <br>
            <div class="xop-box">
             <img src="assets/images/collection/toko.jpg" alt="new-arrivals images">
            </div>
            <br>
            <br>
            <section id="contact" class="contact">
            <div class="info">
            <h2>Sanskara East Java Florist Merupakan Jasa pembuatan papan bunga dan juga aneka hiasan bungan pajang disegala acara baik itu ucapan selamat atas peresmian, ucapan pernikahan, dan ucapan berduka, Sanskara memiliki toko pusat di Jakarta
                seiring berkembangnya usaha sanskara membuka cabang di daerah Surabaya dan Kediri dimana masyarakat didaerah Jawa Timur dapat memesan papan bunga yang masih segar dan fresh
                terdekat dari lokasi di daerah Jawa Timur dan sekitarnya, sanskara memiliki kategori papan bunga yang sedang diperdagangkan yaitu,
                <br>
                <br>
                <ul>
                    <li>- Papan Bunga Ucapan Peresmian</li>
                    <li>- Papan Bunga Ucapan Pernikahan</li>
                    <li>- Papan Bunga Ucapan Berduka</li>
                    <li>- Standing Flowers</li>
                </ul>
            </h2>
            </div>
            </section>

            
    <!--feature start -->
    <section id="feature" class="feature">
        <div class="container">
            <div class="section-header">
                <h2>Kategori Produk Kami </h2>
            </div><!--/.section-header-->
            <div class="feature-content">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <img src="assets/images/slider/rbpapanbunga01.png" alt="feature image">
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                    <span class="feature-review">(45 review)</span>
                                </p>
                                <h3><a href="#">Papan Bunga Selamat Peresmian</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <img src="assets/images/slider/krngan.png" alt="feature image">
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                    <span class="feature-review">(45 review)</span>
                                </p>
                                <h3><a href="#">Papan Bunga Nikahan</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <img src="assets/images/slider/cokroo.png" alt="feature image">
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                    <span class="feature-review">(45 review)</span>
                                </p>
                                <h3><a href="#">Papan Bunga Belasungkawa</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <img src="assets/images/slider/standingfl.png" alt="feature image">
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                    <span class="feature-review">(45 review)</span>
                                </p>
                                <h3><a href="#">Standing Flower</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.feature-->

            @endsection
