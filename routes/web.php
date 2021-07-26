<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Caution;
use App\Projet;

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
// les routes des caution
Route::get('/cautions', 'cautionController@liste')->name('cautions');
Route::get('/cautions/add/{id}', 'cautionController@add')->name('cautionaddg');
Route::post('/cautions/add/{id}', 'cautionController@add')->name('cautionaddp');
Route::get('/cautions/delete/{id}', function ($id){
	$a = Caution::find($id);
	$a->delete();
	session_start();
			$id=$_SESSION['projet'];
			  $cautions = DB::table('cautions')->select(DB::raw('*'))
                     ->where('projet_id', '=', $id)
                     ->get();

	    return view('cautions.list',compact(['id','cautions']));
})->name('cautiondelete');

Route::post('/cautions/edit/{id}','cautionController@edit')->name('cautioneditp');
Route::get('/cautions/edit/{id}','cautionController@edit')->name('cautioneditg');
// les routes des projet
Route::get('/projets', 'ProjetController@liste')->name('projets');
Route::get('/projets/add', 'ProjetController@add')->name('projetaddg');
Route::post('/projets/add', 'ProjetController@add')->name('projetaddp');

Route::get('/projets/delete/{id}', function ($id){
	$a = Projet::find($id);
	$a->delete();
	return redirect("projets");
})->name('projetdelete');

Route::post('/projets/edit/{id}','ProjetController@edit')->name('projeteditp');
Route::get('/projets/edit/{id}','ProjetController@edit')->name('projeteditg');
Route::get('/projets/{id}','cautionController@listeByProjet')->name('projetid');

// les routes des alerts
//Route::get('/cautions/alert1', 'sendAlert@alert1');
//Route::get('/cautions/alert2', 'sendAlert@alert2');
//Route::get('/cautions/alert3', 'sendAlert@alert3');

Route::get('/notification1', 'alertController@alert1');
Route::get('/notification2', 'alertController@alert2');
Route::get('/notification3', 'alertController@alert3');

Route::get('/search/{num}', function ($num){
	
   $caution = Caution::where('numero', $num)->firstOrFail();
  
   	return view('cautions.view', compact('caution'));
   
   
});
