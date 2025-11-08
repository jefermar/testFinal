<?php

namespace App\Models;

use App\Traits\HasSmartScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory, HasSmartScopes;

    protected $fillable = ['conten', 'is_read','sendes_profile_id', 'receiver_profile_id'];

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
