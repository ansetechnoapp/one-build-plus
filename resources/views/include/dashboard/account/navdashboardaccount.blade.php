@if (Auth::user()->hasRole('admin'))
<nav class="nav nav-borders">
    <a class="nav-link active ms-0" href="{{route('admin.dashboard.profil')}}">Profile</a>
    {{-- <a class="nav-link" href="{{route('dashboard.billing.history')}}">Historique de la facturation</a> --}}
    <a class="nav-link" href="{{route('admin.dashboard.security')}}">Sécurité</a>
    {{-- <a class="nav-link" href="account-notifications.html">Notifications</a> --}}
        <a class="nav-link" href="{{route('admin.list_user')}}">Liste des utilisateurs</a>
        <a class="nav-link" href="{{route('admin.memberobp')}}">Agent OBP</a>
</nav>
@else
<nav class="nav nav-borders">
    <a class="nav-link active ms-0" href="{{route('dashboard.profil')}}">Profile</a>
    {{-- <a class="nav-link" href="{{route('dashboard.billing.history')}}">Historique de la facturation</a> --}}
    <a class="nav-link" href="{{route('dashboard.security')}}">Sécurité</a>
    {{-- <a class="nav-link" href="account-notifications.html">Notifications</a> --}}
</nav>
@endif