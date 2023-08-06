<x-mail::message>
# Introduction

yes <br><br>

<x-mail::button :url="{{route('formupdatepassword', ['email' => {{$datas['email']}}])}}">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
