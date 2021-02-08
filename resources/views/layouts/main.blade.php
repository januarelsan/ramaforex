<!DOCTYPE html>
<html lang="zxx" dir="ltr">


@include('components.head')

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    
    

    <main>
        <!-- section main begin -->
        
            
        @yield('main')
            
        <!-- section main end -->
        
    </main>

    @include('components.footer')

    
    <!-- Javascript -->
    <script src="{{ asset('wave/js/vendors/uikit.min.js')}}"></script>
    <script src="{{ asset('wave/js/vendors/indonez.min.js')}}"></script>
    @yield('scripts')
    
</body>


<!-- Mirrored from www.indonez.com/html-demo/Wave/blog-article.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 01:49:19 GMT -->
</html>