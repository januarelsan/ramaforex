<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <div class="user-profile" style="background: {{asset('material/images/background/profile-bg.jpg')}} no-repeat;">
            <div class="profile-img"> <img src="{{asset('material/images/users/profile.png')}}" alt="user" /> </div> 
        </div>
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">Menu</li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-crop-square"></i><span class="hide-menu">Home </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <!-- <li><a href="{{ url('home/tes') }}">tes</a></li> -->
                        <li><a href="{{ url('home/slider') }}">Slider</a></li>
                        <li>
                            <a class="has-arrow" aria-expanded="false">Trouble</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('home/trouble/list') }}">Trouble List</a></li>
                                <li><a href="{{ url('home/trouble/poins') }}">Point Trouble List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" aria-expanded="false">Excellence</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('home/excellence/titleBg') }}">Title n Backgound</a></li>
                                <li><a href="{{ url('home/excellence/poins') }}">Point Excellence List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" aria-expanded="false">Bot Logic</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('home/botLogic/titleDesc') }}">Title n Desc</a></li>
                                <li><a href="{{ url('home/botLogic/poins') }}">Bot Logic Point List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" aria-expanded="false">Benefit</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('home/benefit/titleDesc') }}">Title n Desc</a></li>
                                <li><a href="{{ url('home/benefit/poins') }}">Benefit Point List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" aria-expanded="false">Package</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('home/package/content')}}">Content</a></li>
                                <li><a href="{{ url('home/package/poins')}}">Package Points</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-delta"></i><span class="hide-menu">About </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('about/personal') }}">Personal</a></li>
                        <li><a href="{{ url('about/desc') }}">Description</a></li>
                        <li>
                            <a class="has-arrow" aria-expanded="false">Social Media</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('about/add') }}">Add</a></li>
                                <li><a href="{{ url('about/list') }}">List</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-hexagon-outline"></i><span class="hide-menu">Blog </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('blog/add') }}">Add Blog</a></li>
                        <li><a href="{{ url('blog/list') }}">List Blog</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-devider"></li>
                <li class="nav-small-cap">Fotter</li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Fotter</span></a>
                </li> -->
            </ul>
        </nav>
    </div>
</aside>