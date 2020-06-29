<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Months extends Model
{
    public function critters(){
        return $this->belongsToMany(App\Critters);
    }
}
