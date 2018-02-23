<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'is_super',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'user_id', 'id');
    }

    public function isSuper()
    {
        return $this->is_super;
    }
}
