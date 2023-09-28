<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Novel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Episode extends Model
{
    use HasFactory;
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function novel()
    {
        return $this->belongsTo(Novel::class);
    }
}
