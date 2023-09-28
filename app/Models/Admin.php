<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Genre;
use App\Models\Novel;
use App\Models\Episode;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public function novel()
    {
        return $this->hasMany(Novel::class);
    }
    public function episode()
    {
        return $this->hasMany(Episode::class);
    }
    public function genre()
    {
        return $this->hasMany(Genre::class);
    }
}
