<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html" style="max-width: 15%;">
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
            <li class="inline mb-0">
                <a href="auth-login"
                    class="btn btn-icon bg-red-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i
                        data-feather="user" class="h-4 w-4 stroke-[3]"></i></a>
            </li>
            <li class="sm:inline ps-1 mb-0 hidden">
                <a href="auth-signup"
                    class="btn bg-red-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Signup</a>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end">



                <li class="active"><a href="{{ route('home')}}" class="sub-menu-item">Acceuil</a></li>
                <li><a href="buy" class="sub-menu-item active">Achat</a></li>
                <li><a href="aboutus" class="sub-menu-item">A propos</a></li>
                <li><a href="faqs" class="sub-menu-item">Faqs</a></li>
                <li><a href="contact" class="sub-menu-item">Contact</a></li>
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</nav>