<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Rating;
use App\Models\Review;
use App\Models\Favorite;
use App\Models\LikeNovel;
use App\Models\ReplyReview;
use App\Models\DislikeLikeReview;
use Laravel\Sanctum\HasApiTokens;
use App\Models\DislikeLikeReplyReview;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    public function likeNovel()
    {
        return $this->hasMany(LikeNovel::class);
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    public function replyReview()
    {
        return $this->hasMany(ReplyReview::class);
    }
    public function dislikeLikeReview()
    {
        return $this->hasMany(DislikeLikeReview::class);
    }
    public function dislikeLikeReplyReview()
    {
        return $this->hasMany(DislikeLikeReplyReview::class);
    }
}
