
@extends('layouts.app')

@section('content')

   <?php     if(!empty($_SESSION['projet'] ))
            $projet = $_SESSION['projet'] ;
          
?>

<div class="container">
    <div class="row">
  <button onclick="window.location='/projets/{{$id}}';" type="button" class="btn btn-success btn-lg">
  <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Listes des cautions
    </button>
    <br><br>
    <div class='col-lg-10'>
            <div class="panel panel-default">

                 <h4 style="text-align: center;">Ajouter une caution</h4>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/cautions/add/{{$id}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <div class="form-group">
                            <label for="numero" class="col-md-4 control-label">Numero</label>

                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control" name="numero" value="" required autofocus>

                                                            </div>
                        </div>

                       <div class="form-group">
                            <label for="dateajout" class="col-md-4 control-label">date d'ajoute</label>

                            <div class="col-md-6">
                                <input id="dateajout" onfocus='f("#dateajout");' type="text" class="form-control" name="dateajout" value="" required autofocus>
                               </div>
                        </div>
                        
                           <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Montant</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="montant" value="" required autofocus>
                             </div>
                        </div>
 
                      <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Banque 1</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="banque1" value="" required autofocus>
                             </div>
                        </div>

                         <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Banque 2</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="banque2" value=""  autofocus>
                             </div>
                        </div>

                           <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Date d'achevement</label>

                            <div class="col-md-6">
                                <input id="dateacheve" onfocus='f("#dateacheve");' type="text" class="form-control" name="dateacheve" value="" required autofocus>
                                </div>
                        </div>
                        
                           <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fournisseur</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="fournisseur" value="" required autofocus>
                               </div>
                        </div>
                        
                           <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Date d'alert 1</label>

                            <div class="col-md-6">
                                <input id="datealert1" onfocus='f("#datealert1");'  type="text" class="form-control" name="datealert1" value="" required autofocus>
                                </div>
                        </div>

                       <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Date d'alert 2</label>

                            <div class="col-md-6">
                                <input id="datealert2" onfocus='f("#datealert2");'  type="text" class="form-control" name="datealert2" value="" required autofocus>
                              </div>
                        </div>
                           <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Date d'alert 3</label>

                            <div class="col-md-6">
                                <input id="datealert3" onfocus='f("#datealert3");'  type="text" class="form-control" name="datealert3" value="" required autofocus>
                              </div>
                        </div>
                       
                           <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Etat</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="etat" value="" required autofocus>
                              </div>
                        </div>

                       <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Type</label>

                            <div class="col-md-6">
                                <select id="name" type="text" class="form-control" name="type" value="" autofocus>       
                           <option></option>
                           <option selected="">Avance de demmarage</option>
                           <option></option>
                           <option>Garantie decennale</option>
                           <option>autre</option>
                                </select>
                              </div>
                        </div>

                              <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Caution precedante</label>

                            <div class="col-md-6">
                                <select id="name" type="text" class="form-control" name="caution_id" value="" required autofocus>
                            <option>0</option>        
                         @foreach($cautions as $c)
                           <option>{{$c->id}}</option>
                         @endforeach                   
                                </select>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
           <div>
                    
                           
        </div>
    </div>
</div>
@endsection
