<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Novel extends Model
{

    protected $guarded = [];
    
    use HasFactory;
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
        return $this->hasMany(LikeNove::class);
    }
    public function favorite()
    {
        return $this->hasMany(Favorite::class);
    }
    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
    public function episode()
    {
        return $this->hasMany(Episode::class);
    }
    public function averageRating($novelId)
    {
        $reviews = Review::where('novel_id', $novelId)->where('rating', '!=', null)->get();
        $totalReviews = $reviews->count();
        $totalRating = $reviews->sum('rating');

        if ($totalReviews > 0) {
            $averageRating = $totalRating / $totalReviews;
        } else {
            $averageRating = 0;
        }
        
        $averageRating = number_format($averageRating, 2);

        return $averageRating;
    }
}
