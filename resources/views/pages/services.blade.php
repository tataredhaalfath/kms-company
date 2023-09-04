@extends('layouts.app')
@section('title', 'Layanan Kami')
@section('content')
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
                    @forelse($products as $product)
                        <div class="col-lg-4">
                            <a href="{{ route('services.detail', $product->slug) }}">
                                <div class="icon_box">
                                    <div class="icon_1"><img src="{{ Storage::url($product->logo) }}"></div>
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
@endsection
