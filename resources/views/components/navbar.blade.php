<style>
    @media(max-width: 767px) {
        .logo {
            max-width: 42%;
        }
    }

    @media(min-width: 767px) {
        .logo {
            max-width: 15%;
        }
    }
</style>
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="{{ route('home') }}">
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
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Bien et Service</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Achat et location</a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="buy" class="sub-menu-item">Achat</a></li>
                                <li><a href="rent" class="sub-menu-item">Location</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Agriculture <br> et
                                Élevage </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="#" class="sub-menu-item">Agriculture</a></li>
                                <li><a href="#" class="sub-menu-item">Élevage </a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="sub-menu-item">Éducation</a></li>
                        <li><a href="#" class="sub-menu-item">Import-export</a></li>
                    </ul>
                </li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">A propos</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="aboutus" class="sub-menu-item">A propos de nous</a></li>
                        @if (Auth::user() == null)
                            <li><a href="{{ route('faqs') }}" class="sub-menu-item">Faqs</a></li>
                        @else
                            @if (Auth::user()->role == 'admin')
                                <li><a href="{{ route('admin.faqs.admin') }}" class="sub-menu-item">Faqs</a></li>
                            @else
                                <li><a href="{{ route('faqs') }}" class="sub-menu-item">Faqs</a></li>
                            @endif

                        @endif
                    </ul>
                </li>
                <li><a href="contact" class="sub-menu-item">Contact</a></li>
                @if (Auth::check())
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Espace client</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="{{ route('admin.dashboard.admin') }}" class="sub-menu-item">Tableau de bord</a>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Liste</a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="{{ route('admin.dashboard.admin') }}" class="sub-menu-item">Devis</a>
                                    </li>
                                    <li><a href="{{ route('listpaymentpay') }}" class="sub-menu-item">Paiements</a></li>
                                </ul>
                            </li>
                            @if (Auth::user()->role == 'admin')
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Gestion
                                        location</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="{{ route('admin.dashboard.admin.Rental_management') }}"
                                                class="sub-menu-item">Ajout de biens locative</a></li>
                                        <li><a href="{{ route('admin.Rental.management.list.prod') }}"
                                                class="sub-menu-item">Liste biens locative</a></li>
                                    </ul>
                                </li>
                            @endif
                            <li><a href="{{ route('dashboard.commentUser') }}" class="sub-menu-item">Avis client</a>
                            </li>
                            @if (Auth::user()->role == 'admin')
                                <li><a href="{{ route('admin.form.send.sms') }}" class="sub-menu-item">Envoie SMS</a>
                                </li>
                            @endif
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">compte </a><span
                                    class="submenu-arrow"></span>
                                @if (Auth::user()->role == 'admin')
                                    <ul class="submenu">
                                        <li><a href="{{ route('admin.dashboard.profil') }}"
                                                class="sub-menu-item">Profil client</a></li>
                                        <li><a href="{{ route('admin.list_user') }}" class="sub-menu-item">Liste des
                                                utilisateurs</a></li>
                                        <li><a href="{{ route('admin.dashboard.security') }}"
                                                class="sub-menu-item">Sécurité </a></li>
                                    </ul>
                                @else
                                    <ul class="submenu">
                                        <li><a href="{{ route('dashboard.profil') }}" class="sub-menu-item">Profil
                                                client</a></li>
                                        <li><a href="{{ route('dashboard.security') }}"
                                                class="sub-menu-item">Sécurité </a></li>
                                    </ul>
                                @endif
                            </li>
                            @if (Auth::user()->role == 'admin')
                                <li><a href="{{ route('admin.faq_form') }}" class="sub-menu-item">formulaire FAQ</a>
                                </li>
                                <li><a href="{{ route('admin.save.form.home.slideimage') }}"
                                        class="sub-menu-item">changer bannière</a></li>
                            @endif

                        </ul>
                    </li>

                @endif
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</nav>
