@component('mail::message')
<strong>Name: </strong>{{$data['name']}}
<br><strong>Email: </strong>{{$data['email']}}
<br><strong>Phone: </strong>{{$data['phone']}}
<br><strong>Used broker?: </strong>{{$data['used_broker']}}
<br><strong>File: </strong>{{$data['file']}}

@component('mail::button', ['url' => 'mailto:' .$data['email'] ])
Reply to this
@endcomponent


@endcomponent

{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
