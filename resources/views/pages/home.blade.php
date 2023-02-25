@extends('layouts.app')
@section('title', 'Home')
@push('banner')
    <!--banner section start -->
    <div class="banner_section layout_padding">
        <div class="container-fluid">
            <section class="slide-wrapper">
                <div class="container-fluid">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="banner_main">
                                        <h1 class="banner_taital">Business Agency Profit Your Marketing</h1>
                                        <p class="banner_text">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when</p>
                                        <div class="btn_main">
                                            <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                            <div class="readmore_bt"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="banner_main">
                                        <h1 class="banner_taital">Business Agency Profit Your Marketing</h1>
                                        <p class="banner_text">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when</p>
                                        <div class="btn_main">
                                            <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                            <div class="readmore_bt"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="banner_main">
                                        <h1 class="banner_taital">Business Agency Profit Your Marketing</h1>
                                        <p class="banner_text">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when</p>
                                        <div class="btn_main">
                                            <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                            <div class="readmore_bt"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="banner_main">
                                        <h1 class="banner_taital">Business Agency Profit Your Marketing</h1>
                                        <p class="banner_text">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when</p>
                                        <div class="btn_main">
                                            <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                            <div class="readmore_bt"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="banner_main">
                                        <h1 class="banner_taital">Business Agency Profit Your Marketing</h1>
                                        <p class="banner_text">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when</p>
                                        <div class="btn_main">
                                            <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                            <div class="readmore_bt"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--banner section end -->
