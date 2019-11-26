<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';
    public function hotel(){
        return $this->hasMany('App\Hotel','id_place','id');
    }
}
