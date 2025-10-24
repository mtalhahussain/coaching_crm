<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'date_of_birth',
        'guardian_name',
        'guardian_phone',
        'status'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function batches(): BelongsToMany
    {
        return $this->belongsToMany(Batch::class)->withPivot('enrollment_date', 'status')->withTimestamps();
    }

    public function attendance(): HasMany
    {
        return $this->hasMany(Attendance::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
