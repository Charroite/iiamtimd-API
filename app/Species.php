<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    
    public function critters(){
        return $this->belongsTo(App\Critters);
    }

}
