<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    protected $fillable=[
        'name','catagory','content','detail','file','user_id'];
    public function catagories()
    {
        return $this->belongsTo(catagories::class);
    }
    public function tags()
    {
        return $this->belongsToMany(tags::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function hasTag ($tagId){
        return in_array($tagId,$this->tags->pluck('id')->toArray());
    }
}