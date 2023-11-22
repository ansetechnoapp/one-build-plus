<x-mail::message>
    # One Build Plus (OBP)
    
    <x-mail::button :url="route('formupdatepassword', ['email' => $datas['email']])">
        Cliquer Pour Changer Le Mot de Passe
    </x-mail::button>

    Merci,<br>
    {{ config('app.name') }}
</x-mail::message>