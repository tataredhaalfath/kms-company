@extends('layouts.app')
@section('title', $product->name)
@section('content')
    <!-- blog section start -->
    <div class="blog_section layout_padding">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-10">
                    <h1>{{ $product->name }}</h1>
                    <p>
                        {!! $product->description!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section end -->
@endsection
