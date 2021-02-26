@component('mail::message')
# Hallo, Admin

Ada akun pengguna terdaftar yaitu {{ $user->name}} dengan email {{ $user->email}}.

Segera untuk di aktifkan ya, supaya langsung bisa di gunakan untuk masuk ke sistem SPK - Promethee.

@component('mail::button', ['url' => $url])
SPK - Promethee
@endcomponent

Regards,<br>
{{ config('app.name') }}
@endcomponent