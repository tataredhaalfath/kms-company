@extends('layouts.app')
@section('title', 'About')
@section('content')
    <!--about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <h1 class="about_taital">About Us</h1>
            <p class="about_text">{{ $about->about }}</p>
            <div class="about_section_2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_image"><img src="{{ Storage::url($about->image) }}"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about_taital_main" style="padding-top: 10px!important;">
                            <h4>Visi</h4>
                            <p class="text-muted">{{ $about->visi }}</p>
                            <h4>Misi</h4>
                            <p class="text-muted">{{ $about->misi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about section end -->
@endsection
