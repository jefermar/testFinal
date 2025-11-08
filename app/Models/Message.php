<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public function sender()
    {
        return $this->belongsTo(Profile::class, 'sendes_profile_id');
    }

    public function receiver()
    {
        return $this->belongsTo(Profile::class, 'receiver_profile_id');
    }
}
