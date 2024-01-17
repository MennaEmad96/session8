<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocale()}}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
    
<head>
    @include('includes.head')
</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        @include('includes.header')
        <!-- end header section -->
    </div>

    @yield('content')

    <!-- footer section -->
    @include('includes.footer')
</body>

</html>