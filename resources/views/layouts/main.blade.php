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
    
    <section id="js-scroll-trigger">

    </section>

    <main>
        <!-- section main begin -->
        
            
        @yield('main')
            
        <!-- section main end -->
        
    </main>

    

    @include('components.footer')

    
    <!-- Javascript -->
    <script src="{{ asset('wave/js/vendors/uikit.min.js')}}"></script>
    <script src="{{ asset('wave/js/vendors/indonez.min.js')}}"></script>
    <script src="{{ asset('wave/js/config-theme.js')}}"></script>
    @yield('scripts')

    
    
</body>

</html>