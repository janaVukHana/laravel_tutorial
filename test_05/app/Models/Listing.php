<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // need this so user can submit form or values ...
    protected $fillable = ['title', 'company', 'website', 'email', 'location', 'tags', 'description'];

    public function scopeFilter($query, array $filter) {
        if($filter['tag'] ?? false) {
            $query->where('tags', 'like', '%' . $filter['tag'] . '%');
        }

        if($filter['search'] ?? false) {
            $query->where('tags', 'like', '%' . $filter['search'] . '%')
                  ->orWhere('title', 'like', '%' . $filter['search'] . '%')
                  ->orWhere('description', 'like', '%' . $filter['search'] . '%');
        }
    }
}
