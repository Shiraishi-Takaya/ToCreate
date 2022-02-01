<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Feature;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'feature_id',
        'name',
        'comment',
        'type',
        'deadline',
        'is_done'
    ];

    public function feature() {
		return $this->belongsTo(Feature::class);
	}
}
