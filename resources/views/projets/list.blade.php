@extends('layouts.app')

@section('content')
<h4 style="text-align: center;">  Liste des Projets </h4>
    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                <thead class="bg-danger" style="color: #fff"><th>Nom</th><th>Bailleur</th><th>MAO</th><th>MEO</th><th>Date du debut prevue</th><th>Date du fin prevue</th><th>Date du debut reel</th><th>Date du fin reel</th><th>Responsable</th><th>Duree<th>Taux d'avancement</th><th>Taux de decaissement</th><th>Liste des cautions</th><th>Edit</th><th>Delete</th></thead>
                     <tbody>
                        <?php
                        
                        foreach ($projets as $key => $a) {
                           
                         if($a['etat']==2)
                         $class = 'table-warning' ;
                    else if($a['etat']==3)
                           $class = 'table-success';
                    else if($a['etat']==4)
                            $class = 'table-secondary';
                    else if($a['etat']==5)
                            $class = 'table-primary';
                    else
                            $class = 'table-light';
                    }
                    
                        ?>
                    @foreach($projets as $a) 
                    <td>{{$a->nom}}</td>
                    <td>{{$a->bailleur}}</td>
                    <td>{{$a->mao}}</td>
                    <td>{{$a->moe}}</td>
                    <td>{{$a->datedebutpr}}</td>
                    <td>{{$a->datefinpr}}</td>
                    <td>{{$a->datedebut}}</td>
                    <td>{{$a->datefin}}</td>
                    <td>{{$a->responsable}}</td>
                    <td>{{$a->duree}}</td>
                    <td>{{$a->tauxavance}}</td>
                    <td>{{$a->tauxdecaisse}}</td>
                    <td><button type="button" class="btn btn-warning" onclick="window.location='{{route('projetid', ['id' => $a->id])}}';"><span class="glyphicon glyphicon-th-list"> </span></button></td>
                    <td><button type="button" class="btn btn-warning" onclick="window.location='{{route('projeteditg', ['id' => $a->id])}}';"><span class="glyphicon glyphicon-edit"> </span></button></td>
                    <td><button type="button" class="btn btn-warning" onclick="window.location='{{route('projetdelete', ['id' => $a->id])}}';"><span class="glyphicon glyphicon-trash"> </span></button></td>
                    </tr>
                    @endforeach
                </tbody>
                    </table>

     {{$projets->links() }}
           

</div>

        </div>
      </div>

          
  </div>
</div>
@endsection

