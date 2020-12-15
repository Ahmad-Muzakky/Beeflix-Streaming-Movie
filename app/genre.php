<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class genre extends Model
{
    
    public function movie(){
        return $this ->hasMany(movie::class,'genre_id','id');
    }
}
