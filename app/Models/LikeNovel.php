<?php

namespace App\Models;

use App\Models\User;
use App\Models\Novel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LikeNovel extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function novel()
    {
        return $this->belongsTo(Novel::class);
    }
}
