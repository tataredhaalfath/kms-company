<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    {{-- SEOO --}}
    <meta name="description" content="Penyedia produk barang dan jasa dalam bidang pekerjaan sipil, konstruksi dan pagar beton pra cetak sistem panel" />
    <meta name="keywords" content="Jasa Panel beton" />
    <meta property="og:image" content="{{ asset('home/images/mockupdepan.jpeg') }}" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="{{ request()->url() }}">
    @isset($blog)
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $blog->title }}">
    <meta property="og:description" content="{{ $blog->excerpt }}">
    @endisset
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:site_name" content="KARYA MUKTI SENTOSA">
    <!-- site metas -->
    <title>@yield('title')</title>
    @include('includes.styles')
</head>

<body>
    <!--header section start -->
    <div class="header_section">
        @include('includes.header')
        @stack('banner')
    </div>
    <!--header section end -->
    @yield('content')
    <div class="wa-pc">
        <a
            href="https://api.whatsapp.com/send?phone=+6281328588881&amp;text=Halo dengan Karya Mukti Sentosa, saya mau pesan beton precast... daerah ....">
            <img decoding="async" src="{{ asset('home/images/wa.jpg') }}" border="0">
        </a>
    </div>
    @include('includes.footer')
    @include('includes.scripts')
</body>

</html>
