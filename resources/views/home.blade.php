@extends('layouts.app')

@section('content')
<div class="container">                    
                    <div class="row">
    <div class="col-lg-4">
    <input type="text" onKeyPress="if (event.keyCode == 13) window.location='/search/'+this.value;" maxlength="99">
</div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<table><tr><td style="padding: 12px">
                <button onclick="window.location='/projets/add';" type="button" class="btn btn-primary btn-lg">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter un projet
    </button>
</td><td style="padding: 12px">
      <button onclick="window.location='/projets';" type="button" class="btn btn-primary btn-lg">
  <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Liste des projets
    </button>
</td></tr></table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
