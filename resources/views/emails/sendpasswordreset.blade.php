<x-mail::message>
    # One Build Plus (OBP)

    {{-- yes <br><br> --}}
    {{-- @dd(route('formupdatepassword', ['email' => $datas['email']])) --}}
    {{-- {{ route('formupdatepassword', ['email' => $datas['email']]) }} --}}
    {{-- <x-mail::button :url="'/formupdatepassword/{{$datas['email']}}'">
        Button Text
    </x-mail::button> --}}
    <x-mail::button :url="route('formupdatepassword', ['email' => $datas['email']])">
        Cliquer Pour Changer Le Mot de Passe
    </x-mail::button>

    Merci,<br>
    {{ config('app.name') }}
</x-mail::message>