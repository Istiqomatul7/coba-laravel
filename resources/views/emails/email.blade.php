@component('mail::message')
# Terima Kasih Telah Mengunjungi Situs Kami

Enjoy,dan Selamat Berbelanja

@component('mail::button', ['url' => ''])
Oke
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
