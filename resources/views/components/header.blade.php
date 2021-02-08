<header>
    <!-- header content begin -->
    <div class="uk-section uk-padding-remove-vertical in-header-inner uk-background-cover uk-background-top-center" style="background-image: url({{ asset('wave/img/in-wave-background-1.png')}});">
        @include('components.nav')
        <div class="uk-container">
            <div class="uk-grid">
                @include('components.subnav')
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