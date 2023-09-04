@extends('layouts.app')
@section('title', 'KARYA MUKTI SENTOSA')
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
                            @forelse($products as $key => $product)
                                <div class="carousel-item @if ($key == 0) active @endif">
                                    <div class="container">
                                        <div class="banner_main">
                                            <h1 class="banner_taital">{{ $product->name }}</h1>
                                            <p class="banner_text">{{ $product->excerpt }}</p>
                                            <div class="btn_main">
                                                <div class="contact_bt active "><a href="{{ route('contact') }}">Contact
                                                        Us</a></div>
                                                <div class="readmore_bt"><a
                                                        href="{{ route('services.detail', $product->slug) }}">Lihat
                                                        Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
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
            <h1 class="services_taital">Layanan Kami</h1>
            <p class="about_text text-muted">Misi dari perusahaan kami adalah menjadi mitra yang memberikan layanan
                jasa keahlian profesional yang efektif dan efisien dan pembenahan serta pembaruan
                pembelajara sistem agar menjadi mitra yang terpercaya baik dalam ukuran regional
                maupun nasional karena “kepuasan klien adalah yang paling utama bagi kami” <br>
                Adapun produk - produk kami sebagai penyedia barang dan jasa adalah sebagai
                berikut :</p>
            <div class="services_section_2">
                <div class="row">
                    @forelse ($products as $product)
                        <div class="col-lg-4">
                            <a href="{{ route('services.detail', $product->slug) }}">
                                <div class="icon_box">
                                    <div class="icon_1">
                                        <img src="{{ Storage::url($product->logo) }}" height="42px" width="42px"
                                            style="object-fit: cover">
                                    </div>
                                </div>
                                <h4 class="selection_text">{{ $product->name }}</h4>
                            </a>
                            <p class="ipsum_text">{{ $product->excerpt }}</p>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- services section end -->
    <!-- blog section start -->
    <div class="blog_section layout_padding">
        <div class="container">
            @forelse ($articles as $article)
                <div class="row my-5">
                    <div class="col-md-6">
                        <div class="blog_img"><img src="{{ Storage::url($article->thumbnail) }}"></div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="blog_taital">{{ $article->title }} </h1>
                        <p class="blog_text">{{ $article->excerpt }}</p>
                        <div class="read_bt"><a href="{{ route('blog.detail', $article->slug) }}">Baca Artikel</a></div>
                    </div>
                </div>
            @empty
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            @endforelse

        </div>
    </div>
    <!-- blog section end -->

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
                                <input type="text" class="mail_text" placeholder="Nama Lengkap" name="name" required>
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
                                                <h4 class="jonimo_text">{{ $testimonial->name }}</h4>
                                            </div>
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
            </div>
        </div>
    </div>
    <!-- testimonial section end -->

@endsection
