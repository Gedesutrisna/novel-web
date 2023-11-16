<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Genre;
use App\Models\Rating;
use App\Models\Review;
use App\Models\Episode;
use App\Models\Favorite;
use App\Models\LikeNovel;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Novel extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function likeNove()
    {
        return $this->hasMany(LikeNovel::class);
    }
    public function favorite()
    {
        return $this->hasMany(Favorite::class);
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    public function episode()
    {
        return $this->hasMany(Episode::class);
    }
    public function averageRating($novelId)
    {
        $ratings = Rating::where('novel_id', $novelId)->where('grade', '!=', null)->get();
        $totalReviews = $ratings->count();
        $totalRating = $ratings->sum('grade');

        if ($totalReviews > 0) {
            $averageRating = $totalRating / $totalReviews;
        } else {
            $averageRating = 0;
        }
        
        $averageRating = number_format($averageRating, 2);

        return $averageRating;
    }
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['genre'] ?? false, function ($query, $genre) {
            return $query->whereHas('genre', function ($query) use ($genre) {
                $query->where('name', $genre);
            }
            );
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ]
        ];
    }
}
