<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Notifications\alert1;
use \App\Notifications\alert2;
use \App\Notifications\alert3;
use App\User;
use App\Caution;

class alertController extends Controller
{
    //
   // $user->notify(new InvoicePaid($invoice));
    // send notification to multiples users
   // Notification::send($users, new InvoicePaid($invoice));

function alert1(){
  $alert1 = DB::table('cautions')->select(DB::raw('*'))
                     ->where([
                     	 ['notification', '=', '0'],
                     	 ['datealert1', '<=', 'curdate()']
                     	])
                     ->get();
                     set_time_limit(0);

 foreach ($alert1 as $key => $value) {
    $user = User::find(1);
     $user->notify(new alert1($value));

DB::table('cautions')
            ->where('id', $value->id)
            ->update(['notification' => 1]);
         
          }
    }


function alert2(){
    $alert2 = DB::table('cautions')->select(DB::raw('*'))
                     ->where([
                     	 ['notification', '=', '1'],
                     	 ['datealert2', '<=', 'curdate()']
                     	])
                     ->get();
                     set_time_limit(0);

           foreach ($alert2 as $key => $value) {
                $user = User::find(1);
               $user->notify(new alert2($value));

             DB::table('cautions')
            ->where('id', $value->id)
            ->update(['notification' => 2]);

        }
     }


function alert3(){
  $alert3 = DB::table('cautions')->select(DB::raw('*'))
                     ->where([
                     	 ['notification', '=', '2'],
                     	 ['datealert2', '<=', 'curdate()']
                     	])
                     ->get();
             set_time_limit(0);

        foreach ($alert3 as $key => $value) {
          $user = User::find(1);
        $user->notify(new alert3($value));

          DB::table('cautions')
            ->where('id', $value->id)
            ->update(['notification' => 3]);

       }
    }



}
