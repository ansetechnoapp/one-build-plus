<x-mail::message>
    # one build plus (OBP)

Bienvenue a {{ $datas['lastName'] }}, Vous êtes Maintenant Inscrit à One Build Plus (OBP).

<x-mail::button :url="route('activate.account', ['email' => $datas['email']])">
Activer Votre Compte
</x-mail::button>

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
