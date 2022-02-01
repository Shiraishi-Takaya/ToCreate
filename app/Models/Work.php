<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Feature;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'comment'
    ];

    public function user() {
		return $this->belongsTo(User::class);
	}

    public function features() {
		return $this->hasMany(Feature::class);
	}
}
