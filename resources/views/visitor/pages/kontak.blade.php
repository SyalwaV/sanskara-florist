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

        <!--/.carousel-inner -->
        <div class="carousel-inner" role="listbox">
            <!-- .item -->
            <div class="item active">
                <div class="single-slide-item slide1">
                    <div class="container">
                        <div class="welcome-hero-content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-welcome-hero">
                                        <div class="welcome-hero-txt">
                                            <h4>Sanskara EastJava Florist</h4>
                                            <h2>Jasa Papan Bunga Daerah Surabaya & Kediri</h2>
                                            <p>
                                                Sanskara merupakan jasa papan bunga yang disesuai dengan kebutuhan pelanggan
                                                disegala acara dan merupakan jasa papan bunga modern di daerah Jawa Timur yang berlokasi di Surabaya dam Kediri
                                            </p>
                                            <button class="btn-cart welcome-add-cart"> <a href="https://wa.me/6281330463328" target="_blank">
                                                Owner Surabaya 
                                                </a>
                                            </button>
                                            <button class="btn-cart welcome-add-cart"> <a href="https://wa.me/6281246029068" target="_blank">
                                                Owner Kediri
                                                </a>
                                            </button>
                                        </div><!--/.welcome-hero-txt-->
                                    </div><!--/.single-welcome-hero-->
                                </div><!--/.col-->
                                <div class="col-sm-8">
                                    <div class="single-welcome-hero">
                                        <div class="welcome-hero-img">
                                            <img src="assets/images/slider/uni.png"  style="height: 500px" alt="slider image" >
                                        </div><!--/.welcome-hero-txt-->
                                    </div><!--/.single-welcome-hero-->
                                </div><!--/.col-->
                            </div><!--/.row-->
                        </div><!--/.welcome-hero-content-->
                    </div><!-- /.container-->
                </div><!-- /.single-slide-item-->

            </div><!-- /.item .active-->

            <div class="item">
                <div class="single-slide-item slide2">
                    <div class="container">
                        <div class="welcome-hero-content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-welcome-hero">
                                        <div class="welcome-hero-txt">
                                            <h4>Sanskara EastJava Florist</h4>
                                            <h2>Jasa Papan Bunga Daerah Surabaya & Kediri</h2>
                                            <p>
                                                Sanskara merupakan jasa papan bunga yang disesuai dengan kebutuhan pelanggan
                                                disegala acara dan merupakan jasa papan bunga modern di daerah Jawa Timur yang berlokasi di Surabaya
                                                dan Kediri
                                            </p>
                                            <button class="btn-cart welcome-add-cart"> <a href="https://wa.me/6281330463328" target="_blank">
                                                Owner Surabaya 
                                                </a>
                                            </button>
                                            <button class="btn-cart welcome-add-cart"> <a href="https://wa.me/6281330463328" target="_blank">
                                                Owner Kediri
                                                </a>
                                            </button>   
                                        </div><!--/.welcome-hero-txt-->
                                    </div><!--/.single-welcome-hero-->
                                </div><!--/.col-->
                                <div class="col-sm-8">
                                    <div class="single-welcome-hero">
                                        <div class="welcome-hero-img">
                                            <img src="assets/images/slider/una.png" style="height: 500px" alt="slider image">
                                        </div><!--/.welcome-hero-txt-->
                                    </div><!--/.single-welcome-hero-->
                                </div><!--/.col-->
                            </div><!--/.row-->
                        </div><!--/.welcome-hero-content-->
                    </div><!-- /.container-->
                </div><!-- /.single-slide-item-->

            </div><!-- /.item .active-->

            <div class="item">
                <div class="single-slide-item slide3">
                    <div class="container">
                        <div class="welcome-hero-content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-welcome-hero">
                                        <div class="welcome-hero-txt">
                                            <h4>Sanskara EastJava Florist</h4>
                                            <h2>Jasa Papan Bunga Daerah Surabaya & Kediri</h2>
                                            <p>
                                                Sanskara merupakan jasa papan bunga yang disesuai dengan kebutuhan pelanggan
                                                disegala acara dan merupakan jasa papan bunga modern di daerah Jawa Timur yang berlokasi di Surabaya
                                                dan Kediri
                                            </p>
                                            <button class="btn-cart welcome-add-cart"> <a href="https://wa.me/6281330463328" target="_blank">
                                                Owner Surabaya 
                                                </a>
                                            </button>
                                            <button class="btn-cart welcome-add-cart"> <a href="https://wa.me/6281330463328" target="_blank">
                                                Owner Kediri
                                                </a>
                                            </button>
                                            {{-- <button class="btn-cart welcome-add-cart welcome-more-info"
                                                onclick="window.location.href='#'">
                                                more info
                                            </button> --}}
                                        </div><!--/.welcome-hero-txt-->
                                    </div><!--/.single-welcome-hero-->
                                </div><!--/.col-->
                                <div class="col-sm-8">
                                    <div class="single-welcome-hero">
                                        <div class="welcome-hero-img">
                                            <img src="assets/images/slider/une.png" style="height: 500px" alt="slider image">
                                        </div><!--/.welcome-hero-txt-->
                                    </div><!--/.single-welcome-hero-->
                                </div><!--/.col-->
                            </div><!--/.row-->
                        </div><!--/.welcome-hero-content-->
                    </div><!-- /.container-->
                </div><!-- /.single-slide-item-->

            </div><!-- /.item .active-->
        </div><!-- /.carousel-inner-->

    </div><!--/#header-carousel-->
