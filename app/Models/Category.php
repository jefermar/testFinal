<?php

namespace App\Models;

use App\Traits\HasSmartScopes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasSmartScopes;
    //

    protected $fillable = [
        'type'
    ];
    public function publications(){
        return $this->belongsToMany(Publication::class);
    }
}
