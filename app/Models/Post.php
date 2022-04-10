<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        // BelongsTo 1 - 1
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, array $filters){    
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('lokasi', 'like', '%' . $search . '%');
        }); 

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use($category){
                $query->where('slug', $category);
            });
        });
    }
}
