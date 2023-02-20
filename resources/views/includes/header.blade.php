<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="logo"><a href="index.html"><img src="{{ asset('home/images/logo.png') }}"></a></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('services') }}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('events') }}">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <div class="search_icon"><img src="{{ asset('home/images/search-icon.png') }}"></div>
        </form>
    </div>
</nav>
