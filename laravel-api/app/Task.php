<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'user_id',
        'title',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function taskItems()
    {
        return $this->hasMany(TaskItem::class);
    }

    public function scopeVisibleTo($query, User $user)
    {
        if ($user->is_super) {
            return $query;
        }

        return $query->where('user_id', $user->id);
    }
}
