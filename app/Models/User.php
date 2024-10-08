<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'location',
        'password',
        'sdt',
        'avatar',
        'level',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
