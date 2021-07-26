@component('mail::message')
# Deatail d'alert  

Numero : {{$numero}} <br>
Montant :  {{$montant}} <br>
Date d'alert 2 : {{$datealert2}} <br>


@component('mail::button', ['url' => $url])
Voir la caution
@endcomponent

Merci,<br>
SOMELEC
@endcomponent
