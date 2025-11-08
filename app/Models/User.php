<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Traits\HasSmartScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory, HasSmartScopes;

    protected $fillable = ['firstname', 'lastname', 'email', 'location'];
    public function profile(){
        return $this->hasMany(Profile::class);
    }
}
