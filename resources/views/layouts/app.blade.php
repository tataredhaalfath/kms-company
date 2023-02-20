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
    <!-- site metas -->
    <title>@yield('titile')</title>
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
    @include('includes.footer')
    @include('includes.scripts')
</body>

</html>
