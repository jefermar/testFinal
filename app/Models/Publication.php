<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    //
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
    public function notificacions(){
        return $this->hasMany(Notificacion::class);
    }
    public function category(){
        return $this->belongsToMany(Category::class);
    }
}
