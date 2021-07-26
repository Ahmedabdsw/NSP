<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
      public function caution()
    {
        return $this->belongsTo('App\Caution');
    }
}
