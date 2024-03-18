<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'birthday',
        'firstname',
        'lastname',
        'speciality',
        'salary',
        'user_id'
    ];

    /**
     * Get the user that owns the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the repairs for the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function repairs(): HasMany
    {
        return $this->hasMany(Repair::class);
    }
}
