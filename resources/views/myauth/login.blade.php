<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<!-- Mirrored from www.indonez.com/html-demo/Wave/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 01:49:19 GMT -->
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
    <title>Sign in - Wave HTML5 Template</title>
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
                                    <a class="uk-logo" href="{{route('index')}}">
                                        <img class="uk-margin-small-right in-offset-top-10" src="{{ asset('wave/img/in-lazy.gif')}}" data-src="{{ asset('wave/img/in-logo-1.svg')}}" alt="wave" width="134" height="23" data-uk-img>
                                    </a>
                                    <!-- module logo begin -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Log into your account</p>
                                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Belum Punya Akun? <a href="{{ route('register')}}">Daftar</a></p>
                                    <!-- login form begin -->
                                    <form class="uk-grid uk-form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        @error('email')
                                            <div class="uk-margin-small uk-width-1-1 uk-inline">
                                                <p class="uk-text-danger uk-margin-top uk-margin-remove-bottom">{{ $message }}</p>                                                
                                            </div>
                                        @enderror
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-mail fa-sm"></span>
                                            <input name="email" id="email" value="{{ old('email') }}" type="email" placeholder="Email" autocomplete="email" autofocus class="uk-input uk-border-rounded">
                                        </div>
                                        
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input name="password" required class="uk-input uk-border-rounded" id="password" value="" type="password" placeholder="Password">                                            
                                        </div>
                                        
                                        
                                        
                                        <div class="uk-margin-small uk-width-1-1">
                                            <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" >Sign in</button>
                                            
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