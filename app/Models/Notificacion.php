<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    //
    public function publication(){
        return $this->belongsTo(Publication::class);
    }
}
