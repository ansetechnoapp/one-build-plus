<x-mail::message>
    # one build plus (OBP)

    {{-- yes <br><br> --}}
    {{-- @dd(route('formupdatepassword', ['email' => $datas['email']])) --}}
    {{-- {{ route('formupdatepassword', ['email' => $datas['email']]) }} --}}
    {{-- <x-mail::button :url="'/formupdatepassword/{{$datas['email']}}'">
        Button Text
    </x-mail::button> --}}
    <x-mail::button :url="route('formupdatepassword', ['email' => $datas['email']])">
        cliquer pour changer le mot de passe
    </x-mail::button>

    Merci,<br>
    {{ config('app.name') }}
</x-mail::message>