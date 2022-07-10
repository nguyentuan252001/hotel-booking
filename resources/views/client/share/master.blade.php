<!doctype html>
<html lang="en">
<head>
    @include('client.share.css')
</head>
<body>
    <nav id="mobile-menu"></nav>
    <div class="wrapper">
        @include('client.share.menu')
        @include('client.share.header')
        @include('client.share.slide')
        @yield('content')
        @include('client.share.footer')
    </div>
    @include('client.share.js')
</body>
</html>
