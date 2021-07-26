<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use \App\User;
class sendAlert extends Controller
{
    //
    function alert1(){
     $user = User::findOrFail('1');
        define('subject' , 'Alert 1!');
        define('from' , 'ahmedabsw@gmail.com');
        define('appname' , 'Suivi des cautions');
        Mail::send('emails.alert1', ['user' => $user], function ($m) use ($user) {
            $m->from(from, appname);

            $m->to($user->email, $user->name)->subject(subject);
        });
    }

     function alert2(){
     $user = User::findOrFail('1');
         define('subject' , 'Alert 2!');
        define('from' , 'ahmedabsw@gmail.com');
        define('appname' , 'Suivi des cautions');
        Mail::send('emails.alert2', ['user' => $user], function ($m) use ($user) {
            $m->from(from, appname);

            $m->to($user->email, $user->name)->subject(subject);
        });
    }

     function alert3(){
     $user = User::findOrFail('1');
         define('subject' , 'Alert 3!');
        define('from' , 'ahmedabsw@gmail.com');
        define('appname' , 'Suivi des cautions');
        Mail::send('emails.alert3', ['user' => $user], function ($m) use ($user) {
            $m->from(from, appname);

            $m->to($user->email, $user->name)->subject(subject);
        });
    }

}
