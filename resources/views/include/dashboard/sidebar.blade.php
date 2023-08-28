<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon">
            <img src="assets/images/logo-dark.png" alt="one build plus obp" style="max-width: 100%;">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    {{-- <li class="nav-item active">
        <a class="nav-link" href="{{ route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li> --}}

    @if (Auth::user()->role == 'admin')
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Enrégistrement des produits</span></a>
    </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('list_prod') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Liste des produits</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('list_user') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Liste des utilisateurs</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('form.send.sms') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Envoie SMS</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>compte</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('dashboard.profil') }}">Profile</a>
                    {{-- <a class="collapse-item" href="{{route('dashboard.billing.history')}}">Historique de la facturation</a> --}}
                    <a class="collapse-item" href="{{ route('dashboard.security') }}">Sécurité</a>
                </div>
            </div>
        </li>
    @else
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard.home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Liste des devis</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>compte</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('dashboard.profil') }}">Profile</a>
                    {{-- <a class="collapse-item" href="{{route('dashboard.billing.history')}}">Historique de la facturation</a> --}}
                    <a class="collapse-item" href="{{ route('dashboard.security') }}">Sécurité</a>
                </div>
            </div>
        </li>
    @endif



    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Interface
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<!-- End of Sidebar -->
