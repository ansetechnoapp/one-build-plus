<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ $sub_path_admin }}assets/images/logo-dark.png" alt="one build plus obp" style="max-width: 100%;">
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
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3"
                aria-expanded="true" aria-controls="collapsePages3">
                <i class="fas fa-fw fa-folder"></i>
                <span>Gestion des propriétés</span>
            </a>
            <div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.dashboard.admin') }}">Enrégistrement</a>
                    <a class="collapse-item" href="{{ route('admin.list_prod') }}">Liste</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Gestion location</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.dashboard.admin.Rental_management') }}">Ajout de biens
                        locative</a>
                    <a class="collapse-item" href="{{ route('admin.Rental.management.list.prod') }}">Liste biens locative</a>
                </div>
            </div>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.dashboard.commentUser') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Gestion avis Client</span></a>
        </li>
        
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.form.send.sms') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Envoie SMS</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
                aria-expanded="true" aria-controls="collapsePages2">
                <i class="fas fa-fw fa-folder"></i>
                <span>compte</span>
            </a>
            <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.dashboard.profil') }}">Profile</a>
                    {{-- <a class="collapse-item" href="{{route('dashboard.billing.history')}}">Historique de la facturation</a> --}}
                    <a class="collapse-item" href="{{ route('admin.list_user') }}">Liste des utilisateurs</a>
                    <a class="collapse-item" href="{{ route('admin.dashboard.security') }}">Sécurité</a>
                </div>
            </div>
        </li>
    @else
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard.home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Liste des devis</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('listpaymentpay') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Liste des paiements</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard.commentUser') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Avis Client</span></a>
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

 
@if (Auth::user()->role == 'admin')
<!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Autre
    </div>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.faq_form') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>formulaire FAQ</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.save.form.home.slideimage') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>changer bannière</span></a>
    </li>
@endif
    
<!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<!-- End of Sidebar --> 