</header><!--/.welcome-her

<div class="hero-wrap js-fullheight" style="background-image: url('assets/main-template/images/bgpoto.jpg');"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
        data-scrollax-parent="true">
        <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Kontak Iwash Indonesia</h1>
            <p><a href="https://wa.me/6281230476940" target="_blank" class="btn btn-primary mr-md-4 py-2 px-4">Hubungi Iwash <span
                        class="ion-ios-arrow-forward"></span></a></p>
        </div>
    </div>
</div>
</div>

    <main id="main">
<div class="hero-wrap js-fullheight" style="background-image: url('assets/main-template/images/bgpoto.jpg');"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
        data-scrollax-parent="true">
        <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Kontak Iwash Indonesia</h1>
            <p><a href="https://wa.me/6281230476940" target="_blank" class="btn btn-primary mr-md-4 py-2 px-4">Hubungi Iwash <span
                        class="ion-ios-arrow-forward"></span></a></p>
        </div>
    </div>
</div>
</div>

    <main id="main">

        <!-======= contact Us Section ======= -->
        <section class="ftco-section ftco-no-pb" id="contact" class="contact">
            <div class="container">
                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="section-title" data-aos="fade-up">
                            <br>
                            <section id="contact" class="contact">
                                <div class="info">
                                    <div class="address">
                                      <i class="icon fa fa-map-marker"></i>
                                      <h4>Lokasi :</h4>
                                      <p><b>Surabaya :</b> Dukuh kupang XVI no.18, Surabaya, Jawa Timur, 60225</p>
                                      <p><b>Kediri :</b> Dsn. Boro Lor 001/002. Ds. Sumberjo Kec. Purwoasri, Kab. Kediri</p>
                                    </div>
                      
                                    <div class="phone">
                                      <i class="fa fa-phone"></i>
                                      <h4>Whatsapp</h4>
                                      <p><b>Surabaya : </b>0812-3047-6840</p>
                                      <p><b>Kediri : </b>0812-4602-9068</p>
                                    </div>
                      
                                    <div class="instagram">
                                        <i class="fa fa-instagram"></i>
                                        <h4>Instagram</h4>
                                        <p>@sanskara.eastjavaflorist</p>
                                      </div>
                                  </div>
                      
                            </section>
                        </div>


                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 text-center d-flex flex-column" data-aos="fade-up"
                        data-aos-delay="300">
                        <br>
                        <h2>Lokasi Surabaya</h2>
                        <br>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d1978.8273709047387!2d112.715735!3d-7.280068000000001!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMTYnNDguMiJTIDExMsKwNDInNTYuNyJF!5e0!3m2!1sen!2sus!4v1675735104089!5m2!1sen!2sus"
                            style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <br>
                        <br>
                        <br>
                        <h2>Lokasi Kediri</h2>
                        <br>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d1978.8273709047387!2d112.715735!3d-7.280068000000001!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMTYnNDguMiJTIDExMsKwNDInNTYuNyJF!5e0!3m2!1sen!2sus!4v1675735104089!5m2!1sen!2sus"
                            style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>



                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>

@endsection
