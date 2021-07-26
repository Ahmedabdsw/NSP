<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caution extends Model
{
    public function type()
    {
        return $this->hasOne('App\Type');
    }
}
