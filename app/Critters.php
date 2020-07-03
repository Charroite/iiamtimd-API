<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Critters extends Model
{
    
    protected $fillable =[
        'species_id',
        'name',
        'image_path',
        'location',
        'price',
        'month_available_from',
        'month_available_to',
        'month_available_also_from',
        'month_available_also_to',
        'time_available_from',
        'time_available_to',
        'donated'
    ];
 

    public function species(){
        return $this->hasOne(App\Species);
    }

    public function months(){
        return $this;    
    }

    public function timeCycle(){
        return $this;
    }
    public $timestamps = false;
}
