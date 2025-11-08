<?php

namespace App\Models;

use App\Traits\HasSmartScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory, HasSmartScopes;

    protected $fillable = ['name', 'title', 'type', 'severity', 'location', 'descripcion', 'url_image', 'date', 'profile_id'];
    //
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
    public function notificacions(){
        return $this->hasMany(Notificacion::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
