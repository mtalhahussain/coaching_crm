<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'qualification',
        'subjects',
        'salary',
        'joining_date',
        'status'
    ];

    protected $casts = [
        'joining_date' => 'date',
        'salary' => 'decimal:2',
    ];

    public function batches(): HasMany
    {
        return $this->hasMany(Batch::class);
    }
}
