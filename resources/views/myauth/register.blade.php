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
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge" style="background-image: url({{ asset('wave/img/in-signin-image.jpg')}});">
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a href="{{route('index')}}">
                                        <img class="uk-margin-small-right in-offset-top-10" src="{{ asset('wave/img/in-lazy.gif')}}" data-src="{{ asset('wave/img/logoAkrabot.png')}}" alt="wave" width="134" height="23" data-uk-img>
                                    </a>
                                    <!-- module logo begin -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Daftar Akun Baru</p>
                                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Sudah Punya Akun? <a href="{{route('home')}}">Masuk</a></p>
                                    <!-- login form begin -->
                                    <form class="uk-grid uk-form" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        @error('email')
                                            <div class="uk-margin-small uk-width-1-1 uk-inline">
                                                <p class="uk-text-danger uk-margin-top uk-margin-remove-bottom">{{ $message }}</p>                                                
                                            </div>
                                        @enderror
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-email fa-sm"></span>
                                            <input name="email" id="email" value="{{ old('email') }}" type="email" placeholder="Email" autocomplete="email" autofocus class="uk-input uk-border-rounded">
                                        </div>

                                        @error('name')
                                            <div class="uk-margin-small uk-width-1-1 uk-inline">
                                                <p class="uk-text-danger uk-margin-top uk-margin-remove-bottom">{{ $message }}</p>                                                
                                            </div>
                                        @enderror
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input name="name" id="name" value="{{ old('name') }}" type="text" placeholder="Username" class="uk-input uk-border-rounded">
                                        </div>

                                        @error('phone_number')
                                            <div class="uk-margin-small uk-width-1-1 uk-inline">
                                                <p class="uk-text-danger uk-margin-top uk-margin-remove-bottom">{{ $message }}</p>                                                
                                            </div>
                                        @enderror
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-phone fa-sm"></span>
                                            <input name="phone_number" id="phone_number" value="{{ old('phone_number') }}" type="number" placeholder="Phone Number" class="uk-input uk-border-rounded">
                                        </div>

                                        @error('password')
                                            <div class="uk-margin-small uk-width-1-1 uk-inline">
                                                <p class="uk-text-danger uk-margin-top uk-margin-remove-bottom">{{ $message }}</p>                                                
                                            </div>
                                        @enderror
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input name="password" required class="uk-input uk-border-rounded" id="password" value="" type="password" placeholder="Password">                                            
                                        </div>

                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            
                                            <input id="password-confirm" type="password" class="uk-input uk-border-rounded" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                        </div>
                                        
                                                                                
                                        <div class="uk-margin-small uk-width-1-1">
                                            <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" >Daftar</button>
                                            
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <!-- Javascript -->
    <script src="{{ asset('wave/js/vendors/uikit.min.js')}}"></script>
    <script src="{{ asset('wave/js/vendors/indonez.min.js')}}"></script>
</body>


<!-- Mirrored from www.indonez.com/html-demo/Wave/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 01:49:19 GMT -->
</html>