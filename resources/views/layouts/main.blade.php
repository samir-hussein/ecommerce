<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','eCommerce')</title>

    {{-- favicon links --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="theme-color" content="#ffffff">

    {{-- font links --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto+Slab&display=swap"
        rel="stylesheet">

    {{-- metro css link --}}
    <link rel="stylesheet" href="{{ asset('css/metro-all.min.css') }}">

    {{-- bootstrap v5.0 css links --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    {{-- UIKit css links --}}
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">

    {{-- wow.js css link --}}
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    {{-- preloader css link --}}
    <link rel="stylesheet" href="{{ asset('css/preloader.css') }}">

    {{-- Font Awesome link --}}
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

    {{-- my style file --}}
    <link rel="stylesheet" href="{{ asset('css/nav_footer_style.css') }}">

    @yield('style')
</head>

<body>

    <div class="preload">
        <div class="loader">Loading...</div>
    </div>

    {{-- include navbar --}}
    @include('layouts.navbar')

    {{-- body --}}
    @yield('content')

    {{-- include footer --}}
    @include('layouts.footer')

    {{-- jQuery v3.6.0 link --}}
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    {{-- metro js link --}}
    <script src="{{ asset('js/metro.min.js') }}"></script>

    {{-- bootstrap v5.0 bundle link --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    {{-- UIKit js links --}}
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>

    {{-- wow.js js link --}}
    <script src="{{ asset('js/wow.min.js') }}"></script>

    <script>
        // preloader function
        $(window).on("load", function() {
            $(".preload").fadeOut("slow");
        });

        // wow.js init
        new WOW().init();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "get",
            url: '/api/is-auth',
            success: function(data) {
                if (data.message != "authenticated") {
                    $("#sign-in").css('display', 'block');
                    $("#sign-out").css('display', 'none');
                    $("#btn-profile").css('display', 'none');
                } else {
                    $("#sign-in").css('display', 'none');
                    $("#sign-out").css('display', 'block');
                    $("#btn-profile").css('display', 'block');
                }
            }
        });

        function countCartItems() {
            $.ajax({
                type: "get",
                url: '/api/cart/count-items',
                success: function(data) {
                    $(".numberOfCartItems").text(data.message);
                }
            });
        }
        countCartItems();

        function countWishlistItems() {
            $.ajax({
                type: "get",
                url: '/api/wishlist/count-items',
                success: function(data) {
                    $(".numberOfWishlistItems").text(data.message);
                }
            });
        }
        countWishlistItems();
    </script>

    @yield('script')
</body>

</html>
