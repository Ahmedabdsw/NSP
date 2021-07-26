@extends('layouts.app')

@section('content')
<h4 style="text-align: center;"> Detail de caution </h4> 

@include('layouts.caution')
     
  <div class="container">
  <div class="row">
        <div class="col-lg-8">
    </div></div>
     @if (isset($caution) || $caution != null)
    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                <tr><th class="bg-danger" style="color: #fff">Numero</th> <td class="table-light">
                    {{$caution->numero}}</td></tr><tr><th class="bg-danger" style="color: #fff">Date d'ajoute</th><td class="table-light">{{$caution->dateajout}}</td></tr><tr><th class="bg-danger" style="color: #fff">Montant</th><td class="table-light">{{$caution->montant}}</td></tr><tr><th class="bg-danger" style="color: #fff">Date d'achevement</th><td class="table-light">{{$caution->dateacheve}}</td></tr><tr><th class="bg-danger" style="color: #fff">Fournisseur</th><td class="table-light">{{$caution->fournisseur}}</td></tr><tr><th class="bg-danger" style="color: #fff">Date d'alert1</th><td class="table-light">{{$caution->datealert1}}</td></tr><tr><th class="bg-danger" style="color: #fff">Date d'alert2</th><td class="table-light">{{$caution->datealert2}}</td></tr><tr><th class="bg-danger" style="color: #fff">Date d'alert3</th><td class="table-light">{{$caution->datealert3}}</td></tr><tr><th class="bg-danger" style="color: #fff">Etat</th><td class="table-light">{{$caution->etat}}</td></tr><tr><th class="bg-danger" style="color: #fff">Caution id</th><td class="table-light">{{$caution->caution_id}}</td></tr>
                 
                    
                    </table>
@else 
<div class="alert alert-secondary" role="alert">
  Pas de resultats!
</div>
@endif

</div>

        </div>
      </div>

          
  </div>
</div>
@endsection

