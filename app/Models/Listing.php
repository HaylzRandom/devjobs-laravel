<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'company', 'location', 'website', 'email', 'description', 'tags', 'logo'];

    // Search Function
    public function scopeFilter($query, array $filters)
    {
        // Filter by Tag
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        // Filter by search term
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')->orWhere('description', 'like', '%' . request('search') . '%')->orWhere('tags', 'like', '%' . request('search') . '%')->orWhere('location', 'like', '%' . request('search') . '%');
        }
    }
}
