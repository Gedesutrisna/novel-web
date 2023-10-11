<?php

namespace App\Models;

use App\Models\User;
use App\Models\ReplyReview;
use App\Models\DislikeLikeReview;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replyReview()
    {
        return $this->hasMany(ReplyReview::class);
    }
    public function dislikeLikeReview()
    {
        return $this->hasMany(DislikeLikeReview::class);
    }
}
