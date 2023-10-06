<?php

namespace App\Models;

use App\Models\User;
use App\Models\ReplyReview;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DislikeLikeReplyReview extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replyReview()
    {
        return $this->belongsTo(ReplyReview::class);
    }
}
