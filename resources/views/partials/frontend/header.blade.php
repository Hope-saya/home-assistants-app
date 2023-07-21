<header class="wrapper bg-soft-primary">
    <nav class="navbar navbar-expand-lg center-logo transparent position-absolute navbar-dark">
        <div class="container justify-content-between align-items-center">
            <div class="d-flex flex-row w-100 justify-content-between align-items-center d-lg-none">
                <div class="navbar-brand"><a href="{{ route('home') }}">
                        <img class="logo-dark" src="{{ asset('frontend/assets/img/logo-dark.png') }}" srcset="{{ asset('frontend/assets/img/logo-dark@2x.png 2x') }}" alt="" />
                        <img class="logo-light" src="{{ asset('frontend/assets/img/logo-light.png') }}" srcset="{{ asset('frontend/assets/img/logo-light@2x.png 2x') }}" alt="" />
                    </a></div>
                <div class="navbar-other ms-auto">
                    <ul class="navbar-nav flex-row align-items-center">
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.d-flex -->
            <div class="navbar-collapse-wrapper d-flex flex-row align-items-center w-100">
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header mx-lg-auto order-0 order-lg-1 d-lg-flex px-lg-15">
                        <a href=""><img class="logo-dark" src="" srcset="" alt="" />
                            <h2>HomeAid</h2>
                        <h3 class="text-white fs-30 mb-0 d-lg-none">HomeAid</h3>
                        <button type="button" class="btn-close btn-close-white d-lg-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="w-100 order-1 order-lg-0 d-lg-flex offcanvas-body">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{'home'}}">Home</a>
                            </li>
 
                            <li class="nav-item">
                                <a class="nav-link" href="{{'jobPostingsBlog'}}">House Vacancies</a>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    
                    <div class="w-100 order-3 order-lg-2 d-lg-flex offcanvas-body">
                        <ul class="navbar-nav me-lg-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{'jobApplicationsBlog'}}">House Assistants</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user">Profile</i>
                                </a>    
                               
                                <div class="dropdown-menu" aria-labelledby="userDropdown">
                                    
                                    @if(Auth::check())
                                    <div>{{ auth()->user()->name }}</div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                                            <i class="ri-login-box-line mr-2"></i> Sign Out
                                        </a>
                                    </form>
                                    @else

                                    <a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Log In</a>
                                    <a class="dropdown-item" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a>
                                    @endif
                                </div>
                            </li>

                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <div class="offcanvas-body d-lg-none order-4 mt-auto">
                        <div class="offcanvas-footer">
                            <div>
                                <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                <br /> 00 (123) 456 78 90 <br />
                                <nav class="nav social social-white mt-4">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                    <a href="#"><i class="uil uil-instagram"></i></a>
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
<!-- /header -->