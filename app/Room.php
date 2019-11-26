<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    public function hotel(){
        return $this->belongsTo('App\Hotel','id_hotel','id');
    }
}
