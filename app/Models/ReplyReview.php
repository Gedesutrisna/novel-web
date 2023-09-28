<?php

namespace App\Models;

use App\Models\User;
use App\Models\Review;
use App\Models\DislikeLikeReplyReview;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReplyReview extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Review()
    {
        return $this->belongsTo(Review::class);
    }
    public function dislikeLikeReplyReview()
    {
        return $this->hasMany(DislikeLikeReplyReview::class);
    }
}
