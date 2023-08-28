<x-mail::message>
# Demande Formulaire de Contacte,<br>

Nom: {{ $datas['name'] }}<br>
Email: {{ $datas['email'] }}<br>
Question: {{ $datas['subject'] }}<br>
ommentaire: {{ $datas['comments'] }}<br>

Merci,<br>
{{ config('app.name') }}
</x-mail::message>