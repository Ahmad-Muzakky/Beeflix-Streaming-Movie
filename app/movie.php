<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    public function genre(){
        return $this ->belongsTo(genre::class,'genre_id','id');
    } 
    public function episode(){
        return $this ->hasMany(episode::class,'movie_id','id');
    }
}
