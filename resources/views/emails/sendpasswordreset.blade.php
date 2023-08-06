<x-mail::message>
    # Introduction

    yes <br><br>
    {{-- @dd(route('formupdatepassword', ['email' => $datas['email']])) --}}
    {{-- {{ route('formupdatepassword', ['email' => $datas['email']]) }} --}}
    {{-- <x-mail::button :url="'/formupdatepassword/{{$datas['email']}}'">
        Button Text
    </x-mail::button> --}}
    <x-mail::button :url="route('formupdatepassword', ['email' => $datas['email']])">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>