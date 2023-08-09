<x-mail::message>
# Introduction
email : {{ $email }}

{{ $pesan }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
</x-mail::message>
