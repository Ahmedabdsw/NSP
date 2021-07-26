@extends('layouts.app')

@section('content')
<h4 style="text-align: center;"> Liste des cautions </h4> 

@include('layouts.caution')
      <button onclick="window.location='{{route('cautionaddg', ['id' => $id])}}';" type="button" class="btn btn-success btn-lg">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter une caution
    </button>

    <br><br>
  <div class="container">
  <div class="row">
        <div class="col-lg-8">
    </div></div>
    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                <thead class="bg-danger" style="color: #fff"><th>Numero</th><th>Date d'ajoute</th><th>Montant</th><th>Babque 1</th><th>Banque 2</th><th>Date d'achevement</th><th>Fournisseur</th><th>Date d'alert1</th><th>Date d'alert2</th><th>Date d'alert3</th><th>Etat</th><th>Type</th><th>Caution id</th><th>Edit</th><th>Delete</th></thead>
                     <tbody>
                    @foreach($cautions as $a)
                    <tr class="table-light">
                    <td>{{$a->numero}}</td>
                    <td>{{$a->dateajout}}</td>
                    <td>{{$a->montant}}</td>
                    <td>{{$a->banque1}}</td>
                    <td>{{$a->banque2}}</td>
                    <td>{{$a->dateacheve}}</td>
                    <td>{{$a->fournisseur}}</td>
                    <td>{{$a->datealert1}}</td>
                    <td>{{$a->datealert2}}</td>
                    <td>{{$a->datealert3}}</td>
                    <td>{{$a->etat}}</td>
                    <td>{{$a->type}}</td>
                    <td>{{$a->caution_id}}</td>

                    <td><button type="button" class="btn btn-warning" onclick="window.location='/cautions/edit/{{$a->id}}';"><span class="glyphicon glyphicon-edit"> </span></button></td>
                    <td><button type="button" class="btn btn-warning" onclick="window.location='/cautions/delete/{{$a->id}}';"><span class="glyphicon glyphicon-trash"> </span></button></td>
                    </tr>
                    @endforeach
                </tbody>
                    </table>


</div>

        </div>
      </div>

          
  </div>
</div>
@endsection

