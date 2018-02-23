<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'user_id',
        'label',
        'completed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function scopeVisibleTo($query, User $user)
    {
        if ($user->isSuper()) {
            return $query;
        }

        return $query->where('user_id', $user->id);
    }

    public function scopeIncompleted($query)
    {
        return $query->whereNull('completed');
    }
}
