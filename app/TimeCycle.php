<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeCycle extends Model
{
    public $table = "timecycle";
    protected $fillable =[
        "time_id",
        "time"
    ];

    // public function critters(){
    //     return $this->belongsToMany(App\Critters);
    // }

    public $timestamps = false;
}
