<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="{{ route('home') }}" style="max-width: 10%;">
            <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
            <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->
        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            @if (Auth::check())
            <li class="inline mb-0">
                <a href="{{ route('dashboard.admin') }}"
                    class="btn bg-red-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i
                        data-feather="user" class="h-4 w-4 stroke-[3]"
                        style="margin-right: 5px; margin-bottom: 5px;"></i>Dashboard</a>
            </li>
            <li class="inline mb-0">
                <a href="{{ route('Logout') }}"
                    class="btn bg-red-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i
                        data-feather="user" class="h-4 w-4 stroke-[3]"
                        style="margin-right: 5px; margin-bottom: 5px;"></i>Déconnexion</a>
            </li>
            @else
                <li class="inline mb-0">
                    <a href="{{ route('auth-login') }}"
                        class="btn bg-red-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i
                            data-feather="user" class="h-4 w-4 stroke-[3]"
                            style="margin-right: 5px; margin-bottom: 5px;"></i>connexion</a>
                </li>
            @endif

        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end">



                <li class="active"><a href="{{ route('home') }}" class="sub-menu-item">Acceuil</a></li>
                <li><a href="buy" class="sub-menu-item">Achat</a></li>
                <li><a href="rent" class="sub-menu-item">Louer</a></li>
                <li><a href="aboutus" class="sub-menu-item">A propos</a></li>
                @if (Auth::user() == null)
                <li><a href="{{route('faqs')}}" class="sub-menu-item">Faqs</a></li>
                
                @else
                @if (Auth::user()->role == 'admin')
                <li><a href="{{route('faqs.admin')}}" class="sub-menu-item">Faqs</a></li>
                @else
                <li><a href="{{route('faqs')}}" class="sub-menu-item">Faqs</a></li>
                @endif
                    
                @endif
                <li><a href="contact" class="sub-menu-item">Contact</a></li>
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</nav>
