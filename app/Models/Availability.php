<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function worker()
    {
        return $this->belongsToMany(Worker::class);
    }
}
