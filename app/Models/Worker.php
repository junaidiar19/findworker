<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = [
        'username', 'expertise', 'portofolio_link', 'phone', 'provinsi_id', 'kota_id',
        'about', 'experience', 'skills', 'user_id', 'linkedin', 'facebook', 'instagram',
        'twitter', 'status', 'actived_at', 'salary_start', 'salary_end'
    ];

    protected $with = 'availability';

    public function scopeActived($query)
    {
        $query->with(['user', 'kota', 'provinsi', 'availability'])->whereNotNull('actived_at')->whereStatus('Active');
    }

    public function scopeActive($query, $username)
    {
        $query->whereUsername($username)->actived();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function availability()
    {
        return $this->belongsToMany(Availability::class);
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }
}
