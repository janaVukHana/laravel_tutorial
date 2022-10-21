<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'tags', 'company', 'email', 'location' , 'website', 'description', 'logo'];

    public function scopeFilter($query, array $filter) {
        if(request('tag') ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if(request('search' ?? false)) {
            $query->where('tags', 'like', '%' . request('search') . '%')
                  ->orWhere('title', 'like', '%' . request('search') . '%')
                  ->orWhere('description', 'like', '%' . request('search') . '%');
        }
    }
}
