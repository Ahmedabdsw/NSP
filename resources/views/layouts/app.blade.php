<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SUIVI DES PROJETS ET DES CAUTIONS') }}</title>
    
  
  <link href="{{ asset('bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script> 
     <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
 
<style type="text/css">
   ul.menu1 li a:hover {background-color: #0088ff;}   
</style>
  </head>

<body>

  <header>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <img src="{{ asset('media/sm.png') }}" alt="SOMELEC" class="img-thumbnail">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto menu1">
       @if (Auth::guest())
                            <br/>
                        @else

      <li class="nav-item active ">
        <a class="nav-link" href="{{route('home') }}">Acceil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('projetaddg') }}">Ajouter un projet</a>
      </li>
        <li class="nav-item active ">
        <a class="nav-link" href="{{route('projets') }}">Liste des projets</a>
      </li>     
    
                        @endif
    </ul>
  

             <h3 style="color: white; text-align:center;">SUIVI DES PROJETS ET DES CAUTIONS</h3>

  </div>
     <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Deconnecter
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
</nav>
 
</header>
            <div class="container">
                 <div class="row">
                     <div class="col-md-13 col-lg-13">


        @yield('content')

               
                 
         
     </div></div></div>
    <!-- Jquery JS-->
  
         
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
<script>

  function f(id){
      $( ''+id+'' ).datepicker({
altField: "#datepicker",
closeText: 'Fermer',
prevText: 'Précédent',
nextText: 'Suivant',
currentText: 'Aujourd\'hui',
monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
weekHeader: 'Sem.',

            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            numberOfMonths: 1,
            buttonImage: 'contact/calendar/calendar.gif',
            buttonImageOnly: true,
            onSelect: function(selectedDate) {
                 // we can write code here 
             }
      });
  }


  f("#dateajout");
  f("#dateacheve");
  f("#datealert1");
  f("#datealert2");
  f("#datealert3");

  f("#datedebutp");
  f("#datefinp");
  f("#datedebut");
  f("#datefin");
 
  </script>

 
<script src="{{ asset('bootstrap.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>



  </body>
</html>
