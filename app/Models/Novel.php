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
}
