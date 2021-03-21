<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
 
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] =  Hash::make($value);
    }

    public function recetas()
    {
        return $this->hasMany(Receta::class,'user_id');
    }

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

  
    protected $hidden = [
        'password',
        'remember_token',
    ];

  
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
