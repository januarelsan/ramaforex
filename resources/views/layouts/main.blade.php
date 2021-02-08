<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<!-- Mirrored from www.indonez.com/html-demo/Wave/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 01:47:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#313131" />
    <!-- Site Properties -->
    <title>Homepage - Wave HTML5 Template</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{ asset('wave/js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('wave/css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('wave/css/style.css') }}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{ asset('wave/fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('wave/fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{ asset('wave/fonts/rubik-v9-latin-500.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('wave/fonts/rubik-v9-latin-300.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('wave/fonts/rubik-v9-latin-regular.woff2') }}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="{{ asset('wave/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('wave/apple-touch-icon.png')}}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('wave/css/vendors/uikit.min.css')}}">
    <link rel="stylesheet" href="{{ asset('wave/css/style.css')}}">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <header>
        <!-- header content begin -->
        <div class="uk-section uk-padding-remove-vertical in-header-inner uk-background-cover uk-background-top-center" style="background-image: url({{ asset('wave/img/in-wave-background-1.png')}});">
            @include('layouts.nav')
            <div class="uk-container">
                <div class="uk-grid">
                    @include('layouts.subnav')
                    <!-- module breadcrumb begin -->
                    <div class="uk-width-1-1 in-breadcrumb">
                        <ul class=" uk-text-uppercase">
                            {{-- <li><span>breadcumb</span></li>                                                         --}}
                            <br>
                        </ul>
                    </div>
                    <!-- module breadcrumb end -->
                </div>
            </div>
        </div>
        <!-- header content end -->
    </header>
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-margin-top">
            <div class="uk-container">
                @yield('content')
            </div>
        </div>
        <!-- section content end -->
        
    </main>
    @include('layouts.footer')
    
    <!-- Javascript -->
    <script src="{{ asset('wave/js/vendors/uikit.min.js')}}"></script>
    <script src="{{ asset('wave/js/vendors/indonez.min.js')}}"></script>
    
</body>


<!-- Mirrored from www.indonez.com/html-demo/Wave/blog-article.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 01:49:19 GMT -->
</html>