<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileImage" content="{{ asset('/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Naikdaun is an Idea and concept generator house, with a complete understanding of technology and wide range experience for both conventional and integrated media communication campaign." />
    <meta name="author" content="Naikdaun" />
    <meta name="keywords" content="Naikdaun, naikdaun.id, @naikdaun.id" />

    {{-- This site is optimized with the Yoast SEO plugin v16.0 --}}
    <link rel="canonical" href="{{ url('/') }}" />
    <meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Home - naikdaun agency" />
	<meta property="og:url" content="{{ url('/') }}" />
	<meta property="og:site_name" content="naikdaun agency" />
	<meta name="twitter:card" content="summary_large_image" />

    {{-- title --}}
    <title>@yield('title', 'Naikdaun')</title>

    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/img/icons/apple-icon-180x180-dunplab-manifest-54122.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/img/icons/apple-icon-32x32-dunplab-manifest-54122.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/img/icons/apple-icon-16x16-dunplab-manifest-54122.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}">

    {{-- manifest --}}
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    {{-- google font --}}
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    {{-- css & icon bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/assets/css/theme.css') }}" rel="stylesheet" />

    {{-- main css --}}
    <link href="{{ asset('/assets/css/main.css') }}" rel="stylesheet" />

    {{-- page css --}}
    @method('css')
</head>

<body>

    <div id="preloader"></div>

    {{-- Main Content --}}
    <main class="main" id="top">

        {{-- navbar --}}
        @include('components.navbar.index')

        {{-- content --}}
        @yield('content')

        {{-- footer --}}
        @include('components.footer.index')

    </main>
    {{-- End of Main Content --}}


    {{-- JavaScripts --}}
    <script src="{{ asset('/assets/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/vendors/is/is.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>

    <script src="{{ asset('/assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script>
        feather.replace();
    </script>

    {{-- main js --}}
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    {{-- jquery & jquery lazy load --}}
    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-lazy-master/jquery.lazy.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-lazy-master/jquery.lazy.plugins.min.js') }}"></script>
    <script>
        $(function() {
            $('.lazy').Lazy({
                scrollDirection: 'vertical',
                effect: 'fadeIn',
            });
        });

        $(document).ready(function () {
            $('#preloader').fadeOut();
        });
    </script>


    @stack('script')
</body>

</html>
