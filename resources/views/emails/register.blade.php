@component('mail::message')
# Hallo, {{ $user->name}}

Terima kasih sudah melakukan Registrasi akun pengguna.

Akun akan diaktifkan oleh Admin SPK - Promethee. Dan tunggu hingga akun pengguna di aktifkan.


@component('mail::button', ['url' => $url])
SPK - Promethee
@endcomponent

Regards,<br>
{{ config('app.name') }}
@endcomponent