@endpush
@section('content')
    <!--about section end -->
    <!-- services section start -->
    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital">What We Do</h1>
            <p class="about_text">It is a long established fact that a reader will be distracted by the readable
                content of a page when</p>
            <div class="services_section_2">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="icon_box">
                            <div class="icon_1"><img src="{{ asset('home/images/icon-1.png') }}"></div>
                        </div>
                        <h4 class="selection_text">Selection of Business</h4>
                        <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the
                            form, by injected humour, or randomised</p>
                        <div class="icon_box">
                            <div class="icon_1"><img src="{{ asset('home/images/icon-4.png') }}"></div>
                        </div>
                        <h4 class="selection_text">Securities Transactions</h4>
                        <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the
                            form, by injected humour, or randomised</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box">
                            <div class="icon_1"><img src="{{ asset('home/images/icon-2.png') }}"></div>
                        </div>
                        <h4 class="selection_text">Research and Analytics</h4>
                        <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the
                            form, by injected humour, or randomised</p>
                        <div class="icon_box">
                            <div class="icon_1"><img src="{{ asset('home/images/icon-5.png') }}"></div>
                        </div>
                        <h4 class="selection_text">Advisory Activities</h4>
                        <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the
                            form, by injected humour, or randomised</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box">
                            <div class="icon_1"><img src="{{ asset('home/images/icon-3.png') }}"></div>
                        </div>
                        <h4 class="selection_text">Business Plans</h4>
                        <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the
                            form, by injected humour, or randomised</p>
                        <div class="icon_box">
                            <div class="icon_1"><img src="{{ asset('home/images/icon-6.png') }}"></div>
                        </div>
                        <h4 class="selection_text">Management and Asset</h4>
                        <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the
                            form, by injected humour, or randomised</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services section end -->
    <!-- blog section start -->
    <div class="blog_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="blog_img"><img src="{{ asset('home/images/blog-img.png') }}"></div>
                </div>
                <div class="col-md-6">
                    <h1 class="blog_taital">Easily Grow Your Business Earn More Money</h1>
                    <p class="blog_text">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomised words There
                        uffered alteration in some form, by injected humour, or randomised words </p>
                    <div class="read_bt"><a href="#">Read More</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section end -->
    <!-- events section start -->
    <div class="events_section layout_padding">
        <div class="container">
            <h1 class="events_taital">Follow Our Video For Solved Your Problem</h1>
            <div class="events_section_2">
                <div class="events_bg">
                    <div class="play_icon"><a href="#"><img src="{{ asset('home/images/play-icon.png') }}"></a>
                    </div>
                </div>
            </div>
            <div class="seemore_bt"><a href="#">See More</a></div>
        </div>
    </div>
    <!-- events section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="contact_taital">Review</h1>
            <p class="contact_text">Bagikan pengalaman menyenangkan anda mengenai layanan yang kami berikan</p>
            <div class="contact_section_2 layout_padding">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact_main">
                            <form action="{{ route('testimonial.store') }}" method="POST">
                                @csrf
                                <input type="text" class="mail_text" placeholder="Nama Lengkap" name="name"
                                    required>
                                <textarea class="massage-bt" placeholder="Testimonial" rows="10" id="comment" name="testimoni" required></textarea>
                                <button class="btn send_bt btn-success">SEND</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map_main">
                            <div class="map-responsive">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385.65902254144527!2d111.05102381538697!3d-6.625901607353578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70d57e591068ab%3A0xbccdbe7a00ff2290!2sCV.%20KARYA%20MUKTI%20SENTOSA%20(KMS%20BETON)!5e1!3m2!1sid!2sid!4v1676869833331!5m2!1sid!2sid"
                                    width="600" height="400" style="bborder:0; width: 100%;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- testimonial section start -->
    <div class="testimonial_section layout_padding">
        <div id="my_carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
                <li data-target="#my_carousel" data-slide-to="1"></li>
                <li data-target="#my_carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @forelse($testimonials as $key => $testimonial)
                    <div class="carousel-item @if ($key == 0) active @endif">
                        <div class="container">
                            <h1 class="testimonial_taital">Testimonial</h1>
                            <p class="testimonial_text">Berikut cerita menarik dari pelanggan Karya Mukti Sentosa </p>
                            <div class="testimonial_section_2">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="testimonial_box">
                                            <div class="jonimo_taital_main">
                                                <h4 class="jonimo_text">{{ $testimonial->name, $key }}</h4>
                                                {{-- <div class="quick_icon"><img src="{{ asset('home/images/quick-icon.png') }}"> --}}
                                            </div>
                                            {{-- <div class="quick_icon_1"><img
                                                    src="{{ asset('home/images/quick-icon1.png') }}"></div>
                                        </div> --}}
                                            <p class="dummy_text">{{ $testimonial->testimoni }}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="carousel-item active">
                        <div class="container">
                            <h1 class="testimonial_taital">Testimonial</h1>
                            <p class="testimonial_text">majority have suffered alteration in some form, by injected humour,
                                or </p>
                            <div class="testimonial_section_2">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="testimonial_box">
                                            <div class="jonimo_taital_main">
                                                <h4 class="jonimo_text">Anomin</h4>
                                                <div class="quick_icon"><img
                                                        src="{{ asset('home/images/quick-icon.png') }}">
                                                </div>
                                                <div class="quick_icon_1"><img
                                                        src="{{ asset('home/images/quick-icon1.png') }}"></div>
                                            </div>
                                            <p class="dummy_text">CV. Karya Mukti Sentora Beton melayani dengan sepenuh
                                                hati</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
                {{-- <div class="carousel-item">
                    <div class="container">
                        <h1 class="testimonial_taital">Testimonial</h1>
                        <p class="testimonial_text">majority have suffered alteration in some form, by injected humour,
                            or </p>
                        <div class="testimonial_section_2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="testimonial_box">
                                        <div class="jonimo_taital_main">
                                            <h4 class="jonimo_text">Jonimo</h4>
                                            <div class="quick_icon"><img src="{{ asset('home/images/quick-icon.png') }}">
                                            </div>
                                            <div class="quick_icon_1"><img
                                                    src="{{ asset('home/images/quick-icon1.png') }}"></div>
                                        </div>
                                        <p class="dummy_text">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage of Lorem Ipsum, you need to be
                                            sure there</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial_box">
                                        <div class="jonimo_taital_main">
                                            <h4 class="jonimo_text">Mark Duo</h4>
                                            <div class="quick_icon"><img src="{{ asset('home/images/quick-icon.png') }}">
                                            </div>
                                            <div class="quick_icon_1"><img
                                                    src="{{ asset('home/images/quick-icon1.png') }}"></div>
                                        </div>
                                        <p class="dummy_text">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage of Lorem Ipsum, you need to be
                                            sure there</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- testimonial section end -->

@endsection
