@extends('layouts.app')
@section('title', 'About')
@section('content')
    <!--about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <h1 class="about_taital">About Us</h1>
            <p class="about_text">It is a long established fact that a reader will be distracted by the readable content of a
                page when</p>
            <div class="about_section_2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_image"><img src="images/about-img.png"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about_taital_main">
                            <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some form, by injected humour, or randomised words </p>
                            <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about section end -->
@endsection
