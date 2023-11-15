<header class="main_header_area">
    <div class="header_top">
        <div class="container">
            <div class="header_top_inner">
                <div class="pull-left">
                    <a href="#"><i class="phone-number"></i>0545 593 66 35</a>
                    <a href="#"><i class="info-mail"></i>info@gmail.com</a>
                </div>
                <div class="pull-right">
                    <ul class="header_social">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header_menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home.index')}}">
                        <img src="{{asset('assets/img/anasayfa-logo.png')}}" alt="">
                        <img src="{{asset(('assets/img/anasayfa-logo.png'))}}" alt="">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{route('home.index')}}"  role="button" aria-haspopup="true" aria-expanded="false"> Ana Sayfa</a>
                        </li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Konut <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href=" {{route('İlanlar.index')}}">Rezidans</a></li>
                                <li><a href="{{route('İlanlar.index')}}">Prestij</a></li>
                                <li><a href="{{route('İlanlar.index')}}">Villa</a></li>
                                <li><a href="{{route('İlanlar.index')}}">Apartman</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Satılık & Kiralık <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('İlanlar.index')}}">Satılık</a></li>
                                <li><a href="{{route('İlanlar.index')}}">Kıralık</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Üye <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('login.index')}}"> Giriş</a></li>
                                <li><a href="{{route('register.index')}}">Kayıt </a></li>
                            </ul>
                        </li>
                        <li><a  href="{{route('about.index')}}">Hakkımızda</a></li>


                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="search_dropdown">

                            <a class="popup-with-zoom-anim" href="#test-search"><i class="icon icon-Search"></i></a>
                        </li>
                        <li class="submenu dropdown-user">

                            <a  class="dropdown-toggle" id="user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('Dashboard')}}">Profilim</a></li>
                                <li><a href="{{route('ilanlistem.index')}}">İlanlarım</a></li>
                                <li><a href="{{route('yeniilanver.index')}}">İlan Ver</a></li>
                                <li> <a href="/girişyap">Çıkış</a></li>
                            </ul>

                        </li>
                    </ul>
                    <!-- / USER PROFILE -->
                    <!-- /
                      <div class="all">
                           <div class="action">
                               <div class="profile" onclick="menuToggle();">
                                   <p>Username</p>
                               </div>
                               <div class="menu">
                                   <ul>
                                       <li><i class="fa-solid fa-user"></i><a href="userprofil.html">Profilim</a> </li>
                                       <li><i class="fa-regular fa-pen-to-square"></i><a href="İlanlarım.html">İlanlarım</a> </li>
                                       <li><i class="fa-regular fa-pen-to-square"></i><a href="İlanver.html">İlan Ver</a> </li>
                                       <li><i class="fa-regular fa-circle-xmark"></i><a href="Çıkış.html">Çıkış</a> </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       -->
                   </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
</header>
<!--================Header Area =================-->
