<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    
    protected $fillable =[
        "species"
    ];


    public function critters(){
        return $this->belongsTo(App\Critters);
    }

    public $timestamps = false;

}
