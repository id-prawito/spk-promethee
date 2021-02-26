@component('mail::message')
# Hallo, {{ $data->name}}

@if ($data->status == 0)
Notifikasi Non Aktivasi Akun

Mohon maaf akun Anda telah di nonaktifkan sehingga akun tidak dapat digunakan.
@else
Notifikasi Aktivasi Akun

Selamat akun Anda telah aktif dan dapat digunakan.
@endif

@component('mail::button', ['url' => $url])
SPK - Promethee
@endcomponent

Regards,<br>
{{ config('app.name') }}
@endcomponent