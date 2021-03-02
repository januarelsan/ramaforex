<!-- module navigation begin -->
<nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade;">
    <div class="uk-container" data-uk-navbar>
        <div class="uk-navbar-left uk-width-auto">
            <div class="uk-navbar-item">
                <!-- module logo begin -->
                <a class="uk-logo" href="{{route('index')}}">
                    <img class="uk-margin-small-right in-offset-top-10" src="{{ asset('wave/img/in-lazy.gif')}}" data-src="{{ asset('wave/img/logoAkrabot.png')}}" alt="wave" width="134" height="23" data-uk-img>
                </a>
                <!-- module logo begin -->
            </div>
        </div>
        <div class="uk-navbar-right uk-width-expand uk-flex uk-flex-right">
            <ul class="uk-navbar-nav uk-visible@m">
                <li><a href="{{route('index')}}">Home<i class="fas fa-chevron"></i></a></li>                
                <li><a href="{{route('aboutus')}}">About Us<i class="fas fa-chevron"></i></a></li>
                <li><a href="{{route('legal')}}">Legal<i class="fas fa-chevron"></i></a></li>
                <li><a href="{{route('blog.list')}}">Blog<i class="fas fa-chevron"></i></a></li>
                
            </ul>
            <div class="uk-navbar-item uk-visible@m in-optional-nav">
                @guest								
                    <a href="{{ route('home')}}" class="uk-button uk-button-text"><i class="fas fa-user-circle uk-margin-small-right"></i>Masuk</a>
                    <a href="{{ route('register')}}" class="uk-button uk-button-primary uk-button-small uk-border-pill">Daftar</a>
                @else
                    <a href="#" class="uk-button uk-button-text"><i class="fas fa-user-circle uk-margin-small-right"></i>{{ Auth::user()->name }} | {{ Auth::user()->roles[0]->name }}</a>                            
                    <a href="{{ route('logout') }}" class="uk-button uk-button-primary uk-button-small uk-border-pill" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Keluar
                    </a>                                                                

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>
<!-- module navigation end -->