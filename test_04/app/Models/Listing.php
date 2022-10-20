<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters) {
        // dd($filters);  // here is arr assoc
        // dd($filters['tag']) // here is string
        // dd($query);  // ovo ne znam sta je
        // scoperFilter must be in that name ................
        if($filters['tag'] ?? false) {
            // $query->where('tags', 'like', '%' . $filters['tag'] . '%'); // radi i ovako
            $query->where('tags', 'like', '%' . request('tag') . '%');
        } 

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . $filters['search'] . '%')
                  ->orWhere('description', 'like', '%' . $filters['search'] . '%')
                  ->orWhere('tags', 'like', '%' . $filters['search'] . '%');
        } 
    }
}
