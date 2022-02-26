<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Feature;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'comment'
    ];

    public function features() {
		return $this->hasMany(Feature::class);
	}
}
