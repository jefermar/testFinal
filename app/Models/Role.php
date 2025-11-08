<?php

namespace App\Models;

use App\Traits\HasSmartScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, HasSmartScopes;

    protected $fillable = ['name-role'];
    //
    public function profile()
    {
        return $this->hasMany(Profile::class);
    }
}
