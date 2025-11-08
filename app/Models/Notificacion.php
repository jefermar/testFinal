<?php

namespace App\Models;

use App\Traits\HasSmartScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory, HasSmartScopes;

    protected $fillable = ['event_notification','publication_id'];

    public function publication(){
        return $this->belongsTo(Publication::class);
    }
}
