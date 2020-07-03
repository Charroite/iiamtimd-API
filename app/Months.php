<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Months extends Model
{
    protected $fillable =[
        "months"
    ];
    
    public function critters(){
        return $this->belongsToMany(App\Critters);
    }

    public $timestamps = false;
}
