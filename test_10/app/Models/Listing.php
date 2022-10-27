<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'logo', 'company', 'tags', 'email', 'website', 'location', 'description'];

    public function scopeFilter($query, array $filter) {
        if(request('tag') ?? false) {
            $query->where('tags', 'like' ,'%' . request('tag') . '%');
        }

        if(request('search') ?? false) {
            $query->where('tags', 'like' ,'%' . request('search') . '%')
                   ->orwhere('title', 'like' ,'%' . request('search') . '%')
                   ->orwhere('description', 'like' ,'%' . request('search') . '%');

        }
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
