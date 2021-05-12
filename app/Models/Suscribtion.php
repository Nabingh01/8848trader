<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscribtion extends Model
{
    use HasFactory;
    public function allcourse()
    {
        return $this->belongsTo(AllCourse::class,'allcourse_id');
    }
}