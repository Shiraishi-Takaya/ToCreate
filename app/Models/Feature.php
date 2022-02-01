<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Work;
use App\Models\Task;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_id',
        'name',
        'comment',
        'is_done'
    ];

    public function work() {
		return $this->belongsTo(Work::class);
	}

    public function tasks() {
		return $this->hasMany(Task::class);
	}
}
