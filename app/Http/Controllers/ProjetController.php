<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;


class ProjetController extends Controller
{
    //
      public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function liste(){
		$projets = Projet::paginate(6);
	//	$arr = array('projets'=>$projet);
		$class = '';
	
		return view('projets.list',compact(['projets','class']));
	}
	
	 public function add(Request $request){
		if($request->isMethod("post")){
			$e = new Projet();
			$e->id = 0;
	    	$e->nom=$request->input("nom");
	    	$e->bailleur=$request->input("bailleur");
	    	$e->mao=$request->input("mao");
	    	$e->moe=$request->input("moe");
			$e->datedebutpr=$request->input("datedebutpr");
			$e->datefinpr=$request->input("datefinpr");
			$e->datedebut=$request->input("datedebut");
			$e->datefin=$request->input("datefin");
			$e->responsable=$request->input("responsable");
			$e->duree=$request->input("duree");
			$e->tauxavance=$request->input("tauxavance");
			$e->tauxdecaisse=$request->input("tauxdecaisse");
			$e->etat=1;
			$e->save();
   		return redirect('projets');
		}
		
		$projet = Projet::all();
		$arr = array('projets'=>$projet);
		return view('projets.add',$arr);
	
	}
	
	 public function edit(Request $request,$id){
		if($request->isMethod("post")){
			$e = Projet::find($id);	
			
			switch ($e->etat) {
				case 2:
					$this->suivi($e, $request);
					break;

				case 3:
					$this->validecloture($e, $request);
					break;

				case 4:
					$this->cloturer($e, $request);
					break;

				case 1:
					$this->demmarer($e, $request);
					break;
			}
		return redirect('projets');
		}
		else{
		   $e = Projet::find($id);
		   return view('projets.edit',compact(['e']));
		}
	}

	public function demmarer($e, $request){		
	    	$e->nom=$request->input("nom");
	    	$e->bailleur=$request->input("bailleur");
	    	$e->mao=$request->input("mao");
	    	$e->moe=$request->input("moe");
			$e->datedebutpr=$request->input("datedebutpr");
			$e->datefinpr=$request->input("datefinpr");
			$e->datedebut=$request->input("datedebut");
			$e->datefin=$request->input("datefin");
			$e->responsable=$request->input("responsable");
			$e->duree=$request->input("duree");			
			$e->tauxavance=$request->input("tauxavance");
			$e->tauxdecaisse=$request->input("tauxdecaisse");
	    	$e->etat=2;
			$e->save();
	}

	public function suivi($e, $request){
			$e->datedebut=$request->input("datedebut");
			$e->datefin=$request->input("datefin");
			$e->duree=$request->input("duree");						
			$e->tauxavance=$request->input("tauxavance");
			$e->tauxdecaisse=$request->input("tauxdecaisse");
		    $e->etat=3;
			$e->save();
	}

	public function validecloture($e, $request){	    	
			$e->datedebut=$request->input("datedebut");
			$e->datefin=$request->input("datefin");
			$e->duree=$request->input("duree");	
				    	$e->etat=4;
			$e->save();
	}

	public function cloturer($e, $request){
	    	$e->etat=5;
			$e->save();		
	}

}
