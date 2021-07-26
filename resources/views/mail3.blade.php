@component('mail::message')
# Deatail d'alert  

Numero : {{$numero}} <br>
Montant :  {{$montant}} <br>
Date d'alert 3 : {{$datealert3}} <br>


@component('mail::button', ['url' => $url, 'color' => 'red'])
Voir la caution
@endcomponent

Merci,<br>
SOMELEC
@endcomponent
