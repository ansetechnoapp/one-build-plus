<x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="route('activate.account', ['email' => $datas['email']])">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
