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
            <!-- module navigation begin -->
            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade;">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left uk-width-auto">
                        <div class="uk-navbar-item">
                            <!-- module logo begin -->
                            <a class="uk-logo" href="index-2.html">
                                <img class="uk-margin-small-right in-offset-top-10" src="{{ asset('wave/img/in-lazy.gif')}}" data-src="{{ asset('wave/img/in-logo-1.svg')}}" alt="wave" width="134" height="23" data-uk-img>
                            </a>
                            <!-- module logo begin -->
                        </div>
                    </div>
                    <div class="uk-navbar-right uk-width-expand uk-flex uk-flex-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="#">Home<i class="fas fa-chevron"></i></a></li>
                            <li><a href="#">Testimony<i class="fas fa-chevron"></i></a></li>
                            <li><a href="#">About Us<i class="fas fa-chevron"></i></a></li>
                            <li><a href="#">Blog<i class="fas fa-chevron"></i></a></li>
                            
                        </ul>
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <a href="signin.html" class="uk-button uk-button-text"><i class="fas fa-user-circle uk-margin-small-right"></i>Log in</a>
                            <a href="#" class="uk-button uk-button-primary uk-button-small uk-border-pill">Sign up</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- module navigation end -->
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-secondary uk-card-small uk-card-body uk-border-rounded">
                            <div class="uk-grid uk-text-small" data-uk-grid>
                                <div class="uk-width-3-4@m uk-visible@m">
                                    <p>Hubungi Kami Segera Agar Anda Cepat Kaya!</p>
                                </div>
                                <div class="uk-width-expand@m uk-text-center uk-text-right@m">                                    
                                    <a href="#"><i class="fas fa-phone-alt uk-margin-small-right uk-margin-small-left"></i>1-800-123-4567</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- module breadcrumb begin -->
                    <div class="uk-width-1-1 in-breadcrumb">
                        <ul class="uk-breadcrumb uk-text-uppercase">
                            <li><span>breadcumb</span></li>                                                        
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
    <footer>
        <!-- footer content begin -->
        <div class="uk-section uk-section-muted uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
            <div class="uk-container">
                <div class="uk-grid-medium" data-uk-grid>
                    <div class="uk-width-expand@m">
                        <img class="uk-margin-small-right in-margin-top-30@s" src="img/in-lazy.gif" data-src="img/in-logo-2.svg" alt="wave" width="134" height="23" data-uk-img>
                        <p class="uk-text-large uk-margin-small-top">Trade with financial thinking.</p>
                        <p class="uk-visible@m">Imperium Tower (Headquarters)<br>
                            Jl. Prof Dr Satrio, Kuningan<br>
                            12920<br>
                            Jakarta - Indonesia
                        </p>
                    </div>
                    <div class="uk-width-3-5@m">
                        <div class="uk-child-width-1-3@s uk-child-width-1-3@m" data-uk-grid>
                            <div>
                                <h4><span>Markets</span></h4>
                                <ul class="uk-list uk-link-text">
                                    <li><a href="#">Forex</a></li>
                                    <li><a href="#">Synthetic indices</a></li>
                                    <li><a href="#">Stock indices</a></li>
                                    <li><a href="#">Commodities</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4><span>Resources</span></h4>
                                <ul class="uk-list uk-link-text">
                                    <li><a href="#">Help Centre</a></li>
                                    <li><a href="#">Payment methods</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4><span>Company</span></h4>
                                <ul class="uk-list uk-link-text">
                                    <li><a href="#">Our story</a></li>
                                    <li><a href="#">Our leadership</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Partners</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-margin-large-top in-offset-bottom-20">
                        <h6><i class="fas fa-exclamation-triangle fa-sm uk-text-danger uk-margin-small-right"></i>Risk warning</h6>
                        <p class="uk-text-small">The financial products offered via this website include digitals, contracts for difference (CFDs), and other complex derivatives and financial products. Trading options may not be suitable for everyone. Trading CFDs carries a high level of risk since leverage can work both to your advantage and disadvantage. As a result, the products offered on this website may not be suitable for all investors because of the risk of losing all of your invested capital. You should never invest money that you cannot afford to lose, and never trade with borrowed money. Before trading in the complex financial products offered, please be sure to understand the risks involved and learn about <a href="#">Secure and responsible trading.</a></p>
                        <hr>
                        <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-2@m">
                                <div class="uk-grid-small uk-flex uk-child-width-1-4@s uk-flex uk-child-width-1-5@m in-payment-method uk-text-center" data-uk-grid>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                            <img src="img/in-lazy.gif" data-src="img/in-wave-visa.svg" alt="wave-payment" width="59" height="22" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                            <img src="img/in-lazy.gif" data-src="img/in-wave-mastercard.svg" alt="wave-payment" width="59" height="22" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                            <img src="img/in-lazy.gif" data-src="img/in-wave-skrill.svg" alt="wave-payment" width="59" height="22" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                            <img src="img/in-lazy.gif" data-src="img/in-wave-paypal.svg" alt="wave-payment" width="59" height="22" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small uk-card-body uk-visible@m">
                                            <img src="img/in-lazy.gif" data-src="img/in-wave-neteller.svg" alt="wave-payment" width="59" height="22" data-uk-img>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@m uk-text-right@m">
                                <div class="in-footer-socials in-margin-bottom-40@s">
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-section-secondary uk-padding-remove-vertical">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-3-4@m uk-visible@m">
                        <ul class="uk-subnav uk-subnav-divider">
                            <li><a href="#">Regulations</a></li>
                            <li><a href="#">Legal documents</a></li>
                            <li><a href="#">Important information</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Public relations</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-expand@m uk-text-right@m">
                        <p>© 2020 Wave Capital Inc.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content end -->
        <!-- module totop begin -->
        <div class="uk-visible@m">
            <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
        </div>
        <!-- module totop begin -->
    </footer>
    
    <!-- Javascript -->
    <script src="{{ asset('wave/js/vendors/uikit.min.js')}}"></script>
    <script src="{{ asset('wave/js/vendors/indonez.min.js')}}"></script>
    
</body>


<!-- Mirrored from www.indonez.com/html-demo/Wave/blog-article.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 01:49:19 GMT -->
</html>