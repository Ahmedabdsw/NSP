<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caution;
use App\Projet;

use Illuminate\Support\Facades\DB;

class cautionController extends Controller
{
    //

     public function __construct()
    {
        $this->middleware('auth');

    }
    
     public function liste(){
		$caution = Caution::paginate(6);
		$arr = array('cautions'=>$caution);
		return view('cautions.list',$arr);
	}
	
	  public function listeByProjet($id){
	  	  $cautions = DB::table('cautions')->select(DB::raw('*'))
                     ->where('projet_id', '=', $id)
                     ->get();
                     session_start();
                     $_SESSION['projet'] = $id;	
		return view('cautions.list',compact(['cautions','id']));
	}
	
	 public function add(Request $request, $id){
		if($request->isMethod("post")){
			$e = new Caution();
			$e->id = 0;
	    	$e->numero=$request->input("numero");
			$e->dateajout=$request->input("dateajout");
			$e->montant=$request->input("montant");
			$e->banque1=$request->input("banque1");
			if(!empty($request->input("banque2")))
			$e->banque2="null";
		    else
		    $e->banque2=$request->input("banque2");
			$e->dateacheve=$request->input("dateacheve");
			$e->fournisseur=$request->input("fournisseur");
			$e->datealert1=$request->input("datealert1");
			$e->datealert2=$request->input("datealert2");
			$e->datealert3=$request->input("datealert3");
			$e->etat=$request->input("etat");
			$e->type=$request->input("type");
			$e->caution_id=$request->input("caution_id");
			session_start();
			$e->projet_id=$_SESSION['projet'];
			$e->save();
			$id = $e->projet_id;
			  $cautions = DB::table('cautions')->select(DB::raw('*'))
                     ->where('projet_id', '=', $id)
                     ->get();
	    return view('cautions.list',compact(['id','cautions']));

		}
		$cautions = Caution::all();
		   $p = Projet::all();
		   return view('cautions.add',compact(['p','cautions','id']));

			}
	
	 public function edit(Request $request,$id){
		if($request->isMethod("post")){;
			$e = Caution::find($id);
			$e->numero=$request->input("numero");
			$e->dateajout=$request->input("dateajout");
			$e->montant=$request->input("montant");
            $e->banque1=$request->input("banque1");
			if(!empty($request->input("banque2")))
			$e->banque2=$request->input("banque2");
		    else
		    $e->banque2="null";
			$e->dateacheve=$request->input("dateacheve");
			$e->fournisseur=$request->input("fournisseur");
			$e->datealert1=$request->input("datealert1");
			$e->datealert2=$request->input("datealert2");
			$e->datealert3=$request->input("datealert3");
			$e->etat=$request->input("etat");
			$e->type=$request->input("type");
			$e->caution_id=$request->input("caution_id");
			session_start();
			$e->projet_id=$_SESSION['projet'];
			$e->save();
			$id = $e->projet_id;
			  $cautions = DB::table('cautions')->select(DB::raw('*'))
                     ->where('projet_id', '=', $id)
                     ->get();

	    return view('cautions.list',compact(['id','cautions']));

		}
		else{
		   $e = Caution::find($id);
		   $caution = Caution::all();
		   return view('cautions.edit',compact(['e','caution']));
		}
	}
}
