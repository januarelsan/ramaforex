<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">
                <b>
                    <img src="{{asset('material/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                    <img src="{{asset('material/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                </b>
                <span>
                    <img src="{{asset('material/images/logo-text.png')}}" alt="homepage" class="dark-logo" /> 
                    <img src="{{asset('material/images/logo-light-text.png')}}" class="light-logo" alt="homepage" />
                </span>
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">

                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                
                <!-- <li class="nav-item hidden-sm-down search-box">
                    <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                </li> -->
            </ul>
            <ul class="navbar-nav my-lg-0">
                <!-- Profile -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('material/images/users/1.jpg')}}" alt="user" class="profile-pic" /></a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="{{asset('material/images/users/1.jpg')}}" alt="user"></div>
                                    <div class="u-text">
                                        <h4>User Name</h4>
                                        <p class="text-muted">yourEmail@gmail.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Logout</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>