@extends('layouts.app')
@section('title', 'Blog')
@section('content')
    <!-- blog section start -->
    <div class="blog_section layout_padding">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-10">
                    <h1>{{ $blog->title }}</h1>
                    <img src="{{ Storage::url($blog->thumbnail) }}" alt="">
                    <p>
                      {!! $blog->description!!}
                    </p>
                </div>
            </div>
            {{-- @forelse ($blogs as $blog)
                <div class="row" style="margin-bottom: 20px">
                    <div class="col-md-6">
                        <div class="blog_img"><img src="{{ Storage::url($blog->thumbnail) }}" width="500px" height="250px"></div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="blog_taital">{{ $blog->title }}</h1>
                        <p class="blog_text">{{ $blog->excerpt }} </p>
                        <div class="read_bt"><a href="{{ route('blog.detail', $blog->slug) }}">Read More</a></div>
                    </div>
                </div>
            @empty
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6"></div>
                </div>
            @endforelse
            {{ $blogs->links() }} --}}
        </div>
    </div>
    <!-- blog section end -->
@endsection
