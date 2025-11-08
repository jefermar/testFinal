<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function publications(){
        return $this->hasMany(Publication::class);
    }
    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sendes_profile_id');
    }
    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'receiver_profile_id');
    }
}
