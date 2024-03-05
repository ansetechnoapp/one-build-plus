@php
    if (Auth::check() && Auth::user()->role == 'admin') {
        $sub_path_admin = '../';
    } else {
        $sub_path_admin = '';
    }
@endphp