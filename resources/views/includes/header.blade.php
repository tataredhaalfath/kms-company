<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('home/images/logo.png') }}" width="100px"></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item @if (Route::current()->getName() == 'home') active @endif">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item @if (Route::current()->getName() == 'services' || Route::current()->getName() == 'services.detail') active) active @endif">
                <a class="nav-link" href="{{ route('services') }}">Produk</a>
            </li>
            <li class="nav-item @if (Route::current()->getName() == 'blog' || Route::current()->getName() == 'blog.detail') active @endif">
                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="nav-item @if (Route::current()->getName() == 'about') active @endif">
                <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item @if (Route::current()->getName() == 'contact') active @endif">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>
