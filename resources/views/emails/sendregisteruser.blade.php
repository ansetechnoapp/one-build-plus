<x-mail::message>
    # one build plus (OBP)

Bienvenue a {{ $datas['lastName'] }}, vous êtes maintenant inscrit à one build plus (OBP).

<x-mail::button :url="route('activate.account', ['email' => $datas['email']])">
activer votre compte
</x-mail::button>

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
