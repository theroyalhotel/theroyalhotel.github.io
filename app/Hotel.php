<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    protected $visible = ['id', 'name'];
    public function room(){
        return $this->hasMany('App\Room','id','id_hotel');
    }
    public function place(){
        return $this->belongsTo('App\Place','id_place','id');
    }
}
