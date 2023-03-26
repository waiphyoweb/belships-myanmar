<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Job;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'contact',
        'email',
        'address',
        'job_id',
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }
}
