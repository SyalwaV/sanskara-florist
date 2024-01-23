@extends('visitor.layout.main')

@section('content-main')
    <!--welcome-hero start -->
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
    </header><!--/.welcome-hero-->
    <!--welcome-hero end -->
    <!--populer-products end-->

    <!--new-arrivals start -->
     <!--new-arrivals start -->
     <section id="new-arrivals" class="new-arrivals">
        <div class="container">
            <div class="section-header">
                <h2>Bunga Papan Turut Berduka</h2>
            </div><!--/.section-header-->
            <div class="new-arrivals-content">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="assets/images/slider/berdukaa.png" alt="new-arrivals images">
                                <div class="single-new-arrival-bg-overlay"></div>
                            </div>
                            <h4><a href="#">Heaven Afterlife</a></h4>
                            <p class="arrival-product-price">Rp.550.000</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="assets/images/slider/berduka.png" alt="new-arrivals images">
                                <div class="single-new-arrival-bg-overlay"></div>
                            </div>
                            <h4><a href="#">Black Condolences</a></h4>
                            <p class="arrival-product-price">Rp.550.000</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="assets/images/slider/berdu.png" alt="new-arrivals images">
                                <div class="single-new-arrival-bg-overlay"></div>
                            </div>
                            <h4><a href="#">Clean Condolences</a></h4>
                            <p class="arrival-product-price">Rp.550.000</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="assets/images/slider/duka.png" alt="new-arrivals images">
                                <div class="single-new-arrival-bg-overlay"></div>
                            </div>
                            <h4><a href="#">Heaven Shine</a></h4>
                            <p class="arrival-product-price">$550.00</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="assets/images/slider/cokroo.png" alt="new-arrivals images">
                                <div class="single-new-arrival-bg-overlay"></div>
                            </div>
                            <h4><a href="#">Flower Heaven</a></h4>
                            <p class="arrival-product-price">Rp.550.000</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="assets/images/slider/kaa.png" alt="new-arrivals images">
                                <div class="single-new-arrival-bg-overlay"></div>
                            </div>
                            <h4><a href="#">Green flowers Heaven</a></h4>
                            <p class="arrival-product-price">Rp.550.000</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="assets/images/slider/bri.png" alt="new-arrivals images">
                                <div class="single-new-arrival-bg-overlay"></div>
                            </div>
                            <h4><a href="#">Blue Condolences</a></h4>
                            <p class="arrival-product-price">Rp.550.000</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="assets/images/slider/soesanto.png" alt="new-arrivals images">
                                <div class="single-new-arrival-bg-overlay"></div>
                            </div>
                            <h4><a href="#">Blue Shine</a></h4>
                            <p class="arrival-product-price">$550.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div><!--/.container-->

    </section><!--/.new-arrivals-->
   
   
    <!--new-arrivals end -->

    <!--sofa-collection start -->
    <section id="sofa-collection">
        <div class="owl-carousel owl-theme" id="collection-carousel">
           <!--/.sofa-collection-->
            <div class="sofa-collection collectionbg2">
                <div class="container">
                    <div class="sofa-collection-txt">
                        <h2>Bunga Papan Ekslusif</h2>
                        <p>
                            Sanskara menyediakan papan bunga yang segar dan juga terjamin akan kebersihan nya, pelanggan dapat memesan papan bunga sesuai dengan
                            desain yang disediakan, sanskara dapat merespon customer dengan cepat dan sigap terkait berbagai pertanyaan maupun berbagai saran dan kritik
                        </p>
                        <button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'">
                            View blog
                        </button>
                    </div>
                </div>
            </div><!--/.sofa-collection-->
        </div><!--/.collection-carousel-->

    </section><!--/.sofa-collection-->
    <!--sofa-collection end -->

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
                                <h3><a href="/selamat">Papan Bunga Selamat Peresmian</a></h3>
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
                                <h3><a href="/pernikahan">Papan Bunga Nikahan</a></h3>
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
                                <h3><a href="/berduka">Papan Bunga Belasungkawa</a></h3>
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
    <!--feature end -->
{{-- 
    <!--blog start -->
    <section id="blog" class="blog">
        <div class="container">
            <div class="section-header">
                <h2>latest blog</h2>
            </div><!--/.section-header-->
            <div class="blog-content">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <img src="assets/images/blog/b1.jpg" alt="blog image">
                                <div class="single-blog-img-overlay"></div>
                            </div>
                            <div class="single-blog-txt">
                                <h2><a href="#">Why Brands are Looking at Local Language</a></h2>
                                <h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <img src="assets/images/blog/b2.jpg" alt="blog image">
                                <div class="single-blog-img-overlay"></div>
                            </div>
                            <div class="single-blog-txt">
                                <h2><a href="#">Why Brands are Looking at Local Language</a></h2>
                                <h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <img src="assets/images/blog/b3.jpg" alt="blog image">
                                <div class="single-blog-img-overlay"></div>
                            </div>
                            <div class="single-blog-txt">
                                <h2><a href="#">Why Brands are Looking at Local Language</a></h2>
                                <h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.blog-->
    <!--blog end --> --}}

    {{-- <!-- clients strat -->
    <section id="clients" class="clients">
        <div class="container">
            <div class="owl-carousel owl-theme" id="client">
                <div class="item">
                    <a href="#">
                        <img src="assets/images/clients/c1.png" alt="brand-image" />
                    </a>
                </div><!--/.item-->
                <div class="item">
                    <a href="#">
                        <img src="assets/images/clients/c2.png" alt="brand-image" />
                    </a>
                </div><!--/.item-->
                <div class="item">
                    <a href="#">
                        <img src="assets/images/clients/c3.png" alt="brand-image" />
                    </a>
                </div><!--/.item-->
                <div class="item">
                    <a href="#">
                        <img src="assets/images/clients/c4.png" alt="brand-image" />
                    </a>
                </div><!--/.item-->
                <div class="item">
                    <a href="#">
                        <img src="assets/images/clients/c5.png" alt="brand-image" />
                    </a>
                </div><!--/.item-->
            </div><!--/.owl-carousel-->

        </div><!--/.container-->

    </section><!--/.clients-->
    <!-- clients end --> --}}
@endsection