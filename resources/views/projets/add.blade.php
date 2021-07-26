
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

                <div class="col-md-3">
                </div>

    <div class='col-lg-10'>
            <div class="panel panel-default">

                 <h4 style="text-align: center;">Ajouet un projet</h4>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/projets/add">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <div class="form-group">
                            <label for="numero" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control" name="nom" value="" required autofocus>

                                                            </div>
                        </div>

                    <div class="form-group">
                            <label for="numero" class="col-md-4 control-label">Bailleur</label>

                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control" name="bailleur" value="" required autofocus>

                                                            </div>
                        </div>

                    <div class="form-group">
                            <label for="numero" class="col-md-4 control-label">MAO</label>

                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control" name="mao" value="" required autofocus>
                                     </div>
                        </div>

                    <div class="form-group">
                            <label for="numero" class="col-md-4 control-label">MEO</label>

                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control" name="moe" value="" required autofocus>
                                   </div>
                        </div>

                       <div class="form-group">
                            <label for="datepicker" class="col-md-4 control-label">Date du debut prevue</label>

                            <div class="col-md-6">
                                <input id="datedebutp" onfocus='f("#datedebutp");' type="text" class="form-control" name="datedebutpr" value="" required autofocus>
                              </div>
                        </div>
                        
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Date du fin prevue</label>

                            <div class="col-md-6">
                                <input id="datefinp" onfocus='f("#datefinp");' type="text" class="form-control" name="datefinpr" value="" required autofocus>
                                </div>
                        </div>

                       <div class="form-group">
                            <label for="dateajout" class="col-md-4 control-label">Date du debut reel</label>

                            <div class="col-md-6">
                                <input id="datedebut" onfocus='f("#datedebut");' type="text" class="form-control" name="datedebut" value="" required autofocus>
                              </div>
                        </div>
                        
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Date du fin reel</label>

                            <div class="col-md-6">
                                <input id="datefin" onfocus='f("#datefin");' type="text" class="form-control" name="datefin" value="" required autofocus>
                                </div>
                        </div>

                          <div class="form-group">
                            <label for="dateajout" class="col-md-4 control-label">Responsable</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="responsable" value="" required autofocus>
                              </div>
                        </div>
                     
                        <div class="form-group">
                            <label for="dateajout" class="col-md-4 control-label">Duree</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control" name="duree" placeholder="Duree en mois" value="" autofocus>
                              </div>
                        </div>
                        
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Taux d'avancemenet</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="tauxavance" value="" required autofocus>
                                </div>
                        </div>
                          <div class="form-group">
                            <label for="dateajout" class="col-md-4 control-label">Taux de decaissement</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="tauxdecaisse" value="" required autofocus>
                              </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Envoyer
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
