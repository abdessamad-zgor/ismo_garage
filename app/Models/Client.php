<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'address',
        'phone_number',
        'user_id'
    ];

    /**
     * Get the user that owns the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the vehicules for the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehicules(): HasMany
    {
        return $this->hasMany(Vehicule::class);
    }
}
