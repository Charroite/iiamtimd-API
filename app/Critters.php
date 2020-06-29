<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Critters extends Model
{
    
    protected $attributes = [
        'donated' => false,
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

    public function setdonatedAttribute($boolean){
        return $this->attributes['donated'] = $boolean;
    }

}
