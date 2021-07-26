@component('mail::message')
# Deatail d'alert  

Numero : {{$numero}} <br>
Montant :  {{$montant}} <br>
Date d'alert 1 : {{$datealert1}} <br>


@component('mail::button', ['url' => $url, 'color' => 'green'])
Voir la caution
@endcomponent

Merci,<br>
SOMELEC
@endcomponent
