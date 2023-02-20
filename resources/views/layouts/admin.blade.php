<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes.admin.styles')
</head>

<body>
    <div id="app">
        @include('includes.admin.sidebar')
        <div id="main">
            @include('includes.admin.header')

            @yield('content')

            @include('includes.admin.footer')
        </div>
    </div>
    @include('includes.admin.scripts')
</body>

</html>
