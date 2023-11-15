<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Novel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genre extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function novels()
    {
        return $this->hasMany(Novel::class);
    }
}
