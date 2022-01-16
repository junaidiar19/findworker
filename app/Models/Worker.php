<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = [
        'expertise', 'portofolio_link', 'phone', 'provinsi_id', 'kota_id',
        'about', 'experience', 'skills', 'user_id', 'linkedin', 'facebook', 'instagram',
        'twitter'
    ];
}
