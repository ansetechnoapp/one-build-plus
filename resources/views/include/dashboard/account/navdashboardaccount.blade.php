<nav class="nav nav-borders">
    <a class="nav-link active ms-0" href="{{route('dashboard.profil')}}">Profile</a>
    {{-- <a class="nav-link" href="{{route('dashboard.billing.history')}}">Historique de la facturation</a> --}}
    <a class="nav-link" href="{{route('dashboard.security')}}">Sécurité</a>
    {{-- <a class="nav-link" href="account-notifications.html">Notifications</a> --}}
    @if (Auth::user()->hasRole('admin'))
        <a class="nav-link" href="{{route('admin.list_user')}}">Liste des utilisateurs</a>
        <a class="nav-link" href="{{route('admin.memberobp')}}">Agent OBP</a>
    @endif
</nav>