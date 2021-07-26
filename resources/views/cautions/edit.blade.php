@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
                <div class="col-md-3">
                </div>

        <div class="col-lg-10">
            <div class="panel panel-default">
                 <h4 style="text-align: center;">Editer la caution</h4>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/cautions/edit/{{$e->id}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="numero" class="col-md-4 control-label">Numero</label>

                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control" name="numero" value="{{$e->numero}}" required autofocus>

                                                            </div>
                        </div>

                       <div class="form-group">
                            <label for="dateajout" class="col-md-4 control-label">date d'ajoute</label>

                            <div class="col-md-6">
                                <input id="dateajout" onfocus='f("#dateajout");' type="text" class="form-control" name="dateajout" value="{{$e->dateajout}}" required autofocus>

                                                            </div>
                        </div>
						
						   <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Montant</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="montant" value="{{$e->montant}}" required autofocus>

                             </div>
                        </div>
						
						
                        </div>
                        
                           <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Banque 1</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="banque1" value="{{$e->banque1}}" required autofocus>

                             </div>
                        </div>
                        
                        </div>
                        
                           <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Banque 2</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="banque2" value="{{$e->banque2}}" autofocus>

                             </div>
                        </div>
                        
                           <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Date d'achevement</label>

                            <div class="col-md-6">
                                <input id="dateacheve" onfocus='f("#dateacheve");' type="text" class="form-control" name="dateacheve" value="{{$e->dateacheve}}" required autofocus>

                                                            </div>
                        </div>
						
						   <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fournisseur</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="fournisseur" value="{{$e->fournisseur}}" required autofocus>

                                                            </div>
                        </div>
						
						   <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Date d'alert 1</label>

                            <div class="col-md-6">
                                <input id="datealert1" onfocus='f("#datealert1");' type="text" class="form-control" name="datealert1" value="{{$e->datealert1}}" required autofocus>

                                                            </div>
                        </div>

   <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Date d'alert 2</label>

                            <div class="col-md-6">
                                <input id="datealert2" onfocus='f("#datealert2");' type="text" class="form-control" name="datealert2" value="{{$e->datealert2}}" required autofocus>

                                                            </div>
                        </div>
                           <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Date d'alert 3</label>

                            <div class="col-md-6">
                                <input id="datealert3" onfocus='f("#datealert3");' type="text" class="form-control" name="datealert3" value="{{$e->datealert3}}" required autofocus>
                              </div>
                        </div>
                           <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Etat</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="etat" value="{{$e->etat}}" required autofocus>
                            </div>
                        </div>

                        
                          <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Type</label>

                            <div class="col-md-6">
                                <select id="name" type="text" class="form-control" name="type" value="" autofocus>  
                           <option selected="">{{$e->type}}</option>     
                           <option></option>
                           <option >Avance de demmarage</option>
                           <option></option>
                           <option>Garantie decennale</option>
                           <option>autre</option>
                                </select>
                              </div>
                        </div>

                       <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Cauton precedante</label>

                            <div class="col-md-6">
                                <select id="name" type="text" class="form-control" name="caution_id" value="" required autofocus>
                            <option selected="">{{$e->caution_id}}</option>
                            <option>0</option>        
                         @foreach($caution as $c)
                           <option>{{$c->id}}</option>
                         @endforeach                   
                                </select>
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

