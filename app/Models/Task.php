<?php

namespace App\Models;

use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'due_date',
    ];

    protected $casts = [
        'due_date' => 'datetime',
        'status' => TaskStatus::class,
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
