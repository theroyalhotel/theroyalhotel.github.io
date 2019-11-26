<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catagories extends Model
{
    protected $fillable=[
        'name'];

    public function blogs()
    {
        return $this->hasMany(blogs::class);
    }
}
