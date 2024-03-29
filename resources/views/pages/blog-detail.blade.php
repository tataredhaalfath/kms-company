@extends('layouts.app')
@section('title', $blog->title)
@section('content')
    <!-- blog section start -->
    <div class="blog_section layout_padding">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-10">
                    <h1>{{ $blog->title }}</h1>
                    <img src="{{ Storage::url($blog->thumbnail) }}" alt="">
                    <p>
                        {!! $blog->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section end -->
@endsection